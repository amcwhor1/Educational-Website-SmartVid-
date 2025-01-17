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

<!---DB Connection --->
<?php
    
$conn = mysqli_connect("localhost","root","","smartvid") or die('Error connecting to MySQL server.');
    
if ($conn->connect_error)   
{
    die("Connection failed: " . $conn->connect_error);
} 
else
{
    echo "";
}
  
?>


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
                    <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="main.php">Logout </a> <a class="btn btn-primary action-button" role="button" href="index.php">Home </a></p>
                </div>
            </div>
        </nav>
        <div style="height:668px;">
            <div class="col-md-8">
                <div id="uploadedVideosPannel" class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="font-size:40px;">Chemistry 2150 - Section 03</h3>
                    </div>
                    <div class="panel-body"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Uploaded Video:</h3><a href="viewVideos.php" style="font-size:20px;">Link to the video.</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="height:525px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="font-size:24px;">Options </h3>
                    </div>
                    <div class="panel-body">
                        <button class="btn btn-primary btn-lg" type="button" style="margin-top:15px;margin-right:40px;margin-bottom:15px;width:165px;">Upload Video</button>
                        <button class="btn btn-primary btn-lg" type="button" style="margin-top:15px;margin-right:40px;margin-bottom:15px;width:165px;">Option 2</button>
                        <button class="btn btn-primary btn-lg" type="button" style="margin-top:15px;margin-right:40px;margin-bottom:15px;width:165px;">Option 3</button>
                        <button class="btn btn-primary btn-lg" type="button" style="margin-top:15px;margin-right:40px;margin-bottom:15px;width:165px;">Option 4</button>
                        <button class="btn btn-primary btn-lg" type="button" style="margin-top:15px;margin-right:40px;margin-bottom:15px;width:165px;">Option 5</button>
                    </div>
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
