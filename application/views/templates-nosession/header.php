<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo($title);?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo(base_url());?>images/favicon.ico" />s

    <!-- Fonts from Google API -->
    <link href="https://fonts.googleapis.com/css?family=Neucha|Open+Sans" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo(base_url());?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo(base_url());?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo(base_url());?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="<?php echo(base_url());?>css/heroic-features.css" rel="stylesheet">

    <style>
    body {
      font-family: Open+Sans;
      color: #333;
      background: url("<?php echo(base_url());?>images/background.jpg") no-repeat center center !important;
      background-size: 100% auto;
    }.content-wrapper{
      background: red;
      background-size: 100% auto;

    }
    h1,h2,h3,h4,h5{
      font-family: Neucha;
    }.navbar{
      font-family: Neucha;
    }.btn{
      font-family: Neucha;
    }footer{
      font-family: Neucha;
    }
   .btn-primary{
      background-color: #099;
      border-color: #099;
    }.btn-primary:hover{
      background-color: #0cc;
      border-color: #0cc;
    }.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
      .show > .btn-primary.dropdown-toggle {
      color: #fff;
      background-color: #0cc;
      border-color: #0ff;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 128, 128, 0.5);
    }

    #header-home{
      background-color: rgba(255,255,255,0.9);
    }

    
    .btn-50-left{
      float:left !important;
      width: 50% !important;
      margin: 0 !important;
      border-bottom-right-radius: 0; 
      border-top-right-radius: 0; 
    }.btn-50-right{
      float:right!important;
      width: 50% !important;
      margin: 0 !important;
      border-bottom-left-radius: 0; 
      border-top-left-radius: 0; 
    }

   .modal-header{
        text-align: center;
        font-size: 30px;
    }
    .modal-header, .modal-body {
    }
    .clear{
      clear: both;
    }

    </style>

  </head>

  <body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#home"><i class="fa fa-fw fa-calendar-check-o"></i> Student Time Planner</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#modal-sign-in" href="#">Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="modal-sign-in" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4>Sign In</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span>E-mail</label>
                <input type="text" class="form-control" id="email" placeholder="E-mail">
              </div>
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span>Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
              <a href="<?php echo(site_url('dashboard'));?>" class="btn btn-block btn-secondary btn-50-left">
                <i class="fa fa-sign-in"></i> Sign In
              </a>
              <button class="btn btn-block btn-primary btn-50-right" data-dismiss="modal" data-toggle="modal" data-target="#modal-sign-up">
                <i class="fa fa-user-plus"></i> Sign Up</button>
              <div class="clear"></div>
              <br>
              <p align="center"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-reset-password">Forget Password?</a></p>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <i class="fa fa-remove"></i> Cancel
            </button>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-reset-password" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4>Reset Password</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span>Send new password to your E-mail</label>
                <input type="text" class="form-control" id="email" placeholder="E-mail">
              </div>
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Reset Password</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <i class="fa fa-remove"></i> Cancel
            </button>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-sign-up" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4>Sign Up</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="E-mail">
              </div>
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="repassword" placeholder="Confirm Password">
              </div>
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user-plus"></i> Sign Up</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <i class="fa fa-remove"></i> Cancel
            </button>
            
          </div>
        </div>
      </div>
    </div>
