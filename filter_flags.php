<?php



$edad= 80;
$min= 1;
$max= 120;


if (filter_var($edad,FILTER_VALIDATE_INT, array("options" => array("min_range"=> $min, "max_range"=> $max)))) {
    print "La edad de  ".$edad." es correcta";
} else {
    print "La edad de  ".$edad." es incorrecta";
}

print "<hr>";
$ip= "2002:GHYTG:&&%$$$$:53535";
if (filter_var($ip,FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
    print "La ip ".$ip." es correcta";
} else {
    print "La ip ".$ip." es incorrecta";
}

print "<hr>";
$url= "http://www.pacoarce.com?id=90";
if (filter_var($url,FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
    print "La ip ".$url." es correcta, si tiene un query";
} else {
    print "La ip ".$url." es incorrecta sino tiene query";
}

print "<hr>";


$cadena= "<h1>Hola,óiñññ??ää cara de bola</h1>";
$limpia= filter_var(htmlspecialchars($cadena), FILTER_FLAG_STRIP_HIGH);

print "la cadena limpia es:  ".$limpia;
print "<hr>";
?>