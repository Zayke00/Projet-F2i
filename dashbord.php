<?php

var_dump($_POST);

// Traiter un nom
$nom = htmlspecialchars($_POST["nom"]);

// if = si
// empty == vide
// ! devant une fonction = c'est le contraire
// && == and == et
// != == différent
// strlen == longueur d'un string
// > supérieur 


if (strlen($nom) == 0 || strlen ($nom) > 255 OR empty($nom)) {
    echo "erreur nom";
} 
var_dump($_POST["nom"]);


// Traiter un prenom
$prenom = htmlspecialchars($_POST["prenom"]);

if (strlen($prenom) == 0 || strlen ($prenom) > 255 OR empty($prenom)) {
    echo "erreur prenom";

} 

var_dump($_POST["prenom"]);


// Traiter un email
$email = htmlspecialchars($_POST["email"]);

if (strlen($email) == 0 || strlen ($email) > 255 OR empty($email)) {
    echo "erreur email";
}

function validateEmail($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "{$email}: Est un email correct"."<br>";
    }
    else {
        echo "{$email}: N'est pas un mail correct"."<br>";
    }
}

var_dump($_POST["email"]);


// Traiter un télephone
$phone = htmlspecialchars($_POST["phone"]);

if (strlen($phone) == 0 || strlen ($phone) > 18 OR empty($phone)) {
    echo "erreur telephone";
}

var_dump($_POST["phone"]);


// Traiter une date
$date = htmlspecialchars($_POST["date"]);

if (strlen($date) == 0 || strlen ($date) > 20 OR empty($date)) {
    echo "erreur date";
}

var_dump($_POST["date"]);



// Traiter un mot de passe
// $mdp1 = htmlspecialchars($_POST["mdp1"]);

// if (strlen($mdp1) == 0 || strlen ($mdp1) > 255 OR empty($mdp1)) {
    // echo "erreur mot de passe";
// }

var_dump($_POST["mdp1"]);


// AUTRE MOYEN MDP

if(strlen($mdp1) < 12 || ($mdp1) != $mdp2 || strlen ($mdp1) > 255) {
    echo "erreur mot de passe" ;
}


// Traiter une confirmation de mot de passe
$mdp2 = htmlspecialchars($_POST["mdp2"]);

if (strlen($mdp2) == 0 || strlen ($mdp2) > 255 OR empty($mdp2)) {
    echo "erreur mot de passe";
}

var_dump($_POST["mdp2"]);

