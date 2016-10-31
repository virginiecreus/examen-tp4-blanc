<?php include 'config.php'; ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
<?php
if (isset($_POST['supprimer'])) {


    $video = $_POST['video'];

    $vid = mysqli_query($bdd, "DELETE 
    FROM videos
    WHERE id = '$video'
    ");

    if (mysqli_query($bdd, $vid)) {
        echo "Les données ont bien été supprimées";
    }
}

?>



    