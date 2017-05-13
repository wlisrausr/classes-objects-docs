<?php
/******************************************************************************
Points:
    1. Constructor method called on each newly-created object.

    2. Constructor method structure:
       void __construct ([ mixed $args = "" [, $... ]] )

    3. We can used this method to initialize anything that the object may need
       before it is used.

Output:
    In BaseClass constructor
    In BaseClass constructor
    In SubClass constructor
    In BaseClass constructor
******************************************************************************/

class BaseClass
{
    function __construct()
    {
        print "In BaseClass constructor\n";
    }
}

class SubClass extends BaseClass
{
    function __construct()
    {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}

class OtherSubClass extends BaseClass
{
}

$obj = new BaseClass();

$obj = new SubClass();

$obj = new OtherSubClass();

