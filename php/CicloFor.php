<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo For</title>
</head>
<body>
    <?php 
    print "<ul>";
    for($i=0; $i< 10; $i++){

    print "<li>El valor de i es ".$i."</li>";

    }
    print "</ul>";
    print "<ul>";
    for($i=10; $i> 0; $i--){

    print "<li>El valor de i es ".$i."</li>";
    print"</ul>";
    }
    
    
    ?>
</body>
</html>