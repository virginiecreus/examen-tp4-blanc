<?php include 'config.php'; ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
<?php
if (isset($_POST['supprimer'])) {


    $categorie = $_POST['categorie'];

    $cat = mysqli_query($bdd, "DELETE 
    FROM categories
    WHERE id = '$categorie'
    ");

    if (mysqli_query($bdd, $cat)) {
        echo "Les données ont bien été supprimées";
    }
}

?>