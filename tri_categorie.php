<?php include 'config.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <a class="col-md-8 col-md-offset-2">
                <form name="insertion" action="tri.php" method="POST" class="form-horizontal">

<div class="form-group">
    <label for="categorie" class="col-sm-2 control-label font">catégorie</label>
    <div class="col-sm-10">
        <?php
        $sql= "SELECT * FROM categories";
        $req = $bdd->query($sql);

        ?>
        <select class="form-control" name="categorie">
            <?php
            // on envoie la requête
            while ($req1 = mysqli_fetch_object($req)) { ?>
                <option value="<?php echo $req1->id ?>"><?php echo  $req1->categorie ?></option>

            <?php };
            ?>

        </select>
    </div>
</div>

                </form>
        </div>
    </div>
</section>

</body>
</html>