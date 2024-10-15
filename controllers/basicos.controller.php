<?php
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */

//General
$data['titulo'] = "Ejercicios básicos";

//Ejercicio1
$data["div_titulo_ej1"] = "Ejercicio 1";
$data['ej1_x'] = 10;
$data['ej1_y'] = $data['ej1_x'] ** 2;

//Ejercicio2
$data["div_titulo_ej2"] = "Ejercicio 2";
$data['ej2_precio_hora'] = 20;
$data['ej2_horas_trabajadas'] = 40;
$data['ej2_resultado'] = $data['ej2_precio_hora'] * $data['ej2_horas_trabajadas'];

//Ejercicio3
$data["div_titulo_ej3"] = "Ejercicio 3";
$data['ej3_base'] = 5;
$data['ej3_altura'] = 8;
$data['ej3_area'] = ($data['ej3_base'] * $data['ej3_altura']) / 2;
$data['ej3_perimetro'] = $data['ej3_base'] * 2 +  $data['ej3_altura'] * 2;

//Ejercicio4
$data["div_titulo_ej4"] = "Ejercicio 4";
$data['ej4_nombre'] = "Fran";
$data['ej4_edad'] = 19;
$data['ej4_nota_media'] = 9.99;

//Ejercicio5
$data["div_titulo_ej5"] = "Ejercicio 5";
$data['ej5_precio_noche_temp_baja'] = 100;
$data['ej5_precio_noche_temp_alta'] = 200;
$data['ej5_noches_temp_baja'] = 4;
$data['ej5_noches_temp_alta'] = 9;
$data['ej5_total'] = $data['ej5_precio_noche_temp_baja'] * $data['ej5_noches_temp_baja'] + $data['ej5_precio_noche_temp_alta'] * $data['ej5_noches_temp_alta'];

// Ejercicio 6
$data["div_titulo_ej6"] = 'Ejercicio 6';
$data['nota'] = 7.8;
$data['texto_nota'] = getCualificacionText($data['nota']);
$data['color_nota'] = getColor($data['texto_nota']);

function getCualificacionText(int|float $num) : string
{
    if($num < 0 || $num > 10){
        throw new InvalidArgumentException("La nota debe tener un valor entre 0 y 10");
    }
    return match(true) {
        $num < 5 => 'suspenso',
        $num < 6 => 'aprobado',
        $num < 7 => 'bien',
        $num < 8.75 => 'notable',
        $num < 10 => 'sobresaliente',
        default => 'matrícula'
    };
}

function getColor(string $nota)
{
    return match($nota) {
        'suspenso' => 'danger',
        'aprobado' => 'warning',
        'bien', 'notable' => 'info',
        default => 'success'
    };
}

//Ejercicio7
$data["div_titulo_ej7"] = "Ejercicio 7";
$data['ej7_kilometros_hora'] = 120;
$data['ej7_metros_segundo'] = $data['ej7_kilometros_hora'] * 1000 / 3600;

//Ejercicio8
$data["div_titulo_ej8"] = "Ejercicio 8";
$data['ej8_numero'] = 324;
$data['ej8_centenas'] = $data['ej8_numero'] / 100;
$data['ej8_decenas'] = ($data['ej8_numero'] % 100) / 10;
$data['ej8_unidades'] = ($data['ej8_numero'] % 10);

//Ejercicio9
$data["div_titulo_ej9"] = "Ejercicio 9";
$data['ej9_cadena'] = "Hola buenas tardes";
$data['ej9_caracteres'] = mb_strlen($data['ej9_cadena']);
$data['ej9_palabras'] = str_word_count($data['ej9_cadena']);



/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/basicos.view.php';
include 'views/templates/footer.php';