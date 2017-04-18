<?php
/******************************************************************************
Points:
    1. =& operator used as reference ($instance & $reference point to the same
       content)

Output:
    NULL
    NULL
    object(SimpleClass)#1 (1) {
       ["var"]=>
         string(30) "$assigned will have this value"
    }
******************************************************************************/

class SimpleClass
{
}

$instance = new SimpleClass();

$assigned = $instance;
$reference =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance & $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);

