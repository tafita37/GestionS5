<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style_Login.css');?>">
    <link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?> " rel="stylesheet">
    <script src="<?php echo site_url('assets/js/bootstrap.bundle.min.js'); ?> "></script>
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">
    <title>Login</title>
    <style>
        input.parsley-success,
        select.parsley-success,
        textarea.parsley-success {
        color: #468847;
        background-color: #DFF0D8;
        border: 1px solid #D6E9C6;
        }

        input.parsley-error,
        select.parsley-error,
        textarea.parsley-error {
        color: #B94A48;
        background-color: #F2DEDE;
        border: 1px solid #EED3D7;
        }

        .parsley-errors-list {
        margin: 2px 0 3px;
        padding: 0;
        list-style-type: none;
        font-size: 0.9em;
        line-height: 0.9em;
        opacity: 0;
        color: #B94A48;

        transition: all .3s ease-in;
        -o-transition: all .3s ease-in;
        -moz-transition: all .3s ease-in;
        -webkit-transition: all .3s ease-in;
        }

        .parsley-errors-list.filled {
        opacity: 1;
        }
        #huhu{
        border: outset;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="images/white.png" alt="">
                    <div class="text">
                        <p>Bienvenue sur notre Site </p>
                    </div>
                </div>
                <div class="col-md-6 right">
                     <form id="demo-form" data-parsley-validate="" action="<?php echo site_url('Autre_Controller/processLoginResponsable') ?>" method="post">
                        <div class="input-box">
                            <header>Se connecter en tant que responsable technique</header>
                            <p style="color:red"><?php echo isset($errorl) ? $errorl : ''; ?></p>
                            <div class="input-field">
                                <input type="text" name="email_responsable" class="input" id="email" required autocomplete="off" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-minlength-message="plus de 1 character" data-parsley-maxlength-message="moins de 10 characters">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" name="mdp_responsable" class="input" id="password" required data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="10" data-parsley-minlength-message="plus de 1 character" data-parsley-maxlength-message="moins de 10 characters">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="Connexion">
                                
                            </div>
                            <div class="signin">
                                <span>Se connecter en tant que RH <a href="<?php echo site_url('Autre_Controller/formLoginRH'); ?>">cliquer ici</a></span>
                            </div>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>