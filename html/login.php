<?php
session_start();

if (isset($_SESSION['admin'])) {
    header('Location: personnel.php');
    exit;
}
?>


<?php
$title = 'Liste des participants';
include '../inc/header.php' ?>

<main>
    
<section>
  <h2>Espace Administrateur 🔐</h2>
  <br>
  Cet espace est réservé à l’équipe organisatrice du concours.  
  Grâce à cette interface, vous pouvez consulter, modifier ou supprimer les inscriptions des participants.
  <br><br>
  🚨 Attention : L’accès est strictement limité aux personnes autorisées.  
  Veuillez entrer vos identifiants pour accéder à la liste complète.
  <br><br>
  Une fois connecté, vous pourrez :
  <ul>
    <li>👀 Consulter toutes les participations enregistrées</li>
    <li>✏️ Modifier les informations d’un participant</li>
    <li>❌ Supprimer une inscription en cas d’erreur ou de doublon</li>
  </ul>
  <br>
  Merci de votre vigilance et bonne gestion ! 🔧💼
</section>

<aside>
    <h2>Connexion administrateur</h2>
    <form action="admin.php" method="post">
        <input type="text" name="login" id="login" placeholder="Identifiant" required>

        <input type="password" name="password" id="password" placeholder="Mot de passe" required>

        <?php if (isset($_GET['erreur'])): ?>
        <p style="color: red;">Identifiants incorrects !</p>
        <?php endif; ?><br>

        <input type="submit" value="Se connecter">
    </form>
</aside>
</main>

<?php include '../inc/footer.php' ?>
