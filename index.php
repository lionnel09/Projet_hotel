
<!DOCTYPE html>
<?php
session_start();
//public 

require './Admin/lib/php/admin_liste_include.php';
$cnx = Connexion:: getInstance($dsn, $user, $pass);
?>



<html>
    <head>
        <title>Voitus Coorporation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
        <link rel="stylesheet" href="./Admin/lib/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="./Admin/lib/css/animate.css">
        <link rel="stylesheet" href="./Admin/lib/css/owl.carousel.min.css">
        <link rel="stylesheet" href="./Admin/lib/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="./Admin/lib/css/magnific-popup.css">
        <link rel="stylesheet" href="./Admin/lib/css/aos.css">
        <link rel="stylesheet" href="./Admin/lib/css/ionicons.min.css">
        <link rel="stylesheet" href="./Admin/lib/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="./Admin/lib/.Admin/lib/css/jquery.timepicker.css">
        <link rel="stylesheet" href="./Admin/lib/css/flaticon.css">
        <link rel="stylesheet" href="./Admin/lib/css/icomoon.css">
        <link rel="stylesheet" href="./Admin/lib/css/style.css">

    </head>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <?php
        if (file_exists('./lib/php/Menu.php')) {
            include ('./lib/php/Menu.php');
        }
        ?>

    </nav>
    <body>
        <?php
        if (!isset($_SESSION['page'])) {
            $_SESSION['page'] = "Accueil.php";
        }
        if (isset($_GET['page'])) {
            $_SESSION['page'] = $_GET['page'];
        }
        if (file_exists("pages/" . $_SESSION['page'])) {
            include ("pages/" . $_SESSION['page']);
        } else {
            print "<h2>Erreur 404 bro ;)</h2>";
        }
        ?>

    </body>
</html>

