<?php
/**
 * summary
 */
class Persona
{
    /**
     *  Crear los atributos
     */

    private $nombre_persona = array();
    // protected $color_pelo;

    //  Crear los metodos de la case
    public function __construct()
    {

    }

    public function inicializar($nom)
    {
        $this->nombre = $nom;
    }
    public function listar_nombre()
    {
        // return count($this->nombre_persona);
        return $this->nombre;
    }

}

$persona = new Persona();
