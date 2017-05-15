<?php
/******************************************************************************
Points:
    1. Visibility can be applied to property, method, and constant.

    2. Type of visibilities are public, protected, and private.

    3. Public can be accessed everywhere, protected can be accessed only within
       the class itself and by inheriting classes, private may only be accessed
       by the class that defines the member.

    4. Constant declared without any explicit visibility keyword are defined as
       public.

Output:
    public
    protected
    private
    public
    public
    protected
******************************************************************************/

class MyClass
{
    public const MY_PUBLIC = 'public';
    protected const MY_PROTECTED = 'protected';
    private const MY_PRIVATE = 'private';

    // This is public
    function foo()
    {
        echo self::MY_PUBLIC, PHP_EOL;
        echo self::MY_PROTECTED, PHP_EOL;
        echo self::MY_PRIVATE, PHP_EOL;
    }
}

$myclass = new MyClass;
MyClass::MY_PUBLIC;
// MyClass::MY_PROTECTED; // Fatal error
// MyClass::MY_PRIVATE; // Fatal error
$myclass->foo();

class MyClass2 extends MyClass
{
    // This is public
    function foo2()
    {
        echo self::MY_PUBLIC, PHP_EOL;
        echo self::MY_PROTECTED, PHP_EOL;
        // echo self::MY_PRIVATE; // Fatal error
    }
}

$myclass2 = new MyClass2;
echo MyClass2::MY_PUBLIC, PHP_EOL;
$myclass2->foo2();

