<?php

// ============================================
class CabeceraPagina
{
    private $texto;
    public function __construct($t)
    {
        $this->texto = $t;
    }

    public function graficar()
    {
        echo "<h1> {$this->texto} </h1>";
    }
}

// ============================================
