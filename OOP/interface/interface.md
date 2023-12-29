# interface in php oop

interface php তে আসলে মেথডের হিসাব রাখার জন্য ব্যবহার করা হয়
যেমন একটি প্রোগ্রামে অনেক মেথড ব্যবহার করা লাগে সুতরাং সেই মেথড গুলির ক্যাটাগরি অনুযায়ী লিস্ট করে রাখলে,
পরে যদি এটির একটি মেথড ও বাকি থাকে আর প্রোগ্রাম এরর দিয়ে বলে দেয়। যে আপনি ঐরকম মেথড টি define করেনি
যেটি আপনি interface বা কাজের লিস্টে এড করেছেন, তাহলে গুছিয়ে একটি বড় প্রোগ্রাম সম্পন্ন করতে সুবিধা হতো।

তাই interface এ যে মেথড গুলি ডিক্লেয়ার করা হয় ‍সেগুলি abstract class এর  abstract method এর  মতো define করা লাগে
তবে পার্থক্য হলো  abstract clas কমপক্ষে একটি   abstract method থাকা লাগে কিন্তু interface এ যে মেথড গুলি আছে সবগুলির শুধু declaration থাকে
কিন্তু definition টা  derived class এ implement করা লাগে

আবার interface যেহেতু মেথড সমুহের হিসাব রাখার লিস্টের মতো তাই এটির কোনো অবজেক্ট বানানো যায়না
এবং এটিতে ফাংশনের সামনে access modifier ব্যবহার করা যায়না নরমাল ফাংশন ডিক্লায়ারেশন যেমন function add($a,$b);
এরকম করে লেখা হয়।  abstract class ইনহেরিট করার জন্য extends keyword আর ইন্টারফেইসে interface কে implement করার জন্য implements keyword

আবার interface এ কোনো property থাকেনা কারন আগেই বলেছি এটি ভবিষ্যতের কী কী মেথড তৈরী হবে তার  লিস্ট

নিচে interface এর উদাহরণ

```php

<?php

interface morning_work_list{

  function washing($clothes_list);

}


interface night_work_list{

  function video_making($topic_list);


}


class ChildClass implements morning_work_list, night_work_list{

  // here implement washing method 
    public function washing($clothes_list){
        echo $clothes_list;
    }

 // here implement video_making method
    public function video_making($topic_list){
       
        echo $topic_list;
        
    }

}

$obj = new ChildClass();

$obj->washing("pent, shirt");
$obj->video_making("music tutorial, programing with wasm");

?>

```

উপরের কোডে class ChildClass implements morning_work_list, night_work_list এই অংশটুকুর মানে হলো morning_work_list এবং night_work_list দুটি ইন্টারফেইস ব্যবহার করেছি তাই মাঝখানে কমা দিয়েছি।
