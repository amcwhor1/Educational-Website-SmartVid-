<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartVid</title>
    <link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="view/fonts/ionicons.min.css">
    <link rel="stylesheet" href="view/fonts/material-icons.min.css">
    <link rel="stylesheet" href="view/css/Dynamically-Queue-Videos.css">
    <link rel="stylesheet" href="view/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="view/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="view/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="view/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="view/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="view/css/styles.css">
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
                <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="Login.php" style="margin-left:-12px;padding:6px;">Log In</a> <a class="btn btn-primary action-button" role="button" href="CreateAccount.php" style="padding:7px;padding-top:7px;">Sign Up</a></p>
            </div>
        </div>
    </nav>
    <div class="login-dark">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group"><a class="btn btn-primary btn-block" role="button" href="ProfDash.php">Log In</a></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <footer>
        <div class="social"></div>
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Company Name © 2016</p>
    </footer>
    <script src="controller/js/jquery.min.js"></script>
    <script src="controller/bootstrap/js/bootstrap.min.js"></script>
    <script src="controller/js/Dynamically-Queue-Videos.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>