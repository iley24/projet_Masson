<?php
if(
    isset($_POST['lastname']) && !empty($_POST['lastname'])
    && 
    isset($_POST['firstname']) && !empty($_POST['firstname'])
){
 
    $nom  =  htmlspecialchars($_POST['lastname']);
    $prenom = htmlspecialchars($_POST['firstname']);
    
    // echo $nom.' '.$prenom;
    
    $reqsql = "INSERT INTO customers (nom, prenom) VALUES ('$nom','$prenom')";
    include '../inc/connexion.php';    
    if($connexion->query($reqsql)){
        header('Location:ok.php');
    }
    
} else {
    header('Location:contact.php');
}