<?php include 'config.php'; ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
<?php
if (isset($_POST['supprimer'])) {


    $cat = $_POST['categorie'];

    $vid = mysqli_query($bdd, "DELETE 
    FROM categories
    WHERE id = '$cat'
    ");

    if (mysqli_query($bdd, $cat)) {
        echo "Les données ont bien été supprimées";
    }
}

?>