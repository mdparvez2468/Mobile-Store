<?php

include_once("config.php");

$id = $_GET['id'];

echo $id;


$sql = "SELECT 8 FROM cart WHERE product_id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    header("Location: index.php");
  
} else {

    $sql = "INSERT INTO cart (product_id) VALUES ('$id')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }
 
}



$conn->close();

?>