<link rel="stylesheet" href="../style.css">
<?php
require_once '../scripts/template.php';

$admin = template('../views/admin.php', []);
$layout = template('../layout.php', ['content' => $admin]);
echo $layout;
