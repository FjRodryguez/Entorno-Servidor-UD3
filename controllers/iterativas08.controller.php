<?php
declare(strict_types=1);

$data = [];

if(!empty($_POST))
{
    $data['errors'] = checkErrors($_POST['texto']);
    $data['input']['texto'] = filter_var($_POST['texto'], FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($data['errors']))
    {
        $datos = json_decode($_POST['texto'], true);
        $resultado = [];
        $suspensosAlumno = [];
        foreach($datos as $asignatura => $alumnos){
            $datosAsignatura = [];
            $sumatorio = 0;
            $suspensos = 0;
            $aprobados = 0;
            $max = [];
            $max['alumno'] = 'nobody';
            $max['nota'] = -1;

            $min = [];
            $min['alumno'] = 'nobody';
            $min['nota'] = 11;
            foreach($alumnos as $alumno => $nota){
                if(!isset($suspensosAlumno[$alumno])){
                    $suspensosAlumno[$alumno] = 0;
                }
                $sumatorio += $nota;
                if($nota < 5){
                    $suspensos++;
                    $suspensosAlumno[$alumno]++;
                }
                else{
                    $aprobados++;
                }
                //Buscamos alumno con nota máxima
                if($max['nota'] < $nota){
                    $max['alumno'] = $alumno;
                    $max['nota'] = $nota;
                }
                //Buscamos alumno con nota mínima
                if($min['nota'] > $nota){
                    $min['alumno'] = $alumno;
                    $min['nota'] = $nota;
                }
            }
            $datosAsignatura['media'] = !empty($alumnos) ? $sumatorio / count($alumnos) : '-';
            $datosAsignatura['suspensos'] = $suspensos;
            $datosAsignatura['aprobados'] = $aprobados;
            if(!empty($alumnos)) {
                $datosAsignatura['max'] = $max;
                $datosAsignatura['min'] = $min;
            }
            else{
                $datosAsignatura['max'] = ['alumno' => '-', 'nota' => '-'];
                $datosAsignatura['min'] = ['alumno' => '-', 'nota' => '-'];
            }
            $resultado[$asignatura] = $datosAsignatura;
        }
        $data['resultado'] = $resultado;
        $data['listados'] = divideSuspensosArray($suspensosAlumno);
    }
}


function divideSuspensosArray(array $alumnos) : array {

    $apruebanTodo = [];
    $hanSuspendido = [];
    $noPromocionan = [];

    foreach ($alumnos as $alumno => $suspensos) {
        if($suspensos === 0){
            $apruebanTodo[] = $alumno;
        }else{
            $hanSuspendido[] = $alumno;
            if($suspensos > 1){
                $noPromocionan[] = $alumno;
            }
        }
    }
    return [
        'apruebanTodo' => $apruebanTodo,
        'hanSuspendido' => $hanSuspendido,
        'noPromocionan' => $noPromocionan
    ];
}

function checkErrors(string $texto) : array
{
    $errors = [];
    if(empty($texto))
    {
        $errors['texto'][] = 'Inserte un json a analizar';
    }
    else{
        $datos = json_decode($texto, true);
        if(is_null($datos))
        {
            $errors['texto'][] = 'El texto introducido no es un JSON bien formado';
        }
        else
        {
            if(!is_array($datos)){
                $errors['texto'][] = 'El Json no contiene un array de materias';
            }
            else{
                foreach($datos as $asignatura => $alumnos)
                {
                    if(!is_string($asignatura) || mb_strlen(trim($asignatura)) < 1){
                        $errors['texto'][] = "'$asignatura' no es un nombre de asignatura válido";
                    }
                    if(!is_array($alumnos)){
                        $errors['texto'][] = "'$asignatura' no contiene un array de alumnos";
                    }
                    else{
                        foreach($alumnos as $alumno => $nota){
                            if(!is_string($alumno) || mb_strlen(trim($alumno)) < 1){
                                $errors['texto'][] = "El alumno '$alumno' de la asignatura '$asignatura' no es un nombre de alumno válido";
                            }
                            if(!is_numeric($nota)){
                                $errors['texto'][] = "La nota '$nota' del alumno '$alumno' en la asignatura '$asignatura' no es un número";
                            }
                            else if($nota < 0 || $nota > 10)
                            {
                                $errors['texto'][] = "La nota '$nota' del alumno '$alumno' en la asignatura '$asignatura' no tiene un valor entre 0 y 10";
                            }
                        }
                    }
                }
            }
        }
    }
    return $errors;
}

include 'views/templates/header.php';
include 'views/iterativas08.view.php';
include 'views/templates/footer.php';