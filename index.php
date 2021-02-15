<?php
include_once('config.php');
include_once('menu.php');
?>

<!DOCTYPE html>
<html lang="en-us">
    
    <fieldset name="itemList">
    <legend>This is my test product list</legend>
        
        <form method="post">
            
        <?php echo makeItems($menu);   ?> <!-- creates the menu items-->
        
        <input type="submit" value="Submit" name="submit">
            
        </form>
        
    </fieldset>
    
    <fieldset name="selectedItems">
    <legend>Selected Items</legend>
        
        <?php

        $itemValue = $_POST['itemValue'];
        $total = 0;
        
        if(isset($_POST['submit'])){
            //foreach($menu as $key => $value){
            if(!empty($_POST['item'])) {
                
                foreach($_POST['item'] as $key => $value ) {
                    echo "".$value.'<br>';
                    //echo "".$key.'<br>';
                    echo "$".$itemValue[$key].'<br>';
                    $total += $itemValue[$key];
                }//end foreach
                    
            }//end if empty
        }//end if isset
    
        $tax = $total * .065;
        ?>
        
    <label>Total: $<?php echo round(($total + $tax), 2) ; ?></label>
    </fieldset>
    
</html>