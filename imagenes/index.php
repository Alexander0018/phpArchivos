<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir una imagen a la base de datos</title>
    <style>
        body{

            background-color: #bbd4d8;
            width: 440px;
            margin: 0 auto;
        }
        th{

            background-color: #728987 ;
        }
        tr:nth-child(even) {
            background-color: #486273;
        }
        tr:nth-child(odd) {
            background-color: #ccc;
        }

        table{
            width: 100%;
        }
    </style>
    <?php

    /*Variables*/
    
    $msg= array();


    //modos
    //A-Alta
    //B-Baja
    //C-Cambio
    //D eliminar
    //select
    include "./conn.php";

    if (isset($_POST['nombre'])) {
        $nombre= $_POST["nombre"];
        $id= (isset($_POST["id"]))? $_POST["id"] : "";
        if ($id=="") {
        //alta
        $imagen= addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
        
        $sql= "INSERT INTO imagenes(nombre, imagen) VALUES ('$nombre', '$imagen')";

        if (mysqli_query($conn, $sql)) {
            array_push($msg ,"Se inserto la imagen correctamente");
        } 
        else {
            array_push($msg , "No se inserto la imagen correctamente");
        }
        } else {
            #Cambio 

            if (isset($_FILES["imagen"]["tmp_name"]) && $_FILES["imagen"]["tmp_name"] !=""){
                $imagen= addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
            }
            else {
                $imagen= "";
            }
            if ($nombre=="") {
                array_push($msg, "El nombre no puede estar vacío");
            } 
            else {
                $sql= "UPDATE imagenes SET ";
                $sql.= "nombre='".$nombre."'";
                if ($imagen!= "") {
                    $sql.= ", imagen='".$imagen."'";
                }
                $sql.= "WHERE id=".$id;

                if (mysqli_query($conn, $sql)) {
                    array_push($msg, "Se modificó el registro correctamente");
                } 
                else {
                    array_push($msg, "Error al modificar  el registro");
                }
                
            }
            
        }
        
       
    }

    if (isset($_GET["m"])) {
        $m= $_GET["m"];
    } else {
        $m= "S";
    }
    //baja definitiva
    if ($m=="D") {
        $id= $_GET["id"];
        $sql= "DELETE FROM imagenes WHERE id=".$id;
        
        if (mysqli_query($conn, $sql)) {
           array_push($msg, "Registro borrado correctamente");
        } else {
            array_push($msg, "Error al borrar el registro");
        }
        
        $m= "S";

    } 
    //select o mostrar
    if ($m=="S") {
        $sql= "SELECT * FROM imagenes";
        $r= mysqli_query($conn, $sql);
    }
    //cambio o baja
    if ($m=="C" || $m=="B") {
        $id= $_GET["id"];
        $sql= "SELECT * FROM imagenes WHERE id=".$id;
        $r= mysqli_query($conn, $sql);
        //$data= mysqli_fetch_assoc($r);
    }

    ?>
    <script>
        window.onload= function (){

            <?php if($m=="S"){?>
   document.getElementById("alta").onclick= function(){
   window.open("index.php?m=A", "_self");

}
           <?php }?>
           <?php if($m=="B"){?>
            document.getElementById("si").onclick= function(){
                var id= <?php print $id;?>
             window.open("index.php?m=D&id=" + id, "_self");
            }
            document.getElementById("no").onclick= function(){
                var id= <?php print $id;?>
            window.open("index.php", "_self");

}         
           <?php }?>
        
}
    
    </script>
</head>
<body>
    
    
  
    <?php if ($m=="A" || $m=="C") {
        
        if ($m=="C") $data=mysqli_fetch_assoc($r); {
            # code...
        }
        
        ?>
        
    
    <form action="index.php" method="post" enctype="multipart/form-data">


    <input type="text" required name="nombre" placeholder="nombre del archivo en la BD" value="<?php if($m=='C' ) print $data['nombre']; ?>"/>
    <input type="file"  <?php if($m!=='C' ) print 'required'; ?> name="imagen" />
    <input type="hidden" name="id" id="id" value="<?php print (isset($id))? $id: '';?>">
    <input type="submit" value="Subir Archivo"/>


    </form>
    <?php }?>

    <?php if ($m=="S" || $m=="B") {?>
      
    
    <table border='1'>
  <thead>
      <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Imagen</th>
          <?php if($m=="S") {?>
          <th>Borrar</th>
          <th>Modificar</th>
          <?php }?>
      </tr>
  </thead>
  <tbody>
  <?php
    while ($data= mysqli_fetch_assoc($r)) {
        
        print "<br>";
        print "<tr>";
        print "<td>".$data['id']."</td>";
        print "<td>".$data['nombre']."</td>";
        print "<td><img width='200' src='data:image/jpeg;base64,".base64_encode($data['imagen'])."'/></td>";
   if($m=="S"){
        print "<td><a href='index.php?m=B&id=".$data['id']."'>Borrar</td>";
        print "<td><a href='index.php?m=C&id=".$data['id']."'>Modificar</td>";
   }
        print "</tr>";
    }
    
    ?>
  </tbody>
    </table>
    <br>
    <?php
    if ($m=="S") {?>
     <center>
       <label for="alta"></label>
       <input type="button" name="alta" value="Subir una imagen" id="alta">
       </center>
    <?php }?>

    <?php
    if ($m=="A" || $m=="C" || $m=="B") {   
        
        if (count($msg)>0) {
        print "<div>";

        foreach ($msg as $key => $valor) {
            print "<strong>* ".$valor."</strong>";
        }

        print "</div>";
        }
        
        
        ?>

    
       
    <?php }?>


   <?php 
  if ($m=="B") {
      print "<label for='si'>¿Desea borrar esta imagen?</label> <br><br>";
      print "<input type= 'button' id='si' value='Si' />";
      print "<input type= 'button' id='no' value='No' />";
      print "<p>Una vez borrado el registro no se podrá recuperar</p>";
  }

}?>
</body>
</html>