<?php

$xmlDoc= new DOMDocument();

$xmlDoc -> load("discos.xml");

$x= $xmlDoc-> getElementsByTagName("ARTIST");

$cds= array();

for ($i=0; $i < $x->length; $i++) { 
    //tipo 1 es de datos
    if ($x->item($i)-> nodeType==1) {

        $artista= $x-> item($i)-> childNodes->item(0)->nodeValue;
      array_push($cds, $artista);
    }
}
sort($cds);
print "<select id='cds'>";
for ($i=0; $i < count($cds); $i++) { 
    print "<option value='".$cds[$i]."'>";
    print $cds[$i];
    print "</option>";
}
print "</select>";
?>