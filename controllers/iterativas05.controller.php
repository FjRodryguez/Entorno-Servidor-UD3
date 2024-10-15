<?php
declare(strict_types=1);

$data = array();

if(isset($_POST['enviar'])){
    $data['input_texto'] = filter_var($_POST['texto'], FILTER_SANITIZE_SPECIAL_CHARS);
    $data['errores'] = checkForm($_POST);
    if(count($data['errores']) == 0){
        $data['resultado'] = procesarTexto($_POST['texto']);
    }
}

function procesarTexto(string $txt) : array{
    $resultado = [];
    //https://davidwalsh.name/letters-regex
    $textoLimpio = trim(mb_strtolower(preg_replace('/[^\p{L}]+/u', ' ', $txt)));
    $arrayTexto = explode(" ", $textoLimpio);
    foreach ($arrayTexto as $texto) {
        if(!isset($resultado[$texto])){
            $resultado[$texto] = 1;
        }
        else{
            $resultado[$texto]++;
        }
    }
    arsort($resultado);
    return $resultado;
}

function checkForm(array $datos) : array{
    $errores = [];
    if(empty($datos['texto'])){
        $errores['texto'] = 'Este campo es obligatorio';
    }
    return $errores;
}

include 'views/templates/header.php';
include 'views/iterativas05.view.php';
include 'views/templates/footer.php';