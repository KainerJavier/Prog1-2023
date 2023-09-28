<?php
require_once 'clases/Personajes.php';
require_once 'clases/RepositorioPJ.php';
class ControladorPJ
{
    public function crearPJ($nombre_personaje, $raza, $clase, $nivel)
    {
        $repo = new RepositorioPJ();
        $personaje = new Personaje($nombre_personaje, $raza, $clase, $nivel);
        $id = $repo->guardado($personaje);
        if ($id === false) {
            return [ false, "Error al crear el personaje" ];
        } else {
            $personaje->setId($id);
        }
    }
}