<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentencias Break and Continue</title>
</head>
<body>
    <?php
    
    for($i=0; $i<10; $i++){

        if($i==7){

            print "<p>Este es el numero magico:".$i;
            break;
        }
        print  "<p>el valor de i es: ".$i;
    }
    print "<p>Fin del ciclo</p>";
    for($i=0; $i<10; $i++){

     if($i%2==0) continue;
     print  "<p>el valor de i es: ".$i;



    }
    print "<p>Fin del ciclo</p>";

    for($i=0; ; $i++){

        if($i>10) break;
        print  "<p>el valor de i es: ".$i;
   
   
   
       }
       print "<p>Fin del ciclo</p>";
    ?>
</body>
</html>