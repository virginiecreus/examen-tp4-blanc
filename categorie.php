<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body class="couleur">
<?php include 'menu.php'; ?>

<?php
// lancement de la requete

// voilà que qui normalement devrait faire marcher ma requête pour afficher par catégorie, j'ai pris exemple sur un des exo php du devpark de trello
$requete = "SELECT * FROM `videos` where id = ".$_GET['id'];



$donnees = mysqli_query($bdd ,$requete);

// On affiche chaque entrée une à une
while ($row = mysqli_fetch_array($donnees))
{

    ?>
    <p>
        <strong>Titre</strong> : <?php echo $row['titre']; ?><br />
        <strong>Vidéo</strong> : <?php echo $row['lien']; ?>
    </p>
    <?php
}

?>

</body>
</html>