<?php include 'config.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php include 'menu.php'?>
<section>
    <div class="container">
        <div class="row">
            <a class="col-md-8 col-md-offset-2">
                <form name="insertion" action="" method="get" class="form-horizontal">

                    <div class="form-group">
                        <label for="categorie" class="col-sm-2 control-label font">catégorie</label>
                        <div class="col-sm-8">
                            <?php
                            $sql = "SELECT * FROM categories";
                            $req = $bdd->query($sql);

                            ?>
                            <select class="form-control" name="categorie">
                                <?php
                                // on envoie la requête
                                while ($req1 = mysqli_fetch_object($req)) { ?>
                                    <option value="<?php echo $req1->id ?>"><?php echo $req1->categorie ?></option>

                                <?php };
                                ?>

                            </select>
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" name="search" value="Rechercher">
                        </div>
                    </div>

                </form>
        </div>
    </div>
</section>

<?php

$categorie = $_GET['categorie'];
// lancement de la requete
$requete = "SELECT * FROM `videos`
WHERE id_categorie = '$categorie'
";


$donnees = mysqli_query($bdd ,$requete);
// On affiche chaque entrée une à une
while ($row = mysqli_fetch_array($donnees))
{
?>

<div class="container">
    <div class="row">

        <iframe class="embed-responsive-item text-center "  width="360" height="215" src="<?php echo $row['lien'];?>" frameborder="0" allowfullscreen></iframe>
        <p>
            <strong>Titre</strong> : <?php echo $row['titre']; ?><br />
            <strong>Catégorie</strong> :<?php echo $row['categorie']; ?>
        </p>
    </div>
</div>

<?php
}
?>
</body>
</html>