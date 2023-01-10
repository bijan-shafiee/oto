<?php 
    $id=$_GET['id'];
    include '../db.php';
    $delete=$conn->prepare('DELETE FROM users WHERE id =?');
    $delete -> bindValue(1,$id);
    $delete -> execute();
    header('location:listuser.php');
?>