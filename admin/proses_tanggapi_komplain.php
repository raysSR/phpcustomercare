<?php

    
@session_start();
if (isset($_SESSION['usernameadmin'])){
include"../config.php";
$id =$_POST["id"];
$isitanggapan =$_POST["tanggapan"];
$tgltanggapan =date("Y-m-d");
$usernameadmin=$_SESSION['usernameadmin'];
$db=mysql_query("insert into tanggapan(nokomplain,tgltanggapan,isitanggapan,usernameadmin) values('$id','$tgltanggapan','$isitanggapan','$usernameadmin')");
if ($db >=1){
    header('location:index.php');
}else{
    echo "anda gagal";
}
    }else{
      header('location:auth.php');
}
?>