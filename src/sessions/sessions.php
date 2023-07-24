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

    header("Location: ../../index.php");
    exit;

}

if(isset($_POST['connexion'])){
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $sql = "SELECT pseudo, mdp FROM users WHERE pseudo = :pseudo";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($mdp, $user['mdp'])){
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        header("Location: ../../index.php");
        exit;
    } else {
        echo "Pseudo ou mot de passe incorrect";
    }
}
?>