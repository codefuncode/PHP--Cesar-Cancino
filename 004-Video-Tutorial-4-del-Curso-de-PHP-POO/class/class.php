<?php

/**
 * summary
 */
class Valores
{
    protected $valor1;
    protected $valor2;
    protected $resultado;

    public function __construct()
    {

    }
    public function cargaValor1($value)
    {
        $this->valor1 = $value;
    }

    public function cargaValor2($value)
    {
        $this->valor2 = $value;

    }

}
