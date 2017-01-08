<?php require_once('includes/connection.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/icon.jpg">

    <title>Online Venue Reservation System</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/home-format.css" rel="stylesheet">
    <link href="css/events-modal.css" rel="stylesheet">
    <link href="css/venues-format.css" rel="stylesheet">
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>
    <!-- NAVBAR
    ================================================== -->

   
 
           <body>
        <div class="navbar-wrapper">
            <div class="container">

                <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <img src="images/logo.png" class="logo-venue">
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="venues.php">Venues</a></li>
                                <li><a href="events.php">Events</a></li>
                               <?php if(isset($_SESSION['user'])){
                                echo '<li><a href="reservation.php">Reservations</a></li>';
                               } ?>
                                <li><a href="about-us.php">About</a></li>
                                <li><a href="contact-us.php">Contact</a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <?php if(!isset($_SESSION['user'])){
                                echo '<li><a href="sign-up.php">Sign up</a></li>
                                <li><a href="#" data-toggle="collapse" data-target="#login">Log-in</a></li>';
                                 } 
                                else{
                                echo '<li><a href="profile.php">'.$_SESSION['user'].'</a></li>
                                <li><a href= "logout.php" >Log-out</a></li>';
                                }
                                 ?>
                             </ul>
                        </div>
                    </div>
                </nav>

                <div id="login" class="panel panel-default panel-login collapse">
                    <div class="panel-body">
                        <form class="form-signin" role="form" action = "checklogin.php" method = "post">
                            <h4 class="form-signin-heading">Sign in to Venue Reservation System</h4>
                            <br>
                            <input name = "email" type="email" class="form-control" placeholder="Email address" required autofocus>
                            <br>
                            <input name = "password" type="password" class="form-control" placeholder="Password" required>
                            <div class="radio">
                                <label>
                                <input name = "user" type="radio" value="client" checked="checked"> Client
                                </label>

                                <label>
                               <input name = "user" type="radio" value="admin"> Admin
                                </label>

                            </div>
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <br>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>