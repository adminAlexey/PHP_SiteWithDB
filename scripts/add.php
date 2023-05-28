<link rel="stylesheet" href="../style.css">
<?php

$table = $_GET['table'];
$image = $_POST['image'];
$name = $_POST['title'];
$discription = $_POST['discription'];
$price = $_POST['price'];

$db = mysqli_connect("localhost", "root", "", "testDB");
$sql = "INSERT INTO $table (`name`, `discription`, `cost`, `image`) VALUES ('$name', '$discription', '$price', '$image')";

$db->query($sql);
die($sql);
header("Location: ../pages/adminView.php");
