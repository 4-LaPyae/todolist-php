<?php

$host="localhost";
$dbname="exercies";
$username = "root";
$password = "password";
$db_option =[
    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
];

function getConnection()
{
    global $host;
    global $dbname;
    global $username;
    global $password;
    global $db_option;
    try {
        $connect = new PDO("mysql:host=$host;dbname=$dbname",$username,$password,$db_option);
        return $connect;
    } catch (Exception $th) {
        echo  $th->getMessage();
    }
}

//getConnection();

