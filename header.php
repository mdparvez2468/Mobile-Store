
<?php

include_once("config.php");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Mobile Store</title>
</head>

<body>

    <div class="container bg-light">
        <!-- header section -->
        
        <br />
        <header id="header" class="header bg-primary">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light">

                <a href="index.php" class="navbar-brand">
                    <h1 class="navbar-brand-h1">Mobile Store</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2 nav-active">
                            <a href="index.php" class="nav-link">HOME</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="about.php" class="nav-link">ABOUT US</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="contact.php" class="nav-link">CONTACT</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="authCheck.php" class="nav-link">


                                <?php 
                                
                                    session_start();
                                    if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                                        
                                        echo "LOGOUT";
                                    }else{
                                        echo "LOGIN/REGISTER";
                                    }

                                  

                                ?>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <div class="navbar-icons d-none d-lg-flex">
                    
                    <!-- single icon -->
                    <a href="cart.php" class="navbar-icon mx-2 navbar-cart-icon">
                        <i class="fas fa-shopping-cart"></i>


                        <div class="cart-items">

                        <?php

                            $sql = "SELECT * FROM cart";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            echo $result->num_rows;
                            } 



                        ?>




                        </div>
                    </a>
                    <!-- end of  single icon -->
                    <!-- single icon -->
                    <a href="account.php" class="navbar-icon mx-2 navbar-cart-icon">
                    <i class="fas fa-user"></i>
                    </a>
                   
                    <!-- end of single icon -->
                </div>
            </nav>
            <!-- end of navbar -->

        </header>
        <!-- end of header section -->
