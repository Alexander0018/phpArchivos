<?php require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

if (isset($_POST["enviar"])) {
    $autor= $_POST["autor"];
    ob_start();
    require_once "libroContenido.php";
    $html= ob_get_clean();
    
    $html2pdf = new Html2Pdf('P', 'LETTER', 'es', "UTF-8");
    $html2pdf->writeHTML($html);
    $html2pdf->output("salida.pdf");
}


?>

<form action="" method="post">
<input type="text" name="autor" placeholder="Escribe tu nombre">
<input type="submit" name="enviar" value="Generar PDF">
</form>