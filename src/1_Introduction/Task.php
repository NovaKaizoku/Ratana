<?php

class Task
{
    public $description;
    public $isCompleted =false ; 
    public function _construct($description)
    {
        $this ->description  =$description;
    }
    public function complete ()
    {
        $this->isCompleted =true;
    }
   
}
$task1=new task ("Learn OOP");
$task2 =new task ("Learn PHP");
var_dump($task1);
var_dump($task1->description);

var_dump($task2);
var_dump($task2->description);
$task2 ->complete();
var_dump($task2->isCompleted);