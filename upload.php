<?php 
include("projectinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile Upload</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<a href="dashboard.php" class='btn btn-success'>Go Back</a>
</body>
</html>
<?php 
echo "<pre>";
print_r($_FILES);
echo "</pre>";

$filename=$_FILES['upload']['name'];
$filesize=$_FILES['upload']['size'];
$filetype=$_FILES['upload']['type'];
$filetmp=$_FILES['upload']['tmp_name'];

$extensions = array("png","jpg","gif","svg", "jpeg");
$file_txt = explode(".",$filename);
$file_txt = end($file_txt);
if(in_array(strtolower($file_txt), $extensions) == false){
	exit("<div class='alert alert-danger'>This image is not authorized</div>");
}elseif($filesize > 2097152){
	exit("<div class='alert alert-danger'>The image should be less than 2mb</div>");
}

?>
<?php
$target_dir ="uploads/";
$destination= $target_dir.$filename;
move_uploaded_file($filetmp, $destination);


if($_FILES['upload']['error'] > 0) {
				echo "<div class='alert alert-danger'>No file selected</div>";
					exit();
			}else{
				$objuser= new user;
				$output=$objuser->uploadphoto($_FILES['upload']['name']);
	             echo "<div class='alert alert-success'>Image uploaded successfully</div>";
                  }
?>