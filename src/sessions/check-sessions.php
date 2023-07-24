<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['pseudo'])) {
    // Si l'utilisateur est connecté, afficher un lien de déconnexion
    echo '<a href="src/sessions/deconnexion.php" class="px-6 py-4 background-login"><i class="fa-solid fa-right-from-bracket"></i></a>';
} else {
    // Si l'utilisateur n'est pas connecté, afficher un lien de connexion
    echo '<a href="src/sessions/connexion.php" class="px-6 py-4 background-login"><i class="fa-solid fa-user"></i></a>';
}
?>
