<?php
trait hello{
    public function sayHi(){
        echo "from hello trait, say hi \n";
    }

}

trait hi{
    
    public function sayHi(){
        echo "from hi trait, say hi \n";
    }
}

class A{
    use hello,hi{
        hello::sayHi insteadof hi;
    }


}

$obj = new A();

$obj->sayHi();
/*
jokhon dui ba tar odik trait a ak name a method or property thake 
tokhon agula use korar jonno trait::methodname insteadof another_trait;

abar jodi mone hoy aker odik trait use kora lagbe and same name method ta use kora lagbe
tokhon trait::methodname as newMethodname; arokom kore kora lage niche code a dekhanu holo
*/
class B{
    use hello,hi{

        hello::sayHi insteadof hi;
        hi::sayHi as newHi;
    }
}

$obj2 = new B();
$obj2->newHi();
