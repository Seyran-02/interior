<?php
session_start();
include('model.php');
if($_POST['action'] == 'Create' && isset($_SESSION['sec']) && isset($_SESSION['cat'])){
	$imgname=$_FILES['img']['name'];
	if(empty($_POST['name']) || empty($_POST['sum']) || empty($imgname)){
		$err = 'Please fill all the fields';
		header("location:products.php?error=$err");
	}
	move_uploaded_file($_FILES['img']['tmp_name'], "../images/$imgname");
	add_products($_SESSION['sec'],$_SESSION['cat'],$_POST['name'],$_FILES['img']['name'],$_POST['sum']);
	header("location:products.php");
}
if($_POST['action'] == 'delete'){
	delete_product($_POST['id']);
}
if($_POST['action'] === 'update'){
		update_product($_POST['id'],$_POST['name'],$_POST['sum']);
}