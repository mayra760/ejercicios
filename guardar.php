<?php
include 'clase.php';

$documento=$_GET['documento'];
$nombre=$_GET['nombre'];
$fecha_nac=$_GET['fecha_nac'];
$foto=$_GET['foto'];
$contraseña=$_GET['contraseña'];

Usuario::registro($documento, $nombre, $fecha_nac, $foto, $contraseña);    