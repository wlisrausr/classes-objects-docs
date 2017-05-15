<?php
/******************************************************************************
Points:
    1. Scope resolution operator (::) is a token that allows access to static,
       constant, and overridden properties or methods of a class.

    2. When referencing these items from outside the class definition, use the
       name of the class.

    3. As PHP 5.3.0, it's possible to reference the class using a variable and
       the variable value cannot be a keyword.

Output:
    A constant value
    A constant value
******************************************************************************/

class MyClass
{
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE, PHP_EOL; // PHP 5.3.0

echo MyClass::CONST_VALUE, PHP_EOL;

