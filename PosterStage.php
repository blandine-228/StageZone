
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>StageZone</title>

   <link rel="icon" type="form1/image/png" href="form1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form1/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="form1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form1/css/util.css">
    <link rel="stylesheet" type="text/css" href="form1/css/main.css">

    

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
                                <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+228)90909090</span></a>
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
            <h2>Poster un stage</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

   <section class="elements-area mt-50 section-padding-100-0">
        <div class="container">
            <div class="row">
              
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="form1/images/img-01.png" alt="IMG">
                </div>
                <form class="login100-form validate-form" action="post_prof_login.php" method="POST">
                    <span class="login100-form-title">
                        Professeur Login
                    </span>

                    <div class="wrap-input100 validate-input"  data-validate = "email is required" >
                        <input class="input100" type="text" name="email" placeholder="Email">

                        <span class="focus-input100" required></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                       
                   
                    <div class="container-login100-form-btn">
                         
                       
                    <input type="submit" name="submit"  class="login100-form-btn" value="Postuler" />
                    </div>



                    <div class="text-center p-t-136">
                        <a class="txt2" href="compte_prof.php">
                            Creer un compte
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
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
                            <p>Trouvez en un clic un stage dans le domaine de votre filiere qui vous interresse.</p>
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
    <script src="form1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="form1/vendor/bootstrap/js/popper.js"></script>
    <script src="form1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="form1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="form1/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="form1/js/main.js"></script>
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

<?php
    
    // Start the session
    // session_start();

    // include 'database_connect.php';

    // $password = $_POST['password_prof'];
    // $email = $_POST['email'];


    //  $reponse = $bdd->prepare('SELECT * FROM professeur WHERE email_prof = :email AND password_prof = :password');

    //  $reponse->execute(
    //     array(
    //         'email' => $email,
    //         'password' => $password
    //     )
    //  );

    // // // On affiche chaque entrée une à une

    //  if ($reponse->rowCount() > 0) {
    //     echo "trouvee";
    //     $_SESSION["nom"] = $reponse->fetch()['nom_prof']." ".$reponse->fetch()['prenom_prof'];
    //  }else{
    //     echo "non trou*";
    //  }
    // // while ($donnee = $reponse->fetch() ) {
    // //  $_SESSION["nom"] = $donnee['nom_prof']." ".$donnee['prenom_prof'];
    // // }

    // // header('Location: PosterStage.php');
 
 ?>