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
       <section class="theory" > <!-- black bhi try kar lena ek baar-->
          <!-- <h3 style="margin-top:5%"><b>Introduction to Database management System</b></h3> -->

            <h3 style="margin-top:5%"><b>USING JOIN</b></h3>
              <div>
                <br>

<b>JOIN:</b><br>
<br>In SQL join clause - corresponding to a join operation in relational algebra - combines columns from one or more tables
 in a relational database. It creates a set that can be saved as a table or used as it is. A JOIN is a means for combining 
 columns from one (self-join) or more tables by using values common to each. <br>
 
<br>

<br><center><img src="images/typesjoin.png" style="height:auto; width:35%"><br><br></center><br><br>

<table style="width:65%;" >
  <tr>
    <td><h3><b>S No.</b><h3></td>
    <td><h3><b>TYPES</b></h3></td>
    
  </tr>
  <tr>
    <td>1</td>
    <td>Equi Join </td>
    
  </tr>
  <tr>
    <td>2</td>
    <td>Inner Join </td>
    
  </tr>
  <tr>
    <td>3</td>
    <td>Natural JOIN</td>
    
  </tr>
 
  <tr>
    <td>4</td>
    <td>OUTER JOIN</td>
    
  </tr>
  
</table>





1.<b>Equi Join :</b><br>
An equi-join is a specific type of comparator-based join, that uses only equality comparisons in the join-predicate. 
Using other comparison operators (such as <) disqualifies a join as an equi-join.<br><br>
The result of the join can be defined as the outcome of first taking the Cartesian product (or Cross join) of all rows 
in the tables (combining every row in table A with every row in table B) and then returning 
all rows that satisfy the join predicate. 
<br>
<br>

2.<b>Inner JOIN:</b><br>
An inner join requires each row in the two joined tables to have matching column values,
 and is a commonly used join operation in applications but should not be assumed to be
 the best choice in all situations. Inner join creates a new result table by combining
 column values of two tables (A and B) based upon the join-predicate. The query compares
 each row of A with each row of B to find all pairs of rows that satisfy the join-predicate. When the join-predicate
 is satisfied by matching non-NULL values, column values for each matched pair of rows 
 of A and B are combined into a result row 
<br>
<br>
<center><img src="images/join1.png" style="height:auto; width:23%"><br><br></center>

3.<b>OUTER JOIN:</b><br>
<p>The joined table retains each row—even if no other matching row exists. Outer joins subdivide further into left outer joins,
 right outer joins, and full outer joins, depending on which table's rows are retained: left, right, or both (in this case 
 left and right refer to the two sides of the JOIN keyword).<br>
 Like inner joins, one can further sub-categorize all types of outer joins as equi-joins, natural joins, ON <predicate> </p>
<br><br>

(i).<b>LEFT OUTER JOIN:</b><br>
<p>The result of a left outer join (or simply left join) for tables A and B always contains all rows of the "left" table (A),
 even if the join-condition does not find any matching row in the "right" table (B).
 This means that if the ON clause matches 0 (zero) rows in B (for a given row in A), 
 the join will still return a row in the result (for that row)—but with NULL in each column from B. <br>
 A left outer join returns all the values from an inner
 join plus all values in the left table that do not match to the right table,
 including rows with NULL (empty) values in the link column.<p>
<br><br>
<center><img src="images/join2.png" style="height:auto; width:23%"><br><br></center>
(ii).<b>RIGHT OUTER JOIN:</b><br>
<p>A right outer join (or right join) closely resembles a left outer join, except with the treatment of the tables reversed. 
Every row from the "right" table (B) will appear in the joined table at least once. 
If no matching row from the "left" table (A) exists, NULL will appear in columns from A for those rows that have no match in B.<p>
<br><br>
<center><img src="images/join3.png" style="height:auto; width:23%"><br><br></center>

(iii).<b>FULL OUTER JOIN:</b><br>
<p>Conceptually, a full outer join combines the effect of applying both left and right outer joins. Where rows in the FULL OUTER JOINed tables do not match, the result set will have NULL values for every
 column of the table that lacks a matching row. For those rows that do match, a single row will be produced in the result set (containing columns populated from both tables).<p>
<br><br>
<center><img src="images/join4.png" style="height:auto; width:23%"><br><br></center>

<br>

4.<b>SELF JOIN:</b><br>
<p>f there were two separate tables for employees and a query which requested employees in the first table 
having the same country as employees in the second table, a normal join operation could be used to find the answer table.
 However, all the employee information is contained within a single large table.</p>
<br><br>

5.<b>Natural JOIN:</b><br>
<p>A natural join is the set of tuples of all combinations in R and S that are equal on their common attribute names.
It is denoted by &#x22C8;.</p>
<br>
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
