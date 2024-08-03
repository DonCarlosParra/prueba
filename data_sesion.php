<?php
session_start();
if (!isset($_SESSION['lang'])) {
    $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($browser_lang == 'es') {
        $_SESSION['lang'] = 'es';
    } else {
        $_SESSION['lang'] = 'en';
    }
}

if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es' || $_GET['lang'] == 'en') {
        $_SESSION['lang'] = $_GET['lang'];
    }
}

if ($_SESSION['lang'] == 'es') {
    include('lenguages/es.php');
} else {
    include('lenguages/en.php');
}
?>