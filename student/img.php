<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "student");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['profile']['name'];
  	// Get text
  	

  	// image file directory
  	$target = "img/".basename($image);

  	$sql = "INSERT INTO tbl_student (profile) VALUES ('$image',)";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['profile']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
