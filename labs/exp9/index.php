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
                    <section class="theory">
                      <h3 style="margin-top:5%"> <b>Aim</b> </h3>
                    <p>
                    <i >&#x27A3;</i> To give you the fundamental knowledge of the  of using Join and its types that how we can share data from different tables <br>
                    <i>&#x27A3;</i>In this experiment we are going to have,a deep understanding of the usage of Join and types of JOIN with example</p>
                    <p><b>Set Operators</b><br>
						<b>INNER JOIN</b><br>
	                     (i). EQUI JOIN<br>
	                     (ii). NATURAL JOIN<br>
						    <b>OUTER JOIN</b><br>
						   (i).   FULL OUTER JOIN<br>
						  (ii).  LEFT OUTER JOIN<br>
						 (iii). RIGHT OUTER JOIN<br>
                       
                     </p>
                    
              </section>
                <div class="navi_boxr" style="float:right">
                  <a href="theory.php" ><img src="../../common/images/white-arrow.png" >Next</a>
                 </div>
            </div>
            <?php include 'footer.html'; ?>
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
