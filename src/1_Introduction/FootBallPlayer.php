<?php
class FootBallPlayer
{

public $name;
public $position;

public function _construct($name,$position)
{
    $this ->name =$name;
    $this ->position =$position;
}

}
$playerA =new FootBallPlayer("Nova","Striker");
$playerB =new FootBallPlayer("SokMeng","MidField");
var_dump($playerA->name );// Nova
var_dump($playerB);//SokMeng