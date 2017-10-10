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
    <div></div>
    <div id="mainheading">
        <nav class="navbar navbar-default navigation-login" id="LoginNav">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">SmartVid </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="active" role="presentation"><a href="main.php">Main </a></li>
                        <li role="presentation"><a href="#">About </a></li>
                    </ul>
                    <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="login.php" style="margin-left:-12px;padding:6px;">Log In</a> <a class="btn btn-primary action-button" role="button" href="createAccount.php" style="padding:7px;">Sign Up</a></p>
                </div>
            </div>
        </nav>
    </div>
    <div id="mainHeading" style="background-image:url(&quot;../view/img/DigitalLearning.jpg&quot;);height:600px;background-size:cover;background-repeat:no-repeat;">
        <div class="jumbotron" style="background-color:rgba(63,121,180,0.79);">
            <h1>Make Learning Great!</h1>
            <p>Upload videos, Create classes, Learn!</p>
            <p><a class="btn btn-default" role="button" href="createAccount.php">Sign Up Now!</a></p>
        </div>
    </div>
    <div id="footerMain" class="footer-main">
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
    </div>
    <script src="../controller/js/jquery.min.js"></script>
    <script src="../controller/bootstrap/js/bootstrap.min.js"></script>
    <script src="../controller/js/Dynamically-Queue-Videos.js"></script>
	<script src="../controller/js/register.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>