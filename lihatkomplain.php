<?php
include"config.php";

$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if($host == $_SERVER['SERVER_NAME'] .'/phpcustomercare/tampilkomplain.php') 
{
   header("location:index.php");
}

@session_start();

if (isset($_SESSION['usernamecustomer'])){
       $id=$_GET['id'];
        $db=mysql_query("select * from viewkomplain where nokomplain='$id'");
        $data=mysql_fetch_array($db);
?>

<div class="container">		
    <h3>Detail Komplain Anda</h3><br>
	    <div class="form-group">
			<label for="txtkomplain">Tanggal Komplain</label>
			<br><?php echo $data['tglkomplain'];?>
		</div>
		
		<div class="form-group">
			<label for="lbllayanan">Layanan Yang Di Komplain</label>
			<br><?php echo $data['layananygdikomplain'];?>
		</div>
		<div class="form-group">
			<label for="txtkomplain">Komplain Anda</label>
			<br><?php echo $data['isikomplain'];?>
		</div>		
		
		<?php if ($data['status']=='Ditanggapi'){ ?>
		
                <div class="form-group">
                    <label for="txtkomplain">Tanggal Ditanggapi</label>
                    <br><?php echo $data['tgltanggapan']; ?>
                </div>		

                <div class="form-group">
                    <label for="txtkomplain">Isi Tanggapan</label>
                    <br><?php echo $data['isitanggapan']; ?>
                </div>		
		<?php } 
}?>
		
   </div>