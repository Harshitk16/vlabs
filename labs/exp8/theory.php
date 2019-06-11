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
       <section class="theory"> <!-- black bhi try kar lena ek baar-->
          <!-- <h3 style="margin-top:5%"><b>Introduction to Database management System</b></h3> -->

            <h3 style="margin-top:5%"><b>Using Set operator and Set comparison operator</b></h3>
            

<b>Set Operators:</b><br>
<br>SQL provides three set-manipulation constructs that extend the basic query form. Since the
answer to a query is a multi set of rows, it is natural to consider the use of operations such as
union, intersection, and difference. SQL supports these operations under the names UNION,
INTERSECT and MINUS.
<br>
**<b>Note :</b>The UNION, INTERSECT, and MINUS can be used on any two tables that are union- compatible, that is, have the same number of columns and the columns, taken in order, have the
same types.
<br><br>

<b>Operators</b><br>There are 3 Set Operators<br><br>
<table >
  <tr>
    <td><h3><b>S No.</b><h3></td>
    <td><h3><b>Operator</b></h3></td>
    
  </tr>
  <tr>
    <td>1</td>
    <td>UNION</td>
    
  </tr>
  <tr>
    <td>2</td>
    <td>INTERSECT</td>
    
  </tr>
  <tr>
    <td>3</td>
    <td>EXCEPT(MINUS)</td>
    
  </tr>
  
  
</table>



<br><br>

1.<b>"UNION" operator:</b><br>
The user can put together multiple Queries and combine their output using the union clause. The
union clause merges the output of two or more Queries into a single set of rows and column. The
final output of union clause will be<br>
<b>Output:</b>  Records only in Query one + records only in Query two + A single set of records with is
common in the both Queries.
<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT columnname, columname<br>
 FROM tablename 1<br>
<b>UNION</b><br>
SELECT columnname, columnname From tablename2;
<br><br>
</p>
</div>
<b>For Example</b>:Find the names of sailors who have reserved a red or a green boat.<br>
<div class="box">
<br>
SQL> FROM SAILORS S, <br>
 RESERVES R, BOATS B<br>
 WHERE S.SID = R.SID AND<br>
R.BID = B.BID <br>
AND B.COLOR = 'RED' <br>
<b>UNION</b> SELECT S2.SNAME<br>
 FROM SAILORS S2, BOATS<br>
B2, RESERVES R2 <br>
WHERE S2.SID = R2.SID <br>
AND R2.BID = B2.BID<br>
 AND B2.COLOR = 'GREEN';<br>
<br>
</div>


2.<b>"INTERSECT" operator:</b><br>
The use can put together multiple Queries and their output using the interest clause. The final
output of the interest clause will be:<br>
<b>Output</b>=A single set of records which are common in both Queries
<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT columnname, columnname<br>
 FROM tablename 1;<br>
<b>INTERSECT</b>.<br>
SELECT columnname, columnname<br>
 FROM tablename 2;<br><br>
</p>
</div>
<b>For Example</b>Find the names of sailor's that have reserved both a red and a green boat.<br>
<div class="box">
<br>
SQL> SELECT S.SNAME<br>
 FROM SAILORS S,<br>
 RESERVES R, BOATS B <br>
 WHERE S.SID = R.SID<br>
 AND R.BID = B.BID AND B.COLOR = ‘RED’ <br>
<b> INTERSECT </b>SELECT S2.SNAME<br>
 FROM SAILORS S2,<br>
BOATS B2, RESERVES R2 <br>
WHERE S2.SID = R2.SID <br> AND R2.BID = B2.BID<br>
 AND B2.COLOR ='GREEN';<br><br>
</div>

3.<b>"EXCEPT (MINUS)" operator:</b><br>
The user can put together multiple Queries and combine their output = records only in Query one<br>

<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT columnname, columnname <br>
FROM tablename ; MINUS<br>
SELECT columnname, columnname FROM tablename ;<br><br>
</p>
</div>
<b>For Example</b>Find the SIDs of all sailors’s who have reserved red boats but not green boats<br>
<div class="box">
<br>
SQL> SELECT R.SID <br>
FROM BOATS B, RESERVES R <br>
WHERE R.BID = B.BID 
AND B.COLOR ='RED' <b>MINUS</b> <br>
SELECT R2.SID FROM BOATS B2, <br>
RESERVES R2 <br>
WHERE R2.BID = B2.BID <br>
AND B2.COLOR = ‘GREEN’;<br><br>
</div>




	<b>Set-Comparison Operators</b><br>
<br> 	We have already seen the set-comparison operators EXISTS, IN along with their negated versions.
SQL also supports op ANY and op ALL, where op is one of the arithmetic comparison operators {<,
<=, =, <>, >=, >}. <br>Following are the example which illustrates the use of these Set-Comparison
Operators.

<br><br>

<b>Operators</b><br>There are 3 Set-Comparison Operators<br><br>
<table style="width:65%;" >
  <tr>
    <td><h3><b>S No.</b><h3></td>
    <td><h3><b>Operator</b></h3></td>
    
  </tr>
  <tr>
    <td>1</td>
    <td>Op ANY Operator </td>
    
  </tr>
  <tr>
    <td>2</td>
    <td>Op ALL Operator</td>
    
  </tr>
  
</table>

1.<b>"Op ANY" operator:</b><br>
It is a comparison operator. It is used to compare a value with any of element in a given set.e<br>

<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> Select columnname <br>
from tablename <br>
where (condition1) <br>
<b>ANY</b> (condition 2);<br>
<br><br>
</p>
</div>
<b>For Example</b>:Find sailors whose rating is better than some sailor called Rajesh.<br>
<div class="box">
<br>
SQL>  SELECT S.SID <br>
FROM SAILORS S <br>
WHERE S.RATING ><br>
 <b>ANY</b> (SELECT S2.RATING <br>
 FROM SAILORS S2 <br>
 WHERE S2.SNAME = ' RAJESH ‘);<br>
<br>
</div>
<b>Note</b> that IN and NOT IN are equivalent to = ANY and <> ALL, respectively<br> 



1.<b>"Op ALL" operator:</b><br>
It is a comparison operator. It is used to compare a value with all elements in a given set.e<br>

<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> Select columnname <br>
from tablename <br>
where (condition1) <br>
<b>ALL</b> (condition 2);<br>
<br><br>
</p>
</div>
<b>For Example</b>:Find the sailor's with the highest rating using ALL.<br>
<div class="box">
<br>
SQL>  SELECT S.SID <br>
FROM SAILORS S <br>
WHERE S.RATING ><br>
 <b>ALL</b> (SELECT S2.RATING <br>
 FROM SAILORS S2);<br>
<br>
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
