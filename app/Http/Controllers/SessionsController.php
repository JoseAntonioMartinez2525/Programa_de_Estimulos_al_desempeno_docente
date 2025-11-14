<?php
/**
 * nombre del programador: Jose Antonio Martínez del Toro
 * objetivo: Controlador de sesiones
 * fecha: 2024-05-31
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\EvaluationDate;
use Carbon\Carbon;

class SessionsController extends Controller
{
    protected $allowedEmails = [
        'joma_18@alu.uabcs.mx',
        'oa.campillo@uabcs.mx',
        'rluna@uabcs.mx',
        'v.andrade@uabcs.mx',
    ];
    public function index()
    {
        return view('login');
    }

    // Simulación de lista física de dictaminadores
    protected $dictaminadorEmails;

    public function __construct()
    {
        $this->dictaminadorEmails = config('dictaminadores.emails');
    }

public function login(Request $request)
{
    $email = strtolower(trim($request->input('email')));
    $password = $request->input('password');

    $isNoPassword = $request->input('no_password_required') == 'true';

    // --- ACCESO PARA USUARIOS SIN CONTRASEÑA (SECRETARIA) ---
    if (in_array($email, $this->allowedEmails) && $isNoPassword) {
        $user = User::where('email', $email)->first();

        if (!$user) {
            $user = User::create([
                'name' => $email,
                'user_type' => 'secretaria', // secretaria
                'email' => $email,
                'password' => Hash::make('defaultpassword'),
            ]);
        }

        Auth::login($user);

        return $this->redirectByUserType($user);
    }

    // --- ACCESO PARA DICTAMINADORES (desde config) ---
    // if (in_array($email, $this->dictaminadorEmails) && $isNoPassword) {
    if (in_array($email, $this->dictaminadorEmails)) {
        $user = User::where('email', $email)->first();

        if (!$user) {
            $index = array_search($email, $this->dictaminadorEmails);
            $name = config('dictaminadores.nombres')[$index] ?? $email;

            $user = User::create([
                'name' => $name,
                'user_type' => 'dictaminador',
                'is_dictaminador' => true,
                'email' => $email,
                'password' => Hash::make('defaultpassword'),
            ]);
        } else {
            // Asegurarse de que el tipo sea dictaminador y flag esté activado
            $user->update([
                'user_type' => 'dictaminador',
                'is_dictaminador' => true,
            ]);
        }

        // Auth::login($user);

        // return $this->redirectByUserType($user);
    }

    // --- LOGIN REGULAR CON CONTRASEÑA ---
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        $user = Auth::user();
        return $this->redirectByUserType($user);
    }

    return back()->withErrors([
        'email' => 'Credenciales incorrectas, por favor intente de nuevo',
        'password' => 'Credenciales incorrectas, por favor intente de nuevo',
    ]);
}

private function redirectByUserType($user)
{
    $noCache = 'no-cache, no-store, must-revalidate';
    $pragmaNoCache = 'no-cache';
    $expiresZero = '0';

    // Verificación de período para docentes al iniciar sesión
    if ($user->user_type === 'docente') {
        $evaluationDates = EvaluationDate::where('type', 'docentes_llenado')->first();
        $now = Carbon::now();

        if ($evaluationDates) {
            $startDate = Carbon::parse($evaluationDates->start_date);
            $endDate = Carbon::parse($evaluationDates->end_date)->endOfDay();

            if (!$now->between($startDate, $endDate)) {
                Auth::logout(); // Cerramos la sesión que acabamos de crear
                return redirect('/login')->withErrors(['email' => 'El período de evaluación se encuentra cerrado.']);
            }
        } else {
            Auth::logout();
            return redirect('/login')->withErrors(['email' => 'El período de evaluación no ha sido configurado.']);
        }
    }

    if ($user->user_type === 'dictaminador') {
        return redirect()->route('comision_dictaminadora')
            ->header('Cache-Control', $noCache)
            ->header('Pragma', $pragmaNoCache)
            ->header('Expires', $expiresZero);
    } elseif ($user->user_type === 'secretaria') {
        return redirect()->route('secretaria')
            ->header('Cache-Control', $noCache)
            ->header('Pragma', $pragmaNoCache)
            ->header('Expires', $expiresZero);
    } else {
        return redirect()->route('welcome')
            ->header('Cache-Control', $noCache)
            ->header('Pragma', $pragmaNoCache)
            ->header('Expires', $expiresZero);
    }
}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        \Log::info('Logout ejecutado correctamente.');

        return redirect('/login') // Redirige a la vista de login
            ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', '0');
    }
    public function welcome(Request $request)
    {
        $user = Auth::user();

        // Pass the user's email to the view
        return view('welcome', compact('user'));
    }

    public function showLoginForm()
    {
        // Verifica si el modo oscuro está habilitado para este usuario
        return view('auth.login', ['darkMode' => session('dark_mode', false)]);
    }

    

}
