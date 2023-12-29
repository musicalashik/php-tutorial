<?php

class BaseClass
{
    protected $a = 2;
    protected $b = 3;
    public function calculation($n, $m)
    {
        echo $n + $m;
    }
}

class DerivedClass extends BaseClass
{

    protected $a = 5;
    protected $b = 6;

    public function calculation($n, $m)
    {
        echo $n * $m;
    }
}

$test = new BaseClass();

$test->calculation(3, 6);

echo "\n";

$test = new DerivedClass();

$test->calculation(3, 6);
