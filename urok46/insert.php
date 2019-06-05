<?php
$connect = mysqli_connect('127.0.0.1','root','','Tanya29'); 
$result = mysqli_query($connect, "INSERT INTO game (img, name, price)  VALUES ('images/". $_FILES['img']['name'] ."','". $_POST['name'] ."','". $_POST['price'] ."')");
move_uploaded_file($_FILES['img']['tmp_name'], "images/".$_FILES['img']['name']);
header('location:http://tanya29/urok46/admin.php');
echo $connect->query($result);
?>