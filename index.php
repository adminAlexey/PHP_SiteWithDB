<?php
require_once 'scripts/template.php';

$main = template('views/main.php', []);
$layout = template('layout.php', ['content' => $main]);
echo $layout;
