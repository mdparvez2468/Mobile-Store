<?php

include_once("header.php");


?>


        <!-- product section  -->
        <section id="products" class="products">
            <div class="container-fluid">
                <div class="row">
                    <!-- product info -->
                    <div class="col-10 mx-auto col-md-5 col-lg-3 text-capitalize my-3 px-5">
                        <!-- products categories -->
                        <div class="products-categories-title my-4">
                            <h6 class="text-uppercase">
                                shop by categories
                            </h6>
                            <div class="products-categories-underline"></div>
                        </div>
                        <!-- end of title -->
                        <!-- single link -->
                        <a href="index.php?brand=all" class="products-category-link d-block">
                            <p class="mb-0">
                            All
                            </p>
                        </a>
                        <a href="index.php?brand=samsung" class="products-category-link d-block">
                            <p class="mb-0">
                            Samsung
                            </p>
                        </a>
                        <a href="index.php?brand=apple" class="products-category-link d-block">
                            <p class="mb-0">
                            Apple
                            </p>
                        </a>
                        <a href="index.php?brand=oneplus" class="products-category-link d-block">
                            <p class="mb-0">
                            OnePlus
                            </p>
                        </a>
                        <a href="index.php?brand=xiaomi" class="products-category-link d-block">
                            <p class="mb-0">
                            Xiaomi
                            </p>
                        </a>
                        <a href="index.php?brand=realme" class="products-category-link d-block">
                            <p class="mb-0">
                            Realme
                            </p>
                        </a>
                        <a href="index.php?brand=vivo" class="products-category-link d-block">
                            <p class="mb-0">
                            Vivo
                            </p>
                        </a>
                        <a href="index.php?brand=oppo" class="products-category-link d-block">
                            <p class="mb-0">
                            Oppo
                            </p>
                        </a>
                        <a href="index.php?brand=nokia" class="products-category-link d-block">
                            <p class="mb-0">
                            Nokia
                            </p>
                        </a>
                        <a href="index.php?brand=itel" class="products-category-link d-block">
                            <p class="mb-0">
                            Itel
                            </p>
                        </a>
                        
                        
                        <!-- end of single link -->
                        <div class="products-categories-title my-4">
                            <h6 class="text-uppercase">
                                shop by price
                            </h6>
                            <div class="products-categories-underline"></div>
                        </div>
                        <!-- end of title -->
                        <form action="">
                            <div class="form-group">
                                <label for="price-range">Range : $0 - $1000</label>
                                <input type="range" class="form-control-range" id="price-range">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text form-icon">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control text-capitalize" placeholder="search by name">
                            </div>
                        </form>
                        <div class="products-categories-title my-4">
                            <h6 class="text-uppercase">
                                shop by color
                            </h6>
                            <div class="products-categories-underline"></div>
                        </div>
                        <!-- single color -->
                        <a href="index.php?color=black">
                            <p class="text-capitalize mb-0">
                                <span class="d-inline-block products-color products-color-black mr-2">
                                </span>
                                black 
                            </p>
                        </a>
                        <!-- end of single color -->
                        <!-- single color -->
                        <a href="index.php?color=red">
                            <p class="text-capitalize mb-0">
                                <span class="d-inline-block products-color products-color-red mr-2">
                                </span>
                                red 
                            </p>
                        </a>
                        <!-- end of single color -->
                        <!-- single color -->
                        <a href="index.php?color=blue">
                            <p class="text-capitalize mb-0">
                                <span class="d-inline-block products-color products-color-blue mr-2">
                                </span>
                                blue 
                            </p>
                        </a>
                        <!-- end of single color -->
                        <!-- single color -->
                        <a href="index.php?color=yellow">
                            <p class="text-capitalize mb-0">
                                <span class="d-inline-block products-color products-color-yellow mr-2">
                                </span>
                                yellow
                            </p>
                        </a>
                        <!-- end of single color -->
                        <!-- single color -->
                        <a href="index.php?color=green">
                            <p class="text-capitalize mb-0">
                                <span class="d-inline-block products-color products-color-green mr-2">
                                </span>
                                green
                            </p>
                        </a>
                        <a href="index.php?color=white">
                            <p class="text-capitalize mb-0">
                                <span class="d-inline-block products-color products-color-white mr-2">
                                </span>
                                white
                            </p>
                        </a>
                        

                        <!-- end of single color -->
                        <!-- end of title -->
                        <!-- end of products categories -->
                    </div>
                    <!-- end of product info -->
                    <!-- product img -->
                    <div class="col-10 mx-auto col-md-7 col-lg-9 my-3">
                        <div class="row">
                            <!-- single product -->
                            <?php
                            
                           

                                if (isset($_GET['brand'])){

                                    $brand = $_GET['brand'];

                                    if($brand=="all"){
                                        $sql = "SELECT * FROM products";

                                    }else if($brand=="samsung"){
                                        $sql = "SELECT * FROM products WHERE brand='Samsung'";
                                    }else if($brand=="apple"){
                                        $sql = "SELECT * FROM products WHERE brand='Apple'";
                                    }else if($brand=="oneplus"){
                                        $sql = "SELECT * FROM products WHERE brand='OnePlus'";
                                    }else if($brand=="xiaomi"){
                                        $sql = "SELECT * FROM products WHERE brand='Xiaomi'";
                                    }else if($brand=="realme"){
                                        $sql = "SELECT * FROM products WHERE brand='Realme'";
                                    }else if($brand=="vivo"){
                                        $sql = "SELECT * FROM products WHERE brand='Vivo'";
                                    }else if($brand=="oppo"){
                                        $sql = "SELECT * FROM products WHERE brand='Oppo'";
                                    }else if($brand=="nokia"){
                                        $sql = "SELECT * FROM products WHERE brand='Nokia'";
                                    }else if($brand=="itel"){
                                        $sql = "SELECT * FROM products WHERE brand='Itel'";
                                    }else{
                                        $sql = "SELECT * FROM products";
                                    }

                                }else if(isset($_GET['color'])){
                                    $color = $_GET['color'];

                                    if($color=="red"){
                                        $sql = "SELECT * FROM products WHERE color='Red'";

                                    }else if($color=="black"){
                                        $sql = "SELECT * FROM products WHERE color='Black'";
                                    }else if($color=="white"){
                                        $sql = "SELECT * FROM products WHERE color='White'";
                                    }else if($color=="blue"){
                                        $sql = "SELECT * FROM products WHERE color='Blue'";
                                    }else if($color=="green"){
                                        $sql = "SELECT * FROM products WHERE color='Green'";
                                    }else if($color=="yellow"){
                                        $sql = "SELECT * FROM products WHERE color='Yellow'";
                                    }else{
                                        $sql = "SELECT * FROM products";
                                    }

                                } else{
                                    $sql = "SELECT * FROM products";
                                }

                            
                            
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                
                                
                                ?>
                                    <div class="col-10 mx-auto col-md-6 col-lg-4">
                                        <div class="featured-container">
                                            <img src="<?php echo $row["image"] ?>" alt="" class="img-fluid">

                                            <a href="addCart.php?id=<?php echo $row["id"] ?>" class="featured-store-link text-capitalize">add to cart</a>
                                        </div>
                                        <h6 class="text-capitalize text-center my-2">
                                            <?php echo $row["name"] ?>
                                        </h6>
                                        <h6 class="text-center">
                                            <span class="text-muted old-price mx-2">$<?php echo $row["max_price"] ?></span>
                                            <span>$<?php echo $row["price"] ?></span>
                                        </h6>
                                    </div>
                            <?php 
                            
                            
                            
                            
                            }
                            } 
                            $conn->close();
                            
                            
                            ?>
                            <!-- end of single product -->


                        </div>
                    </div>
                    <!-- end of product img -->
                </div>
            </div>
        </section>
        <!-- end of product section  -->

        


    </div>





<?php

include_once("footer.php");

?>