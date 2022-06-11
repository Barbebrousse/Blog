<?php 
require_once('models/utils.php');

//Fonction qui communique avec la BDD et retourne la liste des articles
function getPosts(){
    //Connection à la BDD
    $bdd = connection();
    //REquête à la BDD
    $reponse = $bdd->query("SELECT * FROM posts");

    return $reponse->fetchAll();
}

//Créer un nouvel article dans la BDD
function createPost(string $title, string $content, int $userId){

    //Connection à la BDD
    $bdd = connection();
    $sql = "INSERT INTO posts (title, content, user_id, date_created)
           VALUES (?,?,?,NOW())";

    //Préparation à la requête
    $requete = $bdd->prepare($sql);

    //Execution de la requête en passant 2 paramètres
    return $requete ->execute([$title, $content, $userId]);
}


?>