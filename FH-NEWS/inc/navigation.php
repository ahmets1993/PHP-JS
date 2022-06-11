

<!-- Visible part-->
<!-- Fixed top navbar, justify content on the right-->
<nav class="navbar fixed-top  navbar-expand-md bg-light navbar-light">
  <h1 class="navbar-brand" >    <img src="res/img/logo.png" class="img-fluid" id="logo" alt="logo" style="width: 70px">
  </h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <?php

  if (!empty($user_name)){
    echo "Welcome $user_first $user_last";
  }
  ?>
  <!-- Hamburger navbar-->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="?menu=services">SERVICES</a>
      </li>



      <li class="nav-item">
        <a class="nav-link" href="?menu=news">NEWS</a>
      </li>
      
      
      <?php

      if (!empty($user_type)){
        echo '<li class="nav-item"> 
        <a class="nav-link" href="?menu=shop">SHOP</a>  
        </li> ';
      }
      ?>
      <li class="nav-item">
        <a class="nav-link" href="?menu=about">ABOUT</a>
      </li> 

      <?php if (empty($user_name)){echo '<li class="nav-item"><a class="nav-link" href="index.php?menu=register">REGISTER</a></li>';} 
      else { echo '<li class="nav-item"><a class="nav-link" href="index.php?menu=logout"></a></li>';} ?> 

      <?php

      if (empty($user_name)){
        echo '<li class="nav-item">
        <a class="nav-link" href="index.php?menu=login">LOGIN</a>
        </li>';
      } else { 
        echo '<li class="nav-item">
        <a class="nav-link" href="index.php?menu=logout">LOGOUT</a>
        </li>';
      } 

      if($user_type == 'user') {
        echo '<li class="nav-item">' ; 
        echo '<a class="nav-link" href="index.php?menu=showcart"><img src ="res/img/shopping-cart-icon.png" style="height: 30px"> '; 
        $gesamt_anzahl = 0;
        $gesamt_preis = 0; 
        if(!empty($_SESSION['shop'])){
          foreach($_SESSION['shop'] as $itemid => $anzahl ){
            foreach($allproducts as $product){
              if($itemid == 'p'.$product['id']){
                $gesamt_anzahl += $_SESSION['shop'][$itemid]; 
                $gesamt_preis += $_SESSION['shop'][$itemid] * $product['preis'];
              }
            }
          }
        }

        echo '<span class="badge cart-count" >'.$gesamt_anzahl.'</span>';    
      }
      ?>
    </a>
  </li>   
</ul>
</div> 

</nav>

