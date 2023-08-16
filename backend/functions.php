<?php
require_once 'connect.php';
function get_base_directory(): string
{
    return '/' . basename(__DIR__);
}

function is_admin()
{
    global $con;

    if (!isset($_SESSION['user_id']))
        return false;
    $stmt = $con->prepare('SELECT * FROM user_roles WHERE user_id = ?');
    $stmt->bind_param('i', $_SESSION['user_id']);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return true;
    }

    return false;
}
function is_login()
{
    if (isset($_SESSION['user_id'])) :
        return true;
    else :
        return false;
    endif;
}

function get_user_id()
{
    $user_id = $_SESSION['user_id'];
    return $user_id;
}
function get_user_name($customer_id)
{
    global $con;
    $stmt = $con->prepare("SELECT * FROM user_info WHERE id = ?");
    $stmt->bind_param("i", $customer_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $customer_name = $row['First_name'];
        }
    }
    return $customer_name;
}
function get_product_name($product_id)
{
    global $con;
    $stmt = $con->prepare("SELECT * FROM items WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $product_name = $row['item_name'];
        }
    }
    return $product_name;
}
