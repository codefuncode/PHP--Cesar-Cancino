<?php
// ============================================
class PiePagina
{
    private $texto;

    public function __construct($t)
    {
        $this->texto = $t;
    }

    public function graficar()
    {
        echo "<hr/> <address> {$this->texto} </address>";
    }
}

// ============================================
