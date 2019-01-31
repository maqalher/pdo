<?php

include 'conexion.php';

//$id = $_GET['id'];

$del = $con->prepare('DELETE FROM personas WHERE id = :id');
$del->bindparam(':id', $id);

if($del->execute()){
  echo "elimino";
}else {
  echo "no elimino";
}


?>
