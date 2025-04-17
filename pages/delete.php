<?php

if(isset($_POST['id']) && !empty($_POST['id'])){
    include '../html/connexion.php';
    $i = htmlspecialchars($_POST['id']);
    $sql = "DELETE FROM clients WHERE idclients=$i";
    if($connexion->query($sql)){
        header('location: personnel.php');
    } 
}else {
    header('location: personnel.php');
}