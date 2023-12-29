<?php


class Employee{
    public $name,$age, $sallery;
    function __construct($emp_name,$emp_age,$emp_sallery){
        $this->name = $emp_name;
        $this->age = $emp_age;
        $this->sallery = $emp_sallery;

    }

    function info(){
        echo "Employe name is $this->name and age $this->age  and sallery $this->sallery";
    }
}


class Manager extends Employee{

    public $phone_bill = 500;
    public $house_bill = 5000;
    public $total_sallery;
    function info(){
        $this->total_sallery = $this->sallery + $this->phone_bill + $this->house_bill;

        echo "Employe name is $this->name and age $this->age  and sallery $this->total_sallery";
    }
}

$emp1 = new Manager("ashik",26,"40000");

$emp1->info();