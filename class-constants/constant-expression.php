<?php
/******************************************************************************
Points:
    1. It is possible to provide a scalar exp involving numeric and string
       literals in context of a class constant.

Output:
    None
******************************************************************************/

const ONE = 1;

class foo
{
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    const SENTENCE = 'The Value of THREE is ' . self::THREE;
}

