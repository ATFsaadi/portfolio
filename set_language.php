<?php
session_start();
if (isset($_POST['lang'])) {
    $_SESSION['lang'] = in_array($_POST['lang'], ['fr', 'en', 'ar']) ? $_POST['lang'] : 'fr';
}
header('Location: index.php');
exit;
?>