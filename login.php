<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
if (isset($_POST['sign_in'])) {
    include "db.php";
    foreach ($admin as $login => $password) {
        if ($_POST['login'] == $login && $_POST['password'] == $password) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['authorized'] = 1;
            header("Location: admin-panel.php");
        } else {
            $_SESSION['err'] = 1;
            unset($_SESSION['authorized']);
            header("Location: error.html");
        }
    }
}
