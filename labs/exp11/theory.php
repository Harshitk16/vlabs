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
        <section class="theory">
          <!-- <h3 style="margin-top:5%"><b>Introduction to Database management System</b></h3> -->
              <b> TCL commands  </b><br><br>
              Transaction Control Language(TCL) commands are used to manage 
transactions in the database. These are used to manage the changes made to the data in a table by DML statements. It also allows statements to be grouped together into logical transactions.
<br>
<br><b>SAVEPOINT COMMAND</b><br>
<br>
Savepoint command is used to temporarily save a transaction so that you can rollback to that point whenever required.<br>
<br>
<div class="box">              Syntex to SAVEPOINT:<br>
<br> SAVEPOINT savepoint_name;
            </div>
<br>
In short, using this command we can name the different states of our data in any table and then rollback to that state using the ROLLBACK command whenever required.

              <br><br><b>COMMIT COMMAND : </b>
              <BR><br>It is used to permanently save any transaction into the database.
When we use any DML command like INSERT, UPDATE or DELETE the changes made by these commands are not permanent, until the current session is closed, the changes made by these commands can be rolled back.
<br><br>To avoid that, we use the COMMIT command to mark the changes as permanent.
<br><br>
<div class="box">
              SYNTAX of COMMIT:<br><br>
              COMMIT;<br>
<br></div><b>ROLLBACK command : </b><br>
This command restores the database to last commited state. It is also used with SAVEPOINT command to jump to a savepoint in an ongoing transaction.
<br>If we have used the UPDATE command to make some changes into the database, and realise that those changes were not required, then we can use the ROLLBACK command to rollback those changes, if they were not commited using the COMMIT command.
<br><br>
<div class="box">              Syntex to ROLLBACK:<br>
<br>  ROLLBACK TO savepoint_name;
            </div>
<br>
<b>Procedure : </b><br>
Using Savepoint and Rollback<br><br>
ASSUME Following  table class,<br><br>
 
<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>ID</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Name</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">1</td>
    <td style="border: 1px solid black">Abhi</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">2</td>
    <td style="border: 1px solid black">Adam</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">3</td>
    <td style="border: 1px solid black">John</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">4</td>
    <td style="border: 1px solid black">Alex</td>
  </tr>  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">5</td>
    <td style="border: 1px solid black">Jeet</td>
  </tr>
</table>
<br>Lets use some SQL queries on the above table and see the results.
<br>INSERT INTO class VALUES(5, 'Rahul');
<br><br>
COMMIT;
<br><br>
UPDATE class SET name = 'Abhijit' WHERE id = '5';
<br><br>
SAVEPOINT A;
<br><br>
INSERT INTO class VALUES(6, 'Chris');
<br><br>
SAVEPOINT B;
<br><br>
INSERT INTO class VALUES(7, 'Bravo');
<br><br>
SAVEPOINT C;
<br><br>
SELECT * FROM class;
<br><br>NOTE: SELECT statement is used to show the data stored in the table.
<br><br>The resultant table will look like,
<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>ID</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Name</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">1</td>
    <td style="border: 1px solid black">Abhi</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">2</td>
    <td style="border: 1px solid black">Adam</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">3</td>
    <td style="border: 1px solid black">John</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">4</td>
    <td style="border: 1px solid black">Alex</td>
  </tr>  
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">5</td>
    <td style="border: 1px solid black">Abhijit</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">6</td>
    <td style="border: 1px solid black">Chris</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">7</td>
    <td style="border: 1px solid black">Bravo</td>
  </tr>
</table><br>
Now let's use the ROLLBACK command to roll back the state of data to the savepoint B.
<br><br>ROLLBACK TO B;
<br><br>SELECT * FROM class;
<br><br>Now our class table will look like,
<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>ID</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Name</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">1</td>
    <td style="border: 1px solid black">Abhi</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">2</td>
    <td style="border: 1px solid black">Adam</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">3</td>
    <td style="border: 1px solid black">John</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">4</td>
    <td style="border: 1px solid black">Alex</td>
  </tr>  
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">5</td>
    <td style="border: 1px solid black">Abhijit</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">6</td>
    <td style="border: 1px solid black">Chris</td>
  </tr>
</table><br>
Now let's again use the ROLLBACK command to roll back the state of data to the savepoint A
<br><br>ROLLBACK TO A;
<br><br>SELECT * FROM class;
<br><br>Now the table will look like,
<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>ID</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Name</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">1</td>
    <td style="border: 1px solid black">Abhi</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">2</td>
    <td style="border: 1px solid black">Adam</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">3</td>
    <td style="border: 1px solid black">John</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">4</td>
    <td style="border: 1px solid black">Alex</td>
  </tr>  
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">5</td>
    <td style="border: 1px solid black">Abhijit</td>
  </tr>
</table>
</section>
<section>
        <div class="navi_boxl" style="float:left">
          <a href="index.php" >Previous<img src="../../common/images/white-arrow.png" style="transform:scaleX(-1);float:left"></a>
        </div>
        <div class="navi_boxr" style="float:right">
          <a href="pretest.php" ><img src="../../common/images/white-arrow.png" >Next</a>
         </div>
        <!-- /.content -->
      </div>
</section>

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
