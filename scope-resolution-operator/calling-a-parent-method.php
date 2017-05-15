<?php
/******************************************************************************
Points:
    1. We can call parent method in subclass using keyword "parent::".

Output:
    MyClass::myFunc()
    OtherClass::myFunc()
******************************************************************************/

class MyClass
{
    protected function myFunc()
    {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass extends MyClass
{
    public function myFunc()
    {
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();

