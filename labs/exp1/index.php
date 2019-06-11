<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Virtual Labs </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="../../bootstrap/css/button.css">
        <link rel="stylesheet" href="../../bootstrap/css/theory_style.css">
    </head>


    <body class="hold-transition skin-blue sidebar-mini">
        <?php
        include '../../common/header.html';
        include 'lab_name.php';
        $lab_name = $_SESSION['lab_name'];
        $exp_name = $_SESSION['exp_name'];
        ?>
        <div class="wrapper">
        	<header class="main-header">
        <!-- Logo -->
        <a href="../explist.php" class="logo">
        <p align="center" style="font-size:1em;"><b><?php echo $lab_name?>Data Management System</b></p>
    </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
          <section class="content-header">
            <ol class="breadcrumb">
              <li>
                <a href="../explist.php"><i class="fa fa-dashboard"></i><?php echo $lab_name?></a>
              </li>
              <li>
                <a href="#"><?php echo $exp_name?>></a>
              </li>
              <li class="active">Aim</li>
            </ol>
          </section>
        </nav>
      </header>
            <?php include 'pane.html'; ?>
            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
                <section class="content-header">
                <h1 align="center">
                    <?php echo $exp_name?>
                </h1>
                </section>
                    <!-- Main content -->
                    <section id="main" class="content" style="font-family:Bahnschrift;">
                      <h3 style="margin-top:5%"> <b>Aim</b> </h3>
                    <p style="font-size:150%; margin-top:2%">
                    <i >&#x27A3;</i>  To make you know about the fundamentals of Database Management System and SQL Queries.<br>
                    <i>&#x27A3;</i>  Improve ourselves by taking valuable feedbacks from you.</p>
                    <h3 style="margin-top:5%"> <b>Introduction</b> </h3>
                    <p style="font-size:130%; margin-top:2%">
  A set of inter-related data is known as database and the software that
  manages it is known as database management system or DBMS. Hence DBMS
  can be described as "a computer-based record keeping system which consists
  of software for processing a collection of interrelated data". A set of
  structures and relationships that meet a specific need is called a schema.
  A DBMS is a software that manages a collection of interrelated data
  elements, stored in a database, that can be accessed in a shared manner by
  a collection of applications programs. On a very conceptual level, we can
  think of a database as central reservoir of data that can be accessed by
  many users
  A person known as the Database Administrator or the DBA centrally manages
  the database. The DBA initially studies the System and accordingly decides
  the types of data to be used, then the structures to be used to hold the data
  and the interrelationships between the data structures. He then defines data
  to the DBMS. The DBA also ensures the security of the database. The DBA
  usually controls access to the data through the user codes and passwords and
  by restricting the views or operations that the users can perform on the
  database.</p>

    <div class="navi_boxr" style="float:right">
      <a href="theory.php" ><img src="../../common/images/white-arrow.png" >Next</a>
     </div>

</section>
            </div>
        </div>

    </body>
</html>

<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
