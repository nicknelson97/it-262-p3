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

    $items[] = new Menu("item1",1.00,"first item");
    $items[] = new Menu("item2",5.00,"second item");
    $items[] = new Menu("item3",4.00,"second item");


    // $menu[$item1 -> name] = $item1 -> price;
    // $menu[$item2 -> name] = $item2 -> price;
    // $menu[$item3 -> name] = $item3 -> price;

    // function makeItems($menu){ //populates the menu
    //     $myReturn = '';
    //     foreach($menu as $key => $value) {
    //             $myReturn .= '
    //             <input type="checkbox" id="'.$key.'" name="item[]"    value="'.$key.'">'.$key.''. //creates the checkbox and displays the name of the item (ie. item1, item2, etc.)
                
    //             '&nbsp;&nbsp;&nbsp;'.
                
    //             '<input type="hidden"   id="'.$key.'Value" name="itemValue[]" value="'.$value.'">$'.$value.'<br>'. //displays the price and stores the items price value ($1, $5, $4)
                
    //             '&nbsp;&nbsp;&nbsp;&nbsp; Amount: '.
                
    //             '<input type="number" id="'.$key.'Amount" name="itemAmount[]" min="1" max="10">  <br>'//will store the amount of product desired, currently unused in index
    //             ;

    //     }
    //     return $myReturn;
    // }