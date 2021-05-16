<?php
include_once '../database/Database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $database = new Database();
    $conn = $database->connect();
    $sql = "insert into customers(name,email,phone,address) value('$name','$email',$phone,'$address');";
    echo $sql;
    $conn->query($sql);
    header('location: ../index.php');
}