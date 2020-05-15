<?php

// ===================================================
//  Incluimos los archivos de las otras cases
include_once 'CabeceraPagina.php';
include_once 'CuerpoPagina.php';
include_once 'PiePagina.php';

// ===================================================

// ===================================================
class Pagina
{
    private $cabecera;
    private $cuerpo;
    private $pie;

    public function __construct($texto_cabecera, $texto_cuerpo)
    {
        $this->cabecera = new CabeceraPagina($texto_cabecera);
        $this->cuerpo   = new CuerpoPagina();
        $this->pie      = new PiePagina($texto_cuerpo);
    }

    public function iniciar_cuero($v)
    {
        $this->cuerpo->inicializa_lineas($v);
    }

    public function vista()
    {
        $this->cabecera->graficar();
        $this->cuerpo->graficar();
        $this->pie->graficar();

    }
}
// ===================================================
