<?php
if ( $_SERVER['REQUEST_METHOD'] == "POST") {

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST['sexe'];
$date_de_naissance = $_POST['ddn'];
$code_postal = $_POST['code_postal'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$votrequestion = $_POST['question'];

echo "Nom : " . $nom . "<br>";
echo "Prenom : " . $prenom . "<br>";
echo "Sexe : " . $sexe . "<br>";
echo "Date de naissance : " . $date_de_naissance . "<br>";
echo "Code_postal : " . $code_postal . "<br>";
echo "adresse : " . $adresse . "<br>";
echo "Ville : " . $ville . "<br>";
echo "E-mail : " . $email . "<br>";
echo "Sujet : " . $sujet . "<br>";
echo "Votre question : " . $votrequestion . "<br>";
}
?>

