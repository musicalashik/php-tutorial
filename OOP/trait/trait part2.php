<?php

trait test
{
    public function show1()
    {
        echo "output from trait which name is test\n";
    }
    public function show2()
    {
        echo "output show2 method from trait test";
    }
}

class A
{
    public function show2()
    {
        echo "from class A\n";
    }

}

class B extends A
{
    use test;
    public function show2(){
        echo "from class b\n";
    }
}

$obj = new B();
$obj->show1(); // output access from trait because class b have no show1 method but it exist into Class A method
$obj->show2(); // output show from class B not from trait 


?>