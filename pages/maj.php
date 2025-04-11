<?php
if (
    isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom'])
    && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['modeles']) && !empty($_POST['modeles'])
) {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $modeles = htmlspecialchars($_POST['modeles']);
    $id = $_POST['idclients'];

    $reqsql = "UPDATE clients SET nom='$nom', prenom='$prenom', email='$email', modeles='$modeles' WHERE idclients='$id'";

    include '../html/connexion.php';
    if ($connexion->query($reqsql)) {
        header('Location:liste.php');
    }
} else {
    header('location:../index.php');
}