<?php
require_once('models/users.php');

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