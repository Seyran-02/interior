<?php
include('model.php');
session_start();
$login = $_POST['log'];
$password = $_POST['pas'];

if (empty($login) || empty($password)) {
	$_SESSION['error'] = 'There are empty field';
	header("location:index.php");
	die;
}
$res=check_admin($login,$password);
if ($res>0) {
	if(isset($_POST['remb'])){
			setcookie("admin", $login, time()+3600*24*365000,'/');
		}
		$_SESSION['admin']=$login;

    // mysqli_close($conn);
	header("location:categories.php");
	die;
}

	$_SESSION['error'] = 'Incorrect Username or Password';
	header("location:index.php");
	die;