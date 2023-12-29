<?php

abstract class ParentClass
{
    protected $name;
    private $age;
    private function show_age(){
        $this->age;
    }

    abstract protected function sum($a, $b);
    protected function sub($a,$b){
        echo $a - $b;
    }
}

class ChildClass extends ParentClass
{

    public $age;

    public function show_age(){
        $this->age;
    }


// here implement abstract function sum from parent class and also reduce access restric protected to public
    public function sum($b, $c)
    {
        echo $b + $c;
    }

    public function sub($c,$d){
        echo $c - $d;
    }

   
}

$obj = new ChildClass();
$obj->sum(25,35);

echo PHP_EOL; // but not work when write like this php_EOL or PHP_eol or php_eol 

$obj->sub(25,35);


/*
access modifier level  child class a komanu jay baranu jayna

যেমন প্যারেন্ট ক্লাসে যদি এক্সেস লেভেল protected থাকে তাহলে চাইল্ড ক্লাসে protected অথবা public রাখতে পারবো কিন্তু
বাড়িয়ে private করা যাবেনা

আবার ‍যদি প্যারেন্ট ক্লাসে  এক্সেস মডিফাইয়ার private থাকে তাহলে derived বা child class এ modifier টি private, protected, public, করা যাবে
 
আবার যদি প্যারেন্ট ক্লাসে  এক্সেস মডিফাইয়ার public থাকে তাহলে derived বা child class এ modifier টি শুধু public করা যাবে


বিঃদ্রঃ চাইল্ড ক্লাসে access modifier restiction level কমিয়ে ব্যবহার করা যায় কিন্তু একটি সমস্যা হলো

access modifier পরির্তন করা গেলেও চাইল্ড ক্লাসে প্যারেন্ট ক্লাসে যেমন প্যারমিটার সংখ্যা ছিলো ততটাই চাইল্ড ক্লাসে রাখা লাগে


*/
