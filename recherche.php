<?php

if (
    isset($_GET['recherche']) && !empty($_GET['recherche'])
) {
    $recherche = htmlspecialchars($_GET['recherche']);

    header("Location: Erreur_recherche.php");

} else {
    header("Location: ../index.php");
}