<?php 
include('model.php');
session_start(); 
if(isset($_GET['sec_id']) && $_GET['cat_id']){
	$_SESSION['sec'] = $_GET['sec_id']; 
	$_SESSION['cat'] = $_GET['cat_id'];
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sections</title>
	<link rel="stylesheet" type="text/css" href="./Style/style.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- tailwind -->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
	<div class="modal_delete h-screen w-screen">
		<div class="box_delete">
			<div>
		        <p class="mb-4 text-2xl"> Are you sure you want to delete this product ?</p>	
	        	<button class='btn btn-primary text-white no_delete'>No</button>
	        	<button class='btn btn-danger text-white delete_final'>Yes</button>
	    	</div>
		</div>
	</div>


	<form action="./crud_products.php" method="POST" enctype="multipart/form-data">
		<div class="products_add_box">
			<div>
				<div>
					<label for="Name">Name</label><br>
					<input type="text" placeholder="Name" class="inp"        name="name">
				</div>
					<input type="file" class="mt-10 w-1/3"                   name="img">
			</div>
			<div class="mt-10">
				<div>
					<label for="sum">Sum</label><br>
					<input type="text" placeholder="Sum" id="sum" class="inp" name="sum">
				</div>
					<button type="submit" class="mt-10 btn btn-success w-1/3 h-1/4" name="action" value="Create">Create</button>
			</div>
			<?php
			if (isset($_GET['error'])) {
				echo "<span style='color:red;'>".$_GET['error']."</span>";
				}

			?>		
		</div>	
	</form>

<div class="table-responsive-xl">
  <table class="table mt-3">
	<tr>
		<th>IMAGE</th>
		<th>NAME</th>
		<th>SUM</th>
	</tr>
	<?php
    $prd_arr = get_products($_SESSION['sec'],$_SESSION['cat']);
      foreach ($prd_arr as $row) {
      	$id=$row['id'];
      	$image=$row['img'];
      	$name=$row['name'];
        $price=$row['sum'];

      	echo "<tr id='$id' style='max-height:150px;'> 
      	<td><img width='200' src='../images/$image' alt='$name'></td>
      	<td class='name' contenteditable>$name</td>
        <td class='price' contenteditable>$price</td>
        
      	<td><button class='btn btn-primary text-white update'>Փոփոխել</button></td>
      	<td><button class='btn btn-danger text-white delete'>Ջնջել</button></td>";
      	echo "</tr>";
      }
	?>
  </table> 
 </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		let name;
		let sum;
		let id;
		//update
		$('.update').click(function(){
			id = $(this).parent().parent().attr('id');
			name = $(this).parent().parent().find('.name').text();
			sum = $(this).parent().parent().find('.price').text();
			$.ajax({
				url:'crud_products.php',
				type:"POST",
				data:{id:id,sum:sum,name:name,action:'update'},
				success:function(d){
					location.reload();
				}
			})
		});
		//for delete
		$('.no_delete').click(function(){
			$(this).parent().parent().parent().css("display","none");
		});
		$('.delete').click(function(){
			id = $(this).parent().parent().attr('id');
			$('.modal_delete').css("display","block");
		});
		$('.delete_final').click(function(){
			$.ajax({
				url:'crud_products.php',
				type:"POST",
				data:{id:id,action:'delete'},
				success:function(d){
					location.reload();
				}
			})
			$('.modal_delete').css("display","none");
		});

	});	
</script>
</body>
</html>