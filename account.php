<?php

include_once("header.php");


if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {

    $email = $_SESSION['email'];                                        
    $sql = "SELECT * FROM reg_user WHERE user_email='$email'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user_name = $row["first_name"] . " " . $row["last_name"];
        $user_email =  $row["user_email"];

    }
    } else {
        header("Location: login.php");
    }
    $conn->close();
}else{
    header("Location: login.php");
}




?>


<div class="card m-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/hero-bg.jpg" class="rounded-circle m-4" alt="Cinque Terre " width="200" height="200">
      <form action="uploadImage.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title"><?php echo $user_name ?></h4>
        <h5 class="card-title"><?php echo $user_email ?></h5>
      </div>
    </div>
  </div>
</div>


<?php

include_once("footer.php");

?>