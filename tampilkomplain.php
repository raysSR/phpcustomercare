<?php
include"config.php";

$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if($host == $_SERVER['SERVER_NAME'] .'/phpcustomercare/tampilkomplain.php') 
{
   header("location:index.php");
}

   


@session_start();

if (isset($_SESSION['usernamecustomer'])){
   
?>
<h3>Komplain Anda</h3><br>
<p><a href="index.php?modules&konten=tambah_komplain" class="btn btn-lg btn-primary ">Tambah Komplain</a>
</p>
<table class='table table-bordered'>
    <tr>
        <th width="20">No.</th>
        <th width="150">Tanggal Komplain</th>
        <th width="200">Layanan yang di komplain</th>
        <th width="400">Isi komplain</th>
        <th width="200">Status</th>
    </tr>
    <tr>
      <?php 
         $user=$_SESSION['usernamecustomer'];
        
        ?>
 
  
<?php

$no=1;
$db             =   mysql_query("select * from viewkomplain where usernamecustomer='$user' order by tglkomplain desc");
$jumlah    =   mysql_num_rows($db);
while($data=mysql_fetch_array($db)){
?>
       
        <td><?php echo $no++;?></td>
        <td><?php echo $data['tglkomplain'];?></td>
        <td><?php echo $data['layananygdikomplain'];?> </td>
        <td><?php echo $data['isikomplain'];?> </td>
        <td ><?php if ($data['status']=='Menunggu'){
            ?> <button class="btn btn-lg btn-danger btn-xs">Menunggu</button>  <?php
        }else{
             ?> <button class="btn btn-lg btn-success btn-xs">Ditanggapi</button>&nbsp;<a href="index.php?modules&konten=lihatkomplain&id=<?php echo $data['nokomplain'];?>" titile="Lihat Tanggapan">Lihat Tanggapan</a><?php
        }?></td>
       
    </tr>
    <?php    
}
?>
<tr>
    <td colspan='4'><b>Jumlah</b></td>
    <td><?php echo $jumlah; ?></td>
</tr>
</table>
  <?php
 
}else{
   header('location:auth.php');
}

?>