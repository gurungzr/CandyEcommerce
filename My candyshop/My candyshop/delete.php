<?php 
include "connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sqlQuery = "DELETE FROM `users` WHERE id = $id";

    if ($connection->query($sqlQuery) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error deleting user!";
    }
} else {
    echo "ID parameter not provided!";
}

$connection->close();
?>
