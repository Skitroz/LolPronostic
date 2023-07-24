<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="output.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0d88df16c5.js" crossorigin="anonymous"></script>
    <title>
        <?php echo $titlePage;?>
    </title>
</head>

<body class="background">
    <header>
        <menu>
            <nav class="text py-6">
                <ul class="pl-10 flex gap-10">
                    <li class="flex gap-2 lien-menu">
                        <div class="icon">
                            <i class="fa-solid fa-clock text"></i>
                        </div>
                        <a href="#" class="text-menu">Matchs</a>
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
                        <a href="src/sessions/connexion.php" class="px-6 py-4 background-login"><i
                                class="fa-regular fa-user"></i></a>
                    </li>
                </ul>
            </nav>
        </menu>
    </header>
</body>

</html>