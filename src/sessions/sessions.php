<?php

include("../connexion-bdd.php");

if (isset($_POST['envoyer'])) {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $mdpCrypte = password_hash($mdp, PASSWORD_BCRYPT);

    $points = 1000; // Attribuer 1000 points à chaque nouvel utilisateur

    $sql = "INSERT INTO users (pseudo, email, mdp, points) VALUES (:pseudo, :email, :mdp, :points)";
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':mdp', $mdpCrypte, PDO::PARAM_STR);
    $stmt->bindValue(':points', $points, PDO::PARAM_INT);

    $stmt->execute();

    header("Location: ../../index.php");
    exit;
}

if (isset($_POST['connexion'])) {
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $sql = "SELECT pseudo, mdp, role FROM users WHERE pseudo = :pseudo";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($mdp, $user['mdp'])) {
        // L'utilisateur existe et le mot de passe est correct
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['role'] = $user['role']; // Stocker le rôle de l'utilisateur dans la session
        $_SESSION['points'] = $user['points'];
        header("Location: ../../index.php");
        exit;
    } else {
        echo "Pseudo ou mot de passe incorrect";
    }
}

?>