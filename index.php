<?php
    $titlePage = "LolKikoo - Accueil";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="output.css" rel="stylesheet">
    <link href="src/css/index.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0d88df16c5.js" crossorigin="anonymous"></script>
    <title><?php echo $titlePage;?></title>
</head>
<body class="background">
    <header>
        <menu>
            <nav class="text py-6">
                <ul class="pl-10 flex gap-10">
                    <li class="flex gap-2 lien-menu">
                        <div class="icon">
                            <i class="fa-solid fa-clock text-[#e0e0f1]"></i>
                        </div>
                        <a href="#" class="text-menu">Matchs</a>
                    </li>
                    <li class="flex gap-2 lien-menu">
                        <div class="icon">
                            <i class="fa-solid fa-star text-[#e0e0f1]"></i>
                        </div>
                        <a href="#" class="text-menu">Pronostics</a>
                    </li>
                    <li class="flex gap-2 lien-menu">
                        <div class="icon">
                            <i class="fa-solid fa-play"></i>
                        </div>
                        <a href="#" class="text-menu">Jouer</a>
                    </li>
                    <li class="flex gap-2 lien-menu">
                        <div class="icon">
                            <i class="fa-solid fa-ranking-star"></i>
                        </div>
                        <a href="#" class="text-menu">Classement</a>
                    </li>    
                    <li class="absolute top-2 right-0 mr-10">
                        <a href="#" class="px-6 py-4 background-login"><i class="fa-regular fa-user"></i></a>
                    </li>
                </ul>
            </nav>
        </menu>
    </header>
    <main>
        <div class="flex-col text-center pt-10">
            <section>
                <h1 class="text pb-16 text-[34px]">Résumé des matchs récents de la LEC</h1>
                <?php

$urlMatchProLEC = file_get_contents('https://www.team-aaa.com/fr/actualite/lec-summer-split-saison-2023-informations-streams-planning-resultats-classement_128106?page=2');

// Créer un nouvel objet DOMDocument
$dom = new DOMDocument();
@$dom->loadHTML($urlMatchProLEC);

// Rechercher tous les éléments avec la classe "versus-part"
$Match = $dom->getElementsByTagName('div');

// Tableau pour stocker les matchs
$tableauMatch = [];

// Parcourir les éléments "versus-part"
foreach ($Match as $Matchs) {
    // Vérifier si l'élément a la classe "versus-part"
    if ($Matchs->getAttribute('class') === 'versus-part') {
        // Récupérer le texte brut de l'élément
        $text = $Matchs->textContent;

        // Remplacer le score "1" par le score entouré de balises <span> avec la classe "text-red-500"
        $text = preg_replace('/\b1\b/', '<span class="text-[#e0e0f1] bg-[#ff3b3b] py-2 px-3 rounded-[6px]">1</span>', $text);
        $text = preg_replace('/\b0\b/', '<span class="text-[#e0e0f1] bg-[#b9b9b9] py-2 px-3 rounded-[6px]">0</span>', $text);

        // Ajouter le texte extrait au tableau des matchs
        $tableauMatch[] = $text;
    }
}

// Grouper les matchs en 3 blocs de 5
$regrouperMatchs = array_chunk($tableauMatch, 5);

// Afficher les blocs de matchs en utilisant le système de grille de Tailwind
echo '<div class="grid grid-cols-3 gap-4">';
foreach ($regrouperMatchs as $regroupe) {
    echo '<div class="col-span-1">';
    foreach ($regroupe as $matchText) {
        echo '<div class="p-4 m-2 bg-[#161729] rounded-[12px]">';
        echo "<p class='text-[20px] text'>{$matchText}</p>";
        echo '</div>';
    }
    echo '</div>';
}
echo '</div>';

?>


            </section>
            <div class="flex justify-center gap-[250px] pt-10">
                <section>
                    <h2 class="text">Classement des équipes</h2>
                </section>
                <section>
                    <h2 class="text">Classements des KikooJAPS</h2>
                </section>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>

