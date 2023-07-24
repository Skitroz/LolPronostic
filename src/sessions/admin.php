<?php

session_start();
$_SESSION['role'] = 'admin'; // Ou 'user' selon le rôle de l'utilisateur

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['pseudo'])) {
    // Vérifier si l'utilisateur a le rôle d'administrateur
    if ($_SESSION['role'] === 'admin') {
        // Afficher du contenu réservé aux administrateurs
        echo "Bienvenue, administrateur ".$_SESSION['pseudo']."!";
    } else {
        // Afficher du contenu pour les utilisateurs normaux
        echo "Bienvenue, ".$_SESSION['pseudo']."!";
    }
} else {
    // Afficher du contenu pour les utilisateurs non connectés
    echo "Bienvenue, visiteur!";
}

?>