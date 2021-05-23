<?php

session_start();

class Conexion{

    protected $conexion;
    public function conectar(){
        try {
            $this->conexion = new PDO("mysql:host=localhost;dbname=cineapp","root","12345678");
            echo "Conexion exitosa";
            return $this->conexion;
        } catch (PDOException $e) {
            echo $e->getMessage() . "</br>";
            die();
        }
    }

    public function setNames(){
        $this->conexion->query("SET_NAMES 'utf8'");
    }

    public function ruta(){
        return "http://localhost/cineapp/";
    }
}

?>