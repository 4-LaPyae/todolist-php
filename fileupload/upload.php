<?php
//define ('SITE_ROOT', realpath(dirname(__FILE__)));

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//var_dump($target_file);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "webp") {
  echo "Sorry, only JPG, JPEG,WEBP, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    try {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],SITE_ROOT.$target_file)) {
//     echo "The file  has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
}


?>


<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>