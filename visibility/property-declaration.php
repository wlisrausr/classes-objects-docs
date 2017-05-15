<?php
/******************************************************************************
Points:
    1. Visibility can be applied to property, method, and constant.

    2. Type of visibilities are public, protected, and private.

    3. Public can be accessed everywhere, protected can be accessed only within
       the class itself and by inheriting classes, private may only be accessed
       by the class that defines the member.

Output:
    Public
    Public
    Protected
    Private
    Public2
    Public2
    Protected2
******************************************************************************/

class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public, PHP_EOL;
        echo $this->protected, PHP_EOL;
        echo $this->private, PHP_EOL;
    }
}

$obj = new MyClass();
echo $obj->public, PHP_EOL;
// echo $obj->protected; // Fatal error
// echo $obj->private; // Fatal error
$obj->printHello();

class MyClass2 extends MyClass
{
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public, PHP_EOL;
        echo $this->protected, PHP_EOL;
        // echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public, PHP_EOL;
// echo $obj2->protected; // Fatal error
// echo $obj2->private; // Undefined
$obj2->printHello();

