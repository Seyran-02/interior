<?php
$conn=mysqli_connect('localhost','root',"","interior");
if(!$conn)die(mysqli_connect_error($conn));

function get_products(){
	global $conn;
	$query="SELECT * FROM products ";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);
}

function get_categories(){
	global $conn;
	$query="SELECT * FROM categories ";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);
}

function get_sections(){
	global $conn;
	$query="SELECT * FROM sections ";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);
}