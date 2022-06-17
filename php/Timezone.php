<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas | Timezone</title>
</head>
<body>
    <?php
    
    //print phpinfo();
    print date("D, d M Y H:i:s")."<br>";
    //date_default_timezone_set("America/Mexico_City");
    ini_set("date.timezone", "America/Mexico_City");
    print date("D, d M Y H:i:s");
    
    ?>
</body>
</html>m