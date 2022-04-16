<?php

include_once("../config.php");

$id = $_GET['id'];



$sql = "DELETE FROM message WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: message.php");
} else {
    header("Location: message.php");
}

$conn->close();

?>