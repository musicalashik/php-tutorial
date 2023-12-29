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