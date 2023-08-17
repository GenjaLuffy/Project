<?php
require_once './functions.php';
require_once './connect.php';

// if (!is_admin()) 
//     header("Location: admin.php");

if (!isset($_GET['id']) && !isset($_GET['status']))
    header('Location: product.php');

$id = $_GET['id'];
$status = $_GET['status'];

$stmt = $con->prepare('UPDATE orders SET status = ? WHERE id = ?');
$stmt->bind_param('si', $status, $id);
if ($stmt->execute()) {
    echo '<script>alert("Order update successfully");</script>';
    header('Location: product.php');
}
