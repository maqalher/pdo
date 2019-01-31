<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$up = $con->prepare("UPDATE personas SET nombre = :nombre, apellido = :ape WHERE id = :id ");
$up->bindparam(':nombre',$nombre);
$up->bindparam(':ape',$apellido);
$up->bindparam(':id',$id);

if($up->execute()){
  echo "edito";
}else {
  echo "no edito";
}

?>
