<?php
/******************************************************************************
Points:

Output:
    string(5) "hello"
    Accessed the private method.
******************************************************************************/

class Test
{
    private $foo;

    public function __construct()
    {
        $this->foo = $foo;
    }

    private function bar()
    {
        echo 'Accessed the private method.', PHP_EOL;
    }

    public function baz(Test $other)
    {
        $other->foo = 'hello';
        var_dump($other->foo);

        $other->bar();
    }
}

$test = new Test('test');
$test->baz(new Test('other'));

