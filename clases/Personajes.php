<?php

class Personajes
{
    protected $id;
    public $nombre_personaje;
    public $raza;
    public $clase;
    public $nivel;

    public function __construct($nombre_personaje, $raza, $clase, $nivel, $id=null)
    {
        $this->id = $id;
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

    public function setIdPJ($id)
    {
        $this->id = $id;
    }

    public function getIdPJ()
    {
        return $this->id;
    }

    public function getRaza()
    {
        return $this->raza;
    }

    public function getClase()
    {
        return $this->clase;
    }

    public function getNivel()
    {
        return $this->nivel;
    }
}