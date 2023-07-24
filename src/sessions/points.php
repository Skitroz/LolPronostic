<?php

$host = "localhost";
$dbname = "lol_prono";
$user = "root";
$pass = "";

try{
    $dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];

    $sql = "SELECT points FROM users WHERE pseudo = :pseudo";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $points = $user['points'];
        echo "<p style='color: white;'>Bienvenue, $pseudo ! Vous avez $points points.</p>";
    } else {
        echo "Erreur : impossible de trouver l'utilisateur.";
    }
} else {
    echo "Bienvenue, visiteur !";
}
?>
