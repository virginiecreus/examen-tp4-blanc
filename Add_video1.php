<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<?php


// si le bouton 'ajouter' est activé, recupère les champs
if (isset($_POST['ajouter'])) {


    $lien = $_POST['lien'];
    $titre = $_POST['titre'];
    $categorie = $_POST['categorie'];


// On créé la requête
    $vid = mysqli_query($bdd, "INSERT INTO videos (lien, titre, id_categorie)
    VALUES ('$lien', '$titre', '$categorie')");

// on envoie la requête
    if (mysqli_query($bdd, $vid)) {
        echo "Les données ont bien été ajoutées";
    }
}
?>








</body>
</html>