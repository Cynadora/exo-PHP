<!--***********************************************************LES DATES**********************************************************
Utilisez l'objet DateTime, sauf mention contraire./Trouvez le numéro de semaine de la date suivante : 14/07/2019-->

<?php
//Définit la date à tester
$date_test = "14-07-2019";
//strtotime convertit ($date_test) en un timestamp
$good_format = strtotime($date_test);
//Affiche le numéro de semaine qui correspond à la date donnée
//W renvoie le numéro de semaine correspond au timestamp (on récupère le numéro de semaine pour la date donnée)
echo date('W', $good_format);
?>

<br>
<br>

<?php
//Combien reste-t-il de jours avant la fin de votre formation ?
function remaining_days($month, $day)
{
    //DateTime pour la date actuelle et pour le mois et le jour
    $today = new DateTime('today');
    $stay = new DateTime("$month/$day");
    // si la date est inférieur ou égale à la date actuelle
    if ($stay <= $today) {
        //Ajoute un mois à la date
        $stay->modify('+1 month');
    }
    //Calcule la différence entre les 2 dates et retourne le nbre de jours restants
    return (int) $today->diff($stay)->format('%a');
}
//Affiche le nombre de jours restants à partir de la date d'aujourd'hui
echo remaining_days(5, 3);
?>

<br>
<br>

<?php
//Comment déterminer si une année est bissextile ?
function bissextile($annee)
{
    //Vérifie si l'année est divisible par 4 puis vérifie si l'année est divisible par 400
    if ((is_int($annee / 4) && !is_int($annee / 100)) || is_int($annee / 400)) {
        //Si la condition est vraie la fonction retourne VRAIE sinon elle retourne FAUX
        return TRUE;
    } else {
        return FALSE;
    }
}
//Année à tester
$annee = 1996;
//Affiche TRUE si l'année est bissextile sinon FALSE
if (bissextile($annee)){
    echo "C'est vrai !";
}
else{
    echo "C'est faux !";
}

?>

<br>
<br>

<?php
//Montrez que la date du 32/17/2019 est erronée. 
$jour = 32;
$mois = 17;
$annee = 2019;
//Date à vérifier/retourne vrai si la date est valide sinon elle retourne faux
//ici la date est erronée car le jour et le mois n'existe pas dans nos calendriers
//La fonction checkdate retournera donc faux
echo "$jour/$mois/$annee", var_dump(checkdate($mois, $jour, $annee));
?>

<br>
<br>

<?php
//Affichez l'heure courante sous cette forme : 11h25.
echo date("H\hi");
?>

<br>
<br>

<?php
//Ajoutez 1 mois à la date courante. 
//Affiche la date courante + 1 mois au format jour-mois-année
//Strtotime permet de convertir une chaîne de caractères en timestamp (en nbre de secondes écoulées)
echo date('d-m-Y', strtotime('+1 month'));
?>

<br>
<br>

<?php
//Que s'est-il passé le 1000200000 ?
$timestamp = 1000200000;
//La date représente le jour, le mois et l'année, puis l'heure, les minutes et les secondes (sur 2 chiffres)
$date = date('d/m/Y H:i:s', $timestamp);
echo "Le $date";
//Le timestamp 1000200000 correspond au 9 septembre 2001 à 01h46m40s
?>