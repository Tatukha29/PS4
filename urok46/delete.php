<?php       

$connect = mysqli_connect('127.0.0.1','root','','tanya29');

mysqli_query($connect, "DELETE FROM game WHERE id='" . $_POST['delete'] . "'");
	
	header('location:http://tanya29/urok46/admin.php');
			?>