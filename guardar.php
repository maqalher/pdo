<?php
include 'conexion.php';

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];

 $ins = $con->prepare("INSERT INTO personas VALUES (DEFAULT,:nombre,:ape) "); //Como vamos agregar todo no es necesario hacer (id, nombre, apellido) lo que si es que debemos de verificar el orden correcto
$ins->bindparam(':nombre',$nombre);
$ins->bindparam(':ape',$apellido);// Hatsa aqui no nada hasta llegar al execute
if($ins->execute()){
    echo "guardo";
}else{
    echo "no guardo";
}


?>
