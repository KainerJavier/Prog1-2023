<?php

class Personajes
{
    public $nombre_personaje;
    public $raza;
    public $clase;
    public $nivel;

    public function __construct($nombre_personaje, $raza, $clase, $nivel)
    {
        $this->nombre_personaje = $nombre_personaje;
        $this->raza = $raza;
        $this->clase = $clase;
        $this->nivel = $nivel;
    }

    public function getNombrePersonaje()
    {
        return "$this->nombre_personaje";
    }

    public function setDatosPersonaje()
    {
        $this->nombre_personaje = $nombre_personaje;
        $this->raza = $raza;
        $this->clase = $clase;
        $this->nivel = $nivel;
    }
}