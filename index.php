<?php 

require_once("config/Conexion.php");
$conexion = new Conexion();
$conexion->conectar();
$conexion->setNames();
?>