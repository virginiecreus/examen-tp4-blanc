<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>
<?php include 'config.php'; ?>
<?php

// si champs rempli envoyer dans la bdd
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['role'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $role = $_POST['role'];

// On créé la requête
    $req = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, role) 
VALUES ('$nom', '$prenom', '$email', '$mdp', '$role')";
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