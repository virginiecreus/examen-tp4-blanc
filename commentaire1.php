<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<?php
include "config.php";

// si champs rempli envoyer dans la bdd
if (isset($_POST['ajouter'])) {


    $auteur= $_POST['auteur'];
    $commentaire = $_POST['commentaire'];
    $video = $_POST['video'];


// On créé la requête
    $req = "INSERT INTO commentaires (auteur, commentaire, id_video) 
    VALUES ('$auteur', '$commentaire', '$video')";
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