# abstract class indepth information

abstract class হলো প্রটেক্টেট ক্লাস  এটির কোন অবজেক্ট বানানো যায়না

একটি abstract class এ কমপক্ষে একটি অবস্ট্রাক্ট মেথড বানাতে হয়;
মেথড টির বডি লেখা যায়না শুধু ডিক্লেয়ারেশন লেখা লাগে পরবর্তীতে যে ক্লস এ এটি inherit করা হয় ঐ ক্লাসে এটির কোড ব্লক বা definition লিখা লাগে

যেমন abstract protected function show(); এটি কিন্তু সরাসরি {} দিয়ে না লিখে প্যারেনথিসিস এর পর কমা দিয়ে ডিক্লেয়ার করা হয়েছে।

```php

<?php

abstract class ParentClass {
    protected $name;

    abstract protected function show();

    protected function set_name($n) {
        $this->name = $n;
    }
}

class ChildClass extends ParentClass {
    protected function show() {
        echo $this->name;
    }

    public function input_name($name){
        $this->set_name($name);
    }

    public function show_name(){
        $this->show();
    }
}

$obj = new ChildClass();
$obj->input_name("ashik");
$obj->show_name();

?>


```

উপরের কোডে যদি সরাসরি $obj->set\_name("ashik"); এবং $obj->show();
স্টেটমেন্ট লিখতাম ক্লাস এর বাহির থেকে তাহলে
এটি কাজ করতোনা
কারণ কোনো protected function অথবা property কে ক্লাস এর বাহিরে থেকে এক্সেস করা যায়না
কারণ ক্লাস এর বাহিরে থেকে কোন property অথবা function কে কল করলে এটা তখন global scop এ থাকে
কিন্তু protected access modifier এর আওতা হলো parent class or child class

এবং প্রাইভেট হলো self class scope মানে যেই ক্লাস থেকে function অথবা property কে বানানো হবে সেই ক্লাসের ভেতরে এর access থাকবে
