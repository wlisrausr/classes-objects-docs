<?php
/******************************************************************************
Points:
    1. Visibility modifiers are allowed for class constants in PHP 7.1.0.

Output:
    bar
******************************************************************************/

class Foo
{
    public const BAR = 'bar';
    // private const BAZ = 'baz';
}

echo Foo::BAR, PHP_EOL;
// echo Foo::BAZ, PHP_EOL;

