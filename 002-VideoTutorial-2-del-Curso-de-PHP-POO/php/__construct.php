<?php
class EscribeTitulo
{
    // =========================
    //  descarar los atributos
    public $titulo;
    public $posicion;
    // =========================

    // =================================================================
    // En el momento de la instancia pedirá parámetros  y se inicia
    // de inmediato, los parámetros son opcionales
    // =================================================================
    public function __construct($t, $p)
    {
        // =======================================
        // Condicional para pruebas en la al iniciar,
        // hace que el parámetro se asolo una letra
        // =======================================
        if ($p == 'c') {

            $this->posision = 'center';

        } else if ($p == 'l') {

            $this->posision = 'left';

        } else if ($p == 'r') {

            $this->posision = 'right';
        }

        $this->titulo = $t;

        // =======================================
    }

    // ==========================
    //  Método imprime los datos
    // ==========================
    public function imprime()
    {
        // Agrego vatriables
        $imprimir_posicion = $this->posicion;
        $titulo_instancia  = $this->titulo;

        echo "<div class='' style='text-align: $imprimir_posicion'>";
        echo $titulo_instancia;
        echo '</div>';
    }
}
