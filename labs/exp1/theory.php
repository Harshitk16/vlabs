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
        <p align="center" style="font-size:1em;"><b><?php echo $lab_name?><!-- Write your lab name --></b></p>
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
                <a href="../explist.php"><i class="fa fa-dashboard"></i><?php echo $lab_name?><!-- Write your lab name --></a>
              </li>
              <li>
                <a href="#"><?php echo $exp_name?><!-- Write your experiment name --></a>
              </li>
              <li class="active">Theory</li>
            </ol>
          </section>
        </nav>
      </header>
            <?php include 'pane.html'; ?>
             <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 align="center"> <?php echo $exp_name?>
            <!-- Write your experiment name -->
          </h1>
        </section>
        <!-- Main content -->
        <section class="content" >
          <!-- <h3 style="margin-top:5%"><b>Introduction to Database management System</b></h3> -->
          <h3 style="margin-top:5%"><b>Glimpse over Important Terminology used in DBMS  </b></h3>
            <p class="MsoNormal" style="text-align:justify;font-size:150%;font-family:Bahnschrift;">
              <i>&#x27A3;</i> <b>Data:</b> Ram and Isolated facts about an entity(record) eg text,audio,video,image,map etc;
            </p>
            <p class="MsoNormal" style="text-align:justify;font-size:150%">
              <i>&#x27A3;</i> <b>Information:</b>Processed,meaning full,Valuable data.
            </p>
            <p class="MsoNormal" style="text-align:justify;font-size:150%">
              <i>&#x27A3;</i> <b>Database:</b>Collection of Similar/related Data.
            </p>
            <p class="MsoNormal" style="text-align:justify;font-size:150%">
              <i>&#x27A3;</i> <b>DBMS:</b>Software used to create,manipulate and Delete databse.
            </p>
            <p class="MsoNormal" style="text-align:justify;font-size:150%">
              <i>&#x27A3;</i> <b>Entity:</b>Software used to create,manipulate and Delete databse.
            </p>
            <p class="MsoNormal" style="text-align:justify;font-size:150%">
              <i>&#x27A3;</i> <b>Attribute:</b>a piece of information which determines the properties of a field or tag. <br>
            </p>
            <p class="MsoNormal" style="text-align:justify;font-size:150%">
              <i>&#x27A3;</i> <b>Key:</b>Software used to create,manipulate and Delete databse.
            </p>
            <p class="MsoNormal" style="text-align:justify;font-size:150%">
              <i>&#x27A3;</i> <b>Schema:</b>Software used to create,manipulate and Delete databse.
            </p>
            <p class="MsoNormal" style="text-align:justify;font-size:150%">
              <i>&#x27A3;</i> <b>  Records:</b>Software used to create,manipulate and Delete databse.
            </p>
          <h3 style="margin-top:5%"><b>Advantages of DataBase Management System</b></h3>
            <p class="MsoNormal" style="text-align:justify;font-size:150%">
              <i>&#x27A3;</i>   Control of Data Redundancy<br>
              <i>&#x27A3;</i>   Sharing of Data.<br>
              <i>&#x27A3;</i>   Maintenance of Integrity<br>
              <i>&#x27A3;</i>   Support for Transaction Control and Recovery<br>

            </p>
            <h3 style="margin-top:5%"><b>DataBase Management System</b></h3>
              <p class="MsoNormal" style="text-align:justify;font-size:150%">
                <i>&#x27A3;</i> Finally, Now Stuff for which we are here, The DBMS,<br>
                 A database management system (DBMS) is a collection of programs that enables
                users to create and maintain a database. The DBMS is a <i> general-purpose software system</i>
                that facilitates the processes of <i>defining, constructing, manipulating, and sharing</i>
                databases among various users and applications. So DBMS is just an software to design and manage the database
                just like
                <br><br>
                <b><i>is it getting harder .....</i></b><br>
                ok, let's take an example<br>
                consider that, you have to send a text message to a friend so what will you use, i will use whatsapp,but your choice may be diffrent
                you may choose basic messaging app,hike,wechat and many more,the choice is your's.choose any of the available app for sending your
                message(data:collection of information).<br>
                so the software you used is like our DBMS,and the message we sent was our database.
                </p>
                <div class="navi_boxl" style="float:left">
                  <a href="index.php" >Previous<img src="../../common/images/white-arrow.png" style="transform:scaleX(-1);float:left"></a>
                </div>

                  <div class="navi_boxr" style="float:right">
                    <a href="pretest.php" ><img src="../../common/images/white-arrow.png" >Next</a>
                   </div>

        </section>
        <!-- /.content -->
      </div>
      <?php include 'footer.html'; ?>
      <!-- /.content-wrapper -->
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
