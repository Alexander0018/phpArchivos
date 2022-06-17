<?php

$html= "<a href='http://www.google.com'>Mi página</a>";
$js= "<script>alert('hola mundo');</script>";

print htmlspecialchars($html)."<br>";
print htmlspecialchars($js)."<br>";
print "<br>";
print strip_tags($html)."<br>";
print strip_tags($js)."<br>";
?>