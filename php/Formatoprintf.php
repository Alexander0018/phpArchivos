<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato Printf | sprintf</title>
</head>
<body>
    <?php
    
    $monto= 1500;
    $tasaIva= 0.16;
    $montoIVA= $monto * $tasaIVA;
    $granTotal= $monto + $montoIVA;

    $retISR = 0.1;
    $retIva= 0.166667;
    $montoRetIVA= $granTotal* $retIva;
    $montoRetISR= $granTotal* $retISR;

    $total= $granTotal - $montoRetISR - $montoRetIVA;

  $sMonto= number_format($monto, 2);
  $smontoIVA= number_format($montoIVA, 2);
  $sMontoTotal= number_format($granTotal, 2);
  $sMontoRetIVA= number_format($montoRetIVA, 2);
  $sMontoRetISR= number_format($montoRetISR, 2);
  $sMontoTotalFinal= number_format($total, 2);

  print "<p>Monto: $".$sMonto."</p>";
  print "<p>IVA: $".$sMontoIVA."</p>";
  print "<p>Total Parcial: $".$sMontoTotal."</p>";
  print "<hr>";
  print "<p>Retencion IVA: $".$sMontoRetIVA."</p>";
  print "<p>Retencion ISR: $".$sMontoRetISR."</p>";
  print "<hr>";
  print "<p>Total: $".$sMontoTotalFinal."</p>";

  $totalFrances= number_format($total, 2, ",", "");
  $totalEspaña= number_format($total,2,",",".");

  print "<p>Total Frances: $".$totalFrances."</p>";
  print "<p>Total Europeo: $".$totalEspaña."</p>";
  




    /* $sTotal=sprintf("<p>Monto: $%6.2f, IVA : $%6.2f, Gran total: $%6.2f</p>", $monto, $montoIVA,$granTotal);
    $sRet=  sprintf("<p>Retencion IVA: $%6.2, Retencion ISR: $%6.2f</p>", $montoRetIVA,$montoRetISR);
     $sTotalFinal=  sprintf("<p>Total: $%6.2f</p>", $total);
     print $sTotal;
     print "<p>---------------</p>";
     print $sRet;
     print "<p>---------------</p>";
     print $sTotalFinal;

    printf("<p>IVA: $%6.2f</p>");
    printf("<p>Gran Tota : $%6.2f</p>");
    printf("<p>---------------</p>");
    printf("<p>Retencion IVA: $%6.2f</p>", $montoRetIVA);
    printf("<p>Retencion ISR: $%6.2f</p>", $montoRetISR);
    printf("<p>---------------</p>");
    printf("<p>Total: $%6.2f</p>", $total);
    */ 
    ?>
</body>
</html>