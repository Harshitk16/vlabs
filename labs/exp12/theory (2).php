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
<!--        <style>
        table, tr , td {
          background-color:#66ffcc;
          color: black;
          text-align: center;
          padding:2px;
          border:1px solid black;
          border-radius: 5px;
          box-shadow: 0px 0px 10px grey;
        }
        tr,td{
          font-size:115%;
        }
        div.theory{
          font-family:Bahnschrift;
          border:1px;
          width:auto;
          height: auto;
          text-align: justify;
        }
        div.box{
          padding: 2px;
          border: 1px solid blue ;
          width: 750;
          height: auto;
          align: center;
          background-color: #90EE90;
          border-radius: 5px;
          box-shadow: 0px 0px 100px grey;
          margin-left: 5px;
        }
      -->
        </style>
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
          <div class="theory" style="text-align:justify;font-size:150%">
              <b> Data Control Language(DCL) [Continue]  </b><br><br>
              

<br><b>ORDER BY Clause</b><br>
Order by clause is used with SELECT statement for arranging retrieved data in sorted order.
<br> The Order by clause by default sorts the retrieved data in ascending order.
 To sort the data in descending order DESC keyword is used with Order by clause.
 <br><br><div class="box">
              Syntex<br><br>
              SELECT column-list|* FROM table-name ORDER BY ASC | DESC;
</div>
Consider the following<b> Emp </b>table,
 
<table style="border:1px solid;text-align:center;width:25%;">
  <tr >
    <td ><h3><b>eid</b><h3></td>
    <td ><h3><b>Name</b><h3></td>
    <td ><h3><b>age</b><h3></td>
    <td ><h3><b>salary</b><h3></td>
  </tr>
  <tr >
    <td >401</td>
    <td >Anu</td>
    <td >22</td>
    <td >9000</td>
  </tr>
  <tr >
    <td >402</td>
    <td >Shane</td>
    <td >29</td>
    <td >8000</td>
  </tr>
  <tr >
    <td >403</td>
    <td >Rohan</td>
    <td >34</td>
    <td >6000</td>
  </tr>
  <tr >
    <td >404</td>
    <td >Scott</td>
    <td >44</td>
    <td >10000</td>
  </tr>
  <tr >
    <td >405</td>
    <td >Tiger</td>
    <td >35</td>
    <td >8000</td>
  </tr>
</table>
<br><b>Query : </b>SELECT * FROM Emp ORDER BY salary;
<br>The above query will return the resultant data in ascending order of the salary.
<table style="border:1px solid;text-align:center;width:25%;">
  <tr >
    <td ><h3><b>eid</b><h3></td>
    <td ><h3><b>Name</b><h3></td>
    <td ><h3><b>age</b><h3></td>
    <td ><h3><b>salary</b><h3></td>
  </tr>
  
  <tr >
    <td >403</td>
    <td >Rohan</td>
    <td >34</td>
    <td >6000</td>
  </tr>
  <tr >
    <td >402</td>
    <td >Shane</td>
    <td >29</td>
    <td >8000</td>
  </tr>
  <tr >
    <td >405</td>
    <td >Tiger</td>
    <td >35</td>
    <td >8000</td>
  </tr>
  <tr >
    <td >401</td>
    <td >Anu</td>
    <td >22</td>
    <td >9000</td>
  </tr>
  <tr >
    <td >404</td>
    <td >Scott</td>
    <td >44</td>
    <td >10000</td>
  </tr>
</table>
<br><div class="box">
              Syntex for descending order<br><br> 
              SELECT * FROM Emp ORDER BY salary DESC;
</div>
<b>GROUP BY Clause</b><br>
Group by clause is used to group the results of a SELECT query based on one or more columns.
<br> It is also used with SQL functions to group the result from one or more tables.
<br><br><div class="box">
              Syntex<br><br>
              SELECT column_name, function(column_name)<br>
FROM table_name <br>
WHERE condition <br>
GROUP BY column_name;<br>
</div>
<br>
Example of Group by in a Statement with WHERE clause<br><br>
<b>Query : </b> SELECT name, salary FROM Emp WHERE age > 25 GROUP BY salary;
<br>Result will be.
<br><table style="border:1px solid;text-align:center;width:25%;">
  <tr >
    <td ><h3><b>Name</b><h3></td>
    <td ><h3><b>salary</b><h3></td>
  </tr>
  
  <tr >
    <td >Rohan</td>
    <td >6000</td>
  </tr>
  <tr >
    <td >Shane</td>
    <td >8000</td>
  </tr>
  <tr >
    <td >Scott</td>
    <td >10000</td>
  </tr>
</table><br>
You must remember that Group By clause will always come at the end of the SQL query, just like the Order by clause.
  
 <br><b>HAVING Clause</b>
<br>Having clause is used with SQL Queries to give more precise condition for a statement.
<br>It is used to mention condition in Group by based SQL queries, just like WHERE clause is used with SELECT query.
<br><br><div class="box">
              Syntex<br><br>
              SELECT column_name, function(column_name)<br>
FROM table_name<br>
WHERE column_name condition<br>
GROUP BY column_name<br>
HAVING function(column_name) condition
</div>
Example of Having Clause
<br><br>Consider following sale table
<br><table style="border:1px solid;text-align:center;width:25%;">
  <tr >
    <td ><h3><b>oid</b><h3></td>
    <td ><h3><b>order_name</b><h3></td>
    <td ><h3><b>previous_balance</b><h3></td>
    <td ><h3><b>customer</b><h3></td>
  </tr>
  
  <tr >
  <td >11</td>
    <td >ord1</td>
    <td >2000</td>
    <td >Alex</td>
  </tr>
  <td >12</td>
    <td >ord2</td>
    <td >4000</td>
    <td >Adam</td>
  </tr>
  <td >13</td>
    <td >ord3</td>
    <td >2000</td>
    <td >Alex</td>
  </tr>
</table>
<br><b>Query : </b>SELECT * FROM sale GROUP BY customer HAVING sum(previous_balance) > 3000
<br>Result will be,
<br><table style="border:1px solid;text-align:center;width:25%;">
  <tr >
    <td ><h3><b>oid</b><h3></td>
    <td ><h3><b>order_name</b><h3></td>
    <td ><h3><b>previous_balance</b><h3></td>
    <td ><h3><b>customer</b><h3></td>
  </tr>
  
  <tr >
  <td >11</td>
    <td >ord1</td>
    <td >2000</td>
    <td >Alex</td>
  </tr>
</table>
<br><b>DISTINCT keyword</b><br>
The distinct keyword is used with SELECT statement to retrieve unique values from the table.
<br> Distinct removes all the duplicate records while retrieving records from any table in the database.
<br><br><div class="box">
              Syntex<br><br>
              SELECT DISTINCT column-name FROM table-name;
</div>
<br>Example using DISTINCT Keyword on emp table
<br><br><b>Query : </b>SELECT DISTINCT salary FROM Emp;
<br>The above query will return only the unique salary from Emp table.
<table style="border:1px solid;text-align:center;width:25%;">
  <tr >
    <td ><h3><b>salary</b><h3></td>
  </tr>
  <tr >
    <td >9000</td>
  </tr>
  <tr >
    <td >8000</td>
  </tr>
  <tr >
    <td >6000</td>
  </tr>
  <tr >
    <td >10000</td>
  </tr>
</table>
<br><b>AND & OR operator</b><br>
The AND and OR operators are used with the WHERE clause to make more precise conditions for fetching data from database by combining more than one condition together.
<br><br>
<b>AND operator</b>
<br>AND operator is used to set multiple conditions with the WHERE clause, alongside, SELECT, UPDATE or DELETE SQL queries.
<br><br>Example of <b>AND</b> operator on  emp table
<br><br><b>Query : </b>SELECT * FROM emp WHERE salary > 8500 AND age < 30;
<br>The above query will return records where <b>salary</b> is greater than <b>8500</b> and age less than <b>30</b>.
<br> Hope you get the concept here. We have used the<b> AND</b> operator to specify two conditions with WHEREclause.
<table style="border:1px solid;text-align:center;width:25%;">
  <tr >
    <td ><h3><b>eid</b><h3></td>
    <td ><h3><b>Name</b><h3></td>
    <td ><h3><b>age</b><h3></td>
    <td ><h3><b>salary</b><h3></td>
  </tr>
  <tr >
    <td >401</td>
    <td >Anu</td>
    <td >22</td>
    <td >9000</td>
  </tr>
</table>
<br><b>OR operator</b><br>
OR operator is also used to combine multiple conditions with WHERE clause. The only difference between AND and OR is their behaviour.
<br>When we use AND to combine two or more than two conditions, records satisfying all the specified conditions will be there in the result.
<br>But in case of OR operator, atleast one condition from the conditions specified must be satisfied by any record to be in the resultset.
<br><br>Example of <b>AND</b> operator on  emp table
<br><br><b>Query : </b>SELECT * FROM Emp WHERE salary > 8500 OR age < 30;<br>Result will be.
<table style="border:1px solid;text-align:center;width:25%;">
  <tr >
    <td ><h3><b>eid</b><h3></td>
    <td ><h3><b>Name</b><h3></td>
    <td ><h3><b>age</b><h3></td>
    <td ><h3><b>salary</b><h3></td>
  </tr>
  <tr >
    <td >401</td>
    <td >Anu</td>
    <td >22</td>
    <td >9000</td>
  </tr>
  <tr >
    <td >402</td>
    <td >Shane</td>
    <td >29</td>
    <td >8000</td>
  </tr>
  <tr >
    <td >404</td>
    <td >Scott</td>
    <td >44</td>
    <td >10000</td>
  </tr>
</table>
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
