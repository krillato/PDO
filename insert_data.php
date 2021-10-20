<?php
    include('config.php');

    //ป้องกันการเจาะข้อมูล Injection ด้วย PDO
    $sql = "INSERT INTO users(name, email, date) VALUES(:name, :email, :date)";
    $query = $dbcon->prepare($sql);  // การเตรียมประมวลผล
    $query->bindParam(':name', $name, PDO::PARAM_STR); //การแทนที่ค่าตัวแปร $name ลงไปเก้บใน :name ใช้ PDO ในการป้องกัน
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':date', $date, PDO::PARAM_STR);

    $name = 'TeeTime2';
    $email='Time@gmail.com';
    $date = date('Y-m-d');

    $result = $query->execute(); // แทรกลงไปในตาราง
    if($result) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ');</script>";
    } else {
        echo "<script>alert('ผิดพลาด');</script>";
    }

?>