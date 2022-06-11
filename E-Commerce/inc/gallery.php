
 <br />
 <h3 align="center">Art Gallery</h3><br />
 <h5 style="color:grey;" align="center">This platform is for everything with artistic value. Show your style.</h5>
  <div class="searchBtn">
    <input type="search" name="search" id="search" placeholder="Search...">
  </div> 
 <br />
  <br />
   <br />
    <br />

  <?php
  //$filter = $Db->getPostFilter("gondor");
  $users = $Db->getUsers(); 


	foreach ( $users as  $u ) {
   // $filename = $u->profileImage;
		$user2 = $Db->getUser($u->username); 

    foreach ($user2->images as $image) {
      //echo "a";
      $filename = $user2->profileImage;
      echo"  <form action='?action=mybag&page=gallery&file=$image->filename';\" class='update_btn' method='POST' class='addToCartBTn'>";
      echo "<div class='container post_style'>
      <div class='container profil_small_display'>
      <img src='profile_pics/$filename'>  @$user2->username<a class='preis_display'>$image->preis $</a></div>";
      echo "<div class='container image_display_profile'><a href = 'gallery/$image->filename' data-fancybox><img src='gallery/$image->filename'\></a>";
      echo "<div class='container'><table class = 'table show_img'>
      </table>";
      echo "<div class='tag_show'> <a class='tag_show'>$image->tag</a></div>";
   echo "<div class='tag-bar'>
         <button type='button' class='btn btn-link likebtn' id='$image->tag'>Like</button>
         <button type='button' class='btn btn-link commentbtn' id='$image->filename'>Comment</button>
         <button name='addToCartBTn' type='submit' class='btn btn-link sharebtn addToCartBTn' name='?file=$image->filename';\">Buy</button>";


     if (isset($user)) {
  if($user->is_admin) {
    echo "<input type='button' class ='btn btn-link remove_image' onclick=\"location.href='?action=removeImage&file=$image->filename';\" value='Remove' />";
  }
//<a data-fancybox="gallery" href="big_1.jpg"><img src="small_1.jpg"></a>
  }
  echo "</div></div></div></div>";
}}
?>

</div>


</body>



<script>
  
  const searchInput = document.getElementById('search');

  searchInput.addEventListener('input',(event)=>{
    const value = event.target.value;
    console.log(value);


  });

</script>