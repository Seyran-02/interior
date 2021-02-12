<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Categories</title>
	<!-- tailwind -->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<style>
	a{
	  text-decoration: none;
      font-size: 36px;
	  color:#780202;
	}
	a:hover{
	  text-decoration: none;
		color:black;	
	}
</style>
</head>
<body>

<?php
session_start();
	if(!isset($_SESSION['admin']))
	header('location:index.php');
include('model.php');
$cat_arr = get_categories();
$num = 0;
?>
<div style="width:1000px; margin: 0 auto;">
	<?php foreach ($cat_arr as $value){
		$num++;
			echo "<div class='mb-4' style='display:flex;justify-content:space-between;'>
				<a href='./sections.php?cat_id=".$value['id']."' class='my-auto'>".$value['name']."<br>
                	<svg class='ml-24' width='96' height='8' viewBox='0 0 96 8' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M95.3536 4.35356C95.5488 4.1583 95.5488 3.84172 95.3536 3.64645L92.1716 0.464474C91.9763 0.269212 91.6597 0.269212 91.4645 0.464474C91.2692 0.659736 91.2692 0.976319 91.4645 1.17158L94.2929 4.00001L91.4645 6.82844C91.2692 7.0237 91.2692 7.34028 91.4645 7.53554C91.6597 7.7308 91.9763 7.7308 92.1716 7.53554L95.3536 4.35356ZM-4.37114e-08 4.5L95 4.50001L95 3.50001L4.37114e-08 3.5L-4.37114e-08 4.5Z' fill='#780202'/>
                        </svg>
				</a>
				<img src='./images/cat".$num.".png' >
			  </div>";
		
	}?>
</div>



</body>
</html>