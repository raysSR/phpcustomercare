<?php
include "../config.php";
session_start();
$usernameadmin = addslashes($_POST['usernameadmin']);
$password = addslashes($_POST['password']);

$db                 =   mysql_query("select * from admin where usernameadmin ='$usernameadmin' and password =md5('$password')");
$jml=mysql_num_rows($db);
if ($jml==1){
        $data   =   mysql_fetch_array($db);
        $usernameadmin   =   $data['usernameadmin'];
        $_SESSION['usernameadmin']   =   $usernameadmin;
        header('location:../admin/index.php');
}
else{
      echo "
        <div class='alert alert-warning alert-dismissible' role='alert'>
          
          <center><strong>Gagal Masuk!</strong> <br/>Silahkan cek Username atau Password </center>
        </div>";
}
?>