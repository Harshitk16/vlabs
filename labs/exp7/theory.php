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

            <h3 style="margin-top:5%"><b>Subqueries and Co-related subqueries and thier operator</b></h3>
              <div class="theory">
                <br>

<b>Subqueries in SQL:</b><br>
<br>A Subquery or Inner query or a Nested query is a query within another SQL query(inside a SELECT , INSERT , UPDATE , or DELETE statement, or inside another subquery)
      and embedded within the WHERE clause.<br>
     <br>A subquery(WHERE clause or HAVING Clause) is used to return data that will be used in the main query as a condition to further restrict the data to be retrieved.<br>

    <br>A subquery can be used anywhere an expression is allowed.

<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT * <br> 
FROM `marks`  <br>
WHERE studentid = 'V002';<br><br>
</p>
</div>


<b>Execution of Subqueries</b><br>A subquery may return either one or multiple rows. Subqueries can be used with DML and even DDL commands.
<br>When a query with sub query is executed, first the sub query is executed then the outer query is executed.<br><br>
<table style="width:65%;" >
  <tr>
    <td><h3><b>S No.</b><h3></td>
    <td><h3><b>USES</b></h3></td>
    
  </tr>
  <tr>
    <td>1</td>
    <td>To insert records in the target table</td>
    
  </tr>
  <tr>
    <td>2</td>
    <td>To create tables and insert records in this table.</td>
    
  </tr>
  <tr>
    <td>3</td>
    <td>To update records in the target table.</td>
    
  </tr>
  <tr>
    <td>4<b</td>
    <td>To provide values for the condition in the WHERE, HAVING IN, SELECT, UPDATE, and
DELETE statements.</td>
   
  </tr>
  
</table>
<br>
<b>Classification of Subqueries</b><br>
There are three broad divisions of subquery:
<br>
<br>
<b>1: Single-row subqueries</b><br>
Subqueries that can return only one or zero rows to the outer statement are called single-row subqueries.<br>
<br>
<b>For Example</b><br>
<br>
In the below SELECT query, inner MySQL returns only one row i.e. the minimum salary for the company. It, in turn, uses this value to compare the salary of all the employees and displays only those, whose salary is equal to minimum salary.
<br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT first_name, salary, department_id<br>
FROM employees<br>
WHERE salary = (SELECT MIN (salary)<br>
FROM employees);<br><br></p>
</div>


<b>2: Multiple-row subqueries</b><br>
Multiple-row subqueries are nested queries that can return more than one row of results to the parent query. Multiple-row subqueries are used most
 commonly in WHERE and HAVING clauses. Since it returns multiple rows, it must be handled by set comparison operators (IN, ALL, ANY).<br>
<br>

<b>3: Co-related subqueries</b><br>
A subquery which executes once for each and every row of main query is called correlated
subquery.<br>
It is mainly used for row by row process
The main difference between Correlated subquery and subquery is that in Subquery(child
Query), Main Query is executed first.<br>
In a SQL database query, a correlated subquery (also known as a synchronized subquery) is a subquery (a query nested inside another query) that uses values from the outer query.<br>
 Because the subquery may be evaluated once for each row processed by the outer query, it can be inefficient.<br>

<b>For Example</b><br>
<br>
Here is an example for a typical correlated subquery. In this example, the objective is to find all employees whose salary is above average for their department.
<br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT employee_number, name<br>
   FROM employees emp<br>
   WHERE salary > (<br>
     SELECT AVG(salary)<br>
       FROM employees<br>
       WHERE department = emp.department);;<br></p>
</div>
<br>In the above query the outer query is<br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT employee_number, name<br>
   FROM employees emp<br>
   WHERE salary > (<br>
     <br></p>
</div>

<br>And the inner query (the correlated subquery) is <br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> 
     SELECT AVG(salary)<br>
       FROM employees<br>
       WHERE department = emp.department);<br><br></p>
</div>
<p><br>In the above nested query the inner query has to be re-executed for each employee.<br></p>


<br>
<b>Nested Queries</b><br>
For retrieving data from the tables we have seen the simple & basic queries. These queries<br>
extract the data from one or more tables. Here we are going to see some complex & powerful<br>
queries that enables us to retrieve the data in desired manner. One of the most powerful features<br>
of SQL is nested queries. A nested query is a query that has another query embedded within it;<br>
the embedded query is called a subquery.<br>


<br>
<b>Operators in Nested Queries</b><br>
1.IN Operator<br>
2.NOT IN Operator<br>
3.EXISTS Operator<br>
4.NOT EXISTS Operator<br><br>



1.<b>"IN" operator:</b><br>
The IN operator allows us to test whether a value is in a given set of elements; an SQL query is
used to generate the set to be tested.<br>
<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> Select columnname<br> 
from tablename <br>
where columnname <b>IN </b>(Search condition);<br><br>
</p>
</div>
<b>For Example</b>:Find the names of sailors who have reserved boat 103.<br>
<div class="box">
<br>
SQL> SELECT S.SNAME 
FROM SAILORS S<br> 
WHERE S.SID <b>IN</b> (<br>
SELECT R.SID FROM RESERVES R <br>
WHERE R.BID = 103);<br>
<br>
</div>


2.<b>"NOT IN" operator:</b><br>
The NOT IN is used in an opposite manner to IN.<br>
<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> Select columnname<br> 
from table name <br>
where columnname<br>
 <b>NOT IN</b>(Search condition);<br><br>
</p>
</div>
<b>For Example</b>Find the names of sailors who have not reserved boat 103<br>
<div class="box">
<br>
SQL> SELECT S.SNAME 
FROM SAILORS S<br> 
WHERE S.SID <b>NOT IN</b> (<br>
SELECT R.SID FROM RESERVES R <br>
WHERE R.BID = 103);<br>
<br>
</div>

3.<b>"EXISTS" operator:</b><br>
This is a Correlated Nested Queries operator. The EXISTS operator is another set comparison
operator, such as IN. It allows us to test whether a set is nonempty, an implicit comparison with
the empty set.
<br>
<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> Select columnname<br> 
from table name <br>
where columnname<br>
 <b>EXISTS</b>(Search condition);<br><br>
</p>
</div>
<b>For Example</b>Find the names of sailors who have not reserved boat 103<br>
<div class="box">
<br>
SQL> SELECT S.SNAME<br>
 FROM SAILORS S <br>
 WHERE <b>EXISTS</b> <br>
 (SELECT * FROM RESERVES R<br>
 WHERE R.BID = 103 <br>
 AND R.SID = S.SID);<br>
<br>
</div>
4.<b>"NOT EXISTS" operator:</b><br>
The NOT EXISTS is used in a opposite manner to EXISTS
<br>
<br><br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> Select columnname<br> 
from table name <br>
where columnname<br>
 <b>NOT EXISTS</b>(Search condition);<br><br>
</p>
</div>
<b>For Example</b>Find the names of sailors who have not reserved boat 103<br>
<div class="box">
<br>
SQL> SELECT S.SNAME<br>
 FROM SAILORS S <br>
 WHERE<b>NOT EXISTS</b> <br>
 (SELECT * FROM RESERVES R<br>
 WHERE R.BID = 103 <br>
 AND R.SID = S.SID);<br>
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
