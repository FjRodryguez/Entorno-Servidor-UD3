<?php
declare(strict_types=1);
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */

//General
$data = [];

if (!empty($_POST)) {
    //Comprobar
    $errors = checkForm($_POST);
    $data['input_numeros'] = filter_var($_POST['numeros'], FILTER_SANITIZE_SPECIAL_CHARS);
    if (count($errors) > 0) {
        $data['errors'] = $errors;
    } else {
        //Procesamos
        $aux = explode(',', $_POST['numeros']);
        $data['ordenados'] = quickSort($aux);
    }
}
function quickSort($array) {
    $length = count($array);

    if ($length <= 1) {
        return $array;
    } else {
        $pivot = $array[0];
        $left = $right = array();

        for ($i = 1; $i < $length; $i++) {
            if ($array[$i] < $pivot) {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }
        }

        return array_merge(
            quickSort($left),
            array($pivot),
            quickSort($right)
        );
    }
}
function checkForm(array $data): array{
    $errors = [];

    if (empty($data['numeros'])) {
        $errors['numeros'] = 'Inserte un valor en este campo';
    } else {
        $aux = explode(',', $data['numeros']);
        $i = 0;
        $hayError = false;
        while ($i < count($aux) && !$hayError) {
            if (!is_numeric($aux[$i])) {
                $hayError = true;
            }
            $i++;
        }
        if ($hayError) {
            $errors['numeros'] = 'Sólo se permiten números y comas.';
        }
    }
    return $errors;
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/iterativas02.view.php';
include 'views/templates/footer.php';
