<?php
if(
    isset($_POST['lastname']) && !empty($_POST['lastname']) 
    &&
    isset($_POST['firstname']) && !empty($_POST['firstname']) 
    &&
    isset($_POST['email']) && !empty($_POST['email']) 
    &&
    isset($_POST['modeles']) && !empty($_POST['modeles'])
){
    $nom = htmlspecialchars($_POST['lastname']);
    $prenom = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $modeles = htmlspecialchars($_POST['modeles']);

    include 'connexion.php';

    $req_client = "
        INSERT INTO clients (nom, prenom, email, modeles)
        SELECT '$nom', '$prenom', '$email', modeles
        FROM vehicules 
        WHERE idvehicules = '$modeles'
    ";

    try {
        if ($connexion->query($req_client)) {
            header('Location:reponse.php');
        } else {
            echo "Erreur lors de l'inscription : " . $connexion->error;
        }
    } catch (PDOException $error) {
        if ($error->getCode() == 23000) {
            header('Location: Erreur_email.php');
        } else {
            header('Location:reponse.php'); 
        }
    }
} else {
    header('Location: inscription.php');
}