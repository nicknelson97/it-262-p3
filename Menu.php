<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Menu {
    public $name = "";
    public $price = 0;
    public $desc = "";
    public $image = "";
    public $qty = 0;
    //public $extra = 0;
    
     public function __construct($name,$price,$desc,$image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
        $this->image = $image;
        $this->qty = 0;
        //$this->extra = 0;
    }
}

    $items[] = new Menu("Salmon-Bowl",8.00,"Brown rice, soy sauce, avocado, chili garlic sauce, salmon fillets","includes/images/poke300x376.png");
    $items[] = new Menu("Salmon-Taco",4.00,"Salmon, corn tortillas, lime, red onion, olive oil","includes/images/taco300x376.jpg");
    $items[] = new Menu("Salmon-Poke",9.00,"Sockeye salmon, plain greek yogurt, apple cider vinegar, soy sauce, sesame oil","includes/images/bowl300x376.jpg");