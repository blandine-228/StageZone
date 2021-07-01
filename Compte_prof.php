<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                    <form method="POST" action="post_prof.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Creez votre compte</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Votre nom" required/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="prenom" id="prenom" placeholder="Votre prenom" required/>
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
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Valider"/>
                        </div>
                    </form>
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
</html>
