<?php
/******************************************************************************
Points:
    1. Class keyword used for class name resolution.

    2. Get fully qualified name of the ClassName class by using
       ClassName::class.

Output:
    NS\ClassName
******************************************************************************/

namespace NS {
    class ClassName {
    }

    echo ClassName::class, PHP_EOL;
}

