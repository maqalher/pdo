<?php
include 'conexion.php';

$id = $_GET['id'];

$sel = $con->prepare("SELECT * FROM personas WHERE id = ? ");
$sel->execute(array($id)); // si lleva mas parametros se separan por "," array($id, $name)

if($f = $sel->fetch()){}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="actualizar.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <input type="text" name="nombre" value="<?php echo $f['nombre'] ?>" placeholder="Nombre" required>
      <input type="text" name="apellido" value="<?php echo $f['apellido'] ?>" placeholder="Apellido" required>
      <input type="submit" name="" value="editar">
    </form>
  </body>
</html>
