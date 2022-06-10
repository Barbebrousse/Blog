<?php
require_once('models/users.php');
/**
 * fonction qui prend 2 paramètres: nom d'utilisateur et mot de passe
 * Retourne soit l'utilisateur soit faux
 */

function login(string $login, string $pwd) {
    if ($login == 'Kenobi' && $pwd == 'Y0da') {
        //Je stock la sesion de l'utilisateur connecté
        $_SESSION['user'] = $_POST['login'];
        //créer un cookie qui reste 
        setcookie('user', $login);
        return $login;
    } else {
        return false;
    }
}

function loginByUser(string $login, string $pwd){
    $user = getUserByLogin($login, $pwd);
    if (isset($user[0])){
        $_SESSION['user'] = $user[0];
        setcookie('user', $user[0]['name']);
        return true;
    } else {
        return false;
    }
}

// Si je suis déjà connecté
if (isset($_SESSION['user'])) {
    include("controllers/connectConfirm.php");
} else {
    $is_logged = loginByUser($_POST['login'], $_POST['password']);
    //Si la connexion est réussie
    if ($is_logged) {
        //Je recharge la page pour afficher les bonnes informations dans le menu
        header('Location: index.php');
    } else {
        //Si la connexion à écouhé
        echo "<div class='alert alert-warning' role='alert'> 
        Faut pas respirer la compote ça fait tousser.
        </div>";
    }
}