<?php
$connect=mysql_connect('localhost','root','');
$db=mysql_select_db('phpcustomercare',$connect);
if($db >= 1){
    echo"";
}else{
      echo"<h2>Database Gagal</h2>";
}
?>