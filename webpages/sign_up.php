<?php
// include('../php/signUp.php');
?>
    <!DOCTYPE html>
    <html>

    <head>

        <!-- Basic Page Needs
	================================================== -->
        <meta charset="utf-8">
        <title>Locassion | Sign Up</title>
        <meta name="description" content="Locassion: Web App">
        <meta name="author" content="Deep Sheth">

        <!-- CSS
	================================================== -->
        <link href='https://fonts.googleapis.com/css?family=Dosis:700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="../css/jquery.timepicker.css">
        <link rel="stylesheet" href="/style.css">

        <!-- Favicons
	================================================== -->
        <link rel="icon" type="image/png" href="/favicon.png" />

        <!-- Mobile Specific Metas
	================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Analytics
	================================================== -->



        <!-- Page Specific Styles and Scripts
	================================================== -->
        <script src="https://www.gstatic.com/firebasejs/3.2.0/firebase.js"></script>
        <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>
        <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-storage.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        <script src="/js/script.js"></script>

    </head>

    <body id="registration">
        <header class="primary-green row">

            <div class="logo-container col s12 m3 l4">
                <a href="/" class="white-text hide-on-med-only">
                    <div class="logo-img"></div>
                </a>
                <h1><a href="/" class="white-text">Locassion</a></h1>
            </div>

            <ul class="col s12 m8 l8">
                <div class="flex-container hide-on-small-only menu-buttons">
                    <script>
                        var user = firebase.auth().currentUser;
                        clearMenu();
                        if (user) {
                            // if signed in, you cannot create a new account
                            //                                if (window.location.pathname != "/webpages/sign_up.php?new_account=valid")
                            //                                    window.location.pathname = '/';
                        } else {
                            // NOT signed in.
                            addMenuButton("forgot_password");
                            addMenuButton("login");
                        }
                        });
                    </script>

                </div>
            </ul>
        </header>

        <div class="bold-blue bg">
            <div class="container">
                <form class="row">


                    <div class="col hide-on-small-only m4 l5 center">

                        <img src="/img/logo_large_white2.png" alt="">
                    </div>


                    <div class="col s12 m6 offset-m2 l5 offset-l2 white z-depth-1">
                        <div class="modal-padding">
                            <h3 class="blue-grey-text text-darken-2">Sign Up</h3>

                            <!-- fake fields bypass browser autocomplete -->
                            <input style="visibility:hidden; height: 0px" type="password" />


                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="input_name" name="username" type="text" required>
                                <label for="input_name">Name</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="input_username" name="email" type="email" class="validate" required>
                                <label for="input_username">Email</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">map</i>
                                <input id="input_zipcode" name="location" type="number" min="10000" max="99999" class="validate">
                                <label for="input_zipcode">Default Zipcode (optional)</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">https</i>
                                <input id="input_password" name="password" type="password" required>
                                <label for="input_password">Password</label>
                            </div>

                            <!-- fake fields bypass browser autocomplete -->
                            <input style="visibility:hidden; height: 0px" type="password" />

                            <div class="row center-align">
                                <button class="waves-effect waves-light primary-green btn-large" id="btn-create-acct"><i class="material-icons right">send</i>Get Started</button>
                            </div>

                            <div class="section center-align">

                                <div class="row">
                                    <hr>

                                </div>

                                <div class="row">
                                    <small>You may also sign up with:</small>
                                </div>
                                <div class="row">
                                    <a href="/php/facebookLogin.php" class="btn btn-flat waves-effect blue-text">Facebook</a>
                                    <a href="#" class="btn btn-flat waves-effect deep-orange-text disabled tooltipped" data-tooltip="Get pumped... this is coming soon!">Google</a>
                                </div>
                                <div class="row"><small>Don't worry, we won't post anything without asking!</small></div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <?php
        define('__ROOT__', dirname(dirname(__FILE__)));
        include_once(__ROOT__.'/templates/simple-footer.php'); 
        ?>


    </body>

    </html>