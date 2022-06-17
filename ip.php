<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getenv</title>
</head>
<body>
    <?php
    
    $ip= getenv('REMOTE_ADDR');

    print "Tu ip es: ".$ip."<br>";

    $navegador= getenv('HTTP_USER_AGENT');

    print "Tu navegador y sistema operativo es ".$navegador."<br>";
    
    
    
    ?>
</body>
</html>