<!-- 1 Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7... -->
<?php
$min = 0;
$max = 150;
$chiffresimpairs = '';
for ($i = $min; $i <= $max; $i++) {
    if ($i % 2 == 1) {
        $chiffresimpairs .= $i . ' ';
    }
}
echo "Les chiffres impairs compris entre $min et $max sont: $chiffresimpairs";
?>

<br>
<br>

<!-- 2 Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers        -->
<?php
$lines = 1;
while ($lines <= 5) {
    echo 'Je dois faire des sauvegardes régulières de mes fichiers.<br />';
    $lines++; // $lines = $lines + 1
}
?>

<br>
<br>

<!-- 3 Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML. Le résultat doit être le suivant :  -->
<?php
function table($nbr, $nbr2)
{
    $table = '<table border="1">';
    for ($a = -1; $a <= $nbr; $a++) {
        $table .= '<tr>';
        for ($b = -1; $b <= $nbr2; $b++) {
            if ($a == -1 && $b != -1) {
                $table .= '<td>' . $b . '</td>';
            } else if ($b == -1 && $a != -1) {
                $table .= '<td>' . $a . '</td>';
            } else if ($b == -1 && $a == -1) {
                $table .= '<td></td>';
            } else {
                $table .= '<td>' . $a * $b . '</td>';
            }
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}
echo table(12, 12);
?>

<br>
<br>

<!-- 1. Mois de l'année non bissextile -->
<!-- Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.  -->
<!-- Utilisez le nom des mois comme clés de votre tableau associatif. -->
<!--Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois. -->

<?php
$jourMois = array(
    "janvier" => 31,
    "février" => 28,
    "mars" => 31,
    "avril" => 30,
    "mai" => 31,
    "juin" => 30,
    "juillet" => 31,
    "août" => 31,
    "septembre" => 30,
    "octobre" => 31,
    "novembre" => 30,
    "decembre" => 31,
);
echo '<table border=1><tr><th>Mois</th><th>Nombre de jours</th></tr>';
foreach ($jourMois as $m => $nbJ) {
    echo "<tr><td>" . $m . "</td><td>" . $nbJ . "</td></tr>";
}
echo "</table>";

?>

<br>
<br>

<?php
//Affichez la liste des capitales (par ordre alphabétique)suivie du nom du pays.
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

//Tri par ordre alphabétique des valeurs 
asort($capitales);
foreach ($capitales as $capitale => $pays) {
    echo $capitale . " : " . $pays . "<br>";
}
?>

<br>
<br>

<?php
//Affichez la liste des pays (par ordre alphabétique)suivie du nom du nom de la capital.
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

//Tri du tableau par ordre alphabétique des clés d'un tableau associatif 
ksort($capitales);
//utiliser $capitale (sans le s) pour stocker la valeur de la capitale correspondant à chaque pays car $capitales (avec un s) est utilisé pour désigner le tableau associatif lui-même
//foreach est pratique pour parcourir des tableaux de taille variable 
foreach ($capitales as $pays => $capitale) {
    // Affiche la liste des pays avec leur capitale respectives triés par ordre alphabétique
    echo $pays . " : " . $capitale . "<br>";
}
?>

<br>
<br>

<?php
//Affichez le nombre de pays dans le tableau
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);
$nb = count($capitales);
echo "le tableau contient " . $nb . " pays.<br>";
?>

<br>

<?php
//Supprimer du tableau toutes les capitales commençant par la lettre 'B',
// puis affichez le contenu du tableau.
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);
//Boucle pour parcourir le tableau et supprimer les capitales commençant par B
foreach ($capitales as $capitale => $pays) {
    //fonction substr pour extraire la 1ère lettre de chaque capitale et la comparer avec la lettre "B"
    if (substr($capitale, 0, 1) == 'B') {
        //fonction unset pour supprimer la capitale commençant par un "B"
        unset($capitales[$capitale]);
    }
}
// Affiche le tableau après la suppression des capitales commençant par "B"
foreach ($capitales as $capitale => $pays) {
    echo $pays . " : " . $capitale . "<br>";
}
?>

<br>
<br>

<?php
//A partir du tableau ci-dessous /Affichez la liste des régions
// (par ordre alphabétique) suivie du nom des départements

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

//Effectue le tri du tableau $départements par ordre alphabétique des régions (clés)
ksort($departements);
foreach ($departements as $region => $departements_region) {
    //affiche la liste des régions suivi du nom des départements
    echo $region . " : ";
    foreach ($departements_region as $departement) {
        echo " " . $departement;
    }
    echo "<br>";
}
?>

<br>


<?php
//Affichez la liste des régions suivie du nombre de départements

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
// Parcourir le tableau départements
foreach ($departements as $region => $departements_region) {
    //Affiche le nom de chaque régions suivi du nbre de département correspondant
    echo $region . " : " . count($departements_region) . "departements<br>";
}
?>

<br>

<?php
//Ecrivez une fonction qui permette de générer un lien./La fonction doit prendre deux paramètres, le lien et le titre.
//Fonction nommée fonctionlien a pour arguments l'url et le titre/affichage url et titre
function fonctionlien($url, $titre)
{
    echo '<a href="'.$url.'">'.$titre.'</a><br>';
}
fonctionlien("https://www.google.com", "Google");
fonctionlien("https://www.pinterest.com", "Pinterest");
?>

<br>

<!-- Ecrivez une fonction qui calcul la somme des valeurs d'un tableau/La fonction doit prendre un paramètre de type tableau/
$tab = array(4, 3, 8, 2);/
$resultat = somme($tab); / $resultat doit contenir 17  -->
<?php
$tab = array(4, 3, 8, 2);
function somme($tab) {
//On initialise la variable $somme à zéro
    $somme = 0;
//La boucle foreach parcours tout le tableau
    foreach ($tab as $resultat) {
        $somme += $resultat;
    }
    return $somme;
}
$resultat = somme($tab);
echo $resultat; 
?>

<!--Créer une fonction qui vérifie le niveau de complexité d'un mot de passe/Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :
Faire au moins 8 caractères de long/Avoir au moins 1 chiffre/Avoir au moins une majuscule et une minuscule
$resultat = complex_password("TopSecret42");
$resultat doit contenir true.


//******************************************************a faire ****************************************  
 <?php
 function complex_password($password) {
    // Vérifie si le mot de passe fait au moins 8 caractères de long
    if (strlen($password) < 8) {
        return false;
    }
    
    // Vérifie si le mot de passe contient au moins une majuscule et une minuscule/Si toutes les règles sont respectées, la fonction
    //retourne true (vrai) sinon elle retourne false (faux)
    if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
        return false;
    }

    // Si toutes les règles sont respectées, retourne true
    return true;

}
// Exemple d'utilisation
$mdp = "TopSecret42";
$resultat = complex_password($mdp);
var_dump($resultat);

// echo var_export($resultat, true); // Affiche true
echo var_export($resultat, true);
?>





/