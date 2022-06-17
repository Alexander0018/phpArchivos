<?php

if (isset($_GET["quien"])) {
    # code...
    $quien= $_GET["quien"];
    print $quien;

    if ($quien=="perro") {
        # code...
        header("location:Formularioperro.php");
    }
    else {
        # code...
        header("location:Formulariogato.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios con Header</title>
</head>
<body>
    <form action="Formulariosheader.php" method="GET">

<label> !Qué soy?</label>
<input type="radio" name="quien" id="perro" value="perro"><label for="perro">Perro</label>
<input type="radio" name="quien" id="gato" value="gato"><label for="gato">Gato</label>
<input type="submit" value="Enviar">
 </form>

</body>
</html>