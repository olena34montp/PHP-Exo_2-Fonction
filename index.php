<?php 
//Fonction la somme de deux nombres
function multiplication(int $a, int $b){
    $c = $a + $b;
    echo "La somme de deux nombres = " . $c;
}

multiplication(3, 2);
echo "<br>";
multiplication(1, 2);
echo "<br>";
multiplication(13, 2);
echo "<br>";
?>

<?php
//Fonction la date d’aujourd’hui
function dateAuj(){
    setlocale(LC_ALL, 'fr_fr');
    echo "Aujourd’hui, nous sommes le " . strftime('%d %B %Y');
}

dateAuj();
echo "<br>";
?>

<?php
//Fonction affiche le prix TTC. Le prix HT et le taux sont donné en paramètre. Si le taux n’est pas renseigné il vaut  20%
function prix(int $ht, int $taux = 20){
    echo "Prix = " . $ht * (1 + ($taux / 100));
}

prix(100, 45);
echo "<br>";
prix(80, 15);
echo "<br>";
prix(10);
echo "<br>";
?>

<?php
//Fonction affiche l'âge d’une personne, format de date "AAAA/MM/JJ"
function ageAffiche (string $dateNaissance) {
    $age = date('Y') - date('Y', strtotime($dateNaissance));

    if (date('md') < date('md', strtotime($dateNaissance))){   
        $age --;
    }
    echo "Votre age est " . $age;
}


ageAffiche("1991/03/14");
echo "<br>";
ageAffiche("1993/11/24");
echo "<br>";
ageAffiche("2001/10/14");
echo "<br>";
?>

<?php
//Fonction affiche le nombre de minutes avant la fin du cours.
function finCours($heure, $minutes = 0) {
    date_default_timezone_set("Europe/Paris");
    $timeArr = localtime(time(),true);
    //print_r($timeArr);
    $heureRest = ($heure - 1) - $timeArr['tm_hour'];
    $minutesRest = (60 - $minutes) - $timeArr['tm_min'];
    echo "<br>";
    //echo $heureRest;
    echo "<br>";
    //echo $minutesRest;
    echo "<br>";
    // Години перевести в хвилини, перевірити як працює функція з мінусом, вивести результат 
}

finCours(17);
echo "<br>";
?>

<?php
function fin_cours() {
    $fin = strtotime('17:00:00');
    $mtn = strtotime(date('G:i:s'));
    $restant = $fin - $mtn;
    $restant /= 60;
    echo 'Temps restant avant la fin du cours: ' . $restant . ' minutes';
}
fin_cours();
echo "<br>";
?>

<?php
//Fonction affiche le nombre de jours avant le week-end..
function jourNombre () {
    $jour = 6 - getdate()["wday"];
    if(($jour == 0) || ($jour == 6)){
        echo "C'est le week-end";
    }
    echo $jour . " j. reste pour le week-end";
}

jourNombre();
echo "<br>";
?>

<?php
//Fonction supprimer les espaces contenus dans une phrase. La phrase est donnée en paramètre.
function espaceSupprimer(string $phrase){
    $phrase = preg_replace('/\s+/','',$phrase);
    return $phrase;
}

echo espaceSupprimer("Hello world");
echo "<br>";
echo espaceSupprimer("Hello world of");
echo "<br>";
echo espaceSupprimer("Hello world of warcraft");
echo "<br>";
?>

<?php 
//Fonction donne le signe astrologique d’une personne. La date anniversaire est donnée en paramètre.
//Les variables peux avoir value 1, 2, 3 - pas de 0 avant la date (01, 02, 03 - interdit)
function signeAstologiqueMontre (int $jourNaissance, int $moisNaissance) {
    $jourNaissance = (int)$jourNaissance;
    $moisNaissance = (int)$moisNaissance;
    if ((($moisNaissance == 3) && ($jourNaissance >= 21)) || (($moisNaissance == 4) && ($jourNaissance <= 20))) {
        return "Vous etes Bélier";
    } elseif ((($moisNaissance == 5) && ($jourNaissance <= 20)) || (($moisNaissance == 4) && ($jourNaissance >= 21))) {
        return "Vous etes Taureau";
    } elseif ((($moisNaissance == 5) && ($jourNaissance >= 21)) || (($moisNaissance == 6) && ($jourNaissance <= 21))) {
        return "Vous etes Gémeaux";
    } elseif ((($moisNaissance == 6) && ($jourNaissance >= 22)) || (($moisNaissance == 7) && ($jourNaissance <= 22))) {
        return "Vous etes Cancer";
    } elseif ((($moisNaissance == 7) && ($jourNaissance >= 23)) || (($moisNaissance == 8) && ($jourNaissance <= 22))) {
        return "Vous etes Lion";
    } elseif ((($moisNaissance == 8) && ($jourNaissance >= 23)) || (($moisNaissance == 9) && ($jourNaissance <= 22))) {
        return "Vous etes Vierge";
    } elseif ((($moisNaissance == 9) && ($jourNaissance >= 23)) || (($moisNaissance == 10) && ($jourNaissance <= 22))) {
        return "Vous etes Balance";
    } elseif ((($moisNaissance == 10) && ($jourNaissance >= 23)) || (($moisNaissance == 11) && ($jourNaissance <= 22))) {
        return "Vous etes Scorpion";
    } elseif ((($moisNaissance == 11) && ($jourNaissance >= 23)) || (($moisNaissance == 12) && ($jourNaissance <= 21))) {
        return "Vous etes Sagittaire";
    } elseif ((($moisNaissance == 12) && ($jourNaissance >= 22)) || (($moisNaissance == 1) && ($jourNaissance <= 20))) {
        return "Vous etes Verseau";
    } elseif ((($moisNaissance == 1) && ($jourNaissance >= 21)) || (($moisNaissance == 2) && ($jourNaissance <= 19))) {
        return "Vous etes Capricorne";
    } elseif ((($moisNaissance == 2) && ($jourNaissance >= 20)) || (($moisNaissance == 3) && ($jourNaissance <= 20))) {
        return "Vous etes Poissons";
    }
} 

echo signeAstologiqueMontre(14, 3);
echo "<br>";
echo signeAstologiqueMontre(14, 5);
echo "<br>";
echo signeAstologiqueMontre(14, 8);
echo "<br>";
?>

<?php
//Fonction donne le plus grand nombre entre deux expressions numérique.
function comparaison (int $num1, int $num2) {
    if ($num1 == $num2) {
        return "Ces deux chifres " . $num1 . " et " . $num2 . " sont égaux"; 
    } elseif ($num1 > $num2) {
        return "Entre ces chiffres"  . $num1 . " et " . $num2 . ", le chiffre le plus grand est " . $num1;
    } else {
        return "Entre ces chiffres"  . $num1 . " et " . $num2 . ", le chiffre le plus grand est " . $num2;
    }
}

echo comparaison(10, 8);
echo "<br>";
echo comparaison(1, 1);
echo "<br>";
echo comparaison(10, 101);
echo "<br>";
?>

<?php
//Fonction retourne vrai si le nombre est pair. Faux sinon. Le nombre est donné en paramètre.
function nombrePair (int $num){
    if ($num % 2 == 1) {
        return "Faux";
    } else {
        return "Vrai";
    }
}

echo nombrePair(20);
echo "<br>";
echo nombrePair(21);
echo "<br>";
echo nombrePair(99);
echo "<br>";
?>