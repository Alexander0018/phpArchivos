<?php
$limite=5;
session_start();
if (time()-$_SESSION["acceso"]>$limite ) {
   header("location:session.php?error=true");
   exit;
} else if(isset($_SESSION["acceso"])==false){
    header("location: session.php");
   exit;
} else {
    $_SESSION["acceso"]= time();
}




?>