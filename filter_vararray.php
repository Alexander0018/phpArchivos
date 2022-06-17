<?php

$data= array(

'id' => "<p>Libros<7p>",
 'cantidad'=> "<h1>10</h1>",
 'version' => "1.1.0",
 'capitulos' => array('1'.'19'.'35'),
 'precio' => "100.00"





);


$filtros= array(

    'id' =>  FILTER_SANITIZE_ENCODED   ,
    'cantidad'=> array('filter' => FILTER_VALIDATE_INT, 'flags' => FILTER_FORCE_ARRAY,'options' => array('min_range'=>1, 'max_range'=>15)),
    'version' => FILTER_SANITIZE_ENCODED,
    'noExiste' => FILTER_VALIDATE_INT,
    'capitulos' => array('filter' => FILTER_VALIDATE_INT, 'flags' => FILTER_REQUIRE_SCALAR),
    'precio' => array('filter' => FILTER_VALIDATE_INT, 'flags' => FILTER_REQUIRE_ARRAY),


);


$misdatos= filter_var_array($data,$filtros);


var_dump($misdatos);



?>