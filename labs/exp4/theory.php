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
      <section class="content" id="main" > <!-- black bhi try kar lena ek baar-->
          <!-- <h3 style="margin-top:5%"><b>Introduction to Database management System</b></h3> -->

            <h3 style="margin-top:5%"><b>Types of operators used in SQL</b></h3>
              <div class="theory" style="font-family:Bahnschrift;text-align:justify;font-size:150%">
                <br>
1)Arithmatic operator.<br>
<br>
2)Relational operator.<br>
<br>
3)Logical operator.<br>
<br>
let us discuss each type of operator in detail now,<br>
<br>
1:<b>Arithmatic operator in SQL:</b><br>
Arithmatic operator in SQL are used to perform methametical calculations like addition, subtraction,
<br>division in SQL statements.
<br><br>
<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>Operator</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Names</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">+</td>
    <td style="border: 1px solid black">ADDITION</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">-</td>
    <td style="border: 1px solid black">SUBTRACTION</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">*</td>
    <td style="border: 1px solid black">MULTIPLICATION</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">/</td>
    <td style="border: 1px solid black">DIVISION</td>
  </tr>
</table>
<br>
2:<b>Relational operator in SQL:</b><br>
Relational operator in SQL are used to find the relation between two coloumn.<br>i.e. to compare the values of two coloumns.
<br><br>
<table>
  <tr>
    <td><h3><b>Operator</b><h3></td>
    <td><h3><b>Description</b></h3></td>
    <td><h3><b>Operator Name</b></h3></td>
  </tr>
  <tr>
    <td>a=b</td>
    <td>Equals</td>
    <td>Here a is "Equals" to b</td>
  </tr>
  <tr>
    <td>a<>b</td>
    <td>Not Equal</td>
    <td>Here a is "not equal" to b</td>
  </tr>
  <tr>
    <td>a>b</td>
    <td>Greater Then</td>
    <td>Here a is "greater" then b</td>
  </tr>
  <tr>
    <td>a<b</td>
    <td>Less Then</td>
    <td>Here a is "less" then b</td>
  </tr>
  <tr>
    <td>a>=b</td>
    <td>Greater then equal to</td>
    <td>Here a is "Greater then or equal" to b</td>
  </tr>
  <tr>
    <td>a<=b</td>
    <td>Less then equal to</td>
    <td>Here a is "Less then or equal" to b</td>
  </tr>
</table>
<br>
3:<b>Logical operator in SQL:</b><br>
Logical operator in SQL are used to perform logical operator on the given expression in SQL statements.<br>
There are many operator in SQL statements in the WHERE CLAUSE.
<br>
When retrieving data using a SELECT statement, you can use logical operators in the WHERE clause,
<br>which allows you to combine more than one conditions such as:<br>
<br>
1)<b>"AND" Logical Operator:</b><br>
If you want to select rows that must satisfy all the given conditions, you can use the logical operator, AND.<br>
<br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT column_name,Column_name<br>
      FROM Table_name<br>
    WHERE Condition1 AND Condition2;<br><br>
</p>
</div>
<b>For Example:</b> To find the names of the students between the age 16 to 21 years, the query would be like:<br>
<br>SELECT first_name, last_name, age<br>
FROM student_details<br>
WHERE age>=16 AND age<=21;<br>
<br>
The output would be something like,<br>
<br>
  <table>
    <tr>
          <td><h3><b>First_Name</h3></b></td>
          <td><h3><b>Age</h3></b></td>
    </tr>
    <tr>
          <td>Ram</td>
          <td>19</td>
    </tr>
    <tr>
          <td>Shyam</td>
          <td>20</td>
    </tr>
    <tr>
          <td>Sam</td>
          <td>17</td>
    </tr>
  </table>
<br>

The following table describes how logical "AND" operator selects a row.<br>
<br>
<table>
  <tr>
    <td><h3><b>Condition Satisfied?</h3></b></td>
    <td><h3><b>ConditionSatisfied?</h3></b></td>
    <td><h3><b>Row Selected</h3></b></td>
  </tr>
  <tr>
    <td>YES</td>
    <td>YES</td>
    <td>YES</td>
  </tr>
  <tr>
    <td>YES</td>
    <td>NO</td>
    <td>NO</td>
  </tr>
  <tr>
    <td>NO</td>
    <td>YES</td>
    <td>NO</td>
  </tr>
  <tr>
    <td>NO</td>
    <td>NO</td>
    <td>NO</td>
  </tr>
</table>
<br>
<br>
2)<b>"NOT" Logical Operator:</b><br>
If you want to find rows that do not satisfy a condition, you can use the logical operator, NOT.<br>
NOT results in the reverse of a condition. That is, if a condition is satisfied, then the row is not returned.<br>
<br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT column_name,Column_name<br>
      FROM Table_name<br>
    WHERE NOT Condition1;<br><br>
</p>
</div>
<b>For example:</b> If you want to find out the names of the students who do not play football, the query would be like:<br>
<br>
SELECT first_name, last_name, games<br>
FROM student_details<br>
WHERE NOT games = 'Football'<br>
<br>
The output would be something like,
<br>
<table >
  <tr>
        <td><h3><b>First_Name</h3></b></td>
        <td><h3><b>Games</h3></b></td>
  </tr>
  <tr>
        <td>Ram</td>
        <td>Cricket</td>
  </tr>
  <tr>
        <td>Shyam</td>
        <td>Cricket</td>
  </tr>
  <tr>
        <td>Mohan</td>
        <td>Badminton</td>
  </tr>
  <tr>
        <td>Riya</td>
        <td>Chess</td>
  </tr>
</table>
<br><br>
The following table describes how logical "NOT" operator selects a row.<br>
<br>
<table >
  <tr>
    <td><h3><b>Condition Satisfied?</h3></b></td>
    <td><h3><b>NOT ConditionSatisfied?</h3></b></td>
    <td><h3><b>Row Selected</h3></b></td>
  </tr>
  <tr>
    <td>YES</td>
    <td>NO</td>
    <td>NO</td>
  </tr>
  <tr>
    <td>NO</td>
    <td>YES</td>
    <td>YES</td>
  </tr>
</table>
<br><br>
3)<b>"OR" operator:</b><br>
if you want to find the columns that satisfy any one given condition in that satements then you can use the "OR" operator.<br>
<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT column_name,Column_name<br>
      FROM Table_name<br>
    WHERE Condition1 OR Condition2;<br><br>
</p>
</div>
<b>For Example</b>: To find the name of student which are in the same class.<br>
<br>
SELECT first_name,class<br>
FROM student<br>
WHERE class='IT' OR class='CSE'<br>
<br>
<table >
  <tr>
        <td><h3><b>First_Name</h3></b></td>
        <td><h3><b>Class</h3></b></td>
  </tr>
  <tr>
        <td>Ram</td>
        <td>CSE</td>
  </tr>
  <tr>
        <td>Shyam</td>
        <td>CSE</td>
  </tr>
  <tr>
        <td>Simran</td>
        <td>CSE</td>
  </tr>
  <tr>
        <td>Mohan</td>
        <td>IT</td>
  </tr>
  <tr>
        <td>Riya</td>
        <td>IT</td>
  </tr>
  <tr>
        <td>Sam</td>
        <td>IT</td>
  </tr>
</table>
<br>
The following table describes how logical "OR" operator selects a row.<br>
<br>
<table >
  <tr>
    <td><h3><b>Condition Satisfied?</h3></b></td>
    <td><h3><b>ConditionSatisfied?</h3></b></td>
    <td><h3><b>Row Selected</h3></b></td>
  </tr>
  <tr>
    <td>YES</td>
    <td>YES</td>
    <td>YES</td>
  </tr>
  <tr>
    <td>YES</td>
    <td>NO</td>
    <td>YES</td>
  </tr>
  <tr>
    <td>NO</td>
    <td>YES</td>
    <td>YES</td>
  </tr>
  <tr>
    <td>NO</td>
    <td>NO</td>
    <td>NO</td>
  </tr>
</table>
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
