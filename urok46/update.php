<?php
$connect = mysqli_connect('127.0.0.1','root','','tanya29'); 
if($_FILES['img']['name'] !=null){
$query = mysqli_query($connect, "UPDATE game SET 
	name = '" . $_POST['name'] . "',
	price = '" . $_POST['price'] . "',
	img = 'images/" . $_FILES['img']['name'] . "'
	WHERE id='" . $_POST['id'] . "'");
move_uploaded_file($_FILES['img']['tmp_name'], 'images/'.$_FILES['img']['name']);
header('Location:http://tanya29/urok46/admin.php');
} else {
	$query = mysqli_query($connect, "UPDATE game SET name = '" . $_POST['name'] . "',
	price = '" . $_POST['price'] . "' WHERE id='" . $_POST['id'] . "'");
	header('Location:http://tanya29/urok46/admin.php');
}
?>
