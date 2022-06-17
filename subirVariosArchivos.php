<?php
if (isset($_FILES["archivos"])) {
   $msg= "";
   for ($i=0; $i < count($_FILES["archivos"]["name"]) ; $i++) { 
       $archivo= $_FILES["archivos"];
       $nombre= $archivo["name"][$i];
       $tmp= $archivo["tmp_name"][$i];
       $tipo= $archivo["type"][$i];
       $size= $archivo["size"][$i];
       $dim= getimagesize($tmp);
       $w= $dim[0];
       $h= $dim[1];
       $carpeta= "imágenes/";

       if ($tipo=="image/jpeg" || $tipo== "image/jpg" || $tipo=="image/png" || $tipo=="image/gif") {
          move_uploaded_file($tmp, $carpeta.$nombre);
          print "<p style='color:blue'>Se subió el archivo".$nombre." (".$w."x".$h.")</p>";
       } else {
         print "<p style='color:red'>No se pudo subir el archivo".$nombre."</p>";
       }
       
   }
}



?>


<form method="post" action="subirVariosArchivos.php" enctype="multipart/form-data">

subir una o varias Imagenes:<input type="file" name="archivos[]" multiple>
<input type="submit" value="Subir archivos">



</form>