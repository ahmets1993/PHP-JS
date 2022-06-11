
<?php
$imageName = time(). '_' . $_FILES['image']['name'];
$target = 'gallery/'.$imageName; 
 $folder_name_thumb = 'upload_thumb/';
 

$image_name = $_POST['imagename'];
$image_preis = $_POST['imagepreis'];
 $image_tags = $_POST['imagetags'];


make_thumb($_FILES['image']['tmp_name'], $folder_name_thumb .$imageName ,175); 
  move_uploaded_file($_FILES['image']['tmp_name'],$target); // save funk for uploaded user profil image
  //$user->image = $imageName;
  echo "saving image";
  $Db->insertImage($user->username, $imageName, $image_name ,$image_preis, $image_tags);

function make_thumb($src, $dest, $desired_width) {

    /* read the source image */
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);

    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height * ($desired_width / $width));

    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

    /* copy source image at a resized size */
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image, $dest);
}

?>

