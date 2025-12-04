<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity query()
 */
	class Activity extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property mixed $dictaminador_id
 * @property string $dictaminador_email
 * @property int $user_id
 * @property string $docente_email
 * @property string $horasActv2
 * @property string $puntajeEvaluar
 * @property string $comision1
 * @property string $obs1
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm2> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 whereComision1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 whereDictaminadorEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 whereDocenteEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 whereHorasActv2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 whereObs1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 wherePuntajeEvaluar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteF2 whereUserId($value)
 */
	class DictaminadorDocenteF2 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property string $dictaminador_email
 * @property int $user_id
 * @property string $docente_email
 * @property string $horasActv2
 * @property string $puntajeEvaluar
 * @property string $comision1
 * @property string $obs1
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $dictaminador
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 whereComision1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 whereDictaminadorEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 whereDocenteEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 whereHorasActv2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 whereObs1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 wherePuntajeEvaluar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminadorDocenteForm2 whereUserId($value)
 */
	class DictaminadorDocenteForm2 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string|null $user_type
 * @property string $horasActv2
 * @property string $puntajeEvaluar
 * @property string $comision1
 * @property string $obs1
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm2> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereComision1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereHorasActv2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereObs1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 wherePuntajeEvaluar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2 whereUserType($value)
 */
	class DictaminatorsResponseForm2 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string|null $user_type
 * @property string $hours
 * @property string $horasPosgrado
 * @property string $horasSemestre
 * @property string $dse
 * @property string $dse2
 * @property string $comisionPosgrado
 * @property string $comisionLic
 * @property string $actv2Comision
 * @property string $obs2
 * @property string $obs2_2
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm2_2> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereActv2Comision($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereComisionLic($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereComisionPosgrado($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereDse($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereDse2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereHorasPosgrado($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereHorasSemestre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereObs2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereObs22($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm2_2 whereUserType($value)
 */
	class DictaminatorsResponseForm2_2 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $elaboracion
 * @property string $elaboracionSubTotal1
 * @property string $elaboracion2
 * @property string $elaboracionSubTotal2
 * @property string $elaboracion3
 * @property string $elaboracionSubTotal3
 * @property string $elaboracion4
 * @property string $elaboracionSubTotal4
 * @property string $elaboracion5
 * @property string $elaboracionSubTotal5
 * @property string $comisionIncisoA
 * @property string $comisionIncisoB
 * @property string $comisionIncisoC
 * @property string $comisionIncisoD
 * @property string $comisionIncisoE
 * @property string $score3_1
 * @property string $actv3Comision
 * @property string $obs3_1_1
 * @property string $obs3_1_2
 * @property string $obs3_1_3
 * @property string $obs3_1_4
 * @property string $obs3_1_5
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_1> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereActv3Comision($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereComisionIncisoA($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereComisionIncisoB($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereComisionIncisoC($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereComisionIncisoD($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereComisionIncisoE($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereElaboracion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereElaboracion2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereElaboracion3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereElaboracion4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereElaboracion5($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereElaboracionSubTotal1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereElaboracionSubTotal2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereElaboracionSubTotal3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereElaboracionSubTotal4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereElaboracionSubTotal5($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereObs311($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereObs312($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereObs313($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereObs314($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereObs315($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereScore31($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_1 whereUserType($value)
 */
	class DictaminatorsResponseForm3_1 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_10
 * @property string $comision3_10
 * @property string $grupalesCant
 * @property string $evaluarGrupales
 * @property string $evaluarIndividual
 * @property string $individualCant
 * @property string $comisionGrupal
 * @property string $comisionIndividual
 * @property string $obsGrupal
 * @property string $obsIndividual
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_10> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereComision310($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereComisionGrupal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereComisionIndividual($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereEvaluarGrupales($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereEvaluarIndividual($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereGrupalesCant($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereIndividualCant($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereObsGrupal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereObsIndividual($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereScore310($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_10 whereUserType($value)
 */
	class DictaminatorsResponseForm3_10 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_11
 * @property string $comision3_11
 * @property string $cantAsesoria
 * @property string $cantServicio
 * @property string $cantPracticas
 * @property string $subtotalAsesoria
 * @property string $subtotalServicio
 * @property string $subtotalPracticas
 * @property string $comisionAsesoria
 * @property string $comisionServicio
 * @property string $comisionPracticas
 * @property string $obsAsesoria
 * @property string $obsServicio
 * @property string $obsPracticas
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_11> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereCantAsesoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereCantPracticas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereCantServicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereComision311($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereComisionAsesoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereComisionPracticas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereComisionServicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereObsAsesoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereObsPracticas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereObsServicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereScore311($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereSubtotalAsesoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereSubtotalPracticas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereSubtotalServicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_11 whereUserType($value)
 */
	class DictaminatorsResponseForm3_11 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_12
 * @property string $cantCientifico
 * @property string $subtotalCientificos
 * @property string $comisionCientificos
 * @property string $obsCientificos
 * @property string $cantDivulgacion
 * @property string $subtotalDivulgacion
 * @property string $comisionDivulgacion
 * @property string $obsDivulgacion
 * @property string $cantTraduccion
 * @property string $subtotalTraduccion
 * @property string $comisionTraduccion
 * @property string $obsTraduccion
 * @property string $cantArbitrajeInt
 * @property string $subtotalArbitrajeInt
 * @property string $comisionArbitrajeInt
 * @property string $obsArbitrajeInt
 * @property string $cantArbitrajeNac
 * @property string $subtotalArbitrajeNac
 * @property string $comisionArbitrajeNac
 * @property string $obsArbitrajeNac
 * @property string $cantSinInt
 * @property string $subtotalSinInt
 * @property string $comisionSinInt
 * @property string $obsSinInt
 * @property string $cantSinNac
 * @property string $subtotalSinNac
 * @property string $comisionSinNac
 * @property string $obsSinNac
 * @property string $cantAutor
 * @property string $subtotalAutor
 * @property string $comisionAutor
 * @property string $obsAutor
 * @property string $cantEditor
 * @property string $subtotalEditor
 * @property string $comisionEditor
 * @property string $obsEditor
 * @property string $cantWeb
 * @property string $subtotalWeb
 * @property string $comisionWeb
 * @property string $obsWeb
 * @property string $comision3_12
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_12> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCantArbitrajeInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCantArbitrajeNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCantAutor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCantCientifico($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCantDivulgacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCantEditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCantSinInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCantSinNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCantTraduccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCantWeb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComision312($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComisionArbitrajeInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComisionArbitrajeNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComisionAutor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComisionCientificos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComisionDivulgacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComisionEditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComisionSinInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComisionSinNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComisionTraduccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereComisionWeb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereObsArbitrajeInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereObsArbitrajeNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereObsAutor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereObsCientificos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereObsDivulgacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereObsEditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereObsSinInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereObsSinNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereObsTraduccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereObsWeb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereScore312($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereSubtotalArbitrajeInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereSubtotalArbitrajeNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereSubtotalAutor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereSubtotalCientificos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereSubtotalDivulgacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereSubtotalEditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereSubtotalSinInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereSubtotalSinNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereSubtotalTraduccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereSubtotalWeb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_12 whereUserType($value)
 */
	class DictaminatorsResponseForm3_12 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_13
 * @property string $cantInicioFinanExt
 * @property string $subtotalInicioFinanExt
 * @property string $comisionInicioFinancimientoExt
 * @property string $obsInicioFinancimientoExt
 * @property string $cantInicioInvInterno
 * @property string $subtotalInicioInvInterno
 * @property string $comisionInicioInvInterno
 * @property string $obsInicioInvInterno
 * @property string $cantReporteFinanciamExt
 * @property string $subtotalReporteFinanciamExt
 * @property string $comisionReporteFinanciamExt
 * @property string $obsReporteFinanciamExt
 * @property string $cantReporteInvInt
 * @property string $subtotalReporteInvInt
 * @property string $comisionReporteInvInt
 * @property string $obsReporteInvInt
 * @property string $comision3_13
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_13> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereCantInicioFinanExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereCantInicioInvInterno($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereCantReporteFinanciamExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereCantReporteInvInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereComision313($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereComisionInicioFinancimientoExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereComisionInicioInvInterno($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereComisionReporteFinanciamExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereComisionReporteInvInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereObsInicioFinancimientoExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereObsInicioInvInterno($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereObsReporteFinanciamExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereObsReporteInvInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereScore313($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereSubtotalInicioFinanExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereSubtotalInicioInvInterno($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereSubtotalReporteFinanciamExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereSubtotalReporteInvInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_13 whereUserType($value)
 */
	class DictaminatorsResponseForm3_13 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_14
 * @property string $cantCongresoInt
 * @property string $subtotalCongresoInt
 * @property string $comisionCongresoInt
 * @property string $obsCongresoInt
 * @property string $cantCongresoNac
 * @property string $subtotalCongresoNac
 * @property string $comisionCongresoNac
 * @property string $obsCongresoNac
 * @property string $cantCongresoLoc
 * @property string $subtotalCongresoLoc
 * @property string $comisionCongresoLoc
 * @property string $obsCongresoLoc
 * @property string $comision3_14
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_14> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereCantCongresoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereCantCongresoLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereCantCongresoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereComision314($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereComisionCongresoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereComisionCongresoLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereComisionCongresoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereObsCongresoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereObsCongresoLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereObsCongresoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereScore314($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereSubtotalCongresoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereSubtotalCongresoLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereSubtotalCongresoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_14 whereUserType($value)
 */
	class DictaminatorsResponseForm3_14 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_15
 * @property string $cantPatentes
 * @property string $subtotalPatentes
 * @property string $comisionPatententes
 * @property string $obsPatentes
 * @property string $cantPrototipos
 * @property string $subtotalPrototipos
 * @property string $comisionPrototipos
 * @property string $obsPrototipos
 * @property string $comision3_15
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_15> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereCantPatentes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereCantPrototipos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereComision315($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereComisionPatententes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereComisionPrototipos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereObsPatentes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereObsPrototipos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereScore315($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereSubtotalPatentes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereSubtotalPrototipos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_15 whereUserType($value)
 */
	class DictaminatorsResponseForm3_15 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_16
 * @property string $cantArbInt
 * @property string $subtotalArbInt
 * @property string $comisionArbInt
 * @property string $obsArbInt
 * @property string $cantArbNac
 * @property string $subtotalArbNac
 * @property string $comisionArbNac
 * @property string $obsArbNac
 * @property string $cantPubInt
 * @property string $subtotalPubInt
 * @property string $comisionPubInt
 * @property string $obsPubInt
 * @property string $cantPubNac
 * @property string $subtotalPubNac
 * @property string $comisionPubNac
 * @property string $obsPubNac
 * @property string $cantRevInt
 * @property string $subtotalRevInt
 * @property string $comisionRevInt
 * @property string $obsRevInt
 * @property string $cantRevNac
 * @property string $subtotalRevNac
 * @property string $comisionRevNac
 * @property string $obsRevNac
 * @property string $cantRevista
 * @property string $subtotalRevista
 * @property string $comisionRevista
 * @property string $obsRevista
 * @property string $comision3_16
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_16> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereCantArbInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereCantArbNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereCantPubInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereCantPubNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereCantRevInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereCantRevNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereCantRevista($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereComision316($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereComisionArbInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereComisionArbNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereComisionPubInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereComisionPubNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereComisionRevInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereComisionRevNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereComisionRevista($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereObsArbInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereObsArbNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereObsPubInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereObsPubNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereObsRevInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereObsRevNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereObsRevista($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereScore316($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereSubtotalArbInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereSubtotalArbNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereSubtotalPubInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereSubtotalPubNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereSubtotalRevInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereSubtotalRevNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereSubtotalRevista($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_16 whereUserType($value)
 */
	class DictaminatorsResponseForm3_16 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_17
 * @property string $cantDifusionExt
 * @property string $subtotalDifusionExt
 * @property string $comisionDifusionExt
 * @property string $obsDifusionExt
 * @property string $cantDifusionInt
 * @property string $subtotalDifusionInt
 * @property string $comisionDifusionInt
 * @property string $obsDifusionInt
 * @property string $cantRepDifusionExt
 * @property string $subtotalRepDifusionExt
 * @property string $comisionRepDifusionExt
 * @property string $obsRepDifusionExt
 * @property string $cantRepDifusionInt
 * @property string $subtotalRepDifusionInt
 * @property string $comisionRepDifusionInt
 * @property string $obsRepDifusionInt
 * @property string $comision3_17
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_17> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereCantDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereCantDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereCantRepDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereCantRepDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereComision317($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereComisionDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereComisionDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereComisionRepDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereComisionRepDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereObsDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereObsDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereObsRepDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereObsRepDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereScore317($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereSubtotalDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereSubtotalDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereSubtotalRepDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereSubtotalRepDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_17 whereUserType($value)
 */
	class DictaminatorsResponseForm3_17 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_18
 * @property string $cantComOrgInt
 * @property string $subtotalComOrgInt
 * @property string $comisionComOrgInt
 * @property string $obsComOrgInt
 * @property string $cantComOrgNac
 * @property string $subtotalComOrgNac
 * @property string $comisionComOrgNac
 * @property string $obsComOrgNac
 * @property string $cantComOrgReg
 * @property string $subtotalComOrgReg
 * @property string $comisionComOrgReg
 * @property string $obsComOrgReg
 * @property string $cantComApoyoInt
 * @property string $subtotalComApoyoInt
 * @property string $comisionComApoyoInt
 * @property string $obsComApoyoInt
 * @property string $cantComApoyoNac
 * @property string $subtotalComApoyoNac
 * @property string $comisionComApoyoNac
 * @property string $obsComApoyoNac
 * @property string $cantComApoyoReg
 * @property string $subtotalComApoyoReg
 * @property string $comisionComApoyoReg
 * @property string $obsComApoyoReg
 * @property string $cantCicloComOrgInt
 * @property string $subtotalCicloComOrgInt
 * @property string $comisionCicloComOrgInt
 * @property string $obsCicloComOrgInt
 * @property string $cantCicloComOrgNac
 * @property string $subtotalCicloComOrgNac
 * @property string $comisionCicloComOrgNac
 * @property string $obsCicloComOrgNac
 * @property string $cantCicloComOrgReg
 * @property string $subtotalCicloComOrgReg
 * @property string $comisionCicloComOrgReg
 * @property string $obsCicloComOrgReg
 * @property string $cantCicloComApoyoInt
 * @property string $subtotalCicloComApoyoInt
 * @property string $comisionCicloComApoyoInt
 * @property string $obsCicloComApoyoInt
 * @property string $cantCicloComApoyoNac
 * @property string $subtotalCicloComApoyoNac
 * @property string $comisionCicloComApoyoNac
 * @property string $obsCicloComApoyoNac
 * @property string $cantCicloComApoyoReg
 * @property string $subtotalCicloComApoyoReg
 * @property string $comisionCicloComApoyoReg
 * @property string $obsCicloComApoyoReg
 * @property string $comision3_18
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_18> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantCicloComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantCicloComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantCicloComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantCicloComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantCicloComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantCicloComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCantComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComision318($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionCicloComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionCicloComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionCicloComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionCicloComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionCicloComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionCicloComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereComisionComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsCicloComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsCicloComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsCicloComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsCicloComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsCicloComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsCicloComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereObsComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereScore318($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalCicloComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalCicloComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalCicloComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalCicloComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalCicloComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalCicloComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereSubtotalComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_18 whereUserType($value)
 */
	class DictaminatorsResponseForm3_18 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_19
 * @property string $cantCGUtitular
 * @property string $subtotalCGUtitular
 * @property string $comCGUtitular
 * @property string $obsCGUtitular
 * @property string $cantCGUespecial
 * @property string $subtotalCGUespecial
 * @property string $comCGUespecial
 * @property string $obsCGUespecial
 * @property string $cantCGUpermanente
 * @property string $subtotalCGUpermanente
 * @property string $comCGUpermanente
 * @property string $obsCGUpermanente
 * @property string $cantCAACtitular
 * @property string $subtotalCAACtitular
 * @property string $comCAACtitular
 * @property string $obsCAACtitular
 * @property string $cantCAACintegCom
 * @property string $subtotalCAACintegCom
 * @property string $comCAACintegCom
 * @property string $obsCAACintegCom
 * @property string $cantComDepart
 * @property string $subtotalComDepart
 * @property string $comComDepart
 * @property string $obsComDepart
 * @property string $cantComPEDPD
 * @property string $subtotalComPEDPD
 * @property string $comComPEDPD
 * @property string $obsComPEDPD
 * @property string $cantComPartPos
 * @property string $subtotalComPartPos
 * @property string $comComPartPos
 * @property string $obsComPartPos
 * @property string $cantRespPos
 * @property string $subtotalRespPos
 * @property string $comRespPos
 * @property string $obsRespPos
 * @property string $cantRespCarrera
 * @property string $subtotalRespCarrera
 * @property string $comRespCarrera
 * @property string $obsRespCarrera
 * @property string $cantRespProd
 * @property string $subtotalRespProd
 * @property string $comRespProd
 * @property string $obsRespProd
 * @property string $cantRespLab
 * @property string $subtotalRespLab
 * @property string $comRespLab
 * @property string $obsRespLab
 * @property string $cantExamProf
 * @property string $subtotalExamProf
 * @property string $comExamProf
 * @property string $obsExamProf
 * @property string $cantExamAcademicos
 * @property string $subtotalExamAcademicos
 * @property string $comExamAcademicos
 * @property string $obsExamAcademicos
 * @property string $cantPRODEPformResp
 * @property string $subtotalPRODEPformResp
 * @property string $comPRODEPformResp
 * @property string $obsPRODEPformResp
 * @property string $cantPRODEPformInteg
 * @property string $subtotalPRODEPformInteg
 * @property string $comPRODEPformInteg
 * @property string $obsPRODEPformInteg
 * @property string $cantPRODEPenconsResp
 * @property string $subtotalPRODEPenconsResp
 * @property string $comPRODEPenconsResp
 * @property string $obsPRODEPenconsResp
 * @property string $cantPRODEPenconsInteg
 * @property string $subtotalPRODEPenconsInteg
 * @property string $comPRODEPenconsInteg
 * @property string $obsPRODEPenconsInteg
 * @property string $cantPRODEPconsResp
 * @property string $subtotalPRODEPconsResp
 * @property string $comPRODEPconsResp
 * @property string $obsPRODEPconsResp
 * @property string $cantPRODEPconsInteg
 * @property string $subtotalPRODEPconsInteg
 * @property string $comPRODEPconsInteg
 * @property string $obsPRODEPconsInteg
 * @property string $comision3_19
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_19> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantCAACintegCom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantCAACtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantCGUespecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantCGUpermanente($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantCGUtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantComDepart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantComPEDPD($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantComPartPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantExamAcademicos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantExamProf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantPRODEPconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantPRODEPconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantPRODEPenconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantPRODEPenconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantPRODEPformInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantPRODEPformResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantRespCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantRespLab($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantRespPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCantRespProd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComCAACintegCom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComCAACtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComCGUespecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComCGUpermanente($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComCGUtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComComDepart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComComPEDPD($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComComPartPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComExamAcademicos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComExamProf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComPRODEPconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComPRODEPconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComPRODEPenconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComPRODEPenconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComPRODEPformInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComPRODEPformResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComRespCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComRespLab($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComRespPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComRespProd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereComision319($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsCAACintegCom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsCAACtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsCGUespecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsCGUpermanente($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsCGUtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsComDepart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsComPEDPD($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsComPartPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsExamAcademicos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsExamProf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsPRODEPconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsPRODEPconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsPRODEPenconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsPRODEPenconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsPRODEPformInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsPRODEPformResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsRespCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsRespLab($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsRespPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereObsRespProd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereScore319($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalCAACintegCom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalCAACtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalCGUespecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalCGUpermanente($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalCGUtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalComDepart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalComPEDPD($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalComPartPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalExamAcademicos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalExamProf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalPRODEPconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalPRODEPconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalPRODEPenconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalPRODEPenconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalPRODEPformInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalPRODEPformResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalRespCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalRespLab($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalRespPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereSubtotalRespProd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_19 whereUserType($value)
 */
	class DictaminatorsResponseForm3_19 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_2
 * @property string $comision3_2
 * @property string $r1
 * @property string $r2
 * @property string $r3
 * @property string $cant1
 * @property string $cant2
 * @property string $cant3
 * @property string $prom90_100
 * @property string $prom80_90
 * @property string $prom70_80
 * @property string $obs3_2_1
 * @property string $obs3_2_2
 * @property string $obs3_2_3
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_2> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereCant1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereCant2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereCant3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereComision32($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereObs321($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereObs322($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereObs323($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereProm7080($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereProm8090($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereProm90100($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereR1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereR2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereR3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereScore32($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_2 whereUserType($value)
 */
	class DictaminatorsResponseForm3_2 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_3
 * @property string $rc1
 * @property string $rc2
 * @property string $rc3
 * @property string $rc4
 * @property string $stotal1
 * @property string $stotal2
 * @property string $stotal3
 * @property string $stotal4
 * @property string $comision3_3
 * @property string $comIncisoA
 * @property string $comIncisoB
 * @property string $comIncisoC
 * @property string $comIncisoD
 * @property string $obs3_3_1
 * @property string $obs3_3_2
 * @property string $obs3_3_3
 * @property string $obs3_3_4
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_3> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereComIncisoA($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereComIncisoB($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereComIncisoC($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereComIncisoD($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereComision33($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereObs331($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereObs332($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereObs333($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereObs334($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereRc1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereRc2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereRc3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereRc4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereScore33($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereStotal1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereStotal2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereStotal3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereStotal4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_3 whereUserType($value)
 */
	class DictaminatorsResponseForm3_3 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_4
 * @property string $cantInternacional
 * @property string $cantNacional
 * @property string $cantidadRegional
 * @property string $cantPreparacion
 * @property string $cantInternacional2
 * @property string $cantNacional2
 * @property string $cantidadRegional2
 * @property string $cantPreparacion2
 * @property string $comision3_4
 * @property string $comInternacional
 * @property string $comNacional
 * @property string $comRegional
 * @property string $comPreparacion
 * @property string $obs3_4_1
 * @property string $obs3_4_2
 * @property string $obs3_4_3
 * @property string $obs3_4_4
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_4> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereCantInternacional($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereCantInternacional2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereCantNacional($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereCantNacional2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereCantPreparacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereCantPreparacion2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereCantidadRegional($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereCantidadRegional2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereComInternacional($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereComNacional($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereComPreparacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereComRegional($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereComision34($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereObs341($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereObs342($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereObs343($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereObs344($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereScore34($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_4 whereUserType($value)
 */
	class DictaminatorsResponseForm3_4 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_5
 * @property string $cantDA
 * @property string $cantCAAC
 * @property string $cantDA2
 * @property string $cantCAAC2
 * @property string $comision3_5
 * @property string $comDA
 * @property string $comNCAA
 * @property string $obs3_5_1
 * @property string $obs3_5_2
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_5> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereCantCAAC($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereCantCAAC2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereCantDA($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereCantDA2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereComDA($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereComNCAA($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereComision35($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereObs351($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereObs352($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereScore35($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_5 whereUserType($value)
 */
	class DictaminatorsResponseForm3_5 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_6
 * @property string $comisionDict3_6
 * @property string $puntaje3_6
 * @property string $puntajeHoras3_6
 * @property string $comision3_6
 * @property string $obs3_6_1
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_6> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereComision36($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereComisionDict36($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereObs361($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 wherePuntaje36($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 wherePuntajeHoras36($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereScore36($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_6 whereUserType($value)
 */
	class DictaminatorsResponseForm3_6 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_7
 * @property string $comisionDict3_7
 * @property string $puntaje3_7
 * @property string $puntajeHoras3_7
 * @property string $comision3_7
 * @property string $obs3_7_1
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_7> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereComision37($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereComisionDict37($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereObs371($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 wherePuntaje37($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 wherePuntajeHoras37($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereScore37($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_7 whereUserType($value)
 */
	class DictaminatorsResponseForm3_7 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_8
 * @property string $comisionDict3_8
 * @property string $puntaje3_8
 * @property string $puntajeHoras3_8
 * @property string $comision3_8
 * @property string $obs3_8_1
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_8> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereComision38($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereComisionDict38($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereObs381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 wherePuntaje38($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 wherePuntajeHoras38($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereScore38($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8 whereUserType($value)
 */
	class DictaminatorsResponseForm3_8 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_8_1
 * @property string $comisionDict3_8_1
 * @property string $puntaje3_8_1
 * @property string $puntajeHoras3_8_1
 * @property string $comision3_8_1
 * @property string $obs3_8_1_1
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_8_1> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereComision381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereComisionDict381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereObs3811($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 wherePuntaje381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 wherePuntajeHoras381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereScore381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_8_1 whereUserType($value)
 */
	class DictaminatorsResponseForm3_8_1 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property string $score3_9
 * @property string $comision3_9
 * @property string $obs3_9_1
 * @property string $puntaje3_9_1
 * @property string $tutorias1
 * @property string $tutoriasComision1
 * @property string $obs3_9_2
 * @property string $puntaje3_9_2
 * @property string $tutorias2
 * @property string $tutoriasComision2
 * @property string $obs3_9_3
 * @property string $puntaje3_9_3
 * @property string $tutorias3
 * @property string $tutoriasComision3
 * @property string $obs3_9_4
 * @property string $puntaje3_9_4
 * @property string $tutorias4
 * @property string $tutoriasComision4
 * @property string $obs3_9_5
 * @property string $puntaje3_9_5
 * @property string $tutorias5
 * @property string $tutoriasComision5
 * @property string $obs3_9_6
 * @property string $puntaje3_9_6
 * @property string $tutorias6
 * @property string $tutoriasComision6
 * @property string $obs3_9_7
 * @property string $puntaje3_9_7
 * @property string $tutorias7
 * @property string $tutoriasComision7
 * @property string $obs3_9_8
 * @property string $puntaje3_9_8
 * @property string $tutorias8
 * @property string $tutoriasComision8
 * @property string $obs3_9_9
 * @property string $puntaje3_9_9
 * @property string $tutorias9
 * @property string $tutoriasComision9
 * @property string $obs3_9_10
 * @property string $puntaje3_9_10
 * @property string $tutorias10
 * @property string $tutoriasComision10
 * @property string $obs3_9_11
 * @property string $puntaje3_9_11
 * @property string $tutorias11
 * @property string $tutoriasComision11
 * @property string $obs3_9_12
 * @property string $puntaje3_9_12
 * @property string $tutorias12
 * @property string $tutoriasComision12
 * @property string $obs3_9_13
 * @property string $puntaje3_9_13
 * @property string $tutorias13
 * @property string $tutoriasComision13
 * @property string $obs3_9_14
 * @property string $puntaje3_9_14
 * @property string $tutorias14
 * @property string $tutoriasComision14
 * @property string $obs3_9_15
 * @property string $puntaje3_9_15
 * @property string $tutorias15
 * @property string $tutoriasComision15
 * @property string $obs3_9_16
 * @property string $puntaje3_9_16
 * @property string $tutorias16
 * @property string $tutoriasComision16
 * @property string $obs3_9_17
 * @property string $puntaje3_9_17
 * @property string $tutorias17
 * @property string $tutoriasComision17
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsersResponseForm3_9> $docentes
 * @property-read int|null $docentes_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\UsersResponseForm1 $usersResponseForm1
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereComision39($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs391($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs3910($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs3911($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs3912($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs3913($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs3914($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs3915($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs3916($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs3917($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs392($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs393($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs394($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs395($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs396($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs397($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs398($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereObs399($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje391($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje3910($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje3911($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje3912($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje3913($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje3914($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje3915($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje3916($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje3917($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje392($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje393($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje394($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje395($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje396($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje397($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje398($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 wherePuntaje399($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereScore39($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias10($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias11($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias12($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias13($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias14($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias15($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias16($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias17($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias5($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias6($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias7($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias8($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutorias9($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision10($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision11($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision12($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision13($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision14($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision15($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision16($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision17($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision5($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision6($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision7($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision8($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereTutoriasComision9($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DictaminatorsResponseForm3_9 whereUserType($value)
 */
	class DictaminatorsResponseForm3_9 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string|null $user_type
 * @property string $form_name
 * @property string $puntaje_maximo
 * @property array<array-key, mixed> $table_data
 * @property string|null $acreditacion
 * @property int|null $filas
 * @property int|null $columnas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DynamicFormColumn> $columns
 * @property-read int|null $columns_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DynamicFormField> $fields
 * @property-read int|null $fields_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DynamicFormItem> $items
 * @property-read int|null $items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DynamicFormValue> $values
 * @property-read int|null $values_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereAcreditacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereColumnas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereFilas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereFormName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm wherePuntajeMaximo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereTableData($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicForm whereUserType($value)
 */
	class DynamicForm extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dynamic_form_id
 * @property string $column_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DynamicForm $dynamicForm
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormColumn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormColumn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormColumn query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormColumn whereColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormColumn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormColumn whereDynamicFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormColumn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormColumn whereUpdatedAt($value)
 */
	class DynamicFormColumn extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dynamic_form_id
 * @property int|null $dynamic_form_column_id
 * @property int|null $dynamic_form_value_id
 * @property int|null $user_id
 * @property string|null $email_docente
 * @property string|null $row_identifier
 * @property string|null $puntaje_input_values
 * @property string|null $puntaje_comision
 * @property string|null $observaciones
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DynamicFormColumn|null $column
 * @property-read \App\Models\DynamicForm $dynamicForm
 * @property-read \App\Models\DynamicFormValue|null $value
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereDynamicFormColumnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereDynamicFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereDynamicFormValueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereEmailDocente($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereObservaciones($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission wherePuntajeComision($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission wherePuntajeInputValues($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereRowIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormCommission whereUserType($value)
 */
	class DynamicFormCommission extends \Eloquent {}
}

namespace App\Models{
/**
 * @property-read \App\Models\DynamicForm|null $form
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormField query()
 */
	class DynamicFormField extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dynamic_form_id
 * @property string $key
 * @property string|null $value
 * @property string $puntaje_maximo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DynamicForm $form
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormItem query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormItem whereDynamicFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormItem whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormItem wherePuntajeMaximo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormItem whereValue($value)
 */
	class DynamicFormItem extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $dynamic_form_id
 * @property int $dynamic_form_column_id
 * @property int|null $row_index
 * @property string $value
 * @property string $puntaje_maximo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DynamicFormColumn $column
 * @property-read \App\Models\DynamicForm $dynamicForm
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue whereDynamicFormColumnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue whereDynamicFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue wherePuntajeMaximo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue whereRowIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DynamicFormValue whereValue($value)
 */
	class DynamicFormValue extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property int $evaluator_order
 * @property string|null $evaluator_name
 * @property string|null $evaluator_name_2
 * @property string|null $evaluator_name_3
 * @property string|null $signature_path
 * @property string|null $signature_path_2
 * @property string|null $signature_path_3
 * @property int $signature_order
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereEvaluatorName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereEvaluatorName2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereEvaluatorName3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereEvaluatorOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereSignatureOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereSignaturePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereSignaturePath2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereSignaturePath3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluatorSignature whereUserType($value)
 */
	class EvaluatorSignature extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereUpdatedAt($value)
 */
	class Item extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $clave
 * @property int $valor
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PuntajeMaximo3_8_1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PuntajeMaximo3_8_1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PuntajeMaximo3_8_1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PuntajeMaximo3_8_1 whereClave($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PuntajeMaximo3_8_1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PuntajeMaximo3_8_1 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PuntajeMaximo3_8_1 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PuntajeMaximo3_8_1 whereValor($value)
 */
	class PuntajeMaximo3_8_1 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $user_type
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\EvaluatorSignature> $evaluatorSignatures
 * @property-read int|null $evaluator_signatures_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\UserResume|null $userResume
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUserType($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $dictaminador_id
 * @property int $user_id
 * @property string $email
 * @property int $comision_actividad_1_total
 * @property int $comision_actividad_2_total
 * @property int $comision_actividad_3_total
 * @property int $total_puntaje
 * @property string $minima_calidad
 * @property string $minima_total
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereComisionActividad1Total($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereComisionActividad2Total($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereComisionActividad3Total($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereDictaminadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereMinimaCalidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereMinimaTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereTotalPuntaje($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserResume whereUserType($value)
 */
	class UserResume extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $user_type
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Users whereUserType($value)
 */
	class Users extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $convocatoria
 * @property string $periodo
 * @property string $nombre
 * @property string $area
 * @property string $departamento
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 whereConvocatoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 whereDepartamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 wherePeriodo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm1 whereUserId($value)
 */
	class UsersResponseForm1 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $horasActv2
 * @property string $puntajeEvaluar
 * @property string $obs1
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision1
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm2> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 whereComision1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 whereHorasActv2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 whereObs1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 wherePuntajeEvaluar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2 whereUserType($value)
 */
	class UsersResponseForm2 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $hours
 * @property string $horasPosgrado
 * @property string $horasSemestre
 * @property string $dse
 * @property string $dse2
 * @property string $obs2
 * @property string $obs2_2
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $actv2Comision
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm2_2> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereActv2Comision($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereDse($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereDse2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereHorasPosgrado($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereHorasSemestre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereObs2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereObs22($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm2_2 whereUserType($value)
 */
	class UsersResponseForm2_2 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_1
 * @property string $elaboracion
 * @property string $elaboracionSubTotal1
 * @property string $elaboracion2
 * @property string $elaboracionSubTotal2
 * @property string $elaboracion3
 * @property string $elaboracionSubTotal3
 * @property string $elaboracion4
 * @property string $elaboracionSubTotal4
 * @property string $elaboracion5
 * @property string $elaboracionSubTotal5
 * @property string $obs3_1_1
 * @property string $obs3_1_2
 * @property string $obs3_1_3
 * @property string $obs3_1_4
 * @property string $obs3_1_5
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $actv3Comision
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_1> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereActv3Comision($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereElaboracion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereElaboracion2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereElaboracion3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereElaboracion4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereElaboracion5($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereElaboracionSubTotal1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereElaboracionSubTotal2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereElaboracionSubTotal3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereElaboracionSubTotal4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereElaboracionSubTotal5($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereObs311($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereObs312($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereObs313($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereObs314($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereObs315($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereScore31($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_1 whereUserType($value)
 */
	class UsersResponseForm3_1 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_10
 * @property string $grupalesCant
 * @property string $evaluarGrupales
 * @property string $evaluarIndividual
 * @property string $individualCant
 * @property string $obsGrupal
 * @property string $obsIndividual
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_10
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_10> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereComision310($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereEvaluarGrupales($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereEvaluarIndividual($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereGrupalesCant($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereIndividualCant($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereObsGrupal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereObsIndividual($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereScore310($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_10 whereUserType($value)
 */
	class UsersResponseForm3_10 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_11
 * @property string $cantAsesoria
 * @property string $cantServicio
 * @property string $cantPracticas
 * @property string $subtotalAsesoria
 * @property string $subtotalServicio
 * @property string $subtotalPracticas
 * @property string $obsAsesoria
 * @property string $obsServicio
 * @property string $obsPracticas
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_11
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_11> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereCantAsesoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereCantPracticas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereCantServicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereComision311($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereObsAsesoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereObsPracticas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereObsServicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereScore311($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereSubtotalAsesoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereSubtotalPracticas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereSubtotalServicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_11 whereUserType($value)
 */
	class UsersResponseForm3_11 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_12
 * @property string $cantCientifico
 * @property string $subtotalCientificos
 * @property string $cantDivulgacion
 * @property string $subtotalDivulgacion
 * @property string $cantTraduccion
 * @property string $subtotalTraduccion
 * @property string $cantArbitrajeInt
 * @property string $subtotalArbitrajeInt
 * @property string $cantArbitrajeNac
 * @property string $subtotalArbitrajeNac
 * @property string $cantSinInt
 * @property string $subtotalSinInt
 * @property string $cantSinNac
 * @property string $subtotalSinNac
 * @property string $cantAutor
 * @property string $subtotalAutor
 * @property string $cantEditor
 * @property string $subtotalEditor
 * @property string $cantWeb
 * @property string $subtotalWeb
 * @property string $obsCientificos
 * @property string $obsDivulgacion
 * @property string $obsTraduccion
 * @property string $obsArbitrajeInt
 * @property string $obsArbitrajeNac
 * @property string $obsSinInt
 * @property string $obsSinNac
 * @property string $obsAutor
 * @property string $obsEditor
 * @property string $obsWeb
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_12
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_12> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCantArbitrajeInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCantArbitrajeNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCantAutor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCantCientifico($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCantDivulgacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCantEditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCantSinInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCantSinNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCantTraduccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCantWeb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereComision312($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereObsArbitrajeInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereObsArbitrajeNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereObsAutor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereObsCientificos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereObsDivulgacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereObsEditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereObsSinInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereObsSinNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereObsTraduccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereObsWeb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereScore312($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereSubtotalArbitrajeInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereSubtotalArbitrajeNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereSubtotalAutor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereSubtotalCientificos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereSubtotalDivulgacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereSubtotalEditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereSubtotalSinInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereSubtotalSinNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereSubtotalTraduccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereSubtotalWeb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_12 whereUserType($value)
 */
	class UsersResponseForm3_12 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_13
 * @property string $cantInicioFinanExt
 * @property string $subtotalInicioFinanExt
 * @property string $cantInicioInvInterno
 * @property string $subtotalInicioInvInterno
 * @property string $cantReporteFinanciamExt
 * @property string $subtotalReporteFinanciamExt
 * @property string $cantReporteInvInt
 * @property string $subtotalReporteInvInt
 * @property string $obsInicioFinancimientoExt
 * @property string $obsInicioInvInterno
 * @property string $obsReporteFinanciamExt
 * @property string $obsReporteInvInt
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_13
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_13> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereCantInicioFinanExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereCantInicioInvInterno($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereCantReporteFinanciamExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereCantReporteInvInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereComision313($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereObsInicioFinancimientoExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereObsInicioInvInterno($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereObsReporteFinanciamExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereObsReporteInvInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereScore313($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereSubtotalInicioFinanExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereSubtotalInicioInvInterno($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereSubtotalReporteFinanciamExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereSubtotalReporteInvInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_13 whereUserType($value)
 */
	class UsersResponseForm3_13 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_14
 * @property string $cantCongresoInt
 * @property string $subtotalCongresoInt
 * @property string $cantCongresoNac
 * @property string $subtotalCongresoNac
 * @property string $cantCongresoLoc
 * @property string $subtotalCongresoLoc
 * @property string $obsCongresoInt
 * @property string $obsCongresoNac
 * @property string $obsCongresoLoc
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_14
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_14> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereCantCongresoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereCantCongresoLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereCantCongresoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereComision314($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereObsCongresoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereObsCongresoLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereObsCongresoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereScore314($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereSubtotalCongresoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereSubtotalCongresoLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereSubtotalCongresoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_14 whereUserType($value)
 */
	class UsersResponseForm3_14 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_15
 * @property string $cantPatentes
 * @property string $subtotalPatentes
 * @property string $cantPrototipos
 * @property string $subtotalPrototipos
 * @property string $obsPatentes
 * @property string $obsPrototipos
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_15
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_15> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereCantPatentes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereCantPrototipos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereComision315($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereObsPatentes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereObsPrototipos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereScore315($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereSubtotalPatentes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereSubtotalPrototipos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_15 whereUserType($value)
 */
	class UsersResponseForm3_15 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_16
 * @property string $cantArbInt
 * @property string $subtotalArbInt
 * @property string $cantArbNac
 * @property string $subtotalArbNac
 * @property string $cantPubInt
 * @property string $subtotalPubInt
 * @property string $cantPubNac
 * @property string $subtotalPubNac
 * @property string $cantRevInt
 * @property string $subtotalRevInt
 * @property string $cantRevNac
 * @property string $subtotalRevNac
 * @property string $cantRevista
 * @property string $subtotalRevista
 * @property string $obsArbInt
 * @property string $obsArbNac
 * @property string $obsPubInt
 * @property string $obsPubNac
 * @property string $obsRevInt
 * @property string $obsRevNac
 * @property string $obsRevista
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_16
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_16> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereCantArbInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereCantArbNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereCantPubInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereCantPubNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereCantRevInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereCantRevNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereCantRevista($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereComision316($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereObsArbInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereObsArbNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereObsPubInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereObsPubNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereObsRevInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereObsRevNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereObsRevista($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereScore316($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereSubtotalArbInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereSubtotalArbNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereSubtotalPubInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereSubtotalPubNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereSubtotalRevInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereSubtotalRevNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereSubtotalRevista($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_16 whereUserType($value)
 */
	class UsersResponseForm3_16 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_17
 * @property string $cantDifusionExt
 * @property string $subtotalDifusionExt
 * @property string $cantDifusionInt
 * @property string $subtotalDifusionInt
 * @property string $cantRepDifusionExt
 * @property string $subtotalRepDifusionExt
 * @property string $cantRepDifusionInt
 * @property string $subtotalRepDifusionInt
 * @property string $obsDifusionExt
 * @property string $obsDifusionInt
 * @property string $obsRepDifusionExt
 * @property string $obsRepDifusionInt
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_17
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_17> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereCantDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereCantDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereCantRepDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereCantRepDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereComision317($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereObsDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereObsDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereObsRepDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereObsRepDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereScore317($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereSubtotalDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereSubtotalDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereSubtotalRepDifusionExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereSubtotalRepDifusionInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_17 whereUserType($value)
 */
	class UsersResponseForm3_17 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_18
 * @property string $cantComOrgInt
 * @property string $subtotalComOrgInt
 * @property string $cantComOrgNac
 * @property string $subtotalComOrgNac
 * @property string $cantComOrgReg
 * @property string $subtotalComOrgReg
 * @property string $cantComApoyoInt
 * @property string $subtotalComApoyoInt
 * @property string $cantComApoyoNac
 * @property string $subtotalComApoyoNac
 * @property string $cantComApoyoReg
 * @property string $subtotalComApoyoReg
 * @property string $cantCicloComOrgInt
 * @property string $subtotalCicloComOrgInt
 * @property string $cantCicloComOrgNac
 * @property string $subtotalCicloComOrgNac
 * @property string $cantCicloComOrgReg
 * @property string $subtotalCicloComOrgReg
 * @property string $cantCicloComApoyoInt
 * @property string $subtotalCicloComApoyoInt
 * @property string $cantCicloComApoyoNac
 * @property string $subtotalCicloComApoyoNac
 * @property string $cantCicloComApoyoReg
 * @property string $subtotalCicloComApoyoReg
 * @property string $obsComOrgInt
 * @property string $obsComOrgNac
 * @property string $obsComOrgReg
 * @property string $obsComApoyoInt
 * @property string $obsComApoyoNac
 * @property string $obsComApoyoReg
 * @property string $obsCicloComOrgInt
 * @property string $obsCicloComOrgNac
 * @property string $obsCicloComOrgReg
 * @property string $obsCicloComApoyoInt
 * @property string $obsCicloComApoyoNac
 * @property string $obsCicloComApoyoReg
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_18
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_18> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantCicloComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantCicloComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantCicloComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantCicloComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantCicloComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantCicloComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCantComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereComision318($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsCicloComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsCicloComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsCicloComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsCicloComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsCicloComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsCicloComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereObsComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereScore318($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalCicloComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalCicloComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalCicloComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalCicloComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalCicloComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalCicloComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalComApoyoInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalComApoyoNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalComApoyoReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalComOrgInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalComOrgNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereSubtotalComOrgReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_18 whereUserType($value)
 */
	class UsersResponseForm3_18 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_19
 * @property string $cantCGUtitular
 * @property string $subtotalCGUtitular
 * @property string $cantCGUespecial
 * @property string $subtotalCGUespecial
 * @property string $cantCGUpermanente
 * @property string $subtotalCGUpermanente
 * @property string $cantCAACtitular
 * @property string $subtotalCAACtitular
 * @property string $cantCAACintegCom
 * @property string $subtotalCAACintegCom
 * @property string $cantComDepart
 * @property string $subtotalComDepart
 * @property string $cantComPEDPD
 * @property string $subtotalComPEDPD
 * @property string $cantComPartPos
 * @property string $subtotalComPartPos
 * @property string $cantRespPos
 * @property string $subtotalRespPos
 * @property string $cantRespCarrera
 * @property string $subtotalRespCarrera
 * @property string $cantRespProd
 * @property string $subtotalRespProd
 * @property string $cantRespLab
 * @property string $subtotalRespLab
 * @property string $cantExamProf
 * @property string $subtotalExamProf
 * @property string $cantExamAcademicos
 * @property string $subtotalExamAcademicos
 * @property string $cantPRODEPformResp
 * @property string $subtotalPRODEPformResp
 * @property string $cantPRODEPformInteg
 * @property string $subtotalPRODEPformInteg
 * @property string $cantPRODEPenconsResp
 * @property string $subtotalPRODEPenconsResp
 * @property string $cantPRODEPenconsInteg
 * @property string $subtotalPRODEPenconsInteg
 * @property string $cantPRODEPconsResp
 * @property string $subtotalPRODEPconsResp
 * @property string $cantPRODEPconsInteg
 * @property string $subtotalPRODEPconsInteg
 * @property string $obsCGUtitular
 * @property string $obsCGUespecial
 * @property string $obsCGUpermanente
 * @property string $obsCAACtitular
 * @property string $obsCAACintegCom
 * @property string $obsComDepart
 * @property string $obsComPEDPD
 * @property string $obsComPartPos
 * @property string $obsRespPos
 * @property string $obsRespCarrera
 * @property string $obsRespProd
 * @property string $obsRespLab
 * @property string $obsExamProf
 * @property string $obsExamAcademicos
 * @property string $obsPRODEPformResp
 * @property string $obsPRODEPformInteg
 * @property string $obsPRODEPenconsResp
 * @property string $obsPRODEPenconsInteg
 * @property string $obsPRODEPconsResp
 * @property string $obsPRODEPconsInteg
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_19
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_19> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantCAACintegCom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantCAACtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantCGUespecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantCGUpermanente($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantCGUtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantComDepart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantComPEDPD($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantComPartPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantExamAcademicos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantExamProf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantPRODEPconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantPRODEPconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantPRODEPenconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantPRODEPenconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantPRODEPformInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantPRODEPformResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantRespCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantRespLab($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantRespPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCantRespProd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereComision319($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsCAACintegCom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsCAACtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsCGUespecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsCGUpermanente($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsCGUtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsComDepart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsComPEDPD($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsComPartPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsExamAcademicos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsExamProf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsPRODEPconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsPRODEPconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsPRODEPenconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsPRODEPenconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsPRODEPformInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsPRODEPformResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsRespCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsRespLab($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsRespPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereObsRespProd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereScore319($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalCAACintegCom($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalCAACtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalCGUespecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalCGUpermanente($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalCGUtitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalComDepart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalComPEDPD($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalComPartPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalExamAcademicos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalExamProf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalPRODEPconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalPRODEPconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalPRODEPenconsInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalPRODEPenconsResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalPRODEPformInteg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalPRODEPformResp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalRespCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalRespLab($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalRespPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereSubtotalRespProd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_19 whereUserType($value)
 */
	class UsersResponseForm3_19 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_2
 * @property string $r1
 * @property string $r2
 * @property string $r3
 * @property string $cant1
 * @property string $cant2
 * @property string $cant3
 * @property string $obs3_2_1
 * @property string $obs3_2_2
 * @property string $obs3_2_3
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_2
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_2> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereCant1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereCant2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereCant3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereComision32($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereObs321($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereObs322($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereObs323($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereR1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereR2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereR3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereScore32($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_2 whereUserType($value)
 */
	class UsersResponseForm3_2 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_3
 * @property string $rc1
 * @property string $rc2
 * @property string $rc3
 * @property string $rc4
 * @property string $stotal1
 * @property string $stotal2
 * @property string $stotal3
 * @property string $stotal4
 * @property string $obs3_3_1
 * @property string $obs3_3_2
 * @property string $obs3_3_3
 * @property string $obs3_3_4
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_3
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_3> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereComision33($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereObs331($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereObs332($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereObs333($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereObs334($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereRc1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereRc2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereRc3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereRc4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereScore33($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereStotal1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereStotal2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereStotal3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereStotal4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_3 whereUserType($value)
 */
	class UsersResponseForm3_3 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_4
 * @property string $cantInternacional
 * @property string $cantNacional
 * @property string $cantidadRegional
 * @property string $cantPreparacion
 * @property string $cantInternacional2
 * @property string $cantNacional2
 * @property string $cantidadRegional2
 * @property string $cantPreparacion2
 * @property string $obs3_4_1
 * @property string $obs3_4_2
 * @property string $obs3_4_3
 * @property string $obs3_4_4
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_4
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_4> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereCantInternacional($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereCantInternacional2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereCantNacional($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereCantNacional2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereCantPreparacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereCantPreparacion2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereCantidadRegional($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereCantidadRegional2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereComision34($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereObs341($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereObs342($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereObs343($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereObs344($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereScore34($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_4 whereUserType($value)
 */
	class UsersResponseForm3_4 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_5
 * @property string $cantDA
 * @property string $cantCAAC
 * @property string $cantDA2
 * @property string $cantCAAC2
 * @property string $obs3_5_1
 * @property string $obs3_5_2
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_5
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_5> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereCantCAAC($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereCantCAAC2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereCantDA($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereCantDA2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereComision35($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereObs351($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereObs352($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereScore35($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_5 whereUserType($value)
 */
	class UsersResponseForm3_5 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_6
 * @property string $puntaje3_6
 * @property string $puntajeHoras3_6
 * @property string $obs3_6_1
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_6
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_6> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 whereComision36($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 whereObs361($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 wherePuntaje36($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 wherePuntajeHoras36($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 whereScore36($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_6 whereUserType($value)
 */
	class UsersResponseForm3_6 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_7
 * @property string $puntajeHoras3_7
 * @property string $puntaje3_7
 * @property string $obs3_7_1
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_7
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_7> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 whereComision37($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 whereObs371($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 wherePuntaje37($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 wherePuntajeHoras37($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 whereScore37($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_7 whereUserType($value)
 */
	class UsersResponseForm3_7 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_8
 * @property string $puntaje3_8
 * @property string $puntajeHoras3_8
 * @property string $obs3_8_1
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_8
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_8> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 whereComision38($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 whereObs381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 wherePuntaje38($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 wherePuntajeHoras38($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 whereScore38($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8 whereUserType($value)
 */
	class UsersResponseForm3_8 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_8_1
 * @property string $puntaje3_8_1
 * @property string $puntajeHoras3_8_1
 * @property string $obs3_8_1_1
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_8_1
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_8_1> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 whereComision381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 whereObs3811($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 wherePuntaje381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 wherePuntajeHoras381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 whereScore381($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_8_1 whereUserType($value)
 */
	class UsersResponseForm3_8_1 extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $email
 * @property string $score3_9
 * @property string $puntaje3_9_1
 * @property string $puntaje3_9_2
 * @property string $puntaje3_9_3
 * @property string $puntaje3_9_4
 * @property string $puntaje3_9_5
 * @property string $puntaje3_9_6
 * @property string $puntaje3_9_7
 * @property string $puntaje3_9_8
 * @property string $puntaje3_9_9
 * @property string $puntaje3_9_10
 * @property string $puntaje3_9_11
 * @property string $puntaje3_9_12
 * @property string $puntaje3_9_13
 * @property string $puntaje3_9_14
 * @property string $puntaje3_9_15
 * @property string $puntaje3_9_16
 * @property string $puntaje3_9_17
 * @property string $tutorias1
 * @property string $tutorias2
 * @property string $tutorias3
 * @property string $tutorias4
 * @property string $tutorias5
 * @property string $tutorias6
 * @property string $tutorias7
 * @property string $tutorias8
 * @property string $tutorias9
 * @property string $tutorias10
 * @property string $tutorias11
 * @property string $tutorias12
 * @property string $tutorias13
 * @property string $tutorias14
 * @property string $tutorias15
 * @property string $tutorias16
 * @property string $tutorias17
 * @property string $obs3_9_1
 * @property string $obs3_9_2
 * @property string $obs3_9_3
 * @property string $obs3_9_4
 * @property string $obs3_9_5
 * @property string $obs3_9_6
 * @property string $obs3_9_7
 * @property string $obs3_9_8
 * @property string $obs3_9_9
 * @property string $obs3_9_10
 * @property string $obs3_9_11
 * @property string $obs3_9_12
 * @property string $obs3_9_13
 * @property string $obs3_9_14
 * @property string $obs3_9_15
 * @property string $obs3_9_16
 * @property string $obs3_9_17
 * @property string|null $user_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $form_type
 * @property string|null $comision3_9
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DictaminatorsResponseForm3_9> $dictaminadores
 * @property-read int|null $dictaminadores_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 latest()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereComision39($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereFormType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs391($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs3910($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs3911($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs3912($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs3913($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs3914($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs3915($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs3916($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs3917($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs392($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs393($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs394($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs395($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs396($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs397($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs398($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereObs399($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje391($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje3910($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje3911($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje3912($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje3913($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje3914($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje3915($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje3916($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje3917($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje392($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje393($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje394($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje395($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje396($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje397($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje398($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 wherePuntaje399($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereScore39($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias10($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias11($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias12($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias13($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias14($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias15($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias16($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias17($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias5($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias6($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias7($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias8($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereTutorias9($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsersResponseForm3_9 whereUserType($value)
 */
	class UsersResponseForm3_9 extends \Eloquent {}
}

