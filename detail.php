<?php
    require_once("connDB.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $id = $_POST["id"];
    $sql = "UPDATE `student` SET 
        name = '$name',
        phone = '$phone',
        mail = '$mail'
        WHERE id = ".$id;
    mysqli_query($conn,$sql);
    header("location:delete-table.php");
?> 