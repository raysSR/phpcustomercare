<?php
if (isset($_GET['konten'])){
 
    if ($_GET['konten']=='lihatkomplain'){
           include "lihatkomplain.php";
    }
    if ($_GET['konten']=='ditanggapi'){
           include "komplainditanggapi.php";
    }
     if ($_GET['konten']=='tanggapi'){
           include "tanggapi_komplain.php";
    }
}else{
    include "komplainmenunggu.php";
}
?>