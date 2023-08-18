<?php
require_once '../connect.php';

if (!isset($_GET['delete_id'])) {
    header('Location: ../products.php');
}

$delete_id = $_GET['delete_id'];

$stmt = $con->prepare('DELETE FROM items where id = ?');
$stmt->bind_param('i', $delete_id);
if ($stmt->execute()) {
    header('Location: ../products.php');
}
?>