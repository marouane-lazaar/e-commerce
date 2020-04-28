<?php 
include_once 'connection.php';
$object= new Connection();
$connection= $object->Connect();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initia;-scale-1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="animate.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>

        <title>e-commerce</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top text-white" style="background: #22ffbb;">
            <a class="text-white navbar-brand" href="#">
                <i class="fab fa-pagelines animate flash"></i>Marouane Store
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto menu">
                    <li class="nav-items active">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                </ul>
                <form class="form-inline mt-md-0">
                    <a class="text-white nav-link" href="cart.php">
                        <i class="text-warning fas fa-shopping-cart"></i> Shopping cart
                        <i style="color: yellow" id="cart_n"></i>
                    </a>
                </form>

              

            </div>
            </nav>
        </header>
        <div class="container mt-3">
         <main role="main">
             <div class="row">
                 <div class="col">
                     <div class="table-responsive-sm">
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Product</th>
                                     <th scope="col">Description</th>
                                     <th scope="col">Quantity</th>
                                     <th scope="col">Price</th>
                                 </tr>
                             </thead>
                            <tbody id="table">




                                </tbody>
                        </table>
</div>
</div>
</div> 
<hr class="featurette-divider">      

         </main>


                    </div>
            <!----------end modal--------->
            <div class="container">
                <footer>
                    <p class="float-right">
                        <a href="#">TOP</a>
                    </p>
                    <div class="row">
                        ABONNEZ-VOUS_YOUTUBE CHANNEL
                    </div>
                </footer>
            </div>     
        </main>
        <script
        src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="cart.js"></script>
<script src="wow.js"></script>

    </body>
</html>