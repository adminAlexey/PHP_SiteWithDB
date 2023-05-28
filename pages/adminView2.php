<link rel="stylesheet" href="../style.css">
<?php
require_once '../scripts/template.php';

$db = mysqli_connect("localhost", "root", "", "testDB");
//вывод элементов таблицы
$table = $_POST['select_tables'];
$sql = "SELECT * FROM $table";
$result = $db->query($sql);
$content2 = "";
while ($rows = mysqli_fetch_array($result)) {
    $item = "";
    $last = "";
    $new = "";
    foreach ($rows as $key => $value) {
        $$key = $value;
        $new = $value;
        if ($new != $last) {
            $item .= $new . " | ";
        }
        $last = $new;
        $id = $rows['id'];
    }
    $content2 .= "<option value='$id'>$item</option>";
}

$content = "";
$content = template('../views/adminView2.php', ['value' => $stroka, 'content2' => $content2, 'table' => $table]);

if (isset($_POST['delete'])) {
    $id = $_POST['select_item'];
    $content = template('../views/adminView2.php', ['value' => $stroka, 'content2' => $content2, 'table' => $table, 'id' => $id]);
}

$page = template('../layout.php', ['content' => $content]);
echo $page;
