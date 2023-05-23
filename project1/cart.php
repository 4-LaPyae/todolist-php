
<?php
session_start();

$products = ["product1","product2","product3","product4"];
$price = [100,200,300,400];
if (isset($_GET['buy'])) {
    $_SESSION['cart'][] = $_GET['buy'];
    header('location:'.$_SERVER['PHP_SELF']);
    exit();
}
if(isset($_SESSION['cart']) ){
    print_r(($_SESSION['cart']));
}
?>
<html>

<body>
<?php
    if(isset($_SESSION['cart'])){
        echo "<p>".count($_SESSION['cart'])."</p>";
    }else{
        echo "<p>0</p>";
    }
    for($i=0;$i<count($products);$i++){
        echo "<tr>";
        echo "<td>".$products[$i]." "."</td>";
        echo "<td>".$price[$i]."</td>";
        echo "</tr>";
        echo " ";
        echo "<td><a href=".$_SERVER['PHP_SELF']."?buy=".$i.">Add To Cart</a></td>";
        echo "<br>";
    }
    
?>
<a href="./view.php">view</a>
</body>
</html>