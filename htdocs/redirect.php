<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1 class="name"><?php echo $_SESSION['user_name']; ?></h1>
     <a href="logout.php">Logout</a><br>
</body>
</html>

<?php 
}else{
     header("Location: login_.php");
     exit();
}
 ?>

<?php


$id=$_POST['find'];
header("Location: data/$id/grid.php");

?>