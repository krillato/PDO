<?php

    include('config.php');
    
    $sql = "DELETE FROM users WHERE id = :id";
    
    $query = $dbcon->prepare($sql);

    $query->bindParam(':id', $id , PDO::PARAM_STR);
    $id = 2;

    $query->execute();
    if($query->rowCount() > 0){
        echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
    } else {
        echo "<script>alert('ผิดพลาด');</script>";
    }
    
?>