<?php define('BASE','/efrei_cours/projet_masson/');?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
        <?php
            if(isset($title)){
                echo $title;
            } else{
                echo 'Page Projet';
            }
        ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= BASE ?>css/style.css">
    <link rel="stylesheet" href="<?= BASE ?>css/mobile.css">
    </head>
<body>

<header>
    <img src="<?= BASE ?>image/burger.svg" alt="menu burger"  id="burger">
    <a href="<?= BASE ?>index.php">
        <img src="<?= BASE ?>image/bmw.svg" alt="Logo" width='100' id="logo">
    </a>
    <h1 id="titre">BMW Dream</h1>

    <form action="<?= BASE ?>html/recherche.php" method="get">
        <input type="search" name="recherche" id="recherche" maxlength="200" placeholder="Recherche...">
        <input type="image" src="<?= BASE ?>image/loupe.svg" height="50px" id="loupe">
    </form>
</header>

<nav>
    <a href="<?= BASE ?>index.php">Accueil</a>
    <a href="<?= BASE ?>html/inscriptions.php">Inscriptions</a>
    <a href="<?= BASE ?>html/liste.php">Liste</a>
    <a href="<?= BASE ?>html/personnel.php">Personnel</a>
</nav>