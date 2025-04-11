<?php include '../inc/header.php'; ?>
<main>
    <h2>Liste des inscrits</h2>
    <table summary="">
        <caption>Liste des inscrits</caption>
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
            include '../inc/connexion.php';
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
                <td>
                    <form action="modifier.php" method="post">
                        <input type="hidden" name="id" value="<?= $i['idclients'] ?>">
                        <input type="image" src="../image/modifier.svg" alt="">
                    </form>
                </td>
                <td>
                <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?= $i['idclients'] ?>">
                        <input type="image" src="../image/close.svg" alt="">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../inc/footer.php';