<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FirmaDictaminador;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class FirmaDictaminadorController extends Controller
{
    public function showForm()
    {
        $user = Auth::user();

        $firmaDictaminador = FirmaDictaminador::where('user_id', $user->id)->first();

        return view('comision_dictaminadora', [
            'personaEvaluadora' => $firmaDictaminador->evaluator_name ?? null,
            'firma1' => $firmaDictaminador->signature_image ?? null,
            'tieneFirma' => $firmaDictaminador ? true : false,
        ]);
    }

    
    public function storeFirma(Request $request)
    {
        $request->validate([
            'evaluator_name' => 'required|string|max:255',
            'firma1' => 'required|image|max:2048|mimes:png,jpg,jpeg',
        ]);

        $user = Auth::user();
        $file = $request->file('firma1');

        // Crear manager con driver GD
        $manager = new ImageManager(new Driver());

        // Leer la imagen subida (devuelve un objeto Intervention/Image v3)
        $image = $manager->read($file->getPathname());

        // Convertir/cachear en GD y quitar fondo blanco
        $pngBytes = $this->removeBackgroundAndReturnPngBytes($image);

        // Base64
        $imageData = base64_encode($pngBytes);

        // Guardar o actualizar
        FirmaDictaminador::updateOrCreate(
            ['user_id' => $user->id],
            [
                'evaluator_name' => $request->evaluator_name,
                'signature_image' => $imageData,
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Firma guardada correctamente.',
        ]);
    }

    /**
     * Recibe un objeto Intervention Image (v3), quita fondo casi blanco
     * y devuelve los bytes PNG (string) resultantes.
     *
     * @param \Intervention\Image\Image $image
     * @return string PNG binary
     */
    private function removeBackgroundAndReturnPngBytes($image)
    {
        // Obtener recurso GD nativo
        $gd = $image->core()->native();

        // Asegurar truecolor y canal alfa
        if (!imageistruecolor($gd)) {
            $tmp = imagecreatetruecolor(imagesx($gd), imagesy($gd));
            imagecopy($tmp, $gd, 0, 0, 0, 0, imagesx($gd), imagesy($gd));
            $gd = $tmp;
        }

        imagesavealpha($gd, true);

        $width = imagesx($gd);
        $height = imagesy($gd);

        // Umbral para considerar "blanco" (ajusta si es necesario)
        $threshold = 240;

        // Recorremos y hacemos transparente el blanco cercano
        for ($x = 0; $x < $width; $x++) {
            for ($y = 0; $y < $height; $y++) {
                $rgb = imagecolorat($gd, $x, $y);
                $colors = imagecolorsforindex($gd, $rgb);

                if ($colors['red'] >= $threshold && $colors['green'] >= $threshold && $colors['blue'] >= $threshold) {
                    // alpha en imagecolorallocatealpha: 0 = opaque, 127 = fully transparent
                    $alphaColor = imagecolorallocatealpha($gd, 255, 255, 255, 127);
                    imagesetpixel($gd, $x, $y, $alphaColor);
                }
            }
        }

        imagesavealpha($gd, true);

        // Capturamos los bytes PNG sin usar $image->encode() (evita problemas de Intelephense)
        ob_start();
        imagepng($gd);
        $pngData = ob_get_clean();

        // Liberar recurso si se desea
        imagedestroy($gd);

        return $pngData;
    }
}
