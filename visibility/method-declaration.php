<?php
/******************************************************************************
Points:
    1. Visibility can be applied to property, method, and constant.

    2. Type of visibilities are public, protected, and private.

    3. Public can be accessed everywhere, protected can be accessed only within
       the class itself and by inheriting classes, private may only be accessed
       by the class that defines the member.

    4. Methods declared without any explicit visibility keyword are defined as
       public.

Output:
    Foo::testPrivate
    Foo::testPublic
******************************************************************************/

class MyClass
{
    public function __construct() { }

    public function MyPublic() { }

    protected function MyProtected() { }

    private function MyPrivate() { }

    // This is public
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;
$myclass->MyPublic();
// $myclass->MyProtected(); // Fatal error
// $myclass->MyPrivate(); // Fatal error
$myclass->Foo();

class MyClass2 extends MyClass
{
    // This is public
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        // $this->MyPrivate(); // Fatal error
    }
}

$myclass2 = new MyClass2;
$myclass2->MyPublic();
$myclass2->Foo2();

class Bar
{
    public function test()
    {
        $this->testPrivate();
        $this->testPublic();
    }

    public function testPublic()
    {
        echo "Bar::testPublic\n";
    }

    public function testPrivate()
    {
        echo "Bar::testPrivate\n";
    }
}

class Foo extends Bar
{
    public function testPublic()
    {
        echo "Foo::testPublic\n";
    }

    public function testPrivate()
    {
        echo "Foo::testPrivate\n";
    }
}

$myFoo = new Foo();
$myFoo->test();

