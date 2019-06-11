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
      <section class="content" > <!-- black bhi try kar lena ek baar-->
          <!-- <h3 style="margin-top:5%"><b>Introduction to Database management System</b></h3> -->

            <h3 style="margin-top:5%"><b>What is PL / SQL ?</b></h3>
              <div class="theory" style="font-family:Bahnschrift;text-align:justify;font-size:150%">
                <br>
                <b>Introduction to PL/SQL:</b><br><br>
                Procedural Language (PL/SQL) is a procedural extension to SQL, provided by ORACLE. Through PL/SQL, the data manipulation capabilities of SQL are combined with the processing capabilities of a procedural language. (Pro * C, Pro * COBOL).
                PL/SQL provides features like conditional execution, looping and branching. PL/SQL supports subroutines too.<br>
                The basic unit in any PL/SQL program is a block, which can occur sequentially (one after the other) or nested (One inside the other).
                Anonymous blocks are generally constructed dynamically and executed only once.<br>
                Named blocks are anonymous blocks with a label that gives the block a name. They are also constructed dynamically and executed only once.
                Subprograms are procedures, packages and functions that are stored in the database. These blocks generally don’t change once they are constructed and are executed many times by calling them explicitly via a call to a procedure, package or function.<br>
                TRIGGERS are named blocks that are stored in the database. They are executed implicitly whenever the triggering event occurs. The triggering event is a DML statement executed against a table in the database.
<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT * <br>
FROM `marks`  <br>
WHERE studentid = 'V002';<br><br>
</p>
</div>
<br>
<b> PL/SQL block and its Sections:</b><br><br>
A PL/SQL block is a set of SQL statements, which collectively accomplish a particular task. SQLPLUS commands cannot be used in a PL/SQL block. DDL commands such as CREATE and ALTER cannot be used in a PL/SQL block.<br> All DML and DCL statements can be used in PL/SQL though some modification is required in the syntax of some of the commands.
A PL/SQL block is called so, as the statements are written in a block- structured way as in PASCAL. Every block has a keyword, which indicates the
<br><br>
Every statement must be terminated by a semicolon.<br><br> PL/SQL block is terminated by a slash / on a line by itself
A PL/SQL block must have a Declaration section and an Execution section. It can optionally have an Exception section too.
Declaration section is where all the variables and cursors used in a block are declared. Execution section has SQL statements and PL/SQL constructs which aid in BRANCHING, LOOPING and CONDITIONAL EXECUTION. Exception section has statements, which handle the exceptions.
<br>

        </section>
        <div class="navi_boxl" style="float:left">
          <a href="index.php" >Previous<img src="../../common/images/white-arrow.png" style="transform:scaleX(-1);float:left"></a>
        </div>
        <div class="navi_boxr" style="float:right">
          <a href="pretest.php" ><img src="../../common/images/white-arrow.png" >Next</a>
         </div>
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
