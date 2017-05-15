<?php
/******************************************************************************
Points:
    1. Object inheritance marked with "extends" keyword.

    2. When we extend a class, the subclass inherits all of the public and
       protected methods from the parent class. Unless a class overrides those
       methods, they will retain their original functionality.

Output:
    Foo: baz
    PHP is great.
    Bar: baz
    PHP is great.
******************************************************************************/

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . PHP_EOL;
    }

    public function printPHP()
    {
        echo 'PHP is great.' . PHP_EOL;
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: ' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();

$foo->printItem('baz');
$foo->printPHP();
$bar->printItem('baz');
$bar->printPHP();

