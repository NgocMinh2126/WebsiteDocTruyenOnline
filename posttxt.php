<?php
$target_dir = "C:/xampp/htdocs/TMTManga/assets/Gioithieu/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$txtFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $target_file)). " uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
