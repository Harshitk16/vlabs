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
        <!-- <style>
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
        </style> -->
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
          <div class="theory" style="text-align:justify;font-size:150%">
              <b> Data Control Language(DCL) commands  </b><br><br>
              Data Control Language(DCL) is used to control privileges in Database. To perform any operation in the database, such as for creating tables, sequences or views, a user needs privileges. Privileges are of two types,
              <br><br><b>System :</b>  This includes permission for creating session, table, alter Drop and
                all other all system privileges.
<br><br><b>Object: </b>This includes permissions for any command or query to perform any   operation       on the database tables.

<br><br>There is two commands in DCL
<br><br><b>GRANT:</b> It is a command used to provide access or privileges on the database objects to the
users.
<br><br><b>REVOKE:</b> The REVOKE command removes user access rights or privileges to the database objects.
<br><br>Providing <b>All permissions</b> to user
<br><br>The sysdba is have all the permissions in the form of set of priviliges. When we want to provide all the privileges to any user, we can simply grant them the sysdba permission.
<br><br>
<div class="box">              Syntex <br>
<br> GRANT sysdba TO username;
            </div>
<br>
For provide specific permission to user command is
<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>Name</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Syntex</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">Create Session</td>
    <td style="border: 1px solid black">GRANT CREATE SESSION TO username;</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">Store user table and its data</td>
    <td style="border: 1px solid black">ALTER USER username QUOTA UNLIMITED ON SYSTEM;</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">Create Table</td>
    <td style="border: 1px solid black">GRANT CREATE TABLE TO username;</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">Drop Table</td>
    <td style="border: 1px solid black">GRANT DROP ANY TABLE TO username;</td>
  </tr>
</table>
<br><br>To Take back Permissions<br><br>
<div class="box">              Syntex <br>
<br> REVOKE CREATE TABLE FROM username;
            </div>
<br><br><b>SELECT Query:</b>
<br>SELECT query is used to retrieve data from a table. It is the most used SQL query.
 We can retrieve complete table data, or partial by specifying conditions using the WHERE clause.
<br><br><div class="box">
              Syntex<br><br>
              SELECT <br>
    column_name1, <br>
    column_name2, <br>
    column_name3, <br>
    ...<br>
    column_nameN <br>
    FROM table_name;<br>
</div>
<br>Time for an Example<br>
<br>Consider the following <b>student</b> table,

<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>s_id</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Name</b><h3></td>
    <td style="border: 1px solid black"><h3><b>age</b><h3></td>
    <td style="border: 1px solid black"><h3><b>address</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">101</td>
    <td style="border: 1px solid black">Adam</td>
    <td style="border: 1px solid black">15</td>
    <td style="border: 1px solid black">Chennai</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">102</td>
    <td style="border: 1px solid black">Alex</td>
    <td style="border: 1px solid black">18</td>
    <td style="border: 1px solid black">Delhi</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">103</td>
    <td style="border: 1px solid black">Abhi</td>
    <td style="border: 1px solid black">17</td>
    <td style="border: 1px solid black">Banglore</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">104</td>
    <td style="border: 1px solid black">Aniket</td>
    <td style="border: 1px solid black">22</td>
    <td style="border: 1px solid black">Mumbai</td>
  </tr>
</table>
<br><b>Query : </b>SELECT s_id, name, age FROM student;<br>
<br>The above query will fetch information of s_id, name and age columns of the student table and display them,
<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>s_id</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Name</b><h3></td>
    <td style="border: 1px solid black"><h3><b>age</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">101</td>
    <td style="border: 1px solid black">Adam</td>
    <td style="border: 1px solid black">15</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">102</td>
    <td style="border: 1px solid black">Alex</td>
    <td style="border: 1px solid black">18</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">103</td>
    <td style="border: 1px solid black">Abhi</td>
    <td style="border: 1px solid black">17</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">104</td>
    <td style="border: 1px solid black">Aniket</td>
    <td style="border: 1px solid black">22</td>
  </tr>
</table><br>
<div class="box">Syntex for <b>Display all data from table</b><br>
<br>  Select * from student;
            </div>
<br><b>Where Clause : </b><br><br>
WHERE clause is used to specify/apply any condition while retrieving, updating or deleting data from a table. This clause is used mostly with SELECT, UPDATE and DELETEquery.
When we specify a condition using the WHERE clause then the query executes only for those records for which the condition specified by the WHERE clause is true.
<br><br>
<div class="box">              Syntex<br>
<br>  Select * from table_name where [condition];
            </div>
<br>
Operators for WHERE clause condition
<br>Following is a list of operators that can be used while specifying the WHERE clause condition.

<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>Operator</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Description</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">=</td>
    <td style="border: 1px solid black">Equal to</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">!=</td>
    <td style="border: 1px solid black">Not Equal to</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><</td>
    <td style="border: 1px solid black">Less then</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">></td>
    <td style="border: 1px solid black">Greater then</td>
  </tr>  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><=</td>
    <td style="border: 1px solid black">Less then or Equal to</td>
  </tr>
  </tr>  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">=></td>
    <td style="border: 1px solid black">Greater then or Equal to</td>
  </tr>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">BETWEEN</td>
    <td style="border: 1px solid black">Between a specified range of values</td>
  </tr>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">LIKE</td>
    <td style="border: 1px solid black">This is used to search for a pattern in value</td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">IN</td>
    <td style="border: 1px solid black">In a given set of values</td>
  </tr>
</table>
<br>Now we will use the SELECT statement to display data of the table, based on a condition,
<br> which we will add to our SELECT query using WHERE clause.
<br><br>Let's write a simple SQL query to display the record for student with s_id as 101.
<br><br><b>Query : </b>SELECT s_id,name,age,address FROM student WHERE s_id = 101;
<br><br>Following will be the result of the above query.
<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>s_id</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Name</b><h3></td>
    <td style="border: 1px solid black"><h3><b>age</b><h3></td>
    <td style="border: 1px solid black"><h3><b>address</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">101</td>
    <td style="border: 1px solid black">Adam</td>
    <td style="border: 1px solid black">15</td>
    <td style="border: 1px solid black">Chennai</td>
  </tr>
</table>
<br><b>LIKE clause</b>
<br>LIKE clause is used in the condition in SQL query with the WHERE clause.
<br> LIKE clause compares data with an expression using wildcard operators to match pattern given in the condition.
<br><br><b>Wildcard operators</b>
<br>There are two wildcard operators that are used in LIKE clause.
<br><b>Percent sign %:</b> represents zero, one or more than one character.
<br><b>Underscore sign _:</b> represents only a single character.
<br><br>
<div class="box">
              Syntex<br><br>
              Select * from table_name where coll_name LIKE [condition]<br>
</div>
Example of LIKE clause
<br><b>Query : </b>SELECT * FROM Student WHERE s_name LIKE '_d%';
<br>The above query will return all records from Student table where<b> s_name</b> contain <b>'d'</b> as second character.
<table style="border:1px solid;text-align:center;width:25%;">
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black"><h3><b>s_id</b><h3></td>
    <td style="border: 1px solid black"><h3><b>Name</b><h3></td>
    <td style="border: 1px solid black"><h3><b>age</b><h3></td>
    <td style="border: 1px solid black"><h3><b>address</b><h3></td>
  </tr>
  <tr style="border: 1px solid black">
    <td style="border: 1px solid black">101</td>
    <td style="border: 1px solid black">Adam</td>
    <td style="border: 1px solid black">15</td>
    <td style="border: 1px solid black">Chennai</td>
  </tr>
</table>
<br><b>NOTE : It will be further continuing in the next experement.</b>
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
