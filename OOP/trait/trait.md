
# trait complete reference here

পিএইচপিতে ক্লাস কে মাল্টিপল ইনহেরিট করার সুযোগ নেই
তাই যদি এরকম পরিস্থিতি হয় যে কোন একটি মেথড অথবা প্রোর্পাটি একাধিক ক্লাসে ব্যবহার করার দরকার হয়।
তখন আমরা মাল্টিপল ইনহেরিট্যান্স এর মতো php তে trait বানিয়ে ব্যবহার করতে পারি।
যেমন নিচে hi bye bye2 নামে ৩টি trait বানালাম
তারপর  trait গুলি ব্যবহার করার জন্য
ক্লাসের ভেতরে  use তারপর trait নাম তারপরে কমা দিলাম যেমন  use hi;

trait hi এর যেকোনো মেথড অথবা প্রোর্পাটি উক্ত ক্লাসে ব্যবহার করা যাবে।

একটি  ক্লাসে একের অধিক ব্যবহার করা যায় সেজন্য trait ‍গুলির নাম কমা দিয়ে লিখে সেমিকোলন দিয়ে স্টেটমেন্ট টি সম্পন্ন করা লাগে।

যেমন use hi, bye2;

```php

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
?>
```

## trait priority

নিচে দেখানো হলো যে  যখন আমরা কোন একটি ক্লাসকে ইনহেরিট করবো
তখন যদি কোন একটি মেথড অথবা প্রর্পাটি  প্যারেন্ট ক্লাসেও থাকে আবার trait এ ও থাকে
সেক্ষেত্রে সেই চাইল্ড ক্লাসের অবজেক্ট বানালে সেই ক্ষেত্রে উক্ত মেথড অথবা প্রর্পাটি টি  trait থেকেে
এক্সেস হবে মানে প্রায়োরিটি বেশি হবে trait এর
কিন্তু যদি প্যারেন্ট ক্লাসে না থেকে চাইল্ড ক্লাস এবং trait এর মাঝে থাকে তখন
প্রাধান্য পাবে চাইল্ড ক্লাস

```php

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

```

## use same method name from multiple trait

যদি একের অধিক ট্রেইটে একই নামে একাধিক মেথড প্রোর্পাটি থাকে তবে  এই ট্রেইটকে সরাসারি নরমাল নিয়মে 
ইউজ করার চেষ্টা করলে তবে  এরর দেখাবে
এক্ষেত্রে নিয়ম হলো trait এর নাম তারপর স্কপ রেজুলেশন অপারেটর :: তারপর যে মেথড টি ব্যবহার করবো সেই মেথড নাম
তারপর insteadof কিওয়ার্ড তারপর অন্য trait এর নাম। যেমন (hello::sayHi insteadof hi;)

এরপর যদি অন্য trait এর মেথড টিকেও ব্যবহার করার প্রয়োজন হয় তবে

এক্ষেত্রে নিয়ম হলো trait এর নাম তারপর স্কপ রেজুলেশন অপারেটর :: তারপর যে মেথড টি ব্যবহার করবো সেই মেথড নাম
 এইবার insteadof কিওয়ার্ড হবেনা হবে as keyword তারপর অন্য method এর নাম। যেমন (hi::sayHi as newHi;)
 অন্য যে মেথড এর নাম দিলাম সেটা দিয়েই মেথডটি এক্সেস করতে হবে।

```php

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
?>

```

# trait method overriding rules

ট্রেইটে যখন মেথডের এক্সেস মডিফাইয়ার টি private কিংবা protected থাকে  এবং যদি এটি
যে ক্লাসে ইউজ করা হলো তার অবজেক্ট বানিয়ে, যদি ক্লাসের বাহির থেকে এক্সেস করার দরকার হয়।
তখন যে ক্লাসে এটি ইউজ করা হলো সেই ক্লাসে এটির access modifier টি পরিবর্তন করে এটা করা যাবে।

সেজন্য traitName তারপর :: তারপর FunctionName তারপর as public; দিয়ে  private কিংবা protected থেকে public করা যাবে
যেমনঃ hello::sayHi as public;

কিন্তু যদি আমরা চাই যে এটি public করার সাথে সাথে এর নাম কেও পরিবর্তন করে ব্যবহার করতে
তখন public কিওয়ার্ড এর পর নতুন Function Name।

যেমনঃ hello::sayHi as public newHello;

```php

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

```

