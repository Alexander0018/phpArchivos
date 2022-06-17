<?php
$url= "nombre=Ernesto&apellido=De+la+rosa";
$nombre= "";
foreach (explode("&", $url) as $cadena ) {

    $p = explode("=", $cadena);

    if ($p) {
        printf("El valor del parametro \"%s\" es \"%s\" <br>", urldecode($p[0]), urldecode($p[1]));
        $nombre.= urldecode($p[1])." ";

}
}
print urlencode(trim($nombre));
?>