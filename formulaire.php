<?php

$renseignements = ["Nom" => "text", "Prénom" => "text", "Email" => "email", "Ville" => "text"];
function afficherRenseignements(array $renseignements) {
    $form = "";
    foreach ($renseignements as $input => $type) {
        $form .= "<form action='#' method='POST'><label for='$input'>$input</label><br>
                    <input type='$type' name='$input' id='$input'><br>";
    }
    $form .= "</form>";
    return $form;
}

$sexe = ["Homme", "Femme", "Autres"];
function afficherRadio(array $sexe){
    $form = "";
    foreach($sexe as $radio){
        $form .= "<form action='#' method='POST'><input type='radio' value='$radio' id='$radio' name='sexe'>
        <label for='$radio'>$radio</label><br>";
    }
    $form .= "</form>";
    return $form;
    
}

$formations = ["Developpeur Logiciel", "Designer web", "Integrateur", "Chef de projet"];
function afficherDropdown(array $formations){
    $form = "<Form action='#' method='POST'>Intitulés de formations :<br><select name='formations' id='formations'>";
    foreach($formations as $dropdown){
        $form .= "<option value='$dropdown'>$dropdown</option><br>";
    }
    $form .= "</select></form>";
    return $form;
}    

echo afficherRenseignements($renseignements);
echo afficherRadio($sexe);
echo afficherDropdown($formations);
$button = "<button type='submit'>Valider</button>";
echo $button;

//<form action='#' method='POST'> [Form]
//"<input type='radio' value='$radio' id='$radio' name='sexe'><label for='$radio'>$radio</label><br>"; [Radio]
//"<label for='$input'>$input</label><br><input type='$type' name='$input' id='$input'><br>"; [Input]
//"<Form action='#' method='POST'>Intitulés de formations :<br><select name='formations' id='formations'>"; [Dropdown Select]
//"<option value='$dropdown'>$dropdown</option><br>" [Dropdown Options]









































?>