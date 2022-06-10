<?php 

    if(isset($_GET['page'])) {
        switch ($_GET['page']){
            case "contact":
                include("pages/contact.php");
                break;
            
            case "contactForm":
                include("controllers/contacForm.php");
                break;
            
            case "info":
                include("pages/info.php");
                break;
            
            case "connexion":
                include("pages/connexion.php");
                break;

            case "connectForm":
                include("controllers/connectForm.php");
                break;
                 
            case "deconnection":
                include("controllers/deconnect.php");
                break;

            case "utilisateurs":
                include("controllers/usersControl.php");
                break;
       
            default:
                include("pages/404.php");
                break;
        }
    } else {
        include("pages/acceuil.php");
        }
?>