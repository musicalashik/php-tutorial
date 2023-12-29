<?php

// here shown simple example of class and object 

class Human
{
    public $name, $age, $food, $height, $weight, $looks, $occupation;

    public function about()
    {

        return sprintf(
            "His/her Name: %s , Age: %s , favourite food: %s,  height: %0.1f , weight: %s , looks: %s, occupation: %s ",
            $this->name,
            $this->age,
            $this->food,
            $this->height,
            $this->weight,
            $this->looks,
            $this->occupation
        );
    }
}


$teacher = new Human();

$teacher->name = "ashik";
$teacher->age = 26;
$teacher->food = "Vegetables";
$teacher->height = 5.6; // float data use here
$teacher->weight = "60kg";
$teacher->looks = "Brighter Skin";

echo $teacher->about();
?>


<?php

// here show above example with using consturctor method

class Human2
{
    public $name, $age, $food, $height, $weight, $looks, $occupation;

    function __construct($name,$age,$food = NULL,$height = NULL,$weight = NULL,$looks = NULL, $occupation = NULL)
    {
        $this->name = $name;
        $this->age = $age;
        $this->food = $food;
        $this->height = $height;
        $this->weight = $weight;
        $this->looks = $looks;
        $this->occupation = $occupation;
    }


    public function about()
    {

        return sprintf(
            "His/her Name: %s , Age: %s , favourite food: %s,  height: %0.1f , weight: %s , looks: %s, occupation: %s, ",
            $this->name,
            $this->age,
            $this->food,
            $this->height,
            $this->weight,
            $this->looks,
            $this->occupation
        );
    }
}


$teacher = new Human2("ashik",26,"Vegetables",5.6,"65kg","natural beuty");

// $teacher->name = "ashik";
// $teacher->age = 26;

// $teacher->height = 5.6; // float data use here
// $teacher->weight = "60kg";
// $teacher->looks = "Brighter Skin";

echo $teacher->about();
