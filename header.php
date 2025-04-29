<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - Renovation Services</title>

    

    <!--Favicons-->

    <link rel="icon" type="image/png" href="favicon\favicon-32x32.png">

    

    <!--Bootstrap and Other Vendors-->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="vendors/rs-plugin/css/settings.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="vendors/js-flickr-gallery/css/js-flickr-gallery.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="vendors/lightbox/css/lightbox.css" media="screen" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    

    <!--Fonts-->

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    

    <!--Construction Styles-->

    <link rel="stylesheet" href="css/style.css">

    

    <!--[if lt IE 9]>

      <script src="js/html5shiv.min.js"></script>

      <script src="js/respond.min.js"></script>

    <![endif]-->

</head>

<body>

    <div id="pageloader" class="row m0">

        <div class="loader-item"><img src="images/loader.gif" alt="loading"></div>

    </div> 

    <section id="nr_topStrip" class="row">

        <div class="container">

            <div class="row">

                <ul class="list-inline c-info fleft">

                    <li><a href="tel:123456789012"><i class="fa fa-phone"></i>+33 7 77 30 41 66</a></li>

                    <li><a href="mailto:info@domain.com"><i class="far fa-envelope"></i> info@domain.com</a></li>

                </ul>

                <ul class="list-inline fright">

                    <li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>

                    <li><a href="#" ><i class="fa-brands fa-twitter"></i></a></li>

                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>

                </ul>

                    

            </div>

        </div>

    </section> <!--Top Strip-->

    

    <!--Header-->

    <?php 

            function isMenuActive(string $menuName):?string

            {

                $uri = $_SERVER['REQUEST_URI'];


                if($uri==="/" && $menuName==="/") return "active";

                return strpos($uri,$menuName)? "active":"";



            }

        ?>

    

    <nav class="navbar navbar-default navbar-static-top">

    <div class="container-fluid container">

        <div class="row m04m">

            <div class="navbar-header ">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav">

                    <span class="bars">

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </span>

                    <span class="btn-text">Select Page</span>

                </button>

            </div>

            <div class="collapse navbar-collapse" id="main_nav">

                <ul class="nav navbar-nav">

                    <li class="nav-item-title">

                        <a href="index.php" class="nav-link-title"><img src="favicon\logo.png" alt=""></a>

                    </li>

                    <li class="nav-item <?php  isMenuActive('/index.php'); ?>">

                        <a href="index.php" class="nav-link">acceuil</a>

                    </li>

                    <li class="nav-item <?php  isMenuActive('/about-us.php'); ?>">

                        <a href="about-us.php" class="nav-link">a propos</a>

                    </li>

                    <li class="nav-item <?php  isMenuActive('/projects.php'); ?>">

                        <a href="projects.php" class="nav-link">projets</a>

                    </li>

                    <li class="dropdown <?php echo isMenuActive('/services.php'); ?>">

                        <a href="services.php" class="dropdown-toggle" role="button" aria-expanded="false">services</a>

                        <ul class="dropdown-menu" role="menu">

                        <li><a href="prestation.php">prestation</a></li>

                        <li><a href="electricite.php">électricité dépannage et installation</a></li>

                        <li><a href="plomberie.php">plomberie dépannage et installation</a></li>

                        <li><a href="climatisation.php">climatisation</a></li>

                        </ul>

                    </li>

                    <li class="<?php echo isMenuActive('/contact.php'); ?>">

                        <a href="contact.php" class="nav-link">contact</a>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</nav>

 <!--Main Nav-->