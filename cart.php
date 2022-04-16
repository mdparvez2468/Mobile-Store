<?php

include_once("header.php");

?>

        <!-- product section  -->
        <section id="products" class="products">
            <div class="container-fluid">
                <div class="row">
                    <!-- product img -->
                    <div class="col-10 mx-auto col-md-7 col-lg-9 my-3">
                        <div class="row">
                            <!-- single product -->
                            <?php
                            

                           
                            
                            $sql = "SELECT * FROM products INNER JOIN cart ON products.id = cart.product_id";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                
                                
                                ?>
                                    <div class="col-10 mx-auto col-md-6 col-lg-4">
                                        <div class="featured-container">
                                            <img src="<?php echo $row["image"] ?>" alt="" class="img-fluid">

                                            <a href="deleteCart.php?id=<?php echo $row["id"] ?>" class="featured-store-link text-capitalize">Remove</a>
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
                            
                            
                            ?>
                            <!-- end of single product -->


                        </div>
                    </div>
                    <!-- end of product img -->
                </div>
            </div>
        </section>
        <!-- end of product section  -->

        <div>


        <h1>  

        <?php
                            
                            
                            $sql = "SELECT * FROM products INNER JOIN cart ON products.id = cart.product_id";
                            $result = $conn->query($sql);

                            $totalPrice = 0;
                            if ($result->num_rows > 0) {

                                
                            while($row = $result->fetch_assoc()) {
                                
                                
                                $totalPrice = $totalPrice + $row["price"];
                            
                            
                            
                            }


                            echo " Total Price: ". $totalPrice;

                            ?>
                            <a href="checkout.php?price=<?php echo  $totalPrice ?>"> Check Out </a>
                            <?php

                            }else{
                                echo "No Product added";
                            } 
                            $conn->close();
                            
                            
                            ?>

                            

                               

        </h1>


        </div>

        


    </div>





<?php

include_once("footer.php");

?>