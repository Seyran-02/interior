<?php
include('model.php');
if($_POST['action'] === 'add'){
	if(!empty($_POST['name'])){
		add_sec($_POST['name'],$_POST['cat_id']);
	}else{
		echo 'error';
	}
}
if($_POST['action'] === 'update'){
	if(!empty($_POST['name'])){
		update_sec($_POST['name'],$_POST['sec_id']);
	}else{
		echo 'error';
	}
}
if($_POST['action'] === 'delete'){
		delete_sec($_POST['sec_id']);
}
