<?php
    require_once("connDB.php");

    $sql = "SELECT * FROM `student`";
    $result = mysqli_query($conn,$sql);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, td{
            border:1px solid #000;
            border-collapse:collapse;
            padding:15px; 
        } 
    </style>
</head>
<body>
     <table>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>    
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["phone"];?></td>
                <td><?php echo $row["mail"];?></td>
            </tr>
        <?php  
            }   
        ?>
     </table>
</body>
</html>