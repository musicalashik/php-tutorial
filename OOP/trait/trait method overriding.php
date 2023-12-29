<?php
trait hello
{
    private function sayHi()
    {
        echo "hi trait \n";
    }

    private function sayHello(){
        echo "hello trait\n";
    }

}


class A
{
    use hello {
        hello::sayHi as public; // as ar pore public keyword use kore ata private theke public korlam 
        // jate outside the class call kora jay
    }


}

$obj1 = new A();

$obj1->sayHi();

class B
{
    use hello {

        hello::sayHello as public newHello; // akhane as public keyword ar por `newHello` name diye sayHello method ke rename korlam

    }
}

$obj2 = new B();
$obj2->newHello();

// $obj2->sayHello(); ati error dekhabe karon $obj2 object a sayHello() method ta exists nai 
// atar bodole newHello() karon as public diye upore rename korechilam


?>