<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Menu {
    public $name = "";
    public $price = 0;
    public $desc = "";
    public $qty=0;
    
     public function __construct($name,$price,$desc)
    {
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
        $this->qty = 0;
        
    }
}

    $items[] = new Menu("item1",1.00,"This is the item description");
    $items[] = new Menu("item2",5.00,"second item");
    $items[] = new Menu("item3",4.00,"second item");