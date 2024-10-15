<?php
declare(strict_types=1);
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */

//General
$data['titulo'] = "Ejercicios iterativos";


$data = [];

if(!empty($_POST)){
    //Esta manera vale igual que la otra, pero solo se utiliza para las variables con GET POST o PUT
    $data['errors'] = checkForm($_POST);
    $data['numero'] = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($data['errors'])){
        $numeros = range(2, (int)$data['numero']);
        $multiplos = [];
        //Optimización: $i ** 2, $j * $i, if(!in_array())
            for ($i = 2; $i ** 2 <= (int)$data['numero']; $i++){
                if(!in_array($i, $multiplos)) {
                    for ($j = $i; $j * $i < (int)$data['numero']; $j++) {
                        $multiplos[] = $i * $j;
                    }
                }
            }
            $data['resultado'] = array_diff($numeros, $multiplos);
        }
    }


function checkForm(array $data) : array{
    $errors = [];

    if(empty($data['numero'])){
        $errors['numero'] = 'Inserte un valor en este campo';
    } else if(!filter_var($data['numero'], FILTER_VALIDATE_INT)){
        $errors['numero'] = 'Sólo se permiten números enteros';
    } else if((int)$data['numero'] < 2){
        $errors['numero'] = 'El número insertado debe ser mayor o igaul a 2';
    }
    return $errors;
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/iterativas06.view.php';
include 'views/templates/footer.php';