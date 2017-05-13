<?php
/******************************************************************************
Points:
    1. A class can inherit the methods and properties of another class by using
       keyword "extends".

    2. A class can only inherit from one base class.

    3. Access the overridden methods or static properties by referencing them
       with "parent::".

Output:
    Extending class
    a default value
******************************************************************************/

class SimpleClass
{
    public $var = "a default value\n";

    public function displayVar()
    {
        echo $this->var;
    }
}

class ExtendClass extends SimpleClass
{
    // Redefine the parent method
    function displayVar()
    {
        echo "Extending class\n";
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();

