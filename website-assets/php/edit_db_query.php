<?php

use Conexion\Conexion;

require 'vendor/autoload.php';
require 'conexion_pruebas.php';

date_default_timezone_set('America/Mexico_City');
$conexion = new  Conexion();
$query = $conexion->query('SELECT * FROM contacto', []);


if($query['count'] > 0){

    echo json_encode($query['data']);
    
}
