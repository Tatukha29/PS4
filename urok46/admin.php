<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
img{
width: 300px;
height: 400px;
}
</style>
</head>
<body>
<?php 
$connect = mysqli_connect('127.0.0.1','root','','tanya29');
 ?>
 <form  method="POST" class="dropdown-item" action="insert.php" enctype="multipart/form-data">
 	
 
 <div class="flex">
 	<input type="file" name="img">
 <input type="" name="name">
 <input type="" name="price">
 <button type="submit">
 	Ok
 </button>
 </div>
 </form>
 <div class="col-12 row">
 	
 	<?php 
 		$result = mysqli_query($connect,"SELECT * FROM game ORDER BY id DESC");
 		for($i=0;$i<$result->num_rows;$i++){
 			$res=$result->fetch_assoc();
 	 ?>
 	<div class="col-3">
 		<?php 
 			echo '<img src="' . $res['img'] . '">';
 			echo '<h2>' . $res['name'] . '</h2>';
 			echo '<p>' . $res['price'] . '</p>';
 		 ?>
 		 <div>
 		 	<form method="POST" class="dropdown-item" action="delete.php">
					<?php echo '<button name="delete"  value="'.$res['id'].'">delete</button>'?>
			</form>

			<form method="POST" class="dropdown-item" action="change.php">
				<?php echo '<button name="change">redak</button>'?>
				<?php 
 						echo '<input type="hidden" name="name" value="' . $res['name'] . '" class="form-control">'
 	 			?>
 				 <?php 
 						echo '<input type="hidden" name="price" value="' . $res['price'] . '" class="form-control">'
 	 			?>
 	 			<?php 
 						echo '<input type="hidden" name="img" value="' . $res['img'] . '" class="form-control">'
 				 ?>
 				 <?php 
 						echo '<input type="hidden" name="id" value="' . $res['id'] . '" class="form-control">'
 				 ?>
			</form>
			 </div>
 	</div>
 	
 	<?php 
 		}
 	 ?>
 	
 </div>
</form>
</body>
</html>