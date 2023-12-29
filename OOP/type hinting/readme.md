# type hinting ind-depth tutorial

আমরা যখন পিএইচপিতে ফাংশন ব্যবহার করি তখন আমাদের এমন কিছু
ফাংশন বানাতে হয়, যেগুলি প্যারামিটার হিসেবে কোন র্নিদিষ্ট ডাটা টাইপের ভ্যালু কে
নিয়ে কাজ করে
কিন্তু যদি অসাবধানতা বশত এটিতে ভুল টাইপের ডাটা রিটার্ন করানো হয় অথবা ভুল আরগুমেন্ট পাস করে তখন
এটিতে বড় ধরনের সমস্যা হয়ে যেতে পারে । তাই এরকম অনাকাংক্ষিত ভুল রোধে পিএইচপি তে type hinting এসেছে

type hinting এর সাহায্য ফাংশনে রির্টান টাইপ এবং প্যারামিটারে রিটার্ন টাইপ সেট করে দেয়া যায়।
যদি প্যারামিটার কিংবা রিটার্ন টাইপ সেট করে দেওয়ার পর ভুল ডাটা টাইপের ভ্যালু রিটার্ন করা হয়।
অথবা ভিন্ন ডাটা টাইপের আরগুমেন্ট পাস করা হয়।
তখন এটি এরর দেখাবে

বিঃদ্রঃ  যদি ফাংশনে রিটার্ন টাইপ int কিন্তু এরকম "25" করে স্ট্রিংয়ের ভেতর নাম্বার পাস করার চেষ্টা করা হয়
তাহলে এটি  কাজ করবে এরর দেখাবেনা কিন্তু যদি এই php script এর শুরুতে strict mode  বা strict_type সেট করে দেওয়া হয়
তখন fatal error show করবে।
যেমন declare(strict_types=1); এই স্টেটমেন্ট দ্বারা strict mode অন করা হলো এখন এই প্রোগ্রামে রিটার্ন টাইপ অথবা আরগুমেন্ট
সামান্য ভুল হলেও এরর শো করবে

```php

<?php

function sum1($number){

    echo $number + 8;
}

// sum1("simple string pass"); ai line execute hole line number 3 te error show korbe.
// tar mane atir madhome function ar vitore duke tarpor error dora porche


function sum2(int $number){
    echo $number + 9;
}

sum2("5"); // ati kaj korbe jodio 5 number ti "5" likhe deyar karone string hoye geche but ati kaj korbe
// kintu strict mode on korle ata fatal error dekhabe

?>
```

```php

<?php
declare(strict_types=1); // ‍strict mode on 
function sum1($number){

    echo $number + 8;
}

// sum1("simple string pass"); ai line execute hole line number 3 te error show korbe.
// tar mane atir madhome function ar vitore duke tarpor error dora porche


function sum2(int $number){
    echo $number + 9;
}

sum2("5"); // ati kaj korbe jodio 5 number ti "5" likhe deyar karone string hoye geche but ati kaj korbe
// kintu strict mode on korle ata fatal error dekhabe

?>
```

## another example of type hinting using array data

নিচে দেখানো হলো checkname(array $names) ফাংশনে $names নামে একটি প্যারামিটার গ্রহন করবে এবং এটির ডাটা টাইপ বা ডাটা স্ট্রাকচার
হবে array । এই টাইপ হিনটিং এর কারনে নিচে checkname($names); কে কল করার কারনে যেহেতু $names =  "ashik ahmed"; স্ট্রিং আছেে
এবং পিএচপি তে c c++ এর মতো সরাসরি স্ট্রিং কে অ্যারে হিসেবে ট্রিট করেনা।

যদিও পিএইচপিতে  $names[0]  এরকম করে স্ট্রিংকে অ্যারে হিসেবে এক্সেস করা যায় তথাপিও
এটি সরাসরি স্ট্রিং গণ্য হয় তাই checkname(array $names) এইরকম টাইপ হিনটিং করে দেওয়ার পর সরাসরি checkname() মেথড কে
অ্যারে দিয়েই কল করা যাবে।

```php
<?php
function checkname(array $names)
{
    foreach ($names as $name) {
        echo $name . "<br>";
    }
}

$names =  "ashik ahmed";
$names2 =  ["ashik ahmed"];
checkname($names);
?>
```

নিচে দেখানো হলো কিভাবে string to array function use করে স্ট্রিং কে
অ্যারে বানিয়ে কল করলে এরর দেখাবেনা

```php
<?php
function checkname(array $names)
{
    foreach ($names as $name) {
        echo $name . "<br>";
    }
}

$names =  "ashik ahmed";
$names2 =  ["ashik ahmed"];
checkname($names2);
checkname(str_split($names));
checkname(explode(" ",$names));
?>
```

## type hinting on oop

টাইপ হিনটিং না থাকলে যে সমস্যা হবে, কোন ফাংশনের প্যারামিটার যদি নির্দিষ্ট ক্লাস এর অবজেক্ট হিসেবে আরগুমেন্ট পাস করার পরেই
কাজ করবে এমন ইউজ কেস থাকে। তখন type hinting নির্দিষ্ট ক্লাসের থেকে বানানো অবজেক্ট কে আরগুমেন্ট হিসাবে পাস করলে করলেই এটি কাজ করবে 
অন্যথায় এটি প্যারামিটার গ্রহণ করার সময়ইে এরর দিয়ে দিবে।
সুতরাং ফাংশনের ভিতরে প্রবেশ করার পর অপ্রত্যাশিত এরর শো করবেনা।

নিচে টাইপ হিনটিং না থাকায় কোডটিতে dekhbo() ফংশনের ভিতরে যাওয়ার পরে এরর দেখাবে

```php

<?php

class hello
{
    public function sayHello()
    {
        echo "hello ashik";
    }
}

class bye
{
    public function sayBye()
    {

        echo "bye ashik";
    }
}

function dekhbo($name){
    $name->sayHello();
}

$test = new bye(); 
dekhbo($test); 
?>

```

উপরের কোডে এরর দেখাবে কারন
$test = new bye(); দিয়ে bye class এর অবজেক্ট বানাইছে আর bye class এ sayHello() নামে কোনো মেথড নাই।

সেজন্য dekhbo($test); কল করলে এরর দেখাবে কারন dekhbo ফাংশনটি যে আরগুমেন্ট গ্রহন করবে তাতে অবশ্যই  sayHello() নামে  মেথড থাকা লাগবে।

যেহেতু  $name->sayHello(); আছে আর sayHello() মেথডটি hello class আছে সুতরাং এটি তখনই কাজ করবে যখন অবজেক্টটি হবে hello class এর।

```php

<?php

class hello
{
    public function sayHello()
    {
        echo "hello ashik";
    }
}

class bye
{
    public function sayBye()
    {
        echo "bye ashik";
    }
}

function dekhbo($name){
    $name->sayHello();
}

$test = new hello();
dekhbo($test);
?>

```

উপরের কোডটি এবার রান করবে কারন hello ক্লাস এর অবজেক্ট dekhbo($test) এটাতে পাস করেছে বলে
নিচে টাইপ হিনটিং এর উদাহরন দেয়া হলো

## নিচে টাইপ হিনটিং করে দেখানো হলো অন্য ক্লাসের অবজেক্ট পাস করার চেষ্টা করলে কিভাবে ফাংশন প্যারামিটার রিসিব করার সময়ই এরর দেখায়

```php

<?php

class hello
{
    public function sayHello()
    {
        echo "hello ashik";
    }
}

class bye
{
    public function sayBye()
    {
        echo "bye ashik";
    }
}

function dekhbo(hello $name){
    $name->sayHello();
}

$test = new bye();
dekhbo($test);
?>

```
