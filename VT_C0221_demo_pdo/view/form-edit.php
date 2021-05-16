<?php
/*include_once '../database/Database.php';
$database = new Database();
$conn = $database->connect();
$id = $_GET['id'];
$name = "SELECT name FROM customers WHERE id = $id";*/
/*$stmt = $conn->query($name);*/
/*$customer = $stmt->fetch($id);*/
include_once "../database/Database.php";

$database = new Database();
$conn = $database->connect();

// b1: viet lenh sql
$id = $_GET['id'];

$sql = "SELECT name,email,phone,address from customers WHERE id=$id";

/*$name = "SELECT name FROM customers WHERE id = $id";*/

// b2: Vi la cau lenh select -> thuc thi cau lenh

$stmt = $conn->query($sql);
$customers = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="../function/update.php?id=<?php echo $id ?>" method="post">
    Tên: <input type="text" name="name" value="<?php echo $customers[0]['name']; ?>" ">
    SDT: <input type="number" name="phone" value="<?php echo $customers[0]['phone']; ?>">
    Email: <input type="email" name="email" value="<?php echo $customers[0]['email']; ?>">
    Địa chỉ: <input type="text" name="address" value="<?php echo $customers[0]['address']; ?>">
    <input type="submit" value="Submit">
</form>
</body>
</html>