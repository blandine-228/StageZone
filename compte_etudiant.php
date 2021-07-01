<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery.js"></script>
    <title>Creer votre compte</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="compte/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="compte/css/style.css">
</head>
<body>
 
    <div class="main">

        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <form id="signup-form" class="signup-form">
                        <h2 class="form-title">Creez votre compte</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Votre nom" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Votre email" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Mot de passe" required />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder= "Confirmer mot de passe" required/>
                        </div>
                        <div class="form-group">
                    
                            <select name="domaine" class="form-input">
                            <option selected value="">Domaine</option>
                            <option value="Administration de Bases de Donnees">Administration de Bases de Donnees</option>
                            <option value="Developpeur Web">Developpeur Web</option>
                            <option value="Programmeur">Programmeur</option>
                            <option value="Administration">Administration Reseau</option>
                            <option value="Cybersecurite">Cybersecurite</option>
                            <option value="Developpeur d'application">Developpeur d'application </option>
                        </select>
      
                        </div>
                   
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                    </form>
                    
                    <button id="valider" class="form-submit">Valider</button>
                        
                    <p class="loginhere">
                        <a href="PosterStage.php" class="loginhere-link">Retounez au Login</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="compte/vendor/jquery/jquery.min.js"></script>
    <script src="compte/js/main.js"></script>
</body>

<script>
 

 $(document).ready(function(){
     $( "#valider" ).click(function(){
        $.post("http://localhost/stageZone/api/v1/register",
        {
            name: $("#name").val(),
            password : $("#password").val(),
            email : $("#email").val(),
            domaine : $("#domaine").val()
        },
        function(data, status){
            // $.session.set("name",$("#name").val());
            window.location.replace("listStages.php");
        });
        // alert($("#name").val());
    });
});
  
 </script>

</html>
