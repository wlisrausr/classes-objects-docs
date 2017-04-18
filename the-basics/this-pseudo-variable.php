<?php
/******************************************************************************
Points:
    1. When available?
       When a method is called from within an object context

    2. Reference to?
       Reference to the calling object (usually the object to which the method
       belongs)

Output:
    $this is defined (A)
    $this is not defined.
    $this is not defined.
    $this is not defined.
******************************************************************************/

class A
{
    public function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    public function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();

A::foo();
$b = new B();
$b->bar();

B::bar();

