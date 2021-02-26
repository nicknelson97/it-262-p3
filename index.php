<?php
include('includes/header.php');
include('Menu.php');


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




?>
  
<div>
    <fieldset name="itemList">
    <legend>Fresh Salmon Menu</legend>
        
        <form action="" method="post">
            
        
        <?php 
            foreach($items as $item){
                echo '
                    <img src="'.$item->image.'" alt="'.$item->name.'">
                    <h3>'.$item->name.'</h3>
                    <p>$'.$item->price.' - ' .''.$item->desc.'</p><br>
                    <select name="'.$item->name.'" required title="0" tabindex="15">
                    <option value="0">Quantity</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                <br><br>';
                
                if(isset($_POST[$item->name])){
                    $item->qty = intval($_POST[$item->name]);
                }
                //if(isset($_POST['extras'])){
                //    $item->extra = intval($_POST['extras']);
                //}
            }
        ?>
        <br><br><input type="submit" value=" Checkout Total ">
            
        </form>
        
    </fieldset>
    </div>

    <div>
    <fieldset name="selectedItems">
    <legend>Checkout</legend>
        <h2>Items ordered: <br><br></h2>
        <?php 
            foreach($items as $item){
                //if(isset($_POST[$item->qty])){
                    if($item->qty > 0){
                        echo ''.$item->qty.'x&nbsp;&nbsp;'.$item->name.'<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$'.($item->price * $item->qty).'<br>'
                            
                        
                        ;
                    //}
                }
            }
        $total = 0;
        foreach($items as $item){
                    $sub = $item->price * $item->qty;
                    $total = $total + $sub;
                }
        ?>
        <h2><br>Sub total:<br>
           <?php echo '<p>$'.round(($total), 2).'</p>'; ?>
        </h2>
        <h2><br>Tax:<br>
            <?php echo '<p>$'.round(($total * .101), 2).'</p>'; ?>
        </h2>
        <h2><br>Your Total: 
            <?php echo '<p>$'.round(($total * 1.101), 2).'</p>'; ?>
        </h2>
            </fieldset>
    </div>
<?php include('includes/footer.php'); ?>
