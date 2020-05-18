<?php
include_once 'class.php';
include_once 'dividir.php';
include_once 'sumar.php';
include_once 'restar.php';
include_once 'multimplicar.php';

/**
 * summary
 */
class Sumar extends Valores
{
    /**
     * summary
     */
    public function __construct()
    {

    }
    public function suma()
    {
        $this->resultado = $this->valor1 + $this->valor2;
        return $this->resultado;

    }
}
