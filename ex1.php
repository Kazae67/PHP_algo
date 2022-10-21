<html>
<title>ALGO 1 | Ex 1-15</title>
<link rel="stylesheet" href="style.css">
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/style.css');

// EXERCICE 1
echo "<h1>EXERCICE 1</h1>";
echo "<u><p>Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase
(espaces inclus).</u></p>";

$texte = "Notre formation DL commence aujourd'hui";
$result = strlen($texte);
echo "La phrase « $texte » contient $result caractères";
echo "<br>";

// EXERCICE 2
echo "<h1>EXERCICE 2</h1>";
echo "<p><u>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
contenus dans celle-ci.</u></p>";

$resultt = str_word_count($texte);
echo "La phrase « $texte » contient $resultt mots.";
echo "<br>";

// EXERCICE 3
echo "<h1>EXERCICE 3</h1>";
echo "<p><u>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</u></p>";

echo str_replace("demain", "aujourd'hui", $texte);
echo "<br>";
echo str_replace("aujourd'hui", "demain", $texte);
echo "<br>";

// EXERCICE 4
echo "<h1>EXERCICE 4</h1>";
echo "<p><u>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</u></p>";



$phrase = "Engage le jeu que je le gagne";
$phraseTest = $phrase;
$modif = strtolower(strrev($phrase));
$modif = str_replace(" ", "", $modif);
$phraseTest= strtolower($phraseTest);
$phraseTest= str_replace(" ", "", $phraseTest);
if (strtolower($phraseTest) == $modif){
    echo "La phrase « $phrase » est palindrome";
} else{
    echo "La phrase « $phrase » n'est pas palindrome ";
}
echo "<br>";

// EXERCICE 5
echo "<h1>EXERCICE 5</h1>";
echo "<p><u>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</u></p>";

    
    
    
$franc = 1;
$euro = round($franc * 15.24, 2);
echo "montant en euro : $franc <br>";
echo "$franc francs = $euro €";
echo "<br>";

// EXERCICE 6
echo "<h1>EXERCICE 6</h1>";
echo "<p><u>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</u></p>";

$prixHT = 9.99;
$nbArticles = 5;
$TVA = 0.20;
$totalHT = $nbArticles * $prixHT;
$totalTTC = $nbArticles * $prixHT * (1 + $TVA);

echo "Prix unitaire de l'article : $prixHT <br>";
echo "Quantité : $nbArticles <br>";
echo "Taux de TVA : $TVA <br>";
echo "Le montant de la facture à régler est de : $totalTTC €<br>";

// EXERCICE 7
echo "<h1>EXERCICE 7</h1>";
echo "<p><u>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</u></p>
<ul>
    Poussin : entre 6 et 7 ans<br>
    Pupille : entre 8 et 9 ans<br>
    Minime : entre 10 et 11 ans<br>
    Cadet : à partir de 12 ans<br>
</ul>
Si la catégorie n’est pas gérée, merci de le préciser</p>";

$age = 5;
if(gettype($age) == "integer" || gettype($age) == "double"){ 
    if($age >= 13){
        $resultat = "Hors catégorie";
    }
    elseif($age >= 12){
        $resultat = "Cadet";
    } elseif($age >= 10){
        $resultat = "Minime ";
    } elseif($age >= 8) {
        $resultat = "Pupille   ";
    } elseif($age >= 6) {
        $resultat = "Poussin ";
    } else{
        $resultat = "Hors catégorie";
    }

}
echo "L'enfant qui a $age ans appartient à la catégorie « $resultat » ";

// EXERCICE 8
echo "<h1>EXERCICE 8</h1>";
echo "<p><u>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :</u></p>";

echo "<h4>1ère méthode (foreach)</h4>";
$table = 8;
echo "Table de $table : ";
$tableX = $table;
echo "<br>";
$range = range(1,8);
foreach($range as $multi){
    echo $multi; 
    echo " x ";
    echo $table." = ";
    echo $multi * $table." <br>";
}


echo "<h4>2ème méthode (for)</h4>";
echo "Table de $table<br>";
for ($nombre = 1; $nombre <= 10 ; $nombre++) { 
    $result = $table * $nombre;
    echo "$nombre x $table = $result<br>";
}

// EXERCICE 9
echo "<h1>EXERCICE 9</h1>";
echo "<p><u>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe. <br>Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</u></p>";

$sexe = "femme";
$age=18;
if (isset($sexe)&& isset($age)) // à essayer sans vu que sexe est déjà défini à null
{
  if ($age >= 18 && $age <= 35 && $sexe == "femme")
  {
       echo "Age : $age<br> Sexe : $sexe<br> La personne est imposable";
  }
  elseif ($age >= 20 && $sexe == "homme")
  {
    echo "Age : $age<br> Sexe : $sexe<br> La personne est imposable";
  }
  else
  {
    echo "Age : $age<br> Sexe : $sexe<br> Dégage";
  }
}

// EXERCICE 10
echo "<h1>EXERCICE 10</h1>";
echo "<p><u>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €</u></p>";

$prix = 152;
$verse = 200;
$reste = $verse - $prix;
$reste = (int)$reste;

echo "Montant à payer : $prix €<br>";
echo "Montant versé : $verse €<br>";
echo "Reste à payer : $reste €<br>";

$dix = floor($reste / 10);
$reste = $reste % 10;
$cinq = floor($reste / 5);
$reste = $reste % 5;
$deux = floor($reste / 2);
$reste = $reste % 2;
$un = floor($reste / 1);
$reste = $reste %1;

if ($dix >= 2){
   $s10 = "s"; 
} 
// else {
//    $s10 = false;
// }

if ($cinq >= 2){
    $s5 = "s"; 
 } 
 else {
      $s5 = "";
  }

 if ($deux >= 2){
    $s2 = "s"; 
 } else {
     $s2 = false;
 }

 if ($un >= 2){
    $s1 = "s"; 
 } else {
     $s1 = "";
 }
echo "***************************************************<br>
    Rendue de monnaie :
    $dix billet$s10 de 10 € - $cinq billet$s5 de 5€ - 
    $deux pièce$s2 de 2€ $un pièce$s1 de 1€<br>";

// EXERCICE 11
echo "<h1>EXERCICE 11</h1>";
echo "<p><u>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne).<br> Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</u></p>";

$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbMarques = sizeof($marques); //count || sizeof (s'informer)


echo "Il y a $nbMarques marques de voitures dans le tableau :<br>";
for ($i=0; $i < $nbMarques; $i++) { 
    echo "<ul><li>$marques[$i]</li></ul>";
}

// EXERCICE 12
echo "<h1>EXERCICE 12</h1>";
echo "<p><u>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective <br>(français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)<br>
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG </u></p>";


$personnes = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
];

function tableau($personnes){

    foreach($personnes as $prenom => $langue) {
        if ($prenom == "Mickaël") {
            echo "Salut $prenom<br>";
        } elseif ($prenom == "Virgile") {
            echo "Hola $prenom<br>";
        } elseif ($prenom == "Marie-Claire") {
            echo "Hello $prenom<br>";
        }
    }
}

echo tableau($personnes);
ksort($personnes);
echo "<br><b>Variante</b> : trier d’abord le tableau par ordre alphabétique du prénom<pre></pre>";
echo tableau($personnes);

// EXERCICE 13
echo "<h1>EXERCICE 13</h1>";
echo "<p><u>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales</u></p>";

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sum = array_sum($notes);
$moyenne = round($sum / $nbNotes, 2);

echo "Les notes obtenues par l’élève sont :";
for ($i=0; $i < $nbNotes; $i++) { 
    echo " $notes[$i] ";
}
echo "<br>Sa moyenne générale est donc de : $moyenne";

// EXERCICE 14
echo "<h1>EXERCICE 14</h1>";
echo "<p><u>Calculer l'âge exact d'une personne à partir de sa date de naissance 
(en années, mois, jours).</u></p>";

// $age = 1985-01-17;
// $date = 2018-05-21;
$age = new DateTime("1985-01-17T00:00:00"); // sa date de naissance
$date = new DateTime("2018-05-21T00:00:00"); // date actuelle
$diff = $age->diff($date);

echo $annees = "Âge de la personne : ".$diff->y . " ans " . $diff->m . " mois " . $diff->d . " jour(s)"; echo "<br/>";


// echo $mois = ($diff->y * 12) + $diff->m . " mois " . $diff->d . " jour(s)"; echo "<br/>";
// echo $semaines = floor($diff->days/7) . " semaine(s) " . $diff->d%7 . " jour(s)"; echo "<br/>";
// echo $jours = $diff->days . " jour(s)"; echo "<br/>";

// EXERCICE 15
echo "<h1>EXERCICE 15</h1>";
echo "<p><u>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
</u></p>";

require "Personne.php";
$p1 = new Personne("DUPONT", "Michel", "1980-02-19"); // notre objet
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");// notre objet


//$p1->setNom("DUPONTDDDD<br>"); // on modifie le nom par (" ");
echo $p1->getPrenom()." ".$p1->getNom()." a ".$p1->getAge()." ans<br>"; // on récupères dans require"personne.php" les attributs
echo $p2->getPrenom()." ".$p2->getNom()." a ".$p2->getAge()." ans<br>"; //  on récupères dans require"personne.php" les attributs
//echo $p1->getNom();
//$p1->setNom("DUPONTDDDD<br>");
//echo $p1->getNom();
//echo $p1->getAge();

// echo $p1->getBirthdate();
echo $p1->getBirthdate();
echo "<br>";
$p1->setBirthdate("2020-08-08");
echo $p1->getBirthdate();
// $p1->setBirthdate("1954-05-05");
// echo $p1->getBirthdate();

?>
</html>
