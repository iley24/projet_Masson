<?php
if (
    isset($_POST['nom']) && !empty($_POST['nom']) 
    && isset($_POST['prenom']) && !empty($_POST['prenom'])
    && isset($_POST['email']) && !empty($_POST['email']) 
    && isset($_POST['modeles']) && !empty($_POST['modeles'])
    && isset($_POST['idclients']) && !empty($_POST['idclients'])
) {
    include '../html/connexion.php';

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $modeles = htmlspecialchars($_POST['modeles']);
    $id = $_POST['idclients'];

    // On modifie tout dans la table "clients", pas "vehicules"
    $reqsql = "UPDATE clients SET nom='$nom', prenom='$prenom', email='$email', modeles='$modeles' WHERE idclients=$id";

    if ($connexion->query($reqsql)) {
        header('Location: personnel.php');
        exit;
    }
} else {
    header('Location: personnel.php');
    exit;
}