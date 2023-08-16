<?php
require_once 'connect.php';
<<<<<<< HEAD

function get_base_directory(): string
{
    return '/' . basename(__DIR__);
}

=======
>>>>>>> 28d1ccfc6f5cb8c5da26bbfede302f01c52c1334
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
<<<<<<< HEAD

    return true;
}
=======
    endif;
}
>>>>>>> 28d1ccfc6f5cb8c5da26bbfede302f01c52c1334
