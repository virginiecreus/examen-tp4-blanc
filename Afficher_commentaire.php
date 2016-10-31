<?php
// lancement de la requete
$requete = "SELECT * FROM `commentaires`";



$donnees = mysqli_query($bdd ,$requete);
// On affiche chaque entrée une à une
while ($row = mysqli_fetch_array($donnees))
{
    ?>
    <p>
        <strong>Auteur</strong> : <?php echo $row['auteur']; ?><br />
        <strong>Date du commentaire</strong> : <?php echo $row['date_commentaire']; ?><br />
        <strong>Commentaire</strong> : <?php echo $row['commentaire']; ?>
        

    </p>
    <?php
}

?>