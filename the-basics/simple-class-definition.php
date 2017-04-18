<?php
/******************************************************************************
1. Class definition
   "class [ClassName] {}"

2. Valid class name
   Starts with a letter or underscore, followed by any number of letters,
   numbers, or underscores

3. A Class may contain its own consts, vars (properties), functions (methods)
******************************************************************************/

class SimpleClass
{
    // Property declaration
    public $var = 'a default value';

    // Method declaration
    public function displayVar()
    {
        echo $this->var;
    }
}

