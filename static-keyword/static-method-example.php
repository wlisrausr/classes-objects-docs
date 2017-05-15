<?php
/******************************************************************************
Points:
    1. Declaring class properties or methods as static makes them accessible
       without needing an instantiation of the class.

    2. A property declared as static cannot be accessed with an instantiated
       class object (though a static method can).

    3. The pseudo variable ($this) is not available inside the method declared
       as static.

Output:
    None
******************************************************************************/

class Foo
{
    public static function aStaticMethod()
    {
        // ...
    }
}

Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod(); // As of PHP 5.3.0

