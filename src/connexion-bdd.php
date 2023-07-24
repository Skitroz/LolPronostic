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

?>