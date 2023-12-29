<?php

trait hi
{
    public $str = "hi dear \n";
    public function show()
    {
        echo $this->str;
    }
}

trait bye
{
    public $str = "bye bye";
    public function show()
    {
        echo $this->str;
    }
}

trait bye2
{

    public $str2 = "bye";
    public function strshow()
    {
        echo $this->str2, "dear";
    }

}

class A
{
    use hi;

}
class B
{

    // use hi, bye; এটি এরর দেখাবে কারন hi, bye তে show() ‍নামে একই রকম মেথড এবং $str নামে একই রকম  প্রোর্পাটি আছে তাই
    use hi, bye2;
}

$obj1 = new A();
$obj1->show();

$obj2 = new B();
$obj2->strshow();


