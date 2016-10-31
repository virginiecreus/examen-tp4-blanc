<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
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

<div class="container">
    <div class="row">
        <h2 class="page-header text-center font">Page Admin !</h2>
    </div>
</div>
<?php include 'Add_admin.php'?>
<?php include 'Add_video.php'?>
<?php include 'Add_categorie.php'?>

</body>
</html>