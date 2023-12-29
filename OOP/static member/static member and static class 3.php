<?php

class BabaClass{
    
   static $name = "Khalek munshi";
   static function show_name(){

      echo self::$name;

   }


}


class CheleClass extends BabaClass{

   static $name = "abdur rahman";

   static function show_name(){
      echo self::$name, PHP_EOL; // output show from this CheleClass
   }

   static function show_name2(){
     echo parent::$name, PHP_EOL; // output show from it's parent class BabaClass
   }
}

// here show how we can use static property and method with making instance/object
$BabaObj = new BabaClass();

$BabaObj->show_name();

$CheleObj = new CheleClass();

$CheleObj->show_name();

$CheleObj->show_name2();

// here show how we can use static property and method using class name 

BabaClass::show_name();



CheleClass::show_name();

CheleClass::show_name2();


?>
