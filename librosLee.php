<?php

$path= "libros.xml";

if (!file_exists($path)) {
   exit("El archivo no existe");
}

$xml= XMLReader::open($path);

echo "<html><body><table border=1>";
echo "<tr><th>Titulo</th><th>Autor</th><th>Editorial</th><th>Precio</th><th>Fecha</th><th>Paginas</th></tr>";

while ($xml->read()) {
    if ($xml->nodeType== XMLReader::ELEMENT && $xml->name== "libro") {
        $nombre= $xml->getAttribute("nombre");
        $autor= $xml->getAttribute("autor");
        $editorial= $xml->getAttribute("editorial");
        $precio= $xml->getAttribute("precio");
        $fecha= $xml->getAttribute("fecha");
        $paginas= $xml->getAttribute("paginas");

        echo "<tr><td>".$nombre."</td><td>".$autor."</td><td>".$editorial."</td><td>".$precio."</td><td>".$fecha."</td><td>".$paginas."</td></tr>";
    }
}

echo "</table></body></html>";

$xml->close();
?>