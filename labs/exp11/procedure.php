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
        <link rel="stylesheet" href="../../bootstrap/css/procedure.css">
<style>
.procedure
{
font-size:120%;
font-family:Bahnschrift;
text-align:justify;
font-size: 135%;
}
table{
  width: 60%;
  height: 70%:;
  border: 1px solid;
  font-size: 100%;
  font-family:Bahnschrift;
}
tr td {
  border: 1px solid;
  font-size: 100%;
  float: center;
  border-radius: 1px;
}
th {
  border: 1px solid;
  font-size: 100%;
  float: center;
  border-radius: 1px;
}

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
              <li class="active">Procedure</li>
            </ol>
          </section>
        </nav>
      </header>
            <?php include 'pane.html'; ?>
            <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 align="center"><?php echo $exp_name?>
            <!-- Write your experiment name -->
          </h1>
        </section>

        <!-- Main content -->
        <section class="content" id="main">
          <h3 style="margin-top:5%">Procedure</h3>
<div class="procedure">
              Simulation enables experimentation on a valid digital representation of a system.
  At simulation page enter your command or query in command window and execute it.
  It will perform the task and gives you the result<br><br>
  Ex.You had entered the query to create database.<br><br>
  Then it will be created, similarly you can enter your query to be executed.<br>
<br>
  (i) All queries you had used in your database changes can be seen only for this session
   as session ends this database will be deleted from the server.<br>
  (ii) For your convenience we have created some tables with some predefined data in it so if you want to use that data you can use it directly and can perform querries on the data.
data.<br>
Here is the table with there data you can use this data on simulation:<br>
<b>(i)client</b><br>
<table>
  <tr>
    <th>Cno</th> 
    <th>Name</th> 
    <th>address</th> 
    <th>bal_due</th>
  </tr>
  <tr>
    <td>C001</td>
    <td>Ivan bayross</td>
    <td>Mumbai,Maharashtra</td>
    <td>15000</td>
  </tr>
  <tr>
    <td>C002</td>
    <td>Mamta Mazumdar</td>
    <td>Madras,Tamilnadu</td>
    <td>5000</td>
  </tr>
  <tr>
    <td>C003</td>
    <td>Chhaya Bankar</td>
    <td>Mumbai,Maharashtra</td>
    <td>5000</td>
  </tr>
  <tr>
    <td>C004</td>
    <td>Ashwin Joshi</td>
    <td>Banglore,Karnataka</td>
    <td>0</td>
  </tr>
</table>
<br>
<b>(ii)product</b><br>
<table>
  <tr>
    <th>Pno</th>
    <th>Description</th>
    <th>qty</th>
    <th>sellprice</th>
    <th>costprice</th>
  </tr>
  <tr>
    <td>P001</td>
    <td>T-shirts</td>
    <td>200</td>
    <td>350</td>
    <td>300</td>
  </tr>
  <tr>
    <td>P002</td>
    <td>shirts</td>
    <td>150</td>
    <td>500</td>
    <td>350</td>
  </tr>
  <tr>
    <td>P003</td>
    <td>Cotton jeans</td>
    <td>100</td>
    <td>600</td>
    <td>450</td>
  </tr>
  <tr>
    <td>P004</td>
    <td>Jeans</td>
    <td>100</td>
    <td>750</td>
    <td>500</td>
  </tr>
</table><br>
<b>(iii)salesman</b><br>
<table>
  <tr>
    <th>Sno</th>
    <th>name</th>
    <th>address</th>
    <th>saleamt</th>
  </tr>
  <tr>
    <td>S001</td>
    <td>Aman</td>
    <td>A/14 Worli,Mumbai</td>
    <td>3000</td>
  </tr>
  <tr>
    <td>S002</td>
    <td>Omkar</td>
    <td>65 Nariman,Mumbai</td>
    <td>3000</td>
  </tr>
  <tr>
    <td>S003</td>
    <td>Raj</td>
    <td>p-7 Bandra,Mumbai</td>
    <td>3500</td>
  </tr>
  <tr>
    <td>S004</td>
    <td>Ashish</td>
    <td>A/5 Juhu,Mumbai</td>
    <td>4000</td>
  </tr>
</table>
</div>
          </p>
        </section>
        <div class="navi_boxl" style="float:left">
          <a href="pretest.php" >Previous<img src="../../common/images/white-arrow.png" style="transform:scaleX(-1);float:left"></a>
        </div>
        <div class="navi_boxr" style="float:right">
          <a href="simulation.php" ><img src="../../common/images/white-arrow.png" >Next</a>
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
