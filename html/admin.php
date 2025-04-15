<?php
session_start();

$admins = [
    'iley' => 'lebie',
    'mewan' => 'jouan',
    'adem' => 'kabore',
];

if (isset($_POST['login']) && isset($_POST['password'])
    &&
    !empty($_POST['login']) && !empty($_POST['password'])
) {

    $login = $_POST['login'];
    $password = $_POST['password'];

    if (isset($admins[$login]) && $admins[$login] === $password) {
        $_SESSION['admin'] = $login;
        header('Location: personnel.php');
        exit;
    }
}

// Si les identifiants sont incorrects
header('Location: login.php?erreur=1');
exit;
