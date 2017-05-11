<?php
/******************************************************************************
Points:
    1. There is a different between property and method call

Output:
    property
    method
******************************************************************************/

class Foo
{
    public $bar = 'property';

    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;
