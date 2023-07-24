<?php

include("../connexion-bdd.php");

if(isset($_POST['envoyer'])){
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $mdpCrypte = password_hash($mdp, PASSWORD_BCRYPT);

    $sql = ("INSERT INTO `users`(`pseudo`, `email`, `mdp`) VALUES (:pseudo, :email, :mdp)");
    $stmt = $dbh->prepare($sql);

    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mdp', $mdpCrypte);

    $stmt->execute();

    header("Location: ../dashboard.php");
    exit;

}

?>