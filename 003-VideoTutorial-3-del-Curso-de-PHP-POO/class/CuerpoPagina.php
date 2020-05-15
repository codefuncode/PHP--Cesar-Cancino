<?php

// ============================================
class CuerpoPagina
{
    private $lineas = array();

    public function inicializa_lineas($l)
    {
        $this->lineas[] = $l;
    }

    public function graficar()
    {
        $arrlength = count($this->lineas);

        for ($i = 0; $i < $arrlength; $i++) {

            echo "<p> {$this->lineas[$i]} </p>";

        }
    }
}
