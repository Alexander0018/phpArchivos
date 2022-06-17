<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
</head>
<body>
    <?php
    if (isset($_GET["error"])) {
        print "Fin de la sesión por tiempo transcurrido";
    } else {
        # code...
    }
    
    
    ?>
    <table>

  <form action="acesso.php" method="POST">

  <tr>

  <td>Usuario:</td>
  <td><input type="text" name="usuario"></td> 

  </tr>
  <tr>

  <td>Clave de aceeso:</td>
  <td><input type="password" name="clave"></td> 

  </tr>
  <tr>

  <td>&nbsp;</td>
  <td><input type="submit" value="Enviar"></td> 

  </tr>
  </form>


    </table>
</body>
</html>