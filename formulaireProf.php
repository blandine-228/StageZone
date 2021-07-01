
<?php 
session_start();
if($_SESSION['admin'] == 'false'){
header('Location: index.html');

 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="form2/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="form2/css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" action="post_stage.php" class="appointment-form" id="appointment-form">
                <h2>formulaire de Stage</h2>
                <div class="form-group-1">
                    <!-- <input type="text" name="id_stage" id="id_stage" placeholder="l'id du stage" required /> -->
                    <input type="text" name="lieu_stage" id="lieu_stage" placeholder="le lieu du stage" required />
                    <input type="" name="phone_number_company" id="phone_number_company" placeholder="Numero de telephone" required />
                    <input type="" name="dure_stage" id="dure_stage" placeholder="la duree du stage" required />
                </div>
                <!-- <div class="form-group-2"> -->
                    <!-- <div class="select-list">
                        <select name="confirm_type" id="confirm_type">
                            <option selected value="">Duree du stage</option>
                            <option value="1 mois">1 mois</option>
                            <option value="2 mois">2 mois</option>
                            <option value="3 mois">3 mois</option>
                            <option value="4 mois">4 mois</option>
                            <option value="5 mois">5 mois</option>
                            <option value="6 mois">6 mois</option>
                        </select>
                    </div> -->
                <!-- </div> -->
                 <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="contenu_stage" placeholder="Message sent to the employer"></textarea>
                                </div>
                            </div>
                        </div>
               
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Poster stage" />
                </div>
            </form>
        </div>

    </div>
 
    <!-- ##### Footer Area Start ##### -->
 <script src="form2/vendor/jquery/jquery.min.js"></script>
    <script src="form2/js/main.js"></script>
  
</body>
</html>
