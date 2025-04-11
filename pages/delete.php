<?php

if(isset($_POST['idclients']) && !empty($_POST['idclients'])){
    include '../inc/connexion.php';
    $i = htmlspecialchars($_POST['id']);
    $sql = "DELETE FROM clients WHERE id=$i";
    if($connexion->query($sql)){
        header('location:liste.php');
    } else {
        header('location:liste.php');
    }
}