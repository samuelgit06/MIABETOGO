<!DOCTYPE html>
<html lang="fr">

<head>
    <title>connecter vous ou creer votre compte</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

    <!-- fontawesome v5 -->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <section class="forms">
        <div class="container">
            <!-- logo 
            <div class="logo">
                <a class="brand-logo" href="index.html">Minimal login and signup forms</a>
            </div>
             //logo -->
            <div class="forms-grid">

                <!-- login -->
                <div class="login">
                    <span class="fas fa-sign-in-alt"></span>
                    <strong>Bienvenue!</strong>
                    <span>connecter vous a votre compte </span>

                    <form action="#" method="get" class="login-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">Nom</label>
                                    <input type="text" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-eye"></span>
                                    <label class="form-label" for="input">Mot de passe </label>
                                    <input type="password" class="form-text">
                                </div>
                                <div class="form-row bottom">
                                    <div class="form-check">
                                        <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                        <label for="remenber"> Se souvenir de moi</label>
                                    </div>
                                    <a href="#url" class="forgot">mot de passe oublié?</a>
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login">se connecter <a href="{{ URL:: to ('/index')}}"> </a> <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>
                               <center> <h1>ou</h1></center>
                                <div class="form-row button-login">
                                    <button class="btn_1 btn-login"  href="{{ URL:: to ('/register')}}" >creer un compte <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                </div>
    </section>

</body>

</html>