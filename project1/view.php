<?php
session_start();

if(!isset($_GET['buy']) ){
   session_destroy();
}

//print_r($_SESSION['cart']) ;
$products = ["product1","product2","product3","product4"];
$price = [100,200,300,400];

?>
<html>
    <?php
    $arr = [];
    if(isset($_SESSION['cart'])){
        foreach ($_SESSION['cart']  as $s){
            array_push($arr,$price[$s]);
            echo "<tr>";
            echo "<td>".$products[$s]. " "."</td>";
            echo "<td>".$price[$s]. " "."</td>";
            echo "<br>";
            echo "</tr>";
    
        }
    }
    
    echo "<h2>".array_sum($arr)."</h2>";
    echo "<a href=".$_SERVER['PHP_SELF'].">Empty</a>";
    
    ?>
    <a href="./cart.php">back cart</a>
    
</html>