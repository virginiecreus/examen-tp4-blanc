<?php include 'config.php'; ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
<?php
if (isset($_POST['modifier'])) {

    $categorie = $_POST['categorie'];
    $titre = $_POST['titre'];



    $cat = mysqli_query($bdd, "UPDATE categories 
    SET categorie =  '$titre'
    WHERE id = '$categorie'
    ");

    if (mysqli_query($bdd, $cat)) {
        echo "Les données ont bien été modifiées";
    }
}

?>