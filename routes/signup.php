<?php
if (isset($_POST['email'], $_POST['password'])) {
    //instancier la classe
} else {
    header('location: /login.php');
}

//Exercice :
// 1. Créer une classe 'USerController'
// Constructeur (email,password) 
// 3.ajouter des méthodes :
// 3.1 ajouter des Getter et Setter pour email
// 3.2 isEmailValid : tester si l'email possède un @
// 3.3 isPasswordValid: Tester si le mot de passe est non vide et supérieur à 6
// 3.4 isDataValid: retourne si email valide ET password valide