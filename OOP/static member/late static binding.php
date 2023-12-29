<?php
class base
{
    protected static $str = "from parent class";

    public static function show()
    {

        echo self::$str;
        echo "\n";
    }
}
?>

<?php
class derived extends base{
    protected static $str="from child class";
    
}


$obj1 = new derived();
$obj1->show();

/*
উপরের কোডে echo self::$str; থাকার কারনে এটি self class বা প্যারেন্ট ক্লাসের টা দেখালো কিন্তু 
নিচের কোডে static::$str; থাকায় চাইল্ড ক্লাসের আউটপুট দেখালো


আর  echo self:: এর বদলে static:: লিখে দিয়ে চাইল্ড ক্লাসের 
প্রর্পাটি অথবা মেথড কে এক্সেস করাকে late static binding বলে
*/
class base2
{
    protected static $str = "from parent class";

    public static function show()
    {

        echo static::$str;
    }
}

class derived2 extends base2{
    protected static $str="from child class";
    
}


$obj2 = new derived2();
$obj2->show();
?>