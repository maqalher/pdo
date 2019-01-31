<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>PDO</title>
  </head>
  <body>
    <form class="" action="guardar.php" method="post"  >
      <input type="text" name="nombre" value="" placeholder="Nombre" required>
      <input type="text" name="apellido" value="" placeholder="Apelldio" required>
      <input type="submit" name="" value="Guardar">
    </form>

    <table>
      <th>Nombre</th>
      <th>Apellido</th>
      <th></th>
      <th></th>
      <?php
        include 'conexion.php';
        $sel = $con->prepare("SELECT * FROM personas");
        $sel->execute();
        while ($f = $sel->fetch()) { //$f es fila
        ?>
          <tr>
            <td><?php echo $f['nombre']; ?></td>
            <td><?php echo $f['apellido']; ?></td>
            <td><a href="editar.php?id=<?php echo $f['id']; ?>">editar</a></td>
            <td><a href="eliminar.php?id=<?php echo $f['id']; ?>">eliminar</a></td>
          </tr>
        <?php
        }
        $sel = null; //liberar consulta
        $con = null; //liberar conexion
      ?>
    </table>
  </body>
</html>
