<?php
    require_once("connDB.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM `student`WHERE id = ".$id;
    mysqli_query($conn,$sql);
    // echo $id; 
    header("location:delete-table.php");
?> 