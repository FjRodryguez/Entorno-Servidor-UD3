<?php
declare(strict_types=1);
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */

//General
$data['titulo'] = "Ejercicios iterativos";


$data = [];

if(!empty($_POST)){
    //Comprobar
    $errors = checkForm($_POST);
    $data['input_numeros'] = filter_var($_POST['numeros'], FILTER_SANITIZE_SPECIAL_CHARS);
    if(count($errors) > 0){
        $data['errors'] = $errors;
    }
    else{
        //Procesamos
        $aux = explode(',', $_POST['numeros']);
        $data['max'] = max($aux);
        $data['min'] = min($aux);
    }
    //si bien procesar

    //si mal enviar
}

function checkForm(array $data) : array
{
    $errors = [];

    if(empty($data['numeros'])){
        $errors['numeros'] = 'Inserte un valor en este campo';
    }
    else{
        $aux = explode(',', $data['numeros']);
        $i = 0;
        $hayError = false;
        while($i < count($aux) && !$hayError){
            if(!is_numeric($aux[$i])){
                $hayError = true;
            }
            $i++;
        }
        if($hayError){
            $errors['numeros'] = 'Sólo se permiten números y comas.';
        }
    }
    return $errors;
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/iterativas01.view.php';
include 'views/templates/footer.php';