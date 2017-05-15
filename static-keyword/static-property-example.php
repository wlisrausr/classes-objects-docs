<?php
/******************************************************************************
Points:
    1. Static properties cannot be accessed through the object using the
       arrow operator "->".

Output:
    foo
    foo
    foo
    foo
    foo
    foo
******************************************************************************/

class Foo
{
    public static $my_static = 'foo';

    public function staticValue()
    {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic()
    {
        return parent::$my_static;
    }
}

print Foo::$my_static . "\n";

$foo = new Foo();
print $foo->staticValue() . "\n";
// print $foo->my_static . "\n"; // Undefined property my_static

print $foo::$my_static . "\n";
$classname = 'Foo';
print $classname::$my_static . "\n"; // As PHP 5.3.0

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";

