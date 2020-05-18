<?php
include_once 'class.php';
include_once 'dividir.php';
include_once 'sumar.php';
include_once 'restar.php';
include_once 'multimplicar.php';

/**
 * summary
 */
class Multiplicar extends Restar
{
    /**
     * summary
     */
    public function __construct()
    {

    }
    public function multiplica()
    {
        $this->resultado = $this->valor1 * $this->valor2;
        return $this->resultado;

    }
}
