<?php 

//Modèle utilisateur
require_once('models/users.php');

//On appel la fonciton qui retourne la liste des utilisateurs
$users = getUsers();

//View
include ('pages/utilisateurs.php');

?>