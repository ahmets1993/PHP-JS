
<?php

 
if(isset($user)){					
	?>

<div class="userinfos text-center">

	<table> 
 <td>   <tr>
        <div id="profil_img">  
    <?php

$filename = $user->profileImage;

echo "<img src=\"profile_pics/$filename\">";

?>
</div>

</tr>
</td>
<td>
<tr><?php echo '@'.$user->username.'</br>'?></tr>  
<tr><?php echo $user->vorname.' '?></tr>
<tr><?php echo $user->nachname.'</br>'?></tr>
<tr><?php echo $user->email.'</br>'?></tr>
<tr><?php echo $user->adresse.' '.$user->plz.' '.$user->ort.'</br>'?></tr>
</td>


	<form action="?page=update" class="update_btn" method="POST" class="updateButton">
		<table class=" container text-center">
			<tr>
			<td></td><td><input  type="submit" id="updateButton" value="UPDATE PROFILE"></td>	
		


    </table>
	</form>


	</table> 
 




</div>



<?php

}else{


echo '<p> PLEASE LOGIN OR REGISTER</p>'; 

}

?>



<div class="upload_area">
<div class="container ">



            <form action="?action=upload&page=profil" method="POST" class="login100-form validate-form" enctype="multipart/form-data">

<div>
 <button name="image" onclick="triggerClick()" id="profileDisplay">Upload Image</button>
                  <input type="file" name="image"  id="image" class="form-control">
                     <p>NAME:</p><input name="imagename" type="text" name="tag"  id="tag" class="form-control">
                        <p>PREIS : </p><input name="imagepreis" type="text" name="preis"  id="preis" class="form-control">
                         <p>TAGS : </p><input name="imagetags" type="text" name="preis"  id="preis" class="form-control">
          </div>
  <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="register-submit" type="submit">Upload</button>
          </div>

        </form >
</div></div>
<h1 class="text-center" style="margin-top: 50px; margin-bottom: 50px;">MY GALERY</h1>


<?php
//print_r($user->image);
    foreach ($user->images as $image) {
      //echo "a";
     echo "<div class='container post_style'>
      <div class='container profil_small_display'>
      <img src=\"profile_pics/$filename\">  @$user->username<a class='preis_display'>$image->preis $</a></div>";
      echo "<div class='container image_display_profile'><img src='gallery/$image->filename'>";
      echo "<div class='container'><table class = 'table show_img'>
   
      </table>";
      echo" <div class=\"tag-bar\">
         <button type=\"button\" class=\"btn btn-link likebtn\" id=\"$image->filename\">Like</button>
           <button type=\"button\" class=\"btn btn-link commentbtn\" id=\"$image->filename\">Comment</button>
   
    
    <input type=\"button\" class =\"btn btn-link remove_image\" onclick=\"location.href='?action=removeImage&file=$image->filename';\" value=\"Remove\" />

   </div></div></div></div>";
}
?>


<script>
  function triggerClick(){
  document.querySelector('#image').click();
}
function displayImage(e){
  if(e.files[0]){
    var reader =new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src',e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>