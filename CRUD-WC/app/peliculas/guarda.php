<?php

require '../config/database.php';

$nombre = $conn->real_escape_string($_POST['nombre']);
$descripcion =$conn->real_escape_string($_POST['descripcion']);
$genero = $conn->real_escape_string($_POST['genero']);
$lugar_trab = $conn->real_escape_string($_POST['lugar_trab']);
$experiencia =$conn->real_escape_string($_POST['experiencia']);
$salario = $conn->real_escape_string($_POST['salario']);
$jornada= $conn->real_escape_string($_POST['jornada']);

$sql = "INSERT INTO pelicula (nombre, descripcion, id_genero, lu_trabajo, exp, sal, jor)
VALUES ('$nombre', '$descripcion', $genero, $lugar_trab, $experiencia, $salario, $jornada NOW())";
if($conn->query($sql)){
    $id = $conn->insert_id;
}

header('Location: index.php');