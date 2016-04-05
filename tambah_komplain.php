<?php
$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if($host == $_SERVER['SERVER_NAME'] .'/phpcustomercare/tambah_komplain.php') 
{
   header("location:index.php");
}
?>


<div class="container">		
   <h3>Silahkan Isi Komplain Anda</h3> <br>
	<form action="proses_tambah_komplain.php" method="post">
		<div class="form-group">
			<label for="lbllayanan">Layanan Yang Di Komplain</label>
			<select name="layanan" class='form-control'>
                
                <option value="Cargoboox">Cargoboox</option>
                <option value="Servicesboox">Servicesboox</option>   
            </select>
		</div>
		<div class="form-group">
			<label for="txtkomplain">Komplain Anda</label>
			<textarea rows="5" class="form-control" name ="komplain" placeholder="Masukkan Komplain Anda" id="komplain"></textarea>
		</div>		
		<input type="submit" class="btn btn-primary" value="Kirim">
	</form>
   </div>
   
