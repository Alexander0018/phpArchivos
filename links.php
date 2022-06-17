<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiveSearch</title>
    <script>

        window.onload= function () {
            
            document.getElementById("text").onkeyup= busca;

        }
        function busca(e) {
            cadena= this.value;
            console.log(cadena);
            if (cadena.length==0) {
                document.getElementById("salida").innerHTML= "";
                document.getElementById("salida").style.border= "0px";

                
            }
            else{

                xmlhttp= new XMLHttpRequest();
             xmlhttp.onreadystatechange= function () {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("salida").innerHTML= this.responseText;
                    document.getElementById("salida").style.border= "1px solid blue";
                }
            }
            xmlhttp.open("GET", "linksBusca.php?q=" + cadena, false)
            xmlhttp.send();
            }
        }
    </script>
</head>
<body>
    <form>
   <input type="text" size="40" id="text" />
   <div id="salida"></div>

    </form>
</body>
</html>