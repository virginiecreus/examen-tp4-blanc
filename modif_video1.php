<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>
<?php
if (!isset($_POST['modifier'])) {

    $titre = $_POST['titre'];
    $categorie = $_POST['categorie'];
    $video = $_POST['video'];
   

    $vid = mysqli_query($bdd, "UPDATE videos 
    SET titre = '$titre',
    id_categorie = '$categorie'
    WHERE id = '$video'
    ");

    if (mysqli_query($bdd, $vid)) {
        echo "Les données ont bien été modifiées";
    }
}

?>






</body>
</html>