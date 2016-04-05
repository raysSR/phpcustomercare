<?php
if (isset($_GET['konten'])){
    if ($_GET['konten']=='beranda'){
       header("location:index.php");
    }
    if ($_GET['konten']=='lihatkomplain'){
           include"lihatkomplain.php";
    }
    if ($_GET['konten']=='data_peminjam'){
            echo "Ini adalah data peminjam";
    }
     if ($_GET['konten']=='tambah_komplain'){
         include"tambah_komplain.php";
    }
     if ($_GET['konten']=='proses_tambah_komplain'){
         include"proses_tambah_komplain.php";
    }
}else{
    include "tampilkomplain.php";
}
?>