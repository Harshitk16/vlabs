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

            <h3 style="margin-top:5%"><b>Using View ,Indexing and Sequences</b></h3>
              <div class="theory" style="font-family:Bahnschrift;text-align:justify;font-size:150%">
                <br>
1)View<br>
<br>
2)Index and Sequence<br>
<br>

<br>
1:<b>Relational operator in SQL:</b><br>
A VIEW is actually a query and the output of the query becomes the content of the view. <br>

A VIEW is a data object which does not contain any data. Its contents are the resultant of a base table.
 They are operated just like the base table but they don’t contain any data of their own.<br>

A view can be accessed with the use of SQL SELECT statement like a table. A view can also be made up by
 selecting data from more than one tables.<br><br>
 
<b>Advantages of VIEW over tables:</b><br><br>
<ol><li>
	Views can represent a subset of the data contained in a table. Consequently,
	a view can limit the degree of exposure of the underlying tables to the outer world: 
	a given user may have permission to query the view, while denied access to the rest of the base table.<br>
</li>
<li>Views can join and simplify multiple tables into a single virtual table.<br></li>
<li>Views can act as aggregated tables, where the database engine aggregates data (sum, average, etc.) and presents the calculated results as part of the data.</li>
<li>Depending on the SQL engine used, views can provide extra security.<br></li>
<li>Views take very little space to store; the database contains only the definition of a view, not a copy of all the data that it presents.<br></li>
</ol>
	<br>
	1) <b>CREATE VIEW:</b><br>
	<div class="box">
<br>
<b>SYNTAX</b><br>
<p> CREATE or REPLACE <b>VIEW</b> view_name <br>
    AS
    SELECT column_name(s)<br>
    FROM table_name<br>
    WHERE condition<br><br>
</p>
</div>
2)<b>Displaying a VIEW:</b><br>

<div class="box">
<br>
<b>SYNTAX</b><br>
<p> SELECT * FROM view_name;<br>
<br></p>
</div>

3)<b>Read-Only VIEW:</b><br>
We can create a view with read-only option to restrict access to the view.<br>

Syntax to create a view with Read-Only Access<br>
<br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> CREATE or REPLACE FORCE VIEW view_name AS<br>
    SELECT column_name(s)<br>
    FROM table_name<br>
    WHERE condition WITH read-only;<br>
<br></p>
</div>
4)<b>Update a VIEW:</b><br>
UPDATE command for view is same as for tables
<br>
<div class="box">
<br>
<b>SYNTAX</b><br>
<p> UPDATE view-name SET VALUE<br>
WHERE condition;<br>
</p>
</div>
<b>NOTE:</b> If we update a view it also updates base table data automatically.<br>

<br><br>

There are certain restrictions on queries, which can be used to create a view.
 The restrictions will be explained when queries are dealt with. Updation /Insertion 
of rows in the base table using views is possible only if the view is based on a single
 table with some restrictions. The restrictions are:<br><br>
 
 1.Updation /Insertion Not possible if view is based on two tables. Can be done in ORACLE 8 by using INSTEAD OF trigger.<br>
 2.insertion is not allowed if the underlying table has any not NULL column that do not appéar in the view <br>
 3.Insertion/Updation is not allowed if any column of the view referenced in update/Insert contains functions or      calculations<br>
 4.Insertion /Updation /deletion not allowed if view contains group by or distinct clause in the query.<br>
<br><br>
2:   <b>Types of View</b><br>
There are two types of view,
<ul><li>Simple View</li>
<li>Complex View</li>


<br><br>
<table style="width:65%;">
  <tr>
	<td><h3><b>S_NO</b></h3></td>
    <td><h3><b>Simple View</b><h3></td>
    <td><h3><b>Complex View</b></h3></td>
  </tr>
  
  <tr>
	<td>1.</td>
    <td>Created from one table</td>
    <td>Created from one or more table</td>
    </tr>
	
  <tr>
	<td>2.</td>
    <td>Does not contain functions</td>
    <td>Contain functions</td>
   <tr>
   
	<td>3.</td>
    <td>Does not contain groups of data</td>
    <td>Contains groups of data</td>
   </tr>
  
</table>
<br>






2)<b>INDEX:</b><br>
If you want to find rows that do not satisfy a condition, you can use the logical operator, NOT.<br>
NOT results in the reverse of a condition. That is, if a condition is satisfied, then the row is not returned.<br>
Indexing is a way to optimize performance of a database by minimizing the number of disk accesses required when a query is processed.<br>

An index or database index is a data structure which is used to quickly locate and access the data in a database table.<br>
<br><br>
<br><center><img src="images/indexing.png" style="height:auto; width:75%"><br><br></center><br><br>
<b>There are two kinds of indices:</b><br><br>
<ol><li>
	Ordered Index<br>
</li>
<li>
	Primary Index<br>
</li>
<li>Clustering Index<br></li>

</ol>
	<br>
<b>Indexing Methods</b><br><br>
<b>1. Ordered Indices</b><br>

<br>
The indices are usually sorted so that the searching is faster. The indices which are sorted are known as ordered indices.<br>
<br>

&#x27A3; If the search key of any index specifies same order as the sequential order of the file, it is known as primary index or clustering index.<br>
<b>Note</b>: The search key of a primary index is usually the primary key, but it is not necessarily so.<br><br>
&#x27A3; If the search key of any index specifies an order different from the sequential order of the file, it is called the secondary index or non-clustering index.

<br>
<b>2. Primary Index</b>
If the index is created on the basis of the primary key of the table, then it is known as primary indexing. <br>
&#x27A3;These primary keys are unique to each record and contain 1:1 relation between the records.<br>
&#x27A3;As primary keys are stored in sorted order, the performance of the searching operation is quite efficient.<br>

<b>There are two kinds of Primary Index:</b><br><br>
<ul><li>
	Dense Index<br>
</li>
<li>Sparse Index<br></li>

</ul>
	<br>
	<b>Dense Index</b><br>
	In dense index, there is an index record for every search key value in the database. 
	This makes searching faster but requires more space to store index records itself. 
	
	&#x27A3; Index records contain search key value and a pointer to the actual record on the disk.<br><br>
	&#x27A3; This record contains the search key and also a reference to the first data record with that search key value.
	<br><center><img src="images/indexing5.png" style="height:auto; width:35%"><br><br></center><br><br>
	<b> Sparse Index</b><br>
	In dense index, there is an index record for every search key value in the database. 
	This makes searching faster but requires more space to store index records itself. 
	Index records contain search key value and a pointer to the actual record on the disk.<br><br>
	&#x27A3; The index record appears only for a few items in the data file. Each item points to a block as shown.<br>
	&#x27A3; To locate a record, we find the index record with the largest search key value less than or equal to the search key value we are looking for.<br>
	&#x27A3; We start at that record pointed to by the index record, and proceed along the pointers in the file 
	(that is, sequentially) until we find the desired record.<br>
	<br><center><img src="images/indexing6.png" style="height:auto; width:35%"><br><br></center><br><br>
	
	<b>3. Secondary Index</b><br>
	 It is used to optimize query processing and access records in a database with some information other
	 than the usual search key (primary key). In this two levels of indexing are used in order to reduce
	 the mapping size of the first level and in general.<br> <br><br>
In the sparse indexing, as the size of the table grows, the size of mapping also grows.
 These mappings are usually kept in the primary memory so that address fetch should be faster.
 Then the secondary memory searches the actual data based on the address got from mapping.
<br> If the mapping size grows then fetching the address itself becomes slower. <br>In this case, the sparse index will not be efficient. 
To overcome this problem, secondary indexing is introduced.<br><br>
<b>Note:</b>In order for quick memory access, first level is stored in the primary memory. 
Actual physical location of the data is determined by the second mapping level.<br>


	<br><center><img src="images/indexing4.png" style="height:auto; width:55%"><br><br></center><br><br>
	
	<b>4. Clustering Index</b><br>
	 clustered index can be defined as an ordered data file.
	 Sometimes the index is created on non-primary key columns which may not be unique for each record.
In this case, to identify the record faster, we will group two or more columns to get the unique value and create index out of them.
 This method is called a clustering index.<br>
The records which have similar characteristics are grouped, and indexes are created for these group.<br>
	
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
