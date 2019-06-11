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
        <link rel="stylesheet" href="../../bootstrap/css/theory_style.css">
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
        <section class="content">
          <!-- <h3 style="margin-top:5%"><b>Introduction to Database management System</b></h3> -->
          <div class="theory" >
              <b>TYPES OF FUNCTION:</b><br>
              1) USER defined<br>
              2) INBUILT function<br>
<br>
              1) USER DEFINED: Function as the name suggest that the function will be decalred by us and can be used in whole code.<br>
              Funtion can also be created according to your use case such as you want a funtion that can be used in your program again and again so you will declare your own inbulid function to perfrom that desired task.<br>
<br>
<div class="box">              SYNTAX to CREATE a function:<br>
<br>
              CREATE FUNCTION function_name (parameter datatype,parameter datatype) <br>  //Here you can have as many data types as you want<br>
              RETURNS return_datatype<br>
<br>
              BEGIN<br>
<br>
              	declation syntax;<br>
<br>
              	executable syntax;<br><br>
              END;
            </div>
<br>
              <b>EXAMPLE:</b><br>
              Lets us take a example and create a function which can calculate the total marks of a student.<br>
              <br>
              CREATE FUNCTION total(value1 INT,value2 INT,value3 INT)<br>
              RETURN INT<br>
              BEGIN<br>
              	declare total INT;<br>
              	SET total = 0;<br>
              	total=value1+value2+value3;<br>
              RETURN total;<br>
              END<br>
              <br>
              2) INBUIT FUNCTION:<br>
              These are the set of function which are predefined and can be used directly without explicitly declaring the function we can directly use them as your use case.<br>
<br>
<div class="box">
              SYNTAX of Inbuilt function:<br><br>
              Function_name (ARGUMENT1,ARGUMENT2.......)<br>
<br></div>
              The only drawback of these inbuilt function is you can  not  change there defination according to your use case.<br>
              and this drawback is not there in user define function but again the very benificial point is that the inbulid functions are easy to use then using created by our own.<br>
<br>
              EXAMPLE: SUM, MONTH, and many more but here we will be discussing some of the main functon which you are going to use most of time while you will be doing work on DBMS.<br>
<br>
              THE INBUILT FUNCIONS ARE AGAIN CLASSIFIED<br>
<br>
              <b>ON THE BASIES OF USE CASE:</b><br>
<br>
              <b>CONVERSION FUNCTION:</b><br>
              FUNCTION WHICH ARE use to convert the value from one type to other. It helps user alot so that he/she can get the data in any desired format.<br>
<br>
              <b>1)TO_CHAR (N [,FMT]):</b> Converts ‘N’ of numeric data type to Varchar2 datatype using optional number format FMT.<br>
<br><div class="box">
              SYNTAX:<br>
              SELECT column_name TO_CHAR (ARGUMENT*) FROM table_name;<br>
              *number of argument writtern in function can be passed in that function only<br>
              </div>
              Ex 1) Convert 12345 to string.<br>
              SELECT TO_CHAR(12345) FROM DUAL;<br>
<br>
              Ex 2) Display system date after converting to varchar2 data type.<br>
              SELECT TO_CHAR(SYSDATE)FROM DUAL;<br>
<br>
              Ex 3) Display system date in ‘Mon-DD-YYYY’ format after converting to varchar2 data type.
              <br>SQL> SELECT TO_CHAR(SYSDATE, ‘Mon-DD-YYYY’) FROM DUAL;<br>
<br>
              <b>2) TO_NUMBER(CHAR):</b>This conversion function is used to convert string to number data type.<br>
<br>
<div class="box">
              SYNTAX:<br>
              <br>
              SELECT column_name TO_NUMBER(ARGUMENT*) FROM table_name;<br>
</div>
              Ex : Convert string ‘123.45’ to number data type.<br>
              SQL> SELECT TO_NUMBER(‘123.45’) FROM DUAL;<br>
<br>
              <b>3) TO_DATE:</b>Converts character data type data to date type data.<br>
<br>
<div class="box">
   SYNTAX:<br>
  <br>
              SELECT column_name TO_DATE('ARGUMENT*') FROM table_name;
</div>
              Ex:- Display ’09-02-20 10’ converted to DDD-MM-YY format using to_char & to_date functions.<br>
              SQL> SELECT TO_CHAR(TO_DATE(’09-02-20 10’, ‘DD-MM-YYYY’),(‘DDD-MM-YY’) FROM DUAL;<br>
<br>
              MATH FUNCTION:
<br>
              SQRT<br>
              SUM<br>
              SQUARE<br>
              AVG<br>
              LOG<br>
              FLOOR<br>
              Etc will be discussed in next experiment.
            </div>
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
