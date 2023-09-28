<?php

require_once 'Personajes.php'

class RepositorioPJ
{
    public function guardar(Usuario $personaje)
    {
        $q = "INSERT INTO personajes (nombre_personaje, raza, clase, nivel) ";
        $q.= "VALUES (?, ? , ? , ?)";
        $query = self::$conexion->prepare($q);
        $nombre_personaje = $personaje->getNombrePersonaje();
        $raza = $personaje->getRaza();
        $clase = $personaje->getClase();
        $nivel = $personaje->getNivel();
        $query->blind_param(
            "ssss",
            $nombre_personaje,
            $raza,
            $clase,
            $nivel
        );
        if ($query->execute()) {
            return self::$conexion->insert_id;
        } else {
            return false;
        }
    }
}