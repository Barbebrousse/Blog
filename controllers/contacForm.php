<?php 


/**
 * 1 - Traitement de l'information (Model)
 * 
 * 2 - Affichage du Résultat (View)
 * 
 */

if($_POST['email'] && $_POST['message']){

    $message = $_POST['message'];
    $mail = $_POST['email'];
    include("controllers/contactFormConfirm.php");
}

?>