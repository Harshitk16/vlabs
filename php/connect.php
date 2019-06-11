<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname=$_SESSION['dbname'];
$conn=mysqli_connect($servername,$username,$password,$_SESSION['dbname']);
if(!$conn)
{
  $conn=mysqli_connect($servername,$username,$password,'adminserver');
  $Qry="CREATE DATABASE $dbname ";
  $ok=mysqli_query($conn,$Qry);
  if($ok)
  {
    $conn=mysqli_connect($servername,$username,$password,$_SESSION['dbname']);
    //Client
    $QRY="CREATE TABLE CLIENT(cno varchar(20),name varchar(50),address varchar(50),bal_due int(10))";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `client`(`Cno`, `Name`, `address`, `bal_due`) VALUES ('C001','Ivan bayross','Mumbai,Maharashtra',15000)";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `client`(`Cno`, `Name`, `address`, `bal_due`) VALUES ('C002','Mamta Mazumdar','Madras,Tamilnadu',5000)";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `client`(`Cno`, `Name`, `address`, `bal_due`) VALUES ('C003','Chhaya Banker','Mumbai,Maharashtra',5000)";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `client`(`Cno`, `Name`, `address`, `bal_due`) VALUES ('C004','Ashwini joshi','Banglore,Karnataka',0)";
    mysqli_query($conn,$QRY);
    //product
    $QRY="CREATE TABLE product(pno varchar(20),description varchar(20),qty int(11),sellPrice int(11),costprice int(11))";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `product`(`Pno`, `Description`, `qty`, `sellprice`, `costprice`) VALUES ('P001','T-shirts',200,350,250)";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `product`(`Pno`, `Description`, `qty`, `sellprice`, `costprice`) VALUES ('P002','Shirts',150,500,350)";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `product`(`Pno`, `Description`, `qty`, `sellprice`, `costprice`) VALUES ('P003','Cotton jeans',100,600,450)";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `product`(`Pno`, `Description`, `qty`, `sellprice`, `costprice`) VALUES ('P004','Jeans',100,750,500)";
    mysqli_query($conn,$QRY);
    //salesman
    $QRY="CREATE TABLE salesman(sno varchar(10),name varchar(50),address varchar(50),saleamt int(11))";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `salesman`(`Sno`, `Name`, `address`, `saleamt`) VALUES ('S001','Aman','A/14 Worli,Mumbai',3000)";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `salesman`(`Sno`, `Name`, `address`, `saleamt`) VALUES ('S002','Omkar','65 Nariman,Mumbai',3000)";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `salesman`(`Sno`, `Name`, `address`, `saleamt`) VALUES ('S003','Raj','p-7 Bandra,Mumbai',3500)";
    mysqli_query($conn,$QRY);
    $QRY="INSERT INTO `salesman`(`Sno`, `Name`, `address`, `saleamt`) VALUES ('S004','Ashish','A/5 Juhu,Mumbai',4000)";
    mysqli_query($conn,$QRY);    
  }
}
?>
