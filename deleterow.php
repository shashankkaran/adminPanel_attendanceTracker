<?php 

include 'connectadmin.php';
$id = $_GET['id'];

$deletequery = "DELETE FROM `meets` WHERE id=$id";
$query = mysqli_query($conn,$deletequery);
header('location:admin.php');

?>