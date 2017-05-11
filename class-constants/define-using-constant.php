<?php
/******************************************************************************
Points:
    1. Declare constant with keyword "const" and without "$" symbol.

    2. The default visibility of class constant is public.

    3. The value must be a constant exp, not a variable, property, or a
       function call.

    4. Class constants are allocated once per class (not for each class
       instance).

Output:
    constant value
    constant value
    constant value
    constant value
******************************************************************************/

class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n";

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT . "\n";

