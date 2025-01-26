<?php
// Récupération des données envoyées depuis le formulaire
$criterion1 = $_POST['criterion1'];
$criterion1_level = $_POST['criterion1_level'];
$criterion1_description = $_POST['criterion1_description'];

$criterion2 = $_POST['criterion2'];
$criterion2_level = $_POST['criterion2_level'];
$criterion2_description = $_POST['criterion2_description'];

$criterion3 = $_POST['criterion3'];
$criterion3_level = $_POST['criterion3_level'];
$criterion3_description = $_POST['criterion3_description'];

$criterion4 = $_POST['criterion4'];
$criterion4_level = $_POST['criterion4_level'];
$criterion4_description = $_POST['criterion4_description'];

$criterion5 = $_POST['criterion5'];
$criterion5_level = $_POST['criterion5_level'];
$criterion5_description = $_POST['criterion5_description'];

// Préparer les données à enregistrer dans le fichier
$data = "Critère 1: $criterion1\nNiveau: $criterion1_level\nDescription: $criterion1_description\n\n";
$data .= "Critère 2: $criterion2\nNiveau: $criterion2_level\nDescription: $criterion2_description\n\n";
$data .= "Critère 3: $criterion3\nNiveau: $criterion3_level\nDescription: $criterion3_description\n\n";
$data .= "Critère 4: $criterion4\nNiveau: $criterion4_level\nDescription: $criterion4_description\n\n";
$data .= "Critère 5: $criterion5\nNiveau: $criterion5_level\nDescription: $criterion5_description\n\n";

// Spécifier le chemin du fichier où enregistrer les données
$file = 'fiche_poste.txt';

// Enregistrer les données dans le fichier
file_put_contents($file, $data, FILE_APPEND);

// Rediriger l'utilisateur après soumission
echo "Les données ont été enregistrées avec succès !";
?>
