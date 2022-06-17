<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
ini_set("zend.assertions",1);
ini_set("assert.exception", 1);


ini_set("zend.exception",0);

class CustomError extends AssertionError{}

assert(true==false, new CustomError("Lo verdadero no es flaso"));

print "OK";
?>