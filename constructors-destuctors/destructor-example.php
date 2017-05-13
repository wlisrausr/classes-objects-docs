<?php
/******************************************************************************
Points:
    1. Destructor method will be called as soon as there are no other
       references to a particular object, or in any order during the shutdown
       sequence.

    2. The destructor method will be called too even if the script stopped
       using exit().

Output:
    In constructor
    Destroying MyDestructableClass
******************************************************************************/

class MyDestructableClass
{
    function __construct()
    {
        print "In constructor\n";
        $this->name = "MyDestructableClass";
    }

    function __destruct()
    {
        print "Destroying " . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();

