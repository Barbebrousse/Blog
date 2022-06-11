<?php 

//Modèle utilisateur
require_once('models/Post.php');

if(isset($_GET['action'])){
    switch($_GET['action']){
        case "new":
            include('pages/editPosts.php');
            break;

        case "create":
            createPost($_POST['title'], $_POST['content'], $_SESSION['userId']);
            header('Location: index.php?page=articles');
            break;
        

        case "delete":
            deleteUser($_GET['id']);
            header('Location: index.php?page=articles');
            break;

        case "update":
            $posts = getUsersById($_GET['id']);
            include("pages/updateUser.php");
            break;

        case "save":
            updateUser($_POST['id'], $_POST['title'], $_POST['content'],);
            header('Location: index.php?page=articles');
            break;

        default:
            //View
            include ('pages/404.php');
            break;

    }
} else {
    $posts = getPosts();
    //View
    include ('pages/acceuil.php');
}

?>