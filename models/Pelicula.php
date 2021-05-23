<?php
require_once("../config/Conexion.php");
class Pelicula extends Conexion{

    public function getPeliculas(){
        $conexion = parent::conectar();
        parent::setNames();

        $sql = "SELECT * FROM peliculas WHERE estatus = 'Activa'";
        $statement = $conexion->prepare($sql);
        $statement->execute();

        return $resultado = $statement->fetchAll();
    }

}

?>