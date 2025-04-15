<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
?>


<?php
$title = 'Liste des participants';
include '../inc/header.php' ?>

<main>
    
<section>
    <p>👤 Connecté en tant que : <strong><?= htmlspecialchars(strtoupper($_SESSION['admin'])) ?></strong></p>
    <br>

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

<aside id="tab">
    <table summary="" border=2>
        <caption>Participants : </caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>E-mail</th>
                <th>Modèles</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connexion.php';
            $sql = "SELECT * FROM clients;
                    INNER JOIN vehicules ON clients.idclients = vehicules.idvehicules";
            $infos = $connexion->query($sql);
            foreach($infos AS $i):
            ?>
            <tr>
                <td><?= strtoupper($i['nom']) ?></td>
                <td><?= strtolower($i['prenom']) ?></td>
                <td><?= strtolower($i['email']) ?></td>
                <td><?= strtoupper($i['modeles']) ?></td>
                <td>
                    <form action="modifier.php" method="post">
                        <input type="hidden" name="id" value="<?= $i['idclients'] ?>">
                        <input type="image" src="../image/loupe.svg" alt=""id="loupeTab">
                    </form>
                </td>
                <td>
                <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?= $i['idclients'] ?>">
                        <input type="image" src="../image/close.gif" alt="" id="closeTab">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <form action="logout.php" method="post">
    <button type="submit" id="logout" >Se déconnecter</button>
    </form>
</aside>
</main>

<?php include '../inc/footer.php' ?>