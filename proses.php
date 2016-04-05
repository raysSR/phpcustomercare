<?php
include "config.php";
session_start();
$usernamecustomer = addslashes($_POST['usernamecustomer']);
$password = addslashes($_POST['password']);

$db                 =   mysql_query("select * from customer where usernamecustomer ='$usernamecustomer' and password =md5('$password')");
$jml=mysql_num_rows($db);
if ($jml==1){
        $data   =   mysql_fetch_array($db);
        $usernamecustomer   =   $data['usernamecustomer'];
        $_SESSION['usernamecustomer']   =   $usernamecustomer;
        header('location:index.php');
}
else{
      echo "
        <div class='alert alert-warning alert-dismissible' role='alert'>
          
          <center><strong>Gagal Masuk!</strong> <br/>Silahkan cek Username atau Password </center>
        </div>";
}
?>