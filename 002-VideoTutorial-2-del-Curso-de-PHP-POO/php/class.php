<?php

class Pagina
{
    //==================
    //  Atributos
    protected $titulo;
    protected $posision;
    //==================
    // Este método pretende recibir una cadena de texto  y una letra
    // que identificara  para usarlo en los condicionales  y
    // establecer si el texto estará centrado o la derecha o la izquierda
    // Simplificando el uso   al implementarlo
    public function iniciar($t, $p)
    {
        if ($p == 'c') {

            $this->posision = 'center';

        } else if ($p == 'l') {

            $this->posision = 'left';

        } else if ($p == 'r') {

            $this->posision = 'right';
        }
        $this->titulo = $t;

    }
    //  Imprime los datos
    public function imprimir()
    {
        // vVriables para evitar errores de sintaxis al escribir
        // dentro del html
        $imprimir_posicion = $this->posision;
        $titulo_instancia  = $this->titulo;

        echo "<div class='' style='text-align: $imprimir_posicion'>";
        echo $titulo_instancia;
        echo '</div>';
    }
}
