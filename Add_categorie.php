<?php include 'config.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="container">
    <div class="row">
        <h2 class="page-header text-center font">Ajouter une categorie !</h2>

    </div>
</div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form name="insertion" action="Add_categorie1.php" method="POST" class="form-horizontal">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Nouvelle catégorie</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="categorie" placeholder="Categorie">
                        </div>
                    </div>

                   
                    

                    <div class="col-md-6 col-md-offset-2">
                        <div class="col-md-2">
                            <input id="ajouter" name="ajouter" type="submit" value="Ajouter" class="btn btn-success">
                        </div>
                        <div class="col-md-2">
                            <a href="modif_categorie.php"><bouton id="modidier" name="modidier" type="submit"  value="Modifier" class="btn btn-warning">Modifier</bouton></a>
                        </div>
                        <div class="col-md-2">
                            <a href="supprimer_categorie.php"><bouton  id="supprimer" name="supprimer" type="submit"  value="Supprimer" class="btn btn-danger">Supprimer</bouton></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>





</body>
</html>