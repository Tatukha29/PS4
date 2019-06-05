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
$name=$_POST['name'];
$price=$_POST['price'];
$id=$_POST['id'];
 ?>
 <form  method="POST" class="dropdown-item" action="update.php" enctype="multipart/form-data">
 <div>
 	<?php echo '<input name="name" value="' . $name. '">'; ?>
 	<?php echo '<input name="price" value="' . $price. '" >'; ?>
 	<?php echo '<input name="id" value="' . $id. '" >'; ?>
		<?php echo '<input type="file" name="img" >'; ?>
 </div>
 <button class="btn btn-warning">
 	redak
 </button>
 </div>
 </form>
</body>
</html>