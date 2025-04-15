<?php
$title = 'Liste des participants';
include '../inc/header.php' ?>

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
                    INNER JOIN vehicules ON clients.idclients = vehicules.idvehicules;
                    ";
            $infos = $connexion->query($sql);
            foreach($infos AS $i):
            ?>
            <tr>
                <td><?= strtoupper($i['nom']) ?></td>
                <td><?= strtolower($i['prenom']) ?></td>
                <td><?= strtolower($i['email']) ?></td>
                <td><?= strtoupper($i['modeles']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</aside>
</main>

<?php include '../inc/footer.php' ?>