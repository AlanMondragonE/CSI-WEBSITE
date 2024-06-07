<?php

use Conexion\Conexion;

require 'vendor/autoload.php';
require 'conexion.php';



date_default_timezone_set('America/Mexico_City');
$conexion = new Conexion();
$query = $conexion->query('SELECT NOMBRE, CORREO, TELEFONO, EMPRESA, PUESTO, INTERESES, COMENTARIO, FECHA FROM contacto WHERE URL = "https://inolab.com/expofarma-2024/"', []);

if($query['count'] > 0){

    echo json_encode($query['data']);
    
}