<?php

// ===================================================
//  Incluimos los archivos de las otras cases
include_once 'CabeceraPagina.php';
include_once 'CuerpoPagina.php';
include_once 'PiePagina.php';

// ===================================================
//  Instancias de una case externa dentro  de otra clase
//  Es mejor con herencias  pero entender esto ayuda
// ===================================================
class Pagina
{
    // Atributos
    private $cabecera;
    private $cuerpo;
    private $pie;
//  Constructor
    public function __construct($texto_cabecera, $texto_cuerpo)
    {
        // Instancias  y parámetros de los constructores
        // de las cases externas
        $this->cabecera = new CabeceraPagina($texto_cabecera);
        $this->cuerpo   = new CuerpoPagina();
        $this->pie      = new PiePagina($texto_cuerpo);
    }

    public function iniciar_cuero($v)
    {
        // Iniciamos método externo  de un
        // método externo
        $this->cuerpo->inicializa_lineas($v);
    }

    public function vista()
    {
        // Ejecutamos los métodos  de las vistas
        // cada uno llama a su propio método al alojado
        // en su propia case
        $this->cabecera->graficar();
        $this->cuerpo->graficar();
        $this->pie->graficar();

    }
}
// ===================================================
