<?php

include_once("config.php");

$id = $_GET['id'];

echo $id;


$sql = "DELETE FROM cart WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: cart.php");
} else {
    header("Location: cart.php");
}

$conn->close();

?>