<?php
$conn=mysqli_connect('localhost','root',"","interior");
if(!$conn)die(mysqli_connect_error($conn));

//login
function check_admin($login,$password){
  global $conn;
  $query="SELECT * FROM admin WHERE login='$login' AND password='$password'";
  $res=mysqli_query($conn,$query);
  return mysqli_num_rows($res);
}

//categories
function get_categories(){
	global $conn;
$query="SELECT * FROM categories";
$res=mysqli_query($conn,$query);
return mysqli_fetch_all($res,MYSQLI_ASSOC);
}

//sections
function add_sec($name,$cat_id){
	global $conn;
	$query="INSERT INTO sections VALUES(NULL,'$name','$cat_id')";
	mysqli_query($conn,$query);
}
function get_sections($cat_id){
	global $conn;
	$query="SELECT * FROM sections WHERE cat_id='$cat_id'";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);
}
function update_sec($name,$sec_id){
	global $conn;
	$query="UPDATE sections SET name='$name' WHERE id='$sec_id'";
	mysqli_query($conn,$query);
}
function delete_sec($id){
	global $conn;
	$query="DELETE FROM sections WHERE id='$id'";
	mysqli_query($conn,$query);
}

//products
function add_products($sec_id,$cat_id,$name,$img,$sum){
	global $conn;
	$query="INSERT INTO products VALUES(NULL,'$sec_id','$cat_id','$name','$img','$sum')";
	mysqli_query($conn,$query);	
}
function get_products($sec_id,$cat_id){
	global $conn;
	$query="SELECT * FROM products WHERE sec_id='$sec_id' && cat_id='$cat_id'";
	$res=mysqli_query($conn,$query);
	return mysqli_fetch_all($res,MYSQLI_ASSOC);
}
function delete_product($id){
	global $conn;
	$query="DELETE FROM products WHERE id='$id'";
	mysqli_query($conn,$query);
}
function update_product($id,$name,$sum){
	global $conn;
	$query="UPDATE products SET name='$name', sum='$sum' WHERE id='$id'";
	mysqli_query($conn,$query);
}