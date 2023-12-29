# static member and static class indepth documentetion

static কিওয়ার্ড property অথবা method এর সামনে করলে এটি সরাসরি class এর নাম ব্যবহার করে এক্সেস করা যায়।
আর যেসব property অথবা method এর সামনে static কিওয়ার্ড থাকে তাদের কে ঐ ক্লাসের static member বলে।

যখন কোনো ক্লাসে সব গুলি property অথবা method static হয় তখন উক্ত ক্লাসটি static class কিন্তু একটিও বাকি থাকলে এটা static class হবেনা।

```php

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

নিচের কোডে দেখানো হলো কিভাবে self কিওর্য়াড এর পরিবর্তে সরাসি ক্লাসের নাম উল্লেখ করেও এক্সেস করা যায়
কিন্তু self keyword ব্যবহার করাই রিকমেন্ডেড কারন হার্ড কোডেড করলে ইনহেরিট করলে তখন ঠিকঠাক কাজ করবেনা

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

```

Static member যে ক্লাসে থাকে সেই ক্লাসকে inherit বা extends করলে তখন কেমন করে সেই Static member বা মেথড , প্রোর্পাটি ব্যবহার করা যায় তা
নিচের কোডে দেখানো হলো

```php

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
```

নিচের কোডে দেখানো হলো কিভাবে চাইলে static member ওয়ালা class এর প্রোর্পাটি অথবা মেথড কে কেমন করে
অবজেক্ট বানিয়ে এক্সেস করা যায় আবার সরাসরি ক্লাসের নাম + :: অপারেটর দিয়ে  এক্সেস করা যায়

```php

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

```
