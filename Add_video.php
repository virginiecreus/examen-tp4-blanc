
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
        <h2 class="page-header text-center font">Ajouter une vidéo !</h2>
        <div class="col-md-5 col-sm-6 col-xs-12">
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <a class="col-md-8 col-md-offset-2">
                <form name="insertion" action="Add_video1.php" method="POST" class="form-horizontal">
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Lien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lien" placeholder="Lien">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Catégorie</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="categorie" placeholder="Categorie">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Titre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="titre" placeholder="Titre">
                        </div>
                    </div>

                   


                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <center><input id="ajouter" name="ajouter" type="submit" value="Ajouter" class="btn btn-success"></center>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


<a href="Add_admin.php"><p>Ajouter un nouvel admin.</p></a>


</body>
</html>