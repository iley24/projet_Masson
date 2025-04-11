<?php

if(isset($_POST['idclients']) && !empty($_POST['idclients'])){
    include '../html/connexion.php';
    $i = htmlspecialchars($_POST['idclients']);
    $sql = "DELETE FROM clients WHERE idclients=$i";
    if($connexion->query($sql)){
        header('location:liste.php');
    } else {
        header('location:liste.php');
    }
}