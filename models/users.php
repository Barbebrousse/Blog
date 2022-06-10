<?php

//Fonction qui ce connecte à la base de donnée

function connection () {
    //Utlisateur de MySQL
    $user = "root";
    //Mot de passe de l'utilisateur MySQL
    $pass="";

    //Variable qui permet de nous connecter à la base de donnée
    $dsn = 'mysql:host=localhost;dbname=blog';
    $bdd = new PDO($dsn, $user, $pass);

    return $bdd;
}


//Fonction qui communique avec la base de donnée et retourne la liste des utilisateurs

function getUsers(){

    //Connection à la BDD
    $bdd = connection();
    $reponse = $bdd->query("SELECT * FROM users");

    return $reponse->fetchAll();
}

/**
* Requête préparée
* Retourne un utilisateur selon son login et son mdp
*/

function getUserByLogin($login, $pwd){
    $bdd = connection();
    $sql = "SELECT * FROM users 
           WHERE name=? 
           AND password=?";
           
    $requete = $bdd->prepare($sql);

    //Execution de la requête en passant 2 paramètres
    $requete->execute([$login, $pwd]);

    return $requete->fetchAll();
}


?>