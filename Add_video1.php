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
    $req = "INSERT INTO videos (lien, titre, categorie) 
VALUES ('$lien', '$titre', '$categorie')";
// on envoie la requête
    $res = mysqli_query($bdd, $req);

    echo 'Ajouté';
}
else { // si champs pas rempli erreur
    echo"les champs sont vide , reesayez";
}
?>







</body>
</html>