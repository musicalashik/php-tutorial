# php modifier

protected modifier যে প্রোর্পাটি বা মেথড  এ দেয়া হয় সেগুলি সরাসরি অবজেক্ট বানিয়ে ক্লাসের বাহিরে থেকে ব্যবহার করা যায়না

প্যারেন্ট ক্লাস কিংবা চাইল্ড ক্লাস থেকে ব্যবহার করা যায়।

আর private modifier ক্ষেত্রে শুধু সেল্ফ ক্লাস থেকেই ব্যবহার করা যায়।

```php

<?php

class BabaClass
{
    protected $name;
    private $age;
    protected $occupation;
    protected function setInfo($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    function viewInfo(): string
    {
        return sprintf("name is %s age: %s occupation : %s", $this->name, $this->age, $this->occupation);
    }
}

class CheleClass extends BabaClass
{
    // here using this method we set info into private property age value and also protected $name and $occupation
    public function setter($name, $age, $occupation = NULL)
    {
        
        $this->setInfo($name, $age, $occupation);
    }
}

$obj1 = new CheleClass();
$obj1->setter("anik", 24, "teacher");
echo $obj1->viewInfo();
?>
```
