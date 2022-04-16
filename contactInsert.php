<?php


include_once("header.php");

// define variables and set to empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $gender = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = $_POST["message"];
  }


    $sql = "INSERT INTO message (name, email, message)
    VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        
        header("Location: index.php");
    }

    $conn->close();

    include_once("footer.php");


  
}
?>