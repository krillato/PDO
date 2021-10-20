<?php

    $servername = "localhost";
    $username = "root";
    $userpass = "";
    $dbname = "pdo_db";

    try {
        $dbcon = new PDO("mysql:host=$servername; dbname=$dbname", $username, $userpass);
        // ตั้งค่า PDO err mode to exception
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connect to database sucessful";
    } catch(PDOException $e) { //ดักจับ err
        echo "Faild to connect to database  :" . $e->getMessage();
    }

?>