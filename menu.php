<?php
include_once('config.php');


$testItem1 = new testClass("item1",1.00,"first item");
$testItem2 = new testClass("item2",5.00,"second item");
$testItem3 = new testClass("item3",4.00,"second item");


$menu[$testItem1 -> name] = $testItem1 -> price;
$menu[$testItem2 -> name] = $testItem2 -> price;
$menu[$testItem3 -> name] = $testItem3 -> price;

function makeItems($menu){ //populates the menu
    $myReturn = '';
    foreach($menu as $key => $value) {
            $myReturn .= '
            <input type="checkbox" id="'.$key.'" name="item[]"    value="'.$key.'">'.$key.''. //creates the checkbox and displays the name of the item (ie. item1, item2, etc.)
            
            '&nbsp;&nbsp;&nbsp;'.
            
            '<input type="hidden"   id="'.$key.'Value" name="itemValue[]" value="'.$value.'">$'.$value.'<br>'. //displays the price and stores the items price value ($1, $5, $4)
            
            '&nbsp;&nbsp;&nbsp;&nbsp; Amount: '.
            
            '<input type="number" id="'.$key.'Amount" name="itemAmount[]" min="1" max="10">  <br>'//will store the amount of product desired, currently unused in index
            ;

    }
    return $myReturn;
}