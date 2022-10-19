<h1>Introduction PHP</h1>
<?php

// COMMENTAIRE
/* COMMENTAIRE SUR PLUSIEURS LIGNES */

// DECLARATION DE VARIABLES
$chaineDeCaracteres = "mon texte"; //string
$chaineDeCaracteres2 = "mon prix est très intéressant"; //string
$chaineDeCaracteres3 = "mon prix est de"; //string
$entier = "50"; // int (integer)
$flottant = 9.99; // float (décimale)
$boolean = true; // (true & false)
$tableau1 = array("texte 1", "texte 2", "texte 3"); // array
$tableau2 = ["texte1", "texte 2"]; // array
$date = new DateTime(); // programmation orientée objet (POO)

// AFFICHAGE
echo "test<br>";
echo $chaineDeCaracteres."<br>"; // mon texte
echo $chaineDeCaracteres3." ".$entier." euros<br>"; // mon prix est de 50 euros 
echo "$chaineDeCaracteres3 $entier euros<br>"; // mon prix est de 50 euros (2ème façon de faire)

// FONCTIONS CHAINES DE CARACTERES

// compter le nombre de caractères (espace inclus)
$nbCaracteres = strlen($chaineDeCaracteres);
echo "la phrase contient $nbCaracteres caractères<br>";
echo "la phrase contient ".strlen($chaineDeCaracteres)." caractères<br>";

// CONVERTIR UNE CHAINE EN MAJUSCULE
$chaineMajuscules = strtoupper($chaineDeCaracteres); // strtoupper -> transforme les caractères en majuscule
echo $chaineMajuscules."<br>";
echo mb_strtoupper($chaineDeCaracteres2)."<br>"; // mb_strtoupper -> prend en compte les caractères accentués & les mettres en maj

// COMPTER LE NOMBRE DE MOTS
$nbMots = str_word_count($chaineDeCaracteres); // nbMots > compte le nombre de mots
echo "La phrase contient $nbMots mots<br>";

// FONCTION SUR LES TABLEAUX
$tailleTableau1 = count($tableau1); // compte le nombre de tableaux
echo "Le tableau 1 contient $tailleTableau1 éléments<br>"; 
echo "Le tableau 2 contient ".count($tableau2)." éléments<br>";
echo $tableau1[0]."<br>";

$notes = [12, 14, 9, 8, 19, 17.25];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2); // round > définir le nombre souhaité d'un float. "2" > le nombre souhaité
// $moyenne = number_format() -> sert à choisir le format exemple : une virgule au lieu d'un point pour le symbole décimal
echo "La moyenne est de $moyenne<br>";

// OPERATIONS MATHEMATIQUES 
$nbArticles = 5;
$prixHT = 10.99;
$totalHT = $nbArticles * $prixHT;
echo "Le total HT est de $totalHT €<br>";

// AFFICHER LE TOTAL TTC D'UNE FACTURE
$tauxTVA = 0.20;
$test = $nbArticles * $prixHT; // ma version (fusion pour gagner du temps)
$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA; // version développé de l'équation
$totalTTC2 = $nbArticles * $prixHT * (1 + $tauxTVA); // version factorisé de l'équation
$totalTTC3 = $test + $test * $tauxTVA; // ma version
echo "Le total TTC est de $totalTTC €<br>";

// RENVOIE LE TYPE DE LA VARIABLE SPÉCIFIÉE EN PARAMETRE
echo gettype($tableau2)."<br>"; // array, str, int, boolean etc
echo "<pre>"; 
var_dump($tableau1);
echo "</pre>"; 

// STRUCTURE DE CONTROLE

// CONDITIONS (IF = SI)
$prenom = "Yasin";
$age = 29.5;
if($age < 18){
    $resultat = "mineur";
} else{
    $resultat = "majeur";
}

echo "Bonjour $prenom, vous êtes $resultat<br>";

// Ternaire
$result = $age >= 18 ? "majeur" : "mineur";
echo "Bonjour $prenom, vous êtes $result<br>";
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur")."<br>"; // pseudo-code : (? "" -> alors) (: "" sinon) 

// En fonction de l'âge, afficher une catégorie
/*
    si la personne a plus de 30 ans --> SENIOR
    si la personne a plus de 20 ans --> CADET
    sinon JUNIOR
*/

/*
 1. == (égale de comparaison)
 2. || (ou, appelé plus communément "pip")
 3. && (et, appelé plus communément "esperluette")
 4. double (remplace float)
*/
if(gettype($age) == "integer" || gettype($age) == "double") { // on oblige à utiliser un integer gettype > integer et accepter aussi la décimale
    if($age >= 30){
        $resultat = "SENIOR";
    } elseif($age >= 20){
        $resultat = "CADET";
    } else {
        $resultat = "JUNIOR";
    }
    
    echo "La personne qui a $age ans est : $resultat<br>";
} else {
    echo "Entrez seulement des chiffres<br>";
}

/*
    si la valeur est 1 --> OK
    si la valeur est 0 --> KO
    sinon afficher "valeur non gérée"
*/

$valeur = 1;
switch($valeur){
    case 0: echo "KO<br>"; break;
    case 1: echo "OK<br>"; break;
    default: echo "valeur non gérée<br>";
}

// pour utiliser < ou > suffit d'ajouter un boolean

$age = 30;
if(gettype($age) == "integer" || gettype($age) == "double"){
    switch(true) {
        case $age >= 30: echo "Senior<br>"; break;
        case $age >= 20: echo "Cadet<br>"; break;
        default: echo "Junior<br>";
    }
} else{
    echo "Veuillez entrer uniquement des chiffres<br>";
}


// Afficher les chiffres de 1 à 10
// $i++ -> $i + 1  (i = ittération) 
// BOUCLES (loop) FOR

for($i = 1; $i <= 10; $i++){
    echo $i." ";
}

// WHILE (tant que)

$i = 1;
while($i <= 10){
    echo $i." ";
    $i++;  
}
echo "<pre>";

// FOREACH (principalement pour manipuler des array)
// génère un tableau de 1 à 10 (1,10)
$range = range(1,10);
var_dump($range);

foreach(range(1,10) as $valeur) {
    echo $valeur." ";
}

echo "<br>";

$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
$nbMarques = count($marques);

//afficher les marques à mon client
echo "<h3>Méthode for</h3>";
for ($i=0; $i < $nbMarques; $i++) { 
    echo $marques[$i]."<br>";
}

echo "<h3>Méthode while</h3>";
$i = 0;
while($i < $nbMarques) {
    echo $marques[$i]."<br>";
    $i++;
}

echo "<h3>Méthode foreach</h3>";
foreach($marques as $marque) {
    echo $marque."<br>";
}

// TABLEAUX ASSOCIATIFS
// clé (key) doit être unique -> ("stephane")
// valeur (value) peux être multiple -> ("mulhouse")

$formateurs = [
    "stephane" => "mulhouse",
    "virgile" => "strasbourg",
    "micka" => "strasbourg",
    "dominique" => "colmar",
];

var_dump($formateurs);

ksort($formateurs); // (affect key) ksort(A-Z) krsort(Z-A) (KeySort/KeyReverseSort)
asort($formateurs); // (affect value) asort(A-Z) arsort(Z-A)
foreach($formateurs as $prenom => $ville){
    echo ucfirst($prenom)." habite ".mb_strtoupper($ville).
    "<br>"; // ucfirst met en majuscule la première lettre
}

$gens = [
    "yasin" => [
        "adresse" => "23 rue des canonniers",
        "cp" => "67100",
        "ville" => "STRASBOURG",
        "tel" => "06 88 77 88 99"
    ],
    "cloe" => [
        "adresse" => "10 b route de Molsheim",
        "cp" => " 67 117",
        "ville" => "FURDENHEIM",
        "tel" => "06 02 13 78 14"
    ],
];

// var_dump($gens);
// echo $gens["yasin"]["cp"]." ".$gens["yasin"]["ville"];

foreach($gens as $prenom => $coordonnees){
    echo ucfirst($prenom)." habite ".
                $coordonnees["adresse"]." ".$coordonnees["cp"].
                " ".$coordonnees["ville"]." et a comme n° de 
                téléphone : ".$coordonnees["tel"]."<br>";
}


// FONCTIONS

function afficherMessage() : string {
    $message = "voici mon message<br>";
    return $message;
}

echo afficherMessage();


// CALCULER LE CARRE
//façon 1

echo calculerCarre("azezae");
function calculerCarre($nombre){
    if(gettype($nombre) == "integer"){
        $resultat = $nombre**2;
        return "résultat $resultat";
    } else {
        echo "erreur: entrez un nombre<br>";
    }
}

//façon 2
echo "résultat: ".pow(9,2);
echo "<br>";


echo calculerMoyenne([9,10.5,11,18,12])."<br>";
echo calculerMoyenne([19,10,12,8,6])."<br>";

$eleves = [
    "cindy" => [12, 9, 19, 12, 15, 13],
    "pascal" => [4, 8, 14, 11, 12, 18]
];

foreach($eleves as $prenom => $notes){
    echo "La moyenne de $prenom est de :".calculerMoyenne($notes)."<br>";
}

function calculerMoyenne(array $notes) : float {
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;
}

echo pairOuImpair(4);
echo pairOuImpair(5);

// Savoir si un nombre est pair ou impair
function pairOuImpair($nombre) : string {
        if($nombre %2 == 0) { // % = modulo
            $resultat = "pair<br>";
        } else {
            $resultat = "impair<br>";
        }
        return "$nombre est $resultat";
}


//function pour répéter

echo repeterMot("Youpi", 6, " - ", " lol ");
echo repeterMot("AHA", 6, " / ", " xD ");
function repeterMot(string $mot, int $nbRepetitions, string $separateur, string $separateurX) {
    $resultat = "";
    foreach(range(1, $nbRepetitions) as $valeur){ // je fais un foreach qui vas de 1 jusqu'au nombre de répétition indqué dans la function, le "as $valeur" est obligatoire mais ici il n'est pas utilisé
        $resultat .= $mot.$separateur.$separateurX; 
    }
    return $resultat;
}

//2ème façon native

echo str_repeat("Bidule ", 10); 



















