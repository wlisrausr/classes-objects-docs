<?php
/******************************************************************************
Points:
    1. Classes defined as abstract may not be instantiated, and any class that
       contains at least one abstract method must also be abstract.

    2. Method defined as abstract simply declare the method's signature, they
       cannot define the implementation.

    3. When inheriting from an abstract class, all methods marked abstract in
       the parent's class declaration must be defined by the child,
       additionally, these methods must be defined with the same or a less
       restricted visibility.

Output:
    Mr. Pacman
    Mrs. Pacwoman
******************************************************************************/

abstract class AbstractClass
{
    abstract protected function prefixName($name);
}

class ConcreteClass extends AbstractClass
{
    public function prefixName($name, $separator = ".")
    {
        if ($name == "Pacman") {
            $prefix = "Mr";
        } elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }

        return "{$prefix}{$separator} {$name}";
    }
}

$class = new ConcreteClass;
echo $class->prefixName('Pacman') . "\n";
echo $class->prefixName('Pacwoman') . "\n";

