<?php 

function pastel($costo,$sabor=array("limon")){


    return "<p>Esto es un pastel sabor ".join(",",$sabor).", Con un costo de $".$costo."</p>";
}
$sabores = array("fresa", "chocolate");
print pastel(25000,$sabores);
print pastel(2222);




?>