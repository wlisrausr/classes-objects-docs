<?php
/******************************************************************************
Points:
    1. Properties are class member variables.

    2. Within class method, non-static properties may be accessed by using "->"
       (Object Operator): $this->propertyName.

    3. Static properties are accessed by using the "::" (Double Colon):
       self::$propertyName.

    4. The pseudo variable ($this) is available inside any class method when
       that method is called from within an object context.

Output:
    None
******************************************************************************/

class SimpleClass
{
    public $var = 'hello ' . 'world';

    public $var2 = <<<EOD
hello world
EOD;

    public $var3 = 1+2;

    // Invalid property declaration
    // public $var4 = self::myStaticMethod();
    // public $var5 = $myVar;

    public $var6 = myConstant;

    public $var7 = array(true, false);

    public $var8 = <<<'EOD'
hello world
EOD;
}

