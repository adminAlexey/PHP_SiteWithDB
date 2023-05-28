<link rel="stylesheet" href="../style.css">
<?php

require_once '../scripts/template.php';

//переменные необходимые для карточек
$image;
$name;
$discription;
$cost;

//данные для подключения к БД
$servername = "localhost";
$username = "root";
$password = "";
$database = "testDB";

$db = mysqli_connect("localhost", "root", "", "testDB");
$sql = "SELECT * FROM men";
$result = $db->query($sql);

$content = "";

// вывод карточек из таблицы
while ($rows = mysqli_fetch_array($result)) {
    foreach ($rows as $key => $value) {
        $$key = $value;
    }
    $content .= template('../views/card.php', ['image' => $image, 'name' => $name, 'discription' => $discription, 'cost' => $cost]);
    // $discription = template('../cardsView.php', ['image' => $image, 'name' => $name, 'discription' => $discription, 'cost' => $cost]);
}

$layout = template('../layout.php', ['content' => $content]);
echo $layout;
