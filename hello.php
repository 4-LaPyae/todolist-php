<?php
//  $name = 'username';
//  $value = 'thwal';
//unset($_COOKIE['username']);
 
 //setcookie("username", "", time() - 3600);
 session_start();

?>
<html>
    <?php 
    // if(!isset($_COOKIE[$name])){
    //     echo "cookie is not set";
    // }else{
    //     echo "cookie name is ".$name ."<br>";
    //     echo "cookie value is ".$value;
    // }
    ?>
    <?php
    $_SESSION['user'] = 'mgmg';
    $_SESSION['age'] = 23;
    echo $_SESSION['age'];
    //delete session
   // session_destroy();
    ?>
</html>
