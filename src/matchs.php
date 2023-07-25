<?php

$titlePage = "Matchs - LolProno";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="../output.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0d88df16c5.js" crossorigin="anonymous"></script>
    <title><?php $titlePage;?></title>
</head>
<body>
<header>
        <menu>
            <nav class="text py-6">
                <ul class="pl-10 flex gap-10">
                    <li class="flex gap-2 lien-menu">
                        <div class="icon">
                            <i class="fa-solid fa-clock text"></i>
                        </div>
                        <a href="src/matchs.php" class="text-menu">Matchs</a>
                    </li>
                    <li class="flex gap-2 lien-menu">
                        <div class="icon">
                            <i class="fa-solid fa-star text"></i>
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
                        <?php include("sessions/check-sessions.php"); ?>
                    </li>
                </ul>
            </nav>
        </menu>
    </header>

    <?php
$url = "https://lolesports.com/schedule?leagues=lec,emea_masters";
$html = file_get_contents($url);

if ($html) {
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    // Trouver tous les éléments avec la classe "EventDate"
    $eventDates = $xpath->query('//div[contains(@class, "EventDate")]');

    // Compteur pour suivre le nombre de div "single future event" trouvées
    $count = 0;

    // Parcourir les éléments "EventDate"
    foreach ($eventDates as $eventDate) {
        // Vérifier si on a atteint la 3ème div "single future event"
        if ($count >= 3) {
            break;
        }

        // Trouver le div parent contenant les informations de la date
        $matchesDiv = $eventDate->parentNode;

        // Vérifier si l'élément courant est une div "single future event"
        if (strpos($matchesDiv->getAttribute("class"), "single future event") !== false) {
            // Récupérer la date
            $date = $eventDate->nodeValue;

            // Trouver tous les éléments avec la classe "team"
            $teams = $xpath->query('.//div[contains(@class, "team")]', $matchesDiv);

            // Parcourir les équipes pour afficher les matchs
            foreach ($teams as $teamElement) {
                $teamName = $teamElement->nodeValue;
                echo "Match le $date : $teamName" . PHP_EOL;
            }

            // Incrémenter le compteur
            $count++;
        } else {
            echo "Pas une div 'single future event'" . PHP_EOL;
        }
    }
} else {
    echo "Impossible de récupérer les données.";
}
?>



</body>
</html>