<?php
/******************************************************************************
Points:
    1. Scope resolution operator (::) is a token that allows access to static,
       constant, and overridden properties or methods of a class.

    2. When referencing these items from outside the class definition, use the
       name of the class.

    3. As PHP 5.3.0, it's possible to reference the class using a variable and
       the variable value cannot be a keyword.

    4. Three special keywords self, parent, and static are used to access
       properties or methods from inside the class definition.

Output:
    A constant value
    A constant value
    A constant value
    static var
    A constant value
    static var
******************************************************************************/

class MyClass
{
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE, PHP_EOL; // PHP 5.3.0

echo MyClass::CONST_VALUE, PHP_EOL;

Class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon()
    {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

$classname = 'OtherClass';
$classname::doubleColon();

OtherClass::doubleColon();

