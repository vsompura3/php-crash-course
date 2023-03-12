<?php

if (isset($_POST['submit'])) {
  $allowed_ext = array('png','jpg','jpeg','gif');

  if (!empty($_FILES['upload']['name'])) {
    print_r($_FILES);
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $file_name = $_FILES['upload']['name'];
    $target_dir = "uploads/$file_name";

    // Get file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    echo "<br>";
    echo $file_ext;

    // Validate the extension
    if (in_array($file_ext, $allowed_ext)) {
      if ($file_size <= 1000000) {
        move_uploaded_file($file_tmp, $target_dir);
        $message = '<p class="success">File uploaded successfully.</p>';
      } else {
        $message = '<p>File is too large.</p>';
      }
    } else {
      $message = '<p>Please, Choose an image file</p>';
    }
  } else {
    $message = '<p>Please, Choose a file</p>';
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP File Upload</title>
  <style>
    *{
      font-family: Arial, Helvetica, sans-serif;
    }
    p{
      font-size: 1.25rem;
      color: firebrick;
    }
    .success{
      color: green;
    }
  </style>
</head>
<body>
  <?php echo $message ?? null ?>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
  <h2>Select an Image to upload</h2>
  <input type="file" name="upload" id="upload">
  <button name="submit">Submit</button>
  </form>
</body>
</html>