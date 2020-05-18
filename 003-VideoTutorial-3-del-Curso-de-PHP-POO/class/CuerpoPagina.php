<?php

// ============================================
class CuerpoPagina
{
    // Atributo de tipo matriz
    private $lineas = array();

    public function inicializa_lineas($l)
    {
        $this->lineas[] = $l;
    }

    public function graficar()
    {
        //  variable que contiene el tamaño del arreglo
        $arrlength = count($this->lineas);
        // recorremos  la matriz e imprimimos su valor
        for ($i = 0; $i < $arrlength; $i++) {

            echo "<p> {$this->lineas[$i]} </p>";

        }
    }
}
