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



/*
$obj->set_name("ashik"); 
$obj->show();

ata vull asbe karon class ar bahire theke protected method ke direct call korle 
ata global scop ar theke call hoye jay bole ata kaj korbena

protected class ke oboshoi class ar vitore call kora lage

sorasori outside of  class call kora jayna

*/

?>
