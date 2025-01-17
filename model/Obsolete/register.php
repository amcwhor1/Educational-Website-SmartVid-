<?php include('server.php') ?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartVid</title>
    <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="../view/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../view/fonts/material-icons.min.css">
    <link rel="stylesheet" href="../view/css/Dynamically-Queue-Videos.css">
    <link rel="stylesheet" href="../view/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../view/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="../view/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="../view/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="../view/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="../view/css/styles.css">
</head>

<body>





    <nav class="navbar navbar-default navigation-login" id="LoginNav">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">SmartVid </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="active" role="presentation"><a href="Main.php">Main </a></li>
                    <li role="presentation"><a href="#">About </a></li>
                </ul>
                <p class="navbar-text navbar-right actions" style="padding:0px;padding-right:0px;margin-left:0px;margin-right:-13px;margin-top:9px;width:101px;"><a class="navbar-link login" href="Login.php" style="max-width:0px;min-width:0px;width:0px;height:0px;margin:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-12px;padding:6px;">Log In</a> <a class="btn btn-primary action-button" role="button" href="register.php" style="padding:7px;">Sign Up</a></p>
            </div>
        </div>
    </nav>
    <div>
        <div class="row register-form" style="background-image:url(&quot;../view/img/winterNight.jpg&quot;);background-repeat:no-repeat;background-size:cover;">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal custom-form" method="post" action="register.php" style="color:rgb(255,253,253);background-color:rgb(42,42,42);">
                    <h1 style="color:rgb(234,237,239);">Register Form</h1>
                    <?php include('errors.php'); ?>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">First Name</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="firstName" value="<?php echo $firstName; ?>">
                        </div>
                    </div>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">Last Name</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="lastName" value="<?php echo $lastName; ?>">
                        </div>
                    </div>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">Username</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
                        </div>
                    </div>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">E-Mail Address</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
                        </div>
                    </div>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">Password</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="password" name="password_1">
                        </div>
                    </div>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">Confirm Password</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="password" name="password_2">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="dropdown-input-field" style="color:rgb(254,251,251);">Account Type</label>
                        </div>
                        <div class="col-sm-4 input-column">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a href="#">Student </a></li>
                                    <li role="presentation"><a href="#">Professor </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input id="acceptTerms" type="checkbox">I've read and accept the terms and conditions</label>
                    </div>
                    <div class="">
                        <button type="submit" type="button" class="btn btn-default submit-button" name="reg_user">Register</button>
                    </div>
                    <p>
                        Already a member? <a href="main.php">Sign in</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="social"></div>
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Terms & Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Brogrammers &copy; 2017</p>
    </footer>
    <script src="../controller/js/jquery.min.js"></script>
    <script src="../controller/bootstrap/js/bootstrap.min.js"></script>
    <script src="../controller/js/Dynamically-Queue-Videos.js"></script>
    <script src="../controller/js/register.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>
