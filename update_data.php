<?php
    include('config.php');

    // update
    $sql = "UPDATE users SET name = :name, email = :email 
            WHERE id = :id";

    $query = $dbcon->prepare($sql);

    //เตรียมค่า
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_STR);

    //ค่า
    $name = "HeyAmTeeTime";
    $email= "Mynameis@gmail.com";
    $id = 1 ;

    $query->execute(); //ประมวลผล
    if($query->rowCount() > 0) {
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
    } else {
        echo "<script>alert('ผิดพลาด');</script>";
    }

?>