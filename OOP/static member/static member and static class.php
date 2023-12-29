<?php

class BaseClass{
    static $name;
    static function show(){

       return self::$name;
    }
}

BaseClass::$name = "ashik";
echo BaseClass::show();

?>



<?php

class Base{
    static $name;
    static function show(){

       return base::$name;
    }
}

Base::$name = "ashik";
echo Base::show();

?>

