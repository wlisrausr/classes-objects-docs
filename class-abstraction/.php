<?php
/******************************************************************************
Points:
    1. Autoload function (spl_autoload_register) registers any number of
       autoloaders, enabling for classes and interfaces to be automatically
       loaded if they are currently not defined.

    2. Autoloading is not available if using PHP in CLI interactive mode.

Output:
    None
******************************************************************************/

spl_autoload_register(function($class_name) {
    include $class_name . '.php';
});

$obj = new MyClass1();
$obj2 = new MyClass2();

