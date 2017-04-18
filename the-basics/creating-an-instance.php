<?php
/******************************************************************************
Points:
    1. Creating an instance
       "$[ObjName] = new [ClassName]()"

    2. Possible to create a new object by "new self" and "new parent"

    3. When assigning an already created instance of a class to a new variable,
       the new variable will access the same instance as the object that was
       assigned

Output:
    None
******************************************************************************/

class SimpleClass
{
}

$instance = new SimpleClass();

// Using variable
$classname = 'SimpleClass';
$instance = new $classname();

