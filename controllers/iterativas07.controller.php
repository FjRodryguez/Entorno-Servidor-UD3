<?php
declare(strict_types=1);
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */

//General
$data = [];
$data['titulo'] = "Ejercicios iterativos";

if(!empty($_GET['carton'])){
    $carton = [];
    do{
        $num = rand(1, 79);
        if(in_array($num, $carton)){
            $carton[] = $num;
        }
    }while(count($carton) === 24);

    sort($carton);
    $bolasSalieron[] = rand(1, 79);

}else{
    $carton = $_GET['carton'];

    $bolasSalieron = $_GET['bolasSalieron'];

    $bombo = array_diff(range(1, 79), $_GET['bolasSalieron']);

    $bolasSalieron[] = $bombo[array_rand($bombo)];

    $data['win'] = empty(array_diff($carton, $bolasSalieron));
}
$data['bolasSalieron'] = $bolasSalieron;
$data['carton'] = $carton;

$url = [
    'carton' => $carton,
    'bolasSalieron' => $bolasSalieron,
];

$data['url_txt'] = http_build_query($url);

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/iterativas07.view.php';
include 'views/templates/footer.php';