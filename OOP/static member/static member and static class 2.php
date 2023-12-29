<?php

class BaseClass{
    static $str = "from parent class";
    static function show(){

       return self::$str; // this return value from this BaseClass
    }
}

class ChildClass extends BaseClass{

    static $str = "from child class";

    static function show(){

        return self::$str; // this return value from this ChildClass

    }

    static function show2(){

        return parent::$str; self::$str; // this return value from it's base/parent class which name is BaseClass

    }


}


echo BaseClass::show();
echo "\n";
echo ChildClass::show();
echo PHP_EOL;
echo ChildClass::show2();
?>
