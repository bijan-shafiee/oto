<?php 
    $id=$_GET['id'];
    include '../db.php';
    $delete=$conn->prepare('DELETE FROM cars WHERE id =?');
    $delete -> bindValue(1,$id);
    $delete -> execute();
    header('location:listcars.php');
?>