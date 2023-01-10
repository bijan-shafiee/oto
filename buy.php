<?php
session_start();
include 'db.php';
@$userid = $_SESSION['id'];
$username=$_GET['u'];
$carsid=$_GET['i'];
$carsname=$_GET['n'];


if(isset($_SESSION['login'])){
$insert=$conn->prepare("INSERT INTO `order`  SET `userid`= ?, username=? ,carsid=? , carsname=? ");
$insert -> bindValue(1,$userid);
$insert -> bindValue(2,$username);
$insert -> bindValue(3,$carsid);
$insert -> bindValue(4,$carsname);
$insert -> execute();
header('location:index.php');
echo "سفارش موفق";
}else{
    echo "سفارش ناموفق.لطفا اول وارد حساب کاربری خود شوید";
    
}

?>