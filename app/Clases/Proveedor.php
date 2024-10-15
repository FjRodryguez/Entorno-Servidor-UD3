<?php

namespace TestClase\Daw2\Clases;

class Proveedor
{

    public function __construct(private string $cif, private string $codigo, private string $nombre, private string $direccion, private string $website, private string $pais,
    private string $email, private int $telefono)
    {
        if(self::checkCIF($cif)){
            throw new \Exception("El cif no es válido");
        }
        if(!is_null($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw  new \Exception("El email no es válido");
        }
        if(!is_null($website) && !filter_var($website, FILTER_VALIDATE_URL)){
            throw new \Exception("La url insertada no es válida");
        }
        if(!is_null($telefono) && !preg_match('/^[0-9]{10}$/', $telefono)){
            throw new \Exception("El teléfono insertado no es válido");
        }
    }

    private static function checkCIF(string $cif) : bool
    {
        return preg_match("/^[0-9]{8}([0-9]{7})$/", $cif);
    }
}