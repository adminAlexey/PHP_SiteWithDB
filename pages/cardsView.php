<link rel="stylesheet" href="../style.css">
<?php
require_once '../scripts/template.php';

// $db = mysqli_connect("localhost", "root", "", "testDB");
// $sql = "SELECT * FROM $men 
// WHERE 'name' = $name
//     AND 'discription' = $discription
//     AND 'cost' = $cost
//     AND 'image' = $image";

$image = $_GET['image'];
$name = $_GET['name'];
$discription = $_GET['discription'];
$cost = $_GET['cost'];
$content = template('../views/cardsView.php', ['image' => $image, 'name' => $name, 'discription' => $discription, 'cost' => $cost]);
$page = template('../layout.php', ['content' => $content]);
echo $page;
