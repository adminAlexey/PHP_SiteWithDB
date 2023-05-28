<link rel="stylesheet" href="../style.css">
<?php

$db = mysqli_connect("localhost", "root", "", "testDB");
$table = $_GET['table'];
$id = $_POST['select_item'];
$sql = "DELETE FROM $table WHERE id = $id";
$db->query($sql);
// die($sql);
header("Location: ../pages/adminView.php");
