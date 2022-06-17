<?php

if (isset($_GET["q"])) {
   $q= $_GET["q"];

   $xmlDoc= new DOMDocument();
   $xmlDoc-> load("discos.xml");
    
   $x= $xmlDoc->getElementsByTagName("ARTIST");

   for ($i=0; $i<$x->length ; $i++) { 
       if ($x->item($i)->nodeType==1) {
           $artista= $x-> item($i)->childNodes->item(0)->nodeValue;
           if ($q==$artista) {
               $y= $x-> item($i)->parentNode;
               break;
           }
       }
   }
}

$cd= $y-> childNodes;

for ($i=0; $i < $cd->length; $i++) { 
    if ($cd->item($i)->nodeType==1) {
        print "<b>".$cd->item($i)-> nodeName. ":</b>";
        print $cd->item($i)->childNodes->item(0)->nodeValue;
        print "<br>";
    }
}
?>