<?php 

// Ceci est un commentaire sur une ligne

echo "<h3>Temple Jedi d'Asgard </h3>";

/* Ceci est un commentaire
sur plusieur lignes */

echo " Mon premier site php !";

$nom = "Kenobi";
$prenom = "Obi-Wan";

echo "<h1>Bienvenu maître ".$prenom. " " .$nom. "</h1>";

$nombre = 22;
$decimal = 32645.325489;

var_dump($nom,$nombre,$decimal);

// Création de tableau
echo "<h1>Nombres de droides tué lors de la guerre des clones</h1>";

$equipe = ['Obi-Wan Kenobi', 'Windu', 'Yoda', 'Ahsoka Tano'];

$equipe[] = "Thor Odinson";

 $jedi1 = [
     'nom' => 'Kenobi',
     'prenom' => 'Obi-Wan',
     'score' => 6532
 ];
 $jedi2 = [
    'nom' => 'Windu',
    'prenom' => '',
    'score' => 4623
];
 $jedi3 = [
    'nom' => 'Yoda',
    'prenom' => '',
    'score' => 8623
];

$maitre = [$jedi1, $jedi2, $jedi3];
 echo "<h2>Les maîtres</h2>";

 foreach($maitre as $jedi){
     echo "Nom : ".$jedi['nom']. "<br>Score : ".$jedi['score']. "<br><br>"; 
 }

 foreach($maitre as $jedi){
     echo saluerMaitre($jedi);
 }

 //La fonction

function saluerMaitre(array $master){
    return "Bonjour Maître ".$master['nom']. "<br>";
}

function helloTeam(array $team){
    foreach ($team as $jedi){
        echo saluerMaitre($jedi);
        echo "<br>";
    }
}

helloTeam($maitre);

echo date('l');

function listeHTML(string $name, array $elements){
    if(empty($elements) || is_null($name)){ return null;}

    echo "<h3>".$name."</h3>";
    echo "<ul>";
    foreach($elements as $liste){
        echo "<li>".$liste."</li>";
    }
    echo "</ul>";
}
listeHTML("Capitales", ["Paname", "Tattooine", "Coruscant"])
?>









