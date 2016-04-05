<?php
$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if($host == $_SERVER['SERVER_NAME'] .'/phpcustomercare/admin/tanggapi_komplain.php') 
{
   header("location:index.php");
}
include"../config.php"; 
$id=$_GET['id']; 
$db=mysql_query("select * from viewkomplain where nokomplain='$id'");
$data=mysql_fetch_array($db);
?>

<h3  >Detail Komplain</h3> <hr/>
	
   
	    <table width="100%">
            <tr>
                <td style="solid #999;padding:0px 0px;"><label for="txtkomplain">Tanggal Komplain </label></td>
                <td style="solid #999;padding:0px 0px;"><?php echo $data['tglkomplain'];?></td>
                
                
            </tr>
            
            <tr>
                <td style="solid #999;padding:0px 0px;"><label for="lbllayanan">Layanan Yang Di Komplain</label></td>
                <td style="solid #999;padding:0px 0px;"><?php echo $data['layananygdikomplain'];?></td>
            </tr>
            <tr>
                <td style="solid #999;padding:0px 0px;"><label for="txtusernamecustomer">Username Customer</label></td>
                <td style="solid #999;padding:0px 0px;"> <?php echo $data['usernamecustomer'];?></td>
            </tr>
            <tr>
               
                
                <td style="solid #999;padding:0px 0px;"><label for="txtusernamecustomer">No. Telepon</label></td>
                <td style="solid #999;padding:0px 0px;"> <?php echo $data['notelp'];?></td>
                
            </tr>
          
            <tr>
                <td style="solid #999;padding:0px 0px;"><label for="txtusernamecustomer">Email</label></td>
                <td style="solid #999;padding:0px 0px;"><?php echo $data['email'];?></td>
                
            </tr>
            <tr>
                <td style="solid #999;padding:0px 0px;"><label for="txtkomplain">Komplain Anda</label></td>
                <td style="solid #999;padding:0px 0px;"><?php echo $data['isikomplain'];?> </td>
                
            </tr>
            
        </table> 
       
 
    <hr/>
   <form action="proses_tanggapi_komplain.php" method="post">
    <input type="hidden" name="id" placeholder="" class='form-control' value="<?php echo $id;?> "readonly/>
       <div class="form-group">
			<label for="txtkomplain">Tanggapan</label>
			<textarea rows="5" class="form-control" name ="tanggapan" placeholder="Masukkan Tanggapan Anda" id="tanggapan"></textarea>
		</div>		
       			
		<input type="submit" class="btn btn-primary" value="Tanggapi">
	</form>
   
