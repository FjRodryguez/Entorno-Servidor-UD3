<?php
use \TestClase\Daw2\Clases\Categoria;

require 'vendor/autoload.php';

$categoria = new Categoria("Electrónica");
$consolas = new Categoria("Consolas", $categoria);
$microsoft = new Categoria("Microsoft", $consolas);
$seriesx = new Categoria("Series X", $microsoft);
echo $categoria->getNombre();
echo "<br>";
echo $seriesx->getFullName();