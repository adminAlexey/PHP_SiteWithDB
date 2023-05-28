<link rel="stylesheet" href="../style.css">
<?php
require_once '../scripts/template.php';

//вывод всех таблиц
$db = mysqli_connect("localhost", "root", "", "testDB");
$sql = "SELECT TABLE_NAME
FROM INFORMATION_SCHEMA.TABLES 
WHERE TABLE_TYPE = 'BASE TABLE' 
    AND TABLE_SCHEMA='testDB'";
$result = $db->query($sql);

$stroka = "";
while ($rows = mysqli_fetch_array($result)) {
    foreach ($rows as $key => $value) {
        $$key = $value;
    }
    $stroka .= "<option>$value</option>";
}

$content = "";
if (!isset($_SESSION['admin'])) {
    $content = template('../views/adminView.php', ['value' => $stroka, 'table' => $table]);
}

$page = template('../layout.php', ['content' => $content]);
echo $page;
