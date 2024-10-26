<?php
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */

//General
$data['titulo'] = "Ejercicios decision";

//Ejercicio1
$data["div_titulo_ej1"] = "Ejercicio 1";
$data['ej1_x'] = 10;
$data['ej1_y'] = 5;
$data['ej1_resultado'] = '';
if($data['ej1_x'] % $data['ej1_y'] == 0){
    $data['ej1_resultado'] = "Sí es divisible";
}else{
    $data['ej1_resultado'] = "No es divisible";
}

//Ejercicio2
$data["div_titulo_ej2"] = "Ejercicio 2";
$data['ej2_n1'] = 3;
$data['ej2_n2'] = 9;
$data['ej2_n3'] = 7;
if($data['ej2_n1'] > $data['ej2_n2'] && $data['ej2_n1'] > $data['ej2_n3']){
    $data['ej2_n1'] = "<strong>" . $data['ej2_n1'] . "</strong>";
}else if ($data['ej2_n2'] > $data['ej2_n1'] && $data['ej2_n2'] > $data['ej2_n3']){
    $data['ej2_n2'] = "<strong>" . $data['ej2_n2'] . "</strong>";
}else{
    $data['ej2_n3'] = "<strong>" . $data['ej2_n3'] . "</strong>";
}

// Ejercicio 3
$data["div_titulo_ej3"] = 'Ejercicio 3';
define('DURACION_DIA', 24 * 3600);
$data['ej3_input'] = 3671 *72;
$data['dias'] = intval($data['ej3_input'] / DURACION_DIA);
$data['horas'] = intval(($data['ej3_input'] % DURACION_DIA) / 3600);
$data['minutos'] = intval(($data['ej3_input'] % 3600) / 60);
$data['segundos'] = intval(($data['ej3_input'] % 60));


// Ejercicio 4
$data["div_titulo_ej4"] = 'Ejercicio 4';
$data['año'] = 1984;
$data['es_bisiesto'] = esBisiesto($data['año']);

function esBisiesto(int $year) : bool
{
    return ($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0);
}

// Ejercicio 5
//Opción 1
$data["div_titulo_ej5"] = 'Ejercicio 5';
$data['salario'] = 2800;
$data['descuento'] = calcularDescuento($data['salario']);
$data['neto'] = $data['salario'] - $data['descuento'];

//Opción 2
$ej6Sueldo = $data['salario'];
$descuento = descuentoTramo($ej6Sueldo, 0, 1000, 0.1) + descuentoTramo($ej6Sueldo, 1000, 2000, 0.15) + descuentoTramo($ej6Sueldo, 2000, INF, 0.18);
$data['ej6_bruto'] = $ej6Sueldo;
$data['ej6_neto'] = $ej6Sueldo - $descuento;
$data['ej6_descuento'] = $descuento;

//Común
$data['mayor_media'] = $data['neto'] > 2000;

function descuentoTramo(float $sueldoBruto, float $min, float $max, float $porc) : float{
    if($sueldoBruto > $min){
        if($sueldoBruto > $max){
            $dineroAplicar = $max - $min;
        }
        else{
            $dineroAplicar = $sueldoBruto - $min;
        }
        return $dineroAplicar * $porc;
    }
    else{
        return 0;
    }
}

function calcularDescuento(float $salar) : float{
    if($salar > 0){
        $descuento = $salar * 0.1;
        if($salar - 1000 > 0){
            $descuento += ($salar - 1000) * 0.05;
        }
        if ($salar - 2000 > 0){
            $descuento += ($salar - 2000) * 0.03;
        }
        return $descuento;
    }
    else{
        return 0;
    }
}

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
if(isset($_GET["bebida"])) {
    $data["bebida"] = $_GET["bebida"];
    $data["mensaje"] = comprobarBebida($data["bebida"]);
}

function comprobarBebida($bebida){
    switch ($bebida) {
        case 'Marcilla':
        case 'Bonka':
            return "Café";
            break;
        case 'Coca-Cola':
        case 'Kas':
        case 'Pepsi':
            return "Refresco";
            break;
        case 'Mondariz':
        case 'Cabreiroá':
        case 'Sousas':
            return "Agua";
            break;
        default:
            return "Bebida no válida";
            break;
    }
}




/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/decision.view.php';
include 'views/templates/footer.php';