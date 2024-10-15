<?php

namespace TestClase\Daw2\Pruebas;

use MongoDB\Driver\Exception\InvalidArgumentException;
use TestClase\Daw2\Clases\Categoria;
use TestClase\Daw2\Clases\Proveedor;

class Producto{

    public function __construct(private string $codigo, private string $nombre, private string $descripcion, private Proveedor $proveedor, private Categoria $categoria,
    private float $coste, private float $margen, private int $stock, private float $iva, private ?array $productosRelacionados) {
        if(mb_strlen(trim($codigo)) > 10){
            throw new \Exception('El codigo debe tener 10 caracteres como máximo');
        }
        if(mb_strlen(trim($nombre)) === 0){
            throw new \Exception('El nombre del producto no puede estar vacio');
        }
    }

    public function getCodigo(): string
    {
        return $this->codigo;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function getProveedor(): string
    {
        return $this->proveedor;
    }

    public function getCategoria(): Categoria
    {
        return $this->categoria;
    }

    public function getCoste(): float
    {
        return $this->coste;
    }

    public function getMargen(): float
    {
        return $this->margen;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function getIva(): float
    {
        return $this->iva;
    }

    public function getProductosRelacionados(): array
    {
        return $this->productosRelacionados;
    }

    public function getPrecioVenta($conIva = true) : float{

    }

    public function descontarStock($cuanto) : int
    {
        if($this->stock - $cuanto < 0) {
            throw new \Exception('No se puede descontar tanto stock');
        }else{
            $this->stock -= $cuanto;
        }
        return $this->stock;
    }

    public function agregarStock($cuanto) : int
    {
        $this->stock += $cuanto;
        return $this->stock;
    }
}