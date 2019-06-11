<?php
require 'connect.php';
$_SESSION['DBname']=$_SESSION['dbname'];
if(!isset($_GET['qry']))
  {
    $qry="SHOW TABLES in".$_SESSION['DBname'];
  }
else
  {
    $qry = $_GET['qry'];
  }
  error_reporting(0);
require 'result.php';
// require 'tab.php';
// require 'get_tname.php';
// require 'columns.php';
$conn->close();
?>
