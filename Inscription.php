<?php
session_start();
include('config.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
</head>
<body>
<?php include 'menu.php'; ?>
<?php
if($_SESSION['logged']){

    echo $_SESSION['prenom'].' '.$_SESSION['nom'].' est connecté en tant que '.$_SESSION['role'].' .';
}
else {
    echo 'Une erreure s\'est produite';
}
?>
<div class="container">
    <div class="row">
        <h2 class="page-header text-center font">Inscription !</h2>
        <div class="col-md-5 col-sm-6 col-xs-12">
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <a class="col-md-8 col-md-offset-2">
                <form name="insertion" action="inscription1.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nom" placeholder="Nom">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Prénom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" placeholder="exemple@domain.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mdp" placeholder="Mot-de-passe">
                        </div>
                    </div>

                    <div>
                        <label for="name" class="col-sm-2 control-label font">Membre</label>
                        <div class="col-sm-10">
                    <input  type="radio" name="role" value="membre" >
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



<?php
$droit = "SELECT role FROM utilisateurs";

if ($droit == "admin") {
    echo
    '<a href="Add_admin.php"><p>Ajouter un nouvel admin.</p></a>';
}
?>

</body>
</html>