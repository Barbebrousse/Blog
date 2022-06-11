<?php
//Fonction qui ce connecte à la BDD (Base De Données)
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

?>