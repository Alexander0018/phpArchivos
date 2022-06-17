<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato | unseralize</title>
</head>
<body>
    <?php
    
    class Objeto1
    {
        public $valor1;

    }
    class Objeto2
    {
        public $valor2;
    }
    
    $obj1= new Objeto1();
    $obj1->$valor1= "gato";
    
    $obj2= new Objeto2();
    $obj2->$valor2= "perro";

    $obj1serializado = serialize($obj1);
    $obj2serializado = serialize($obj2);

    //DESERIALIZAR
    //["allowed_classes"=> true] no acepta todas las clases
     $data= unserialize($obj1serializado, ["allowed_classes"=> true]);
     var_dump($data);
     print "<hr>";
     $data= unserialize($obj1serializado, ["allowed_classes"=> false]);
     var_dump($data);
     print "<hr>";
     $data= unserialize($obj1serializado, ["allowed_classes"=> ["Objeto2"]]);
     var_dump($data);
     print "<hr>";
     $data= unserialize($obj2serializado, ["allowed_classes"=> ["Objeto2"]]);
     var_dump($data);
    ?>
</body>
</html>