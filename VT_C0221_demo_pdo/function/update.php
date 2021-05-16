<?php
include_once '../database/Database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $database = new Database();
    $conn = $database->connect();
    $sql = "UPDATE customers SET name = '$name', email = '$email', phone = $phone, address = '$address' WHERE id =$id ";
    $conn->query($sql);
    header('location: ../index.php');

/*include_once '../database/Database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $database = new Database();
    $conn = $database->connect();
    $sql = "UPDATE customers SET name = '$name', email = '$email', phone = $phone, address = '$address' WHERE id =$id ";
    echo $sql;
    $conn->query($sql);
    header('location: ../index.php');*/
}