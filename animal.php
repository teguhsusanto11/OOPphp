<?php
class Animal{
    public $leg = 2;
    public $cold_blooded = false;

    public function __construct($name){
        $this -> name = $name;
    }
    function getName(){
        echo $this -> name;
    }
}


?>