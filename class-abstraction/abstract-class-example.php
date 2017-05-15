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
    ConcreteClass1
    FOO_ConcreteClass1
    ConcreteClass2
    FOO_ConcreteClass2
******************************************************************************/

abstract class AbstractClass
{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut()
    {
        print $this->getValue() . "\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue()
    {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue()
    {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . "\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . "\n";

