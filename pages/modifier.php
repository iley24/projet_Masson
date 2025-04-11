<?php
if(isset($_POST['idclients']) && !empty($_POST['idclients'])){
    include '../html/connexion.php';
    $i = htmlspecialchars($_POST['idclients']);
    $reponse = $connexion->query("SELECT * FROM clients WHERE idclients = $i");
    foreach($reponse AS $rep):
?>
<form action="maj.php" method="post">
    <input type="text" name="nom" value="<?= $rep['nom'] ?>" maxlength="100">
    <input type="text" name="prenom" value="<?= $rep['prenom'] ?>" maxlength="100">
    <input type="text" name="email" value="<?= $rep['email'] ?>" maxlength="100">
    <input type="text" name="modeles" value="<?= $rep['modeles'] ?>" maxlength="100">
    <input type="hidden" name="idclients" value="<?= $rep['idclients'] ?>">
    <input type="submit" value="valider">
</form>
<?php endforeach; }