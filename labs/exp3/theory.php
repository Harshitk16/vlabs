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
        <section class="content" id="main">
          <!-- <h3 style="margin-top:5%"><b>Introduction to Database management System</b></h3> -->

         <div class="theory">
                Data manipulation commands are used to manipulate data in the database.
<br>
Some of the Data Manipulation Commands are-
<br><br>
<b>Select</b><br>
Select statement retrieves the data from database according to the constraints specifies alongside.<br>
<div class="box">
SYNTAX<br>
SELECT (COLUMN NAME)
FROM (TABLE NAME)
WHERE (CONDITION)
</div>
<br>
<b>Insert</b>
<br>
Insert statement is used to insert data into database tables.<br>
<div class="box">
SYNTAX<br>
INSERT INTO (TABLE_NAME) (COLUMNS TO INSERT) VALUES (VALUES TO INSERT)
</div>
<br>
<b>Update</b>
<br>
The update command updates existing data within a table.
<br>
<div class="box">
SYNTAX
<br>
UPDATE (TABLE NAME)
SET (COLUMN NAME) = (UPDATED COLUMN VALUE),
(COLUMN NAME) = (UPDATED COLUMN VALUE),
(COLUMN NAME) = (UPDATED COLUMN VALUE)…
WHERE (CONDITION)
</div>
<br>
<b>Delete</b><br>
Deletes records from the database table according to the given constraints.
<div class="box">
SYNTAX<br>
DELETE FROM (TABLE NAME)
WHERE <CONDITION>
</div>
Similar to delete there is a drop command but in DROP command we can delete tables or databases but in delete command we can delete a single entry from a table.
<br><br>
<b>Alter</b><br>
ALTER TABLE is used to add, delete/drop or modify columns in the existing table. It is also used to add and drop various constraints on the existing table.
<br><br>
(i) ALTER TABLE – ADD
ADD is used to add columns into the existing table. Sometimes we may require to add additional information, in that case we do not require to create the whole database again, ADD comes to our rescue.
<div class="box">
SYNTAX
<br>
 ALTER TABLE table_name
              ADD (Columnname_1  datatype,
              Columnname_2  datatype,
              …
              Columnname_n  datatype);
</div>
<br>
(ii) ALTER TABLE – DROP
<br>
DROP COLUMN is used to drop column in a table. Deleting the unwanted columns from the table.
<br>
<div class="box">
SYNTAX
<br>
ALTER TABLE table_name 
DROP COLUMN column_name;
</div>
<br>
(iii) ALTER TABLE-MODIFY
<br>
It is used to modify the existing columns in a table. Multiple columns can also be modified at once.
*Syntax may vary slightly in different databases.
<div class="box">
Syntax(Oracle,MySQL,MariaDB):
<br>
 ALTER TABLE table_name
MODIFY column_name column_type;
Syntax(SQL Server):
<br>
 ALTER TABLE table_name
ALTER COLUMN column_name column_type;
</div>
</div>
        </section>
        <section>
      <div class="navi_boxl" style="float:left">
          <a href="index.php" >Previous<img src="../../common/images/white-arrow.png" style="transform:scaleX(-1);float:left"></a>
        </div>
        <div class="navi_boxr" style="float:right">
          <a href="pretest.php" ><img src="../../common/images/white-arrow.png" >Next</a>
         </div>
        </section>
        <!-- /.content -->
    
      <?php include 'footer.html'; ?>
      <!-- /.content-wrapper -->
    
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
