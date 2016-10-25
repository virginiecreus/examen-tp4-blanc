<?php
session_start();
include('config.php');


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- BOOTSTRAP STYLE CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">



</head>
<body>
<?php include 'menu.php'; ?>

<div class="container">
    <div class="row">
        <h2 class="page-header text-center font">Connectez-vous !</h2>
        <div class="col-md-5 col-sm-6 col-xs-12">
        </div>
    </div>
</div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" role="form" method="post" action="connection.php">
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label font">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="login" placeholder="exemple@domain.com" value="<?php //echo htmlspecialchars($_POST['email']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Mot de passe</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pass" placeholder="Mot de passe" value="<?php //echo htmlspecialchars($_POST['nom']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button class="bouton">Se connecter !</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])) {
    extract($_POST);
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    // on recupère le password de la table qui correspond au login du visiteur

    $sql = "SELECT prenom, nom, email, mot_de_passe, role FROM utilisateurs";

    $result = mysqli_query($bdd, $sql);


    if(mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result)){

            if(($row['email'] === $login) && ($row['mot_de_passe']=== $pass)){
                $_SESSION['email'] = $row['email'];
                $_SESSION['mot_de_passe'] = $row['mot_de_passe'];
                $_SESSION['prenom'] = $row['prenom'];
                $_SESSION['nom'] = $row['nom'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['logged'] = true;


            }

        }

    }

}

if($_SESSION['logged']){

    echo $_SESSION['prenom'].' '.$_SESSION['nom'].' est connecté en tant que '.$_SESSION['role'].' .';
}
else {
    echo 'Une erreure s\'est produite';
}



?>


<a href="logout.php"><button class="bouton">Se déconnecter !</button></a>
</body>
</html>
