<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo($title);?></title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo(base_url());?>images/favicon.ico" />
  <!-- Bootstrap core CSS-->
  <link href="https://fonts.googleapis.com/css?family=Neucha|Open+Sans" rel="stylesheet" type="text/css">
  <link href="<?php echo(base_url());?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link href="<?php echo(base_url());?>vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo(base_url());?>vendor2/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo(base_url());?>vendor2/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo(base_url());?>css/sb-admin.css" rel="stylesheet">

  
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo(base_url());?>vendor2/jquery/jquery.min.js"></script>
  <script src="<?php echo(base_url());?>vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo(base_url());?>vendor2/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?php echo(base_url());?>js/sb-admin.min.js"></script>

  <style>
    body {
      font-family: Open+Sans;
      color: #333;
    }
    h1,h2,h3,h4,h5,.card-header{
      font-family: Neucha;
    }.navbar{
      font-family: Neucha;
    }.btn{
      font-family: Neucha;
    }footer{
      font-family: Neucha;
    }#header-date-time{
      color: #fff;
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

    #accordion .ui-state-active{
      background-color: #099;
    }
    
  </style>

</head>


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo(site_url('dashboard'));?>"><i class="fa fa-fw fa-calendar-check-o"></i> Student Time Planner</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
          <a class="nav-link" href="<?php echo(site_url('profile'));?>">
            <i class="fa fa-fw fa-user-o"></i>
            <span class="nav-link-text">Ravita Negi</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo(site_url('dashboard'));?>">
            <i class="fa fa-fw fa-bar-chart"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Courses">
          <a class="nav-link" href="<?php echo(site_url('courses'));?>">
            <i class="fa fa-fw fa-graduation-cap"></i>
            <span class="nav-link-text">Courses</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tasks">
          <a class="nav-link" href="<?php echo(site_url('tasks'));?>">
            <i class="fa fa-fw fa-tasks"></i>
            <span class="nav-link-text">Tasks</span>
          </a>
        </li>
        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Readings">
          <a class="nav-link" href="<?php echo(site_url('readings'));?>">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Readings</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Revision">
          <a class="nav-link" href="<?php echo(site_url('revision'));?>">
            <i class="fa fa-fw fa-eye"></i>
            <span class="nav-link-text">Revision</span>
          </a>
        </li>-->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Assignments">
          <a class="nav-link" href="<?php echo(site_url('assignments'));?>">
            <i class="fa fa-fw fa-file-text-o"></i>
            <span class="nav-link-text">Assignments</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Achievements">
          <a class="nav-link" href="<?php echo(site_url('achievements'));?>">
            <i class="fa fa-fw fa-trophy"></i>
            <span class="nav-link-text">Achievements</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sign Out">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">Sign Out</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item" id="header-date-time">
            <i class="fa fa-fw fa-calendar"></i>
            <span>Wednesday, 21 March 2018</span>
            <i class="fa fa-fw fa-clock-o"></i>
            <span>9:43 PM</span>
        </li>
      </ul>
    </div>
  </nav>