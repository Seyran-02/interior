<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>


<div class="container-fluid bg">
    <form class="form"  action="login.php" method="POST">
       <div class="index_img"><img src="images/user.png"></div>
       <input type="login" name="log" placeholder="Username">
       <input type="password" name="pas" placeholder="Password">
		<div id="remamber"><input type="checkbox" name="remb"> <span>Remember</span></div>
		<?php
session_start();
if (isset($_SESSION['error'])) {
	echo "<p style='color:red;'>".$_SESSION['error']."</p>";
	unset($_SESSION['error']); 
}
?>
		<input type="submit" name="submit" class="btn text-white" value="Send">

    </form>	
</div>


<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_COOKIE['admin'])){
	$_SESSION['admin']=$_COOKIE['admin'];
	header('location:categories.php');
	die;
}