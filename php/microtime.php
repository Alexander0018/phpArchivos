<?php

usleep(mt_rand(100,10000));
$t= microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

print "Trsnscurrieron ".$t." segundos sin hacer nada";


?>