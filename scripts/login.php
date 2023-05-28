<link rel="stylesheet" href="../style.css">
<?php

$login = $_POST['login'];
$pas = $_POST['password'];
if (isset($_POST['entry'])) {
    if ($login == 'admin' && $pas == 'admin') {
        header("Location: ../pages/adminView.php");
    } else {
        header("Location: ../index.php");
    }
}
