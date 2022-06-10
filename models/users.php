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

//Fonction qui communique avec la BDD et retourne la liste des utilisateurs
function getUsers(){

    //Connection à la BDD
    $bdd = connection();
    $reponse = $bdd->query("SELECT * FROM users");

    return $reponse->fetchAll();
}

function getUsersById(int $id){

    //Connection à la BDD
    $bdd = connection();

    $sql = "SELECT * 
            FROM users 
            WHERE id=?";

    //Préparation à la requête       
    $requete = $bdd->prepare($sql);

    //Execution de la requête en passant 1 paramètres
    $requete->execute([$id]);

    $date = $requete->fetchAll();

    //Retourne le premier enregistrement de la requête
    return $date[0];
}

/**
* Requête préparée
* Retourne un utilisateur selon son login et son mdp
*/
function getUserByLogin(string $login, string $pwd){

    //Connection à la BDD
    $bdd = connection();
    $sql = "SELECT * FROM users 
           WHERE name=? 
           AND password=?";

    //Préparation à la requête       
    $requete = $bdd->prepare($sql);

    //Execution de la requête en passant 2 paramètres
    $requete->execute([$login, $pwd]);

    return $requete->fetchAll();
}

//Récupération des informations depuis la BDD
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

//Créer un nouvel utilisateur dans la BDD
function createUser(string $name, string $pwd){

    //Connection à la BDD
    $bdd = connection();
    $sql = "INSERT INTO users (name, password)
           VALUES (?,?)";

    //Préparation à la requête
    $requete = $bdd->prepare($sql);

    //Execution de la requête en passant 2 paramètres
    return $requete ->execute([$name, $pwd]);
}

//Supprimer un utilisateur dans la BDD
function deleteUser(int $id){

    //Connection à la BDD
    $bdd = connection();
    $sql = "DELETE FROM users WHERE id= ?";

    //Préparation à la requête
    $requete = $bdd->prepare($sql);

    //Execution de la requête
    return $requete ->execute([$id]);
}

//Modifier un utilisateur dans la BDD
function updateUser(int $id, string $name, string $pwd){

    //Connection à la BDD
    $bdd = connection();
    $sql = "UPDATE users 
           SET name=?, password=?
           WHERE id=?";

    //Préparation à la requête
    $requete = $bdd->prepare($sql);

    //Execution de la requête en passant 3 paramètres
    return $requete ->execute([$name, $pwd, $id]);
}

?>