<?php 

//Modèle utilisateur
require_once('models/users.php');

if(isset($_GET['action'])){
    switch($_GET['action']){
        case "create":
            createUser($_POST['login'], $_POST['password']);
            header('Location: index.php?page=utilisateurs');
            break;

        case "delete":
            deleteUser($_GET['id']);
            header('Location: index.php?page=utilisateurs');
            break;

        case "update":
            $user = getUsersById($_GET['id']);
            include("pages/updateUser.php");
            break;

        case "save":
            updateUser($_POST['id'], $_POST['login'], $_POST['password'],);
            header('Location: index.php?page=utilisateurs');
            break;

        default:
            //View
            include ('pages/404.php');
            break;

    }
} else {
    $users = getUsers();
    //View
    include ('pages/utilisateurs.php');
}

?>