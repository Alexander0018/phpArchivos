<?php

session_start();

if (isset($_SESSION["acceso"])) {
    session_destroy();
    unset($_SESSION["acceso"]);
    print utf8_encode("Haz cerrado la sesión satisfactoriamente");
} else {
    print utf8_encode("Lo siento, no hay sesión abierta");
}
print "<br>";
print "<a href='session.php'>Regresar</a>";

?>