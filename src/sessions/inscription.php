<?php

    $titrePage = "Inscription - Lol Prono";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="output.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0d88df16c5.js" crossorigin="anonymous"></script>
    <title><?php echo $titrePage;?></title>
</head>
<body class="background-sessions h-screen">
    <main class="flex flex-col w-screen h-screen items-center justify-center">
        <div class="shadow-[5px_20px_50px_#000] rounded-[10px]">
        <form action="sessions.php" method="POST" class="flex flex-col justify-center items-center">
            <h1 class="text text-[36px] m-[40px] font-bold">S'inscrire</h1>
            <input type="text" name="pseudo" placeholder="Pseudo" required class="bg-text w-[350px] m-[20px] p-[20px] border-none outline-none rounded-[5px]">
            <input type="email" name="email" placeholder="Email" required class="bg-text w-[350px] m-[20px] p-[20px] border-none outline-none rounded-[5px]">
            <input type="password" name="mdp" placeholder="Mot de passe" required class="bg-text w-[350px] m-[20px] p-[20px] border-none outline-none rounded-[5px]">
            <input type="submit" name="envoyer" value="S'inscrire" class="w-[200px] h-[40px] m-[10px] text bg-[#0b0b13] text-1 font-bold mt-[20px] outline-none border-none rounded-[5px] cursor-pointer">
        </form>
        <div class="flex justify-center items-center mt-10">
            <button><a href="connexion.php" class="outline-none border-none text-[#0b0b13] py-6 px-[250px] rounded-t-[60%] rounded-b-[10px] bg-[#e0e0f1]">Se connecter</a></button>
        </div>
        </div>
    </main>
</body>
</html>