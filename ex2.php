<html>
<title>ALGO 2 | Ex 1-15</title>
<link rel="stylesheet" href="table.css">
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/style.css');

// EXERCICE 1
echo "<h1>EXERCICE 1</h1>";
echo "<p><b>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.<br>
Vous devrez appeler la fonction comme suit : convertirMajRouge(variable = texte) ;
</b></p>";

$texte = strtoupper("MON TEXTE EN PARAMETRE");
function convertirMajRouge($texte){
}
echo '<span style="color:red;">'.$texte.'</span>';

// EXERCICE 2
echo "<h1>EXERCICE 2</h1>";
echo "<p><b>Soit le tableau suivant :
€capitales = array<br>
(France=> Paris, Allemagne => Berlin, USA => Washington, Italie => Rome);<br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays<br>
s’affichera en majuscule et que le tableau est trié par ordre alphabétique <b>du nom de pays</b>) grâce à<br>
une fonction personnalisée.<br>
Vous devrez appeler la fonction comme suit : afficherTableHTML(€capitales);
</b></p>";


$capitales = [
    "France" => "paris",
    "Allemagne" => "berlin",
    "USA" => "washington",
    "Italie" => "rome",
];

ksort($capitales);

     ?>
    <html>
    <table>
        <tr>
            <th>Pays</th>
            <th>Capitale</th>
        </tr>  
    <?php

function afficherTableHTML($capitales){

    foreach($capitales as $pays => $ville){
        // echo strtoupper($pays)." ".ucfirst($ville)." ";
        echo  '<tr>',
           ' <td> '.strtoupper($pays).'</td>',
            '<td> '.ucfirst($ville).'</td>',
        '</tr>';
    
    }
}
echo afficherTableHTML($capitales);

?>
</table>
<?php

// EXERCICE 3
echo "<h1>EXERCICE 3</h1>";
echo "<p><b>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir
dans un nouvel onglet (_blank).
</b></p>";
?>
<html>
<a href=https://elan-formation.eu/accueil target="_blank">Elan-formation</a>

<?php
// EXERCICE 4
echo "<h1>EXERCICE 4</h1>";
echo "<p><b>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page <br>Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/<br>
Le tableau passé en argument sera le suivant :
€capitales = array ('France'=>'Paris','Allemagne'=>'Berlin',
'USA'=>'Washington','Italie'=>'Rome','Espagne'=>'Madrid');
</b></p>";

$capitales = [
    "France" => "paris",
    "Allemagne" => "berlin",
    "USA" => "washington",
    "Italie" => "rome",
    "Espagne" => "madrid",
];

ksort($capitales);

     ?>
    <html>
        <table>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
                <th>Lien wiki</th>
            </tr>  
        
    <?php

    foreach($capitales as $pays => $ville){
        echo '<tr>',
                '<td> '.strtoupper($pays).'</td>',
                '<td> '.ucfirst($ville).'</td>',
                '<td> <a href="https://fr.wikipedia.org/wiki/'.$pays.'">Lien</a></td>',
             '</tr>';
    };
    ?>
    <html>
        </table>
    </html>

    <?php

// EXERCICE 5
echo "<h1>EXERCICE 5</h1>";
echo "<p><b>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.<br>
Exemple :
€nomsInput = array('Nom','Prénom','Ville');
afficherInput(€nomsInput);
</b></p>";

$champs = ['Nom','Prénom','Ville'];
count($champs);

?>

<?php
function afficherInput($champs){

?>
<form>
<?php
foreach($champs as $key){
?>
    <label for="<?php echo $key ?>"><?php echo $key ?><br> </label>
    <input type="text" name="<?php echo $key ?>" id="<?php echo $key ?>">
    <?php
    echo "<br>";
};
?>
</form>
<?php
}

echo afficherInput($champs);

// EXERCICE 6
echo "<h1>EXERCICE 6</h1>";
echo "<p><b>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.
Exemple :
€elements = array('Monsieur','Madame','Mademoiselle');
alimenterListeDeroulante(€elements);
</b></p>";

$elements = ["Monsieur","Madame","Mademoiselle"];
count($elements);

function alimenterListeDeroulante($elements){
?>
<select">
<?php 
foreach($elements as $key){
?>
    <option value="<?php echo $key ;?>"><?php echo $key?></option>
<?php
}
?>
</select>
<?php
}

echo alimenterListeDeroulante($elements);


// EXERCICE 7
echo "<h1>EXERCICE 7</h1>";
echo "<p><b>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.<br>
Exemple :
genererCheckbox(€elements);
//où €elements est un tableau associatif clé => valeur avec 3 entrées.
</b></p>"
?>
<?php

$checkbox = [
    "choix 1" => "checked",
    "choix 2" => "",
    "choix 3" => "",
];

function generalCheckbox($checkbox){
    $form = "<form>";
    foreach($checkbox as $key => $value){
            $form .="<input type='checkbox' $value> $key<br>";
        }
        return $form;
        $form .= "</form>";
}    
echo generalCheckbox($checkbox);


// EXERCICE 8
echo "<h1>EXERCICE 8</h1>";
echo "<p><b>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
Exemple : 
repeterImage(€url,4);
</b></p>";


$url = "http://my.mobirise.com/data/userpic/764.jpg";

function imageRepeter($url, int $repeat = 1){ //  METHODE CONVENTIONNELLE (y)
    $form = "";
    foreach(range(1, $repeat) as $test){  
        $form .= "<img src='$url' alt='image'>";
    }   return $form;
}
echo imageRepeter($url, 4);


// EXERCICE 9
echo "<h1>EXERCICE 9</h1>";
echo "<p><b>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ('Monsieur','Madame','Mademoiselle').
Exemple :
afficherRadio(€nomsRadio);
</b></p>";

$sexe = [
    "Masculin" => "",
    "Féminin" => "",
    "Autre" => "",
];

function afficherRadio($sexe){
    $form = "<form>";
    foreach($sexe as $key => $value){
            $form .="<input type='radio' $value> $key<br>";
        }
        return $form;
        $form .= "</form>";
}    
echo afficherRadio($sexe);


// EXERCICE 10
echo "<h1>EXERCICE 10</h1>";
echo "<p><b>En utilisant l’ensemble des fonctions personnalisées crées précédemment, 
créer un formulaire complet qui contient les informations suivantes : <br>
champs de texte avec nom, prénom, adresse email, ville, <br>
sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :<br>
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit)
</b></p>";

?>
<a href="formulaire.php">Accéder au formulaire</a>
<?php


echo "<h1>EXERCICE 11</h1>";
echo "<p><b>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.
Exemple :
formaterDateFr('2018-02-23');
</b></p>";

function convertDate(){
    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);  // converti la langue
    echo strftime("%A %e %B %Y", mktime(0, 0, 0, 02, 23, 2018));
}    

echo convertDate();

// echo date('l \t\h\e jS');

// $fmt = datefmt_create(
//     'fr-FR',
//     IntlDateFormatter::FULL,
//     IntlDateFormatter::FULL,
//     date_default_timezone_get(),
//     IntlDateFormatter::GREGORIAN,
//     'y F d'
// );
// echo 'date: ' . datefmt_format($fmt, 0);
// $date = new DateTime('2000-01-01');
// echo $date->format('Y-m-d H:i:s');


// echo strftime('%A %d %B %Y'). '<br>';
//echo strftime('%A %d %B %Y'). '<br>'; mercredi 19 octobre 2022

// echo strftime('%x'). '<br>'; 19/10/2022
// echo strftime('%T'). '<br>'; 11:41:27
// echo strftime('%c'). '<br>';19/10/2022 11:41:27


echo "<h1>EXERCICE 12</h1>";
echo "<p><b>La fonction var_dump('$'variable) permet d’afficher les informations d’une variable. <br>
Soit le tableau suivant :
'$'tableauValeurs=array(true,'texte',10,25.369,array('valeur1','valeur2'));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
</b></p>";


$tableau = [(true), "texte", 10, 25.369, ["valeur1", "valeur2"]];
var_dump($tableau);

echo "<h1>EXERCICE 13</h1>";
echo "<p><b>Créer une classe Voiture possédant les propriétés suivantes :<br> marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0.<br> Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.<br>
v1 ➔ 'Peugeot","408',5
v2 ➔ 'Citroën','C4',3<br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
suivants :
</b></p>";


?> 