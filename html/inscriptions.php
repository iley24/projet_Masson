<?php
$title = 'Inscriptions';
include '../inc/header.php' ?>

<main>
<section>
    
<h2>Inscrivez-vous pour tenter votre chance !</h2>
<br>
Remplissez le formulaire ci-dessous et entrez dans la course pour gagner la BMW de vos rêves !  
<br><br>

📝 Comment s'inscrire ?<br>
<br>
<ul>
    <li>1️⃣ Indiquez votre nom et le modèle BMW que vous souhaitez gagner.</li><br>
    <li>2️⃣ Validez votre inscription en soumettant le formulaire.</li><br>
    <li>3️⃣ Consultez la liste des participants dans l'onglet Commandes.</li><br>
</ul>

📢 Le tirage au sort désignera le grand gagnant ! 
N'attendez plus, inscrivez-vous dès maintenant et tentez votre chance ! 🍀  

</section>
<aside>
<h2>Inscriptions :</h2>
    <form action="traitement.php" method="post">
        <input type="text" name="firstname" id="firstname" placeholder="Nom" maxlength="100" required>
        <input type="text" name="lastname" id="lastname" placeholder="Prénom" maxlength="100" required>
        <select name="couleur" id="couleur" required>
            <option disabled selected>Choissis ton modèle...</option>
            <option value="1">BMW M4</option>
            <option value="2">BMW M2</option>
            <option value="3">BMW i8</option>
            <option value="4">BMW X7</option>
            <option value="5">BMW M5 Competition</option>
            <option value="6">BMW Z4 Roadster</option>
            <option value="7">BMW Série 7</option>
            <option value="8">BMW i4</option>
            <option value="9">BMW X6</option>
            <option value="10">BMW Série 3 Touring</option>
            <option value="11">BMW iX </option>
            <option value="12">BMW X5 M</option>
            <option value="13">BMW Série 5</option>
            <option value="14">BMW M3 Touring</option>
            <option value="15">BMW iX1</option>
        </select>
        <input type="text" name="email" id="email" placeholder="exemple@gmail.com" maxlength="100" required>
    
        <input type="submit" value="Valider mon inscription">
    </form>
</aside>
</main>


<?php include '../inc/footer.php' ?>