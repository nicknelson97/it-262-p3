<?php
include('Menu.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en-us">
    
    <fieldset name="itemList">
    <legend>This is my product list</legend>
        
        <form action="" method="post">
            
        
        <?php 
            foreach($items as $item){
                echo '
                    <h3>' . $item->name . '</h3>
                    <p>' . $item->desc . ' - ' . '$' . $item->price .'</p><br>
                    <select name="'. $item->name . '" required title="0" tabindex="15">
                    <option value="0">Quantity</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                ';
                if(isset($_POST[$item->name])){
                    $item->qty = intval($_POST[$item->name]);
                }
            }
        ?>
        <input type="submit" value="Total">
            
        </form>
        
    </fieldset>
    
    <fieldset name="selectedItems">
    <legend>Selected Items</legend>
        <h2>You Chose:
        <?php 
            
        ?>
        <h2>Your Total: 
            <?php 
                $total = 0;

                foreach($items as $item){
                    $sub = $item->price * $item->qty;
                    $total = $total + $sub;
                }
            ?>
        <h2>
        <?php echo '<p>$' . $total . '</p>'; ?>
    </fieldset>
    
</html>
