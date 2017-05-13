<?php
/******************************************************************************
Points:
    1. We can assign an anonymous function to an object property

Output:
    42
******************************************************************************/

class foo
{
    public $bar;

    public function __construct()
    {
        $this->bar = function() {
            return 42;
        };
    }
}

$obj = new Foo();

// PHP 5.3.0
// $func = $obj->bar;
// echo $func(), PHP_EOL;

// PHP 7.0.0
echo ($obj->bar)(), PHP_EOL;

