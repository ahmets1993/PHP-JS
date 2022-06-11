<?php session_start();
if (empty($_SESSION['isLogin'])) {
  $_SESSION['isLogin']="0";
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <title>FH UE1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">  
    X<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
   <link href="css/bootstrap.min.css" rel="stylesheet" />
   <link href="css/mein.css" rel="stylesheet" />
</head>
<body>
   <!--------------------------------------------------------------------------------HIER BEGINNT NAVBAR------------------------------------------------------------>
   <div class="container">
    <div class="container">
        <div class="navbar">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar transparent navbar-expand-md navbar-dark fixed-top">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          

  <style>


   </style>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <div class="navbar-nav ml-auto float-right text-left pr-3 ">
              <li class="nav-item">
                <a class="nav-item nav-link text-info" href="index.php" id = "menuHome">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-item nav-link text-info" href="picture.php" id = "menuPicture">PICTURE</a>
              </li>
              <li class="nav-item">
                <a class="nav-item nav-link text-info" href="game.php" id = "menuGame">GAME</a>
              </li>
            <li class="<?php echo $_SESSION['isLogin']=='1' ? 'nav-item show' : 'nav-item hidden' ?>">
                <a class="nav-item nav-link text-info" href="gallery.php" id = "menuGallery">GALLERY</a>
              </li>
                 <li class="<?php echo $_SESSION['isLogin']=='0' ? 'nav-item show' : 'nav-item hidden' ?>">
                <a class="nav-item nav-link text-info" href="registerForm.php" id = "menuGallery">REGISTER</a>
              </li>
                 <li class="<?php echo $_SESSION['isLogin']=='0' ? 'nav-item show' : 'nav-item hidden' ?>">
                <a class="nav-item nav-link text-info" href="loginForm.php"  id = "menuGallery">LOGIN</a>
              </li>
                  <li class="<?php echo $_SESSION['isLogin']=='1' ? 'nav-item show' : 'nav-item hidden' ?>">
                <a class="nav-item nav-link text-info" href="profil.php" id = "menuGallery">PROFIL</a>
              </li>
                
               <li class="<?php echo $_SESSION['isLogin']=='1' ? 'nav-item show' : 'nav-item hidden' ?>">
                <a class="nav-item nav-link text-info" href="logout.php" id = "menuGallery">LOGOUT</a>
              </li>
            </div>
          </div>
        </nav>
            </div>
        </div>
    </div>
</div>
  
 

    
     
      



