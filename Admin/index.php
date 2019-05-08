<?php
session_start();
//Admin hotel 

require './lib/php/admin_liste_include.php';
$cnx = Connexion:: getInstance($dsn, $user, $pass);
?>

<html>
    <head>
        <title>Voitus Coorporation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
        <link rel="stylesheet" href="./lib/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="./lib/css/animate.css">
        <link rel="stylesheet" href="./lib/css/owl.carousel.min.css">
        <link rel="stylesheet" href="./lib/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="./lib/css/magnific-popup.css">
        <link rel="stylesheet" href="./lib/css/aos.css">
        <link rel="stylesheet" href="./lib/css/ionicons.min.css">
        <link rel="stylesheet" href="./lib/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="./lib/.Admin/lib/css/jquery.timepicker.css">
        <link rel="stylesheet" href="./lib/css/flaticon.css">
        <link rel="stylesheet" href="./lib/css/icomoon.css">
        <link rel="stylesheet" href="./lib/css/style.css">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <?php
            if (file_exists('./lib/php/A_Menu.php')) {
                include ('./lib/php/A_Menu.php');
            }
            ?>

        </nav>

        <?php
        /* if (!isset($_SESSION['page'])) {
          $_SESSION['page'] = "Accueil.php";
          }
          if (isset($_GET['page'])) {
          $_SESSION['page'] = $_GET['page'];
          }
          if (file_exists("pages/" . $_SESSION['page'])) {
          include ("pages/" . $_SESSION['page']);
          } else {
          print "<h2>Erreur 404 bro ;)</h2>";
          } */
        ?>
        <?php
        if (!isset($_SESSION['page'])) { //premiere ouverture du site
            $_SESSION['page'] = "A_hotel.php"; //page par défaut
        }
        if (isset($_GET['page'])) {
            //on a cliqué sur un lien de menu
            $_SESSION['page'] = $_GET['page'];
        }
        $path = "./pages/" . $_SESSION['page'];
        ?>
        <p color='black' ><?php print $path; ?></p><?php
        if (file_exists($path)) {
            include ($path);
            ?>


            <footer class="footer" id="ancre">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4">
                            <h3 class="heading-section">About Us</h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt.</p>
                            <p><a href="#" class="btn btn-primary px-4">Button</a></p>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <h3 class="heading-section">Blog</h3>
                            <div class="block-21 d-flex mb-4">
                                <figure class="mr-3">
                                    <img src="./images/img_1.jpg" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Our Luxury Hotel &amp; Restaurants</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="block-21 d-flex mb-4">
                                <figure class="mr-3">
                                    <img src="./images/img_2.jpg" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Our Luxury Hotel &amp; Restaurants</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="block-21 d-flex mb-4">
                                <figure class="mr-3">
                                    <img src="./images/img_3.jpg" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Our Luxury Hotel &amp; Restaurants</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="block-23">
                                <h3 class="heading-section">Contact Info</h3>
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                                    <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="row pt-5">
                        <div class="col-md-12 text-left">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


            <script src="./lib/js/jquery.min.js"></script>
            <script src="./lib/js/jquery-migrate-3.0.1.min.js"></script>
            <script src="./lib/js/popper.min.js"></script>
            <script src="./lib/js/bootstrap.min.js"></script>
            <script src="./lib/js/jquery.easing.1.3.js"></script>
            <script src="./lib/js/jquery.waypoints.min.js"></script>
            <script src="./lib/js/jquery.stellar.min.js"></script>
            <script src="./lib/js/owl.carousel.min.js"></script>
            <script src="./lib/js/jquery.magnific-popup.min.js"></script>
            <script src="./lib/js/bootstrap-datepicker.js"></script>
            <script src="./lib/js/aos.js"></script>
            <script src="./lib/js/jquery.animateNumber.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
            <script src="./lib/js/google-map.js"></script>
            <script src="./lib/js/main.js"></script>
            <?php
        } else {
            include('../pages/page404.php'); //remplacer par page spécifique
        }
        ?>
    </body>
</html>