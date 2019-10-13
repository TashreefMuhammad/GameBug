<?php 

//session_start();
include("connection/connect.php");

if(isset($_POST['register-submit'])) {
    session_start();

    $username       = htmlspecialchars(stripslashes(trim($_POST['username'])));
    $email          = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $password       = htmlspecialchars(stripslashes(trim($_POST['password'])));
    $confirm        = htmlspecialchars(stripslashes(trim($_POST['confirm_password'])));

    if($password == $confirm){
        $password = md5($password);
        date_default_timezone_set('Asia/Dhaka');
        $currentTime = date('Y-m-d H:i:s');
        $status = 1;

        $sql = "INSERT INTO users(Name, Email, Password, SignupDate,Status) VALUES('$username', '$email', '$password', '$currentTime', '$status')" or die("hoynai");
        //$sqlInsert = "INSERT INTO user(username, email, password, created_date,status) VALUES('".$username."', '".$email.'",'".$password.'",'".$currentTime.'",'".$status.'")";

        $a = mysqli_query($connect, $sql);

        $_SESSION['message'] = 'you are logged in successfully';
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        header('location: homepage.php');
        //print_r($_SESSION);

    } else {
        $_SESSION['message'] = 'password didnt match';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="homepage.php" style="padding-top: 0px;">
              <img src="images/logo.png" width="66" height="48" class="d-inline-bblock align top" alt="">
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="active"><a href="#">Register</a></li>
     
          </ul>



        
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
<div class="container">

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

                                
        </div>



    </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="login.php">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="register.php" class="active" id="">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <!-- form starts from here ------------------------ -->

                                <form id="register-form" method="post" role="form" action="register.php">

                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required >
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="register_email" tabindex="1" class="form-control" placeholder="Email Address" value="" required >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm_password" id="password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- form ends here ----------------  -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
</body>
</html>