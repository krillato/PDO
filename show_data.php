<?php
    include('config.php');

    $sql = "SELECT * FROM users WHERE email = :email";
    $query = $dbcon->prepare($sql);
    

    // การค้นหาแบบเจาะจง
    $query->bindParam(':email',$email, PDO::PARAM_STR);
    $email = "Time@gmail.com";
    
    //ทำงาน
    $query->execute();

    // fetch ข้อมูลทั้งหมดมาในรูปแบบ object
    $result = $query->fetchAll(PDO::FETCH_OBJ); 

    if($query->rowCount() > 0){
        foreach ($result as $res){
            echo $res->name . "<br>";
            echo $res->email . "<br>";
            echo $res->date . "<br>";
        }
    }


?>