<?php
$result ="";

$dbHOST= "localhost";
$dbName= "productdb";  
$dbChar= "utf8";
$dbUser = "root";
$dbPass = "";

try{
$pdo = new PDO (
"mysql:host = $dbHost ; dbname=$dbName;charset=$dbChar",

$dbUser ,$dbPass ,[PDO::ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION]);}

catch (Exception $ex){
    $result = $ex -> getMessage();
}

if ($result == "" ){
    try {
$stmt =$pdo -> prepare ("INSERT INTO `orders` (`name`,`phoneNumber` ,` address` ) VALUES (?,?,?) ");
$stmt ->execute ([
    $_POST['name'], $_POST['phoneNumber'],$_POST['address']]);
    }
    catch (Exception $ex){
    $result = $ex -> getMessage();

}
}