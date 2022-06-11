<!--Shop -->

<section id="shop" class="container">
	<div class="fh-shop">
		<h1 class="text-center">FH TECNIKUM SHOP</h1>
		
	</div>
	<div class="row">

		<?php

       #get all products
		foreach ($allproducts as $produkt) {


			
			
			echo '<div class="card card-body col-sm-4 shopcards " style="width: 18rem;">';
			echo '<form action="index.php?menu=shop" method="POST" id="shop-add">' ; 
			
			echo '<div class="form-group">';
			
			
			echo '<h3 class="text-center">' . $produkt["titel"] . "</h3>";

			echo '<img src="data/shop/pictures/'.$produkt["bild"].'"/>';
			echo '<h4 class= "text-muted text-center">'.$produkt["beschreibung"].'</h4>';
			echo '<p class= "text-center">'.$produkt["preis"].' Euro</p>';
			#visible only for  the users not admin
			if($user_type == 'user'){
				
				echo '<div style= "float: left;"><input type="number" class="form-control menge" name="anzahl" id="anzahl" value="1"></div>';
				echo '<input type="hidden"  name="produktid" id="prod" value="' . $produkt["id"] . '">';
				echo '<div><button type="submit" class="btn btn-pink" name="button" id="button" value="button">Buy Me</button></div>';
			}
			echo "</div>";
			echo '</form>';
			echo "</div>";
			
			
		}
		
		
		?>
		<div class="container">
			<div class="row">
				<h3 class="shop-end text-center">THANK YOU FOR CHOOSING US</h3>
			</div>
		</div>
	</div>
</section>

