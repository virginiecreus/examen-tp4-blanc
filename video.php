<?php
session_start();
include('config.php');
if (isset($_GET['value'])) {

    $categorie = ucfirst($_GET['value']);

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
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

<?php include 'tri_categorie.php'?>
<?php
// lancement de la requete
$requete = "SELECT * FROM `videos`";



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
<?php include 'commentaire.php'?>
<?php include 'Afficher_commentaire.php'?>

</body>
</html>