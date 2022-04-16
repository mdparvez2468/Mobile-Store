<?php 
                                
                                

    session_start();

    if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                                        
        if (session_destroy()) {
            header("Location: index.php");
          }
    }else{
        header("Location: login.php");
    }

   


?>