<?php
    $titlePage = "Accueil - Lol Prono";
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
                        <a href="src/sessions/connexion.php" class="px-6 py-4 background-login"><i class="fa-regular fa-user"></i></a>
                    </li>
                </ul>
            </nav>
        </menu>
    </header>
    <main>
        <div class="flex-col text-center pt-10">
            <section>
                <h1 class="text pb-16 text-[34px]">Résumé des matchs récents de la LEC</h1>
                <div class="flex justify-center gap-[200px]">
                    <div class="text">
                        <h2 class="text-[24px] pb-6">Samedi 1er Juillet</h2>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>Astralis</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>SK Gaming</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>Team Vitality</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px] mx-2">0</span>
                                <span>-</span>
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px] mx-2">1</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2 >KOI</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>Excel Esports</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>G2 Esports</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>Fnatic</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>BDS</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>MAD Lions</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>Team Heretics</h2>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <h2 class="text-[24px] pb-6">Dimanche 2 Juillet</h2>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>Excel Esports</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>Astralis</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>G2 Esports</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px] mx-2">1</span>
                                <span>-</span>
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px] mx-2">0</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2 >KOI</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>Team Heretics</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>Fnatic</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>BDS</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>Team Vitality</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>SK Gaming</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>MAD Lions</h2>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <h2 class="text-[24px] pb-6">Lundi 3 Juillet</h2>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>BDS</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>Mad Lions</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>Team Vitality</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px] mx-2">0</span>
                                <span>-</span>
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px] mx-2">1</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2 >Excel Esports</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>Koi</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>Astralis</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>Team Heretics</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>G2 Esports</h2>
                            </div>
                        </div>
                        <div class="flex bg-[#161729] rounded-[12px] mb-3 py-3 w-[400px]">
                            <div class="flex items-center w-[150%] text-right justify-start flex-row-reverse mr-4">
                                <h2>SK Gaming</h2>
                            </div>
                            <div class="w-[88px] flex items-center justify-center tracking-widest">
                                <span class="text bg-[#ff3b3b] py-2 px-2 rounded-[6px]">1</span>
                                <span class="mx-2">-</span>
                                <span class="text bg-[#b9b9b9] py-2 px-2 rounded-[6px]">0</span>
                            </div>
                            <div class="flex text-left justify-start items-center w-[150%] ml-4">
                                <h2>Fnatic</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="flex justify-center gap-[250px] pt-10">
                <section class="pb-6">
                    <h2 class="text pb-6">Classement des équipes de la LEC</h2>
                    <div>
                        <table class="text w-[500px] bg-[#0b0b13] rounded-[10px]">
                            <thead>
                                <tr>
                                    <td class="px-4 py-2">Rang</td>
                                    <td class="px-4 py-2">Équipes</td>
                                    <td class="px-4 py-2">Victoires</td>
                                    <td class="px-4 py-2">Défaites</td>
                                </tr>
                            </thead>
                            <tbody class="bg-[#161729]">
                                <tr>
                                    <td class="py-1">1</td>
                                    <td class="py-1">G2 Esports</td>
                                    <td class="py-1">8</td>
                                    <td class="py-1">1</td>
                                </tr>
                                <tr>
                                    <td class="py-1">2</td>
                                    <td class="py-1">Fnatic</td>
                                    <td class="py-1">7</td>
                                    <td class="py-1">2</td>
                                </tr>
                                <tr>
                                    <td class="py-1">3</td>
                                    <td class="py-1">Excel Esports</td>
                                    <td class="py-1">5</td>
                                    <td class="py-1">4</td>
                                </tr>
                                <tr>
                                    <td class="py-1">4</td>
                                    <td class="py-1">Team Heretics</td>
                                    <td class="py-1">5</td>
                                    <td class="py-1">4</td>
                                </tr>
                                <tr>
                                    <td class="py-1">5</td>
                                    <td class="py-1">Team BDS</td>
                                    <td class="py-1">4</td>
                                    <td class="py-1">5</td>
                                </tr>
                                <tr>
                                    <td class="py-1">6</td>
                                    <td class="py-1">SK Gaming</td>
                                    <td class="py-1">4</td>
                                    <td class="py-1">5</td>
                                </tr>
                                <tr>
                                    <td class="py-1">7</td>
                                    <td class="py-1">MAD Lions</td>
                                    <td class="py-1">4</td>
                                    <td class="py-1">5</td>
                                </tr>
                                <tr>
                                    <td class="py-1">8</td>
                                    <td class="py-1">KOI</td>
                                    <td class="py-1">4</td>
                                    <td class="py-1">5</td>
                                </tr>
                                <tr>
                                    <td class="py-1">9</td>
                                    <td class="py-1">Astralis</td>
                                    <td class="py-1">3</td>
                                    <td class="py-1">6</td>
                                </tr>
                                <tr>
                                    <td class="py-1">10</td>
                                    <td class="py-1">Vitality</td>
                                    <td class="py-1">1</td>
                                    <td class="py-1">8</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section>
                    <h2 class="text">Classement des KikooJAPS</h2>
                    <?php 
                    
                    include("src/connexion-bdd.php");
                    
                    $utilisateur = $dbh->query('SELECT pseudo FROM users');
                    while ($reponseUtilisateur = $utilisateur->fetch()) {
                        echo $reponseUtilisateur['pseudo'] . '<br>';
                    }

                    ?>
                </section>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>