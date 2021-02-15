<?php
include_once('menu.php');

class testClass {
    public $name = 'a';
    public $price = 0;
    public $desc = "";
    
     public function __construct($name,$price,$desc)
    {
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
        
    }

}