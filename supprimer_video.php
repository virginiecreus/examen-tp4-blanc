<?php include 'config.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php include 'menu.php'; ?>
<div class="container">
    <div class="row">
        <h2 class="page-header text-center font">Supprimer une vidéo !</h2>
        <div class="col-md-5 col-sm-6 col-xs-12">
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form name="insertion" action="supprimer_video1.php" method="POST" class="form-horizontal">
                    <select class="form-control" name="video">
                        <?php
                        $sql= "SELECT * FROM videos";
                        $req = $bdd->query($sql);

                        ?>
                        <?php
                        // on envoie la requête
                        while ($req1 = mysqli_fetch_object($req)) { ?>
                            <option value="<?php echo $req1->id ?>"><?php echo  $req1->titre ?></option>

                        <?php };
                        ?>

                    </select>
                    

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <a href="Add_video.php"><bouton id="ajouter" name="ajouter" type="submit"  value="Ajouter" class="btn btn-success">Ajouter</bouton></a>
                        </div>
                        <div class="col-sm-10 col-sm-offset-2">
                            <a href="modif_video.php"><bouton id="modidier" name="modidier" type="submit"  value="Modifier" class="btn btn-warning">Modifier</bouton></a>
                        </div>
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="supprimer" name="supprimer" type="submit"  value="Spprimer" class="btn btn-danger">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>





</body>
</html>