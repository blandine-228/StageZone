

<?php 
session_start();
if($_SESSION['nom'] == ""){
header('Location: index.html');

 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>StageZone</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
   
    

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="img/core-img/stagezone.png" width="170px" height="70px"  alt=""></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Acceuil</a></li>
                                    <li><a href="PosterStage.php">Poster un stage</a></li>
                                    <li><a href="trouverStage.php">Trouver un stage</a></li>
                                    <li><a href="archive.html">Archivages Stages</a></li>
                                    <li><a href="apropos.html">A propos</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+22890909090"><i class="icon-telephone-2"></i> <span>(+228)90909090</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Trouvez un stage</h2>
        </div>
    </div>
    <div class="button tour_button ml-auto"><a href="formulaireProf.php">Creer stage</a></div>
    <section class="elements-area mt-50 section-padding-100-0">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 order-lg-1 order-1">
                    <div class="tours_content">
                        
                        <div class="tours_list_container">
                            <ul class="tours_list">



                                <?php 
                                    
                                    include 'database_connect.php';
                                    $reponse = $bdd->query('SELECT * FROM stage ORDER BY id_stage desc');

                                        while ($donnee = $reponse->fetch() ) {
                                        echo('
                                        <li class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="tour_info">
                                                <div class="tour_date">'.$donnee['contenu_stage'].'</div>
                                                <div class="tour_name"><a href="#">par '.$donnee['creer_par'].' | '.date('d F Y',strtotime($donnee['date_creation'])).'</a></div>
                                                <div class="tour_location"></div>
                                            </div>
                                        </li>
                                    ');
                                    }
                                    
                                    

                                    

                                 ?>



                                <!-- Tour -->
                                <!-- <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div class="tour_info">
                                        <div class="tour_date">Administrateur Reseau</div>
                                        <div class="tour_name"><a href="#">Par ATISSO Koffi   |  10 Janvier 2019</a></div>
                                        <div class="tour_location"></div>
                                    </div>
                                    <div class="button tour_button ml-auto"><a href="compte_etudiant.php">Postuler</a></div>
                                </li>    -->  

                            </ul>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4" >
                        <div class="footer-widget mb-100" style="padding-bottom: 50px">
                            <div class="widget-title" >
                                <a href="#"><img src="img/core-img/stagezone2.png" width="170px" height="10px" alt=""></a>
                            </div>
                            <p></p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Liens utiles</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="#">Acceuil</a></li>
                                    <li><a href="#">Poster un stage</a></li>
                                    <li><a href="#">Trouver un stage</a></li>
                                    <li><a href="#">Archivages Stages</a></li>
                                    <li><a href="#">A propos</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                   
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Bdv,de l'Oti, Be Kpota , Lome-Togo</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Main:(228) 93 03 33 51<br>Office: (228)22 71 17 17</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>www.esig.tg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by SIL

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

     
</body>

</html>