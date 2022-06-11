
<?php
include "header.php";
?>
<div class="container">
 <br />
 <h3 align="center">PLANET GALLERY</h3>
 <br />
 <div class="galleryview">
   <div id="flip">Click to Upluad File</div>
   <div id="panel">
     <form  action="upload.php" class="dropzone" id="dropzoneFrom"></form>
     <div class="upbutton" align="center">
      <button type="button" class="btn btn-info" id="submit-all">Upload</button>
    </div>
    <div id="flip2">Click to Close Dropzone</div>
  </div>
  <br />
  <br />
  <br />
  <br />
  <form class="search" action="upload.php">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search">Search Planet</i></button>
  </form>
  <div id="preview"></div>
  <br />
  <br />
</div>
</div>
</body>
<script src="js/main.js"></script>  
<script >
  $(document).ready(function(){
    $("#flip2").click(function(){
      $("#panel").slideUp("slow");
    });
  });
</script>
</html>


