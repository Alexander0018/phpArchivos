<?php


include "./conn.php";

$sql= "SELECT * FROM imagenes";

if ($r= mysqli_query($conn, $sql)) {
   while ($d= mysqli_fetch_assoc($r)) {
    $imagen= $d["imagen"];
    $nombre= $d["nombre"];
    $archivo= $nombre.".jpg";
    file_put_contents($archivo, $imagen);
    print "<img src='".$archivo."' />";
    print "<p>".$nombre."</p>";

   } 
    
} else {
    # code...
}




?>