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
<div class="modal_update">
	<div class="box_update">
		<button class="close m-2 update_close">X</button>
		<div>
	        <h3 class="mb-4">SECTION</h3>
	        <input type="text" placeholder="Section" class="sec_name">
	        <button class='btn btn-warning text-white update_final'>Update</button>
	        <p class="error_update"></p>
    	</div>
	</div>
</div>

<div class="modal_delete">
	<div class="box_delete">
		<div>
	        <p class="mb-4 text-2xl"> Are you sure you want to delete this section ?</p>	
        	<button class='btn btn-primary text-white no_delete'>No</button>
        	<button class='btn btn-danger text-white delete_final'>Yes</button>
    	</div>
	</div>
</div>

<div class="create">
	<input type="text" id="name"> 
	<button class="add" <?php echo "id='".$_GET['cat_id']."'";?> >Create<br>
		<svg class='ml-24' width='96' height='8' viewBox='0 0 96 8' fill='none' xmlns='http://www.w3.org/2000/svg'>
		<path d='M95.3536 4.35356C95.5488 4.1583 95.5488 3.84172 95.3536 3.64645L92.1716 0.464474C91.9763 0.269212 91.6597 0.269212 91.4645 0.464474C91.2692 0.659736 91.2692 0.976319 91.4645 1.17158L94.2929 4.00001L91.4645 6.82844C91.2692 7.0237 91.2692 7.34028 91.4645 7.53554C91.6597 7.7308 91.9763 7.7308 92.1716 7.53554L95.3536 4.35356ZM-4.37114e-08 4.5L95 4.50001L95 3.50001L4.37114e-08 3.5L-4.37114e-08 4.5Z' fill='#780202'/>
		</svg>
	</button>
</div>
<p class="error"></p>
<div class="table-responsive-lg my-3">
  <table class="table giveorder">
	<tr>
		<th>SECTIONS</th>
		<th>UPDATE</th>
		<th>DELETE</th>
		<th>PRODUCTS</th>
	</tr>
	<?php
	$cat_id = $_GET['cat_id'];
	include('model.php');
	$result = get_sections($_GET['cat_id']);
    foreach ($result as $row) {
      	$id=$row['id'];
      	$name=$row['name'];

      	echo "<tr id='$id'> 
      	<td>$name</td> 
      	<td><button class='btn btn-warning text-white update'>Update</button></td>
      	<td><button class='btn btn-danger text-white delete'>Delete</button></td>
      	<td><a href='products.php?sec_id=$id&cat_id=$cat_id' class='btn btn-success text-white'>Products</a></td>
      	</tr>";
    }
	?>
</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		// add SECTIONS
		let name;
		let cat_id;
		let sec_id;
		$('.add').click(function(){
			name   = $('#name').val();
			cat_id = $(this).attr('id');
			$.ajax({
				url:'crud_section.php',
				type:"POST",
				data:{name:name,cat_id:cat_id,action:'add'},
				success:function(d){
					if(d === 'error'){
						$('.error').html("<span class='ml-10 mb-10' style='color:red;'>This field is empty</span>");	
					}else{
						location.reload();
					}
				}
			})
		});
		//for update
		  //open
		$('.update').click(function(){
			sec_id = $(this).parent().parent().attr('id');
			$('.modal_update').css("display","block");
		});  
		$('.update_close').click(function(){
			$('.sec_name').val('');
			$(this).parent().parent().css("display","none");
		});
		$('.update_final').click(function(){
			name = $('.sec_name').val();
			$('.sec_name').val('');
			$.ajax({
				url:'crud_section.php',
				type:"POST",
				data:{name:name,sec_id:sec_id,action:'update'},
				success:function(d){
					if(d === 'error'){
						$('.error_update').html("<span class='ml-10 mb-10' style='color:red;'>This field is empty</span>");	
					}else{
						location.reload();
					}
				}
			}) 
		});

		//for delete
		$('.no_delete').click(function(){
			$(this).parent().parent().parent().css("display","none");
		});
		$('.delete').click(function(){
			sec_id = $(this).parent().parent().attr('id');
			$('.modal_delete').css("display","block");
		});
		$('.delete_final').click(function(){
			$.ajax({
				url:'crud_section.php',
				type:"POST",
				data:{sec_id:sec_id,action:'delete'},
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
