<?php



$user_name = null;
$user_type = null;
$user_first = null;
$user_last = null; 


$allproducts = json_decode(file_get_contents("data/shop/produkte.json"), true); 


include_once 'inc/login.php';
include_once 'inc/cart.php';




?>


<!DOCTYPE html>
<html lang="de">
<head>
  
 
 <?php 
 include 'inc/head.php';
 ?>

 
</head>



<body>

  <div class="container">


    <?php 

    include_once('inc/header.php');
    if (!empty($_GET['menu'])) {
      switch ($_GET['menu']) {
        case 'news':
        include_once 'inc/news.php';
        break;
        case 'services':
        include_once 'inc/services.php';
        break;
        case 'register':
        include_once 'inc/register.php';
        break;
        case 'shop':
        include_once 'inc/shop.php';
        break;
        case 'about':
        include_once 'inc/about.php';
        break;
        case 'login':
        include_once 'inc/loginform.php';
        break;
        case 'showcart':
        include_once 'inc/cartdisplay.php';
        break;
        case 'logout':
        include_once 'inc/news.php';
        break;
      }
      
      
    }
    else
    {
     include_once 'inc/services.php';
   }
   include_once('inc/footer.php');
   ?>

 </div>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
