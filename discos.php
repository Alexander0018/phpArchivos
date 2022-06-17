<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discos de ayer y hoy</title>
    <script>
        window.onload= function () {
            discosCatalogo(); 
            document.getElementById("cds").onchange= discoDetalle;
        }
     
     function discoDetalle(e) {
         q= this.value;
         //alert(q);
         if (q=="") {
             document.getElementById("detalle").innerHTML= "";
         }
         else{
             xmlhttp= new XMLHttpRequest();
             xmlhttp.onreadystatechange= function () {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("detalle").innerHTML= this.responseText;
                }
            }
            xmlhttp.open("GET", "discosDetalle.php?q=" + q, false)
            xmlhttp.send();
         }
     }

        function discosCatalogo() {
            var xmlhttp= new XMLHttpRequest();

            xmlhttp.onreadystatechange= function () {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("salida").innerHTML= this.responseText;
                }
            }
            xmlhttp.open("GET", "discosCatalogo.php", false)
            xmlhttp.send();
        }

    </script>
</head>
<body>
   <div id="salida"></div>
   <br>
   <div id="detalle"></div>
</body>
</html>