<?php
include '../database/Database.php';

/*if ($_SERVER['REQUEST_METHOD' == 'POST']) {*/
    $value = $_POST['search'];
    $sql = "SELECT * FROM customers WHERE name LIKE '%$value%'";
/*}*/
$database = new Database();
$conn = $database->connect();
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
<table id="customers" border="1" style="border-collapse: collapse; width: 800px">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
    </tr>
    <?php foreach ($customers as $key => $customer): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['email'] ;?></td>
            <td><?php echo $customer['phone'] ;?></td>
            <td><?php echo $customer['address'] ;?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
