<?php
/******************************************************************************
Points:
    1. In PHP 5.3.3, methods with the same name as the last element of a
       namespaced class will no longer be treated as constructor.

Output:
    None
******************************************************************************/

namespace Foo;

class Bar
{
    public function Bar()
    {
        // treated as constructor in PHP 5.3.0-5.3.2
        // treated as regular method as of PHP 5.3.3
    }
}

