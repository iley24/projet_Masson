<?php
$title = 'modifier';
include '../inc/header.php';
?>

<main>
    <section>
    <h2>Liste des participants 📜🚗</h2>
    <br>
    Découvrez tous ceux qui tentent leur chance pour gagner la BMW de leurs rêves !  
    Chaque participant a inscrit son nom et choisi le modèle qu’il aimerait remporter.  
    <br><br>

    🔍 Comment ça fonctionne ?<br>
    <br>
    <ul>
        <li>✅ Si vous vous êtes inscrit, votre nom et votre choix de voiture apparaissent ici.</li><br>
        <li>🎟️ Chaque participant a une chance égale d’être tiré au sort.</li><br>
        <li>🏆 Le grand gagnant sera annoncé prochainement, restez connectés !</li><br>
    </ul>

    Bonne chance à tous ! 🍀🚘  

    </section>
    <aside>
        <?php if(isset($_POST['id']) && !empty($_POST['id'])){
            include '../html/connexion.php';
            $i = htmlspecialchars($_POST['id']);
            $reponse = $connexion->query("SELECT * FROM clients WHERE idclients = $i");
            foreach($reponse AS $rep):
        ?>
        <form action="maj.php" method="post">
            <input type="text" name="nom" value="<?= $rep['nom'] ?>" maxlength="100">
            <input type="text" name="prenom" value="<?= $rep['prenom'] ?>" maxlength="100">
            <input type="text" name="email" value="<?= $rep['email'] ?>" maxlength="100">
            <?php
            $modeles = [
                "BMW M4", "BMW M2", "BMW i8", "BMW X7", "BMW M5 Competition", "BMW Z4 Roadster",
                "BMW Série 7", "BMW i4", "BMW X6", "BMW Série 3 Touring", "BMW iX", "BMW X5 M",
                "BMW Série 5", "BMW M3 Touring", "BMW iX1"
            ];
            ?>
            <select name="modeles" id="modeles" required>
                <?php foreach($modeles as $m): ?>
                    <option value="<?= $m ?>" <?= ($rep['modeles'] == $m) ? 'selected' : '' ?>><?= $m ?></option>
                <?php endforeach; ?>
            </select>
            <input type="hidden" name="idclients" value="<?= $rep['idclients'] ?>">
            <input type="submit" value="valider">
        </form>
        <?php endforeach; }?>
    </aside>
</main>


<?php include '../inc/footer.php';?>
