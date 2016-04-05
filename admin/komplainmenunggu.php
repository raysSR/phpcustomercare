<?php
include"../config.php";

$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if($host == $_SERVER['SERVER_NAME'] .'/phpcustomercare/admin/komplainmenunggu.php') 
{
   header("location:index.php");
}

   


@session_start();

if (isset($_SESSION['usernameadmin'])){
   
?>
<h3>Komplain yang belum ditanggapi</h3><br>

</p>
<table class='table table-bordered'>
    <tr>
        <th width="20">No.</th>
        <th width="250">Tanggal Komplain</th>
        <th width="250">Customer</th>
        <th width="250">Layanan yang di komplain</th>
        
    </tr>
    <tr>
      <?php 
         $user=$_SESSION['usernameadmin'];
        
        ?>
 
  
<?php

$no=1;
$db             =   mysql_query("select * from viewkomplain where  status ='Menunggu' order by tglkomplain desc");
$jumlah        =   mysql_num_rows($db);
while($data=mysql_fetch_array($db)){
?>
       
        <td><?php echo $no++;?></td>
        <td><?php echo $data['tglkomplain'];?></td>
        <td><?php echo $data['usernamecustomer'];?></td>
        <td><?php echo $data['layananygdikomplain'];?> &nbsp;
          
            
            
            
        </td>
        
       <td>
           <a href="index.php?modules&konten=lihatkomplain&id=<?php echo $data['nokomplain'];?>" class="btn btn-lg btn-primary btn-xs"> Lihat isi komplain</a> 
            
            <a href="index.php?modules&konten=tanggapi&id=<?php echo $data['nokomplain'];?>" class="btn btn-lg btn-success btn-xs">Tanggapi</a> 
       </td>
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