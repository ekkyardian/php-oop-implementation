<?php

/*
 * Invoke
 * Memiliki fungsi yang sama seperti closure. Hanya saja invoke ini bekerja
 * didalam class dan merupakan magic method.
 */

class IsPositiveInt
{
    public function __invoke($value)
    {
        return ((int) $value == $value && $value > 0);
    }
}

$invoke = new IsPositiveInt();

var_dump($invoke(2));
var_dump($invoke('5'));
var_dump($invoke(9.0));
var_dump($invoke(-7));
var_dump($invoke(3.3));