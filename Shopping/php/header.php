<header id="header">
 
<!-- <link rel="stylesheet" href="style.css"> -->
 
<!-- navbar navbar-expand-lg  navbar-light bg-light -->
    <nav class="navbar navbar-expand-lg  navbar-dark " style="background-color : #BE2C69">
        <a href="index.php" class="navbar-brand">
        
            <h3 class="px-5">
            <!-- <img src="upload/nav.png" alt="Logo" width="50" height="25" class="d-inline-block align-text-top">   -->
             Princess Dresses 
            </h3>
            </a>
       

<!-- ***** by sarah use search-->
        
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
    
                        <i class="fas fa-shopping-cart"></i> Your Cart 
                        <!-- <span id="cart_count" class="text-danger bg-light">0</span> -->

                        

                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-dark\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-dark\"> 0 </span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>

<!-- ******added by sarah ***** -->

 <!-- <img src="upload/headerr.jpg" alt="img"> -->

</header>