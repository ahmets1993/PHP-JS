<div class="bag-titel">
	
	<h1>MY BAG</h1>
</div>
<section id="warenkorb">
	<div class="container">		
		<div class="row">
			<table class="table table-hover table-bordered table-striped">
				<thead>					
					<th class="text-center">PRODUCT </th>
					<th class="text-center">NAME</th>
					<th class="text-center">PRICE</th>
					<th class="text-center">NUMBER</th>
					<th class="text-center">REMOVE</th>
				</thead>	
				<?php
				$allproducts = json_decode(file_get_contents("data/shop/produkte.json"), true); 
				{ ?>
				<?php }
				if(empty($_SESSION['shop'])){
					echo "Keine Produkte im Warenkorb"; 
				}
				else {
					$gesamtpreis = 0; 		
					foreach($_SESSION['shop'] as $itemid => $anzahl ){
						foreach($allproducts as $product){
							if($itemid == 'p'.$product['id']){											
								{ ?>
									<div class="col-sm-12">
										<tbody><tr>		
											<?php  echo '<td class="text-center" width="120"><img src="data/shop/pictures/' . $product['bild'] . '" width="50"/></td>';  ?>
											<?php  echo '<td class="text-center">' . $product['titel'] . '</td>';  ?>		
											<?php  echo '<td class="text-center">' . $product['preis'] * $_SESSION['shop'][$itemid] . '€ </td>';  ?>
											<?php  echo '<td class="text-center">'.  $_SESSION['shop'][$itemid] . '</td>';  ?>					
											<?php  echo '<td class="text-center btn btn-danger btn-sm"><a href="index.php?remove='.$itemid.'&menu=showcart">Entfernen</a></td>';
											$gesamtpreis += $product['preis'] * $_SESSION['shop'][$itemid];
										}
									}
								}
							}
							{ ?>

							</tr>
						</tbody>
						
					</div>
					
				</tbody>
				<tfoot>
					<th><?php echo	'<th colspan="6" class="text-right">TOTAL  :  <span class="color-danger">'. $gesamtpreis.'</span>' ; ?>
				</th>
			</tfoot>
		</table>
		<div class="pay-icon">
			<div class="row">
				
				<span colspan="6" class="pay-icon"><a href="#">GO TO PAYMENT</a></span>
			</div>
		</div>	
	<?php }
}
?> 
</div>
</div>
</section>	