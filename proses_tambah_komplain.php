<?php

    
@session_start();
if (isset($_SESSION['usernamecustomer'])){
include"config.php";
$layanan =$_POST["layanan"];
$komplain =$_POST["komplain"];
$tglkomplain =date("Y-m-d");
$usernamecustomer=$_SESSION['usernamecustomer'];
$db=mysql_query("insert into komplain(layananygdikomplain,isikomplain,tglkomplain,usernamecustomer) values('$layanan','$komplain','$tglkomplain','$usernamecustomer')");
if ($db >=1){
    header('location:index.php');
}else{
    echo "anda gagal";
}
}else{
      header('location:auth.php');
}


$namaTabel = "viewkomplain";
$query = "select * from $namaTabel";
$hasil = mysql_query($query);
$jumField = mysql_num_fields($hasil);
$sites = array();

while($data = mysql_fetch_array($hasil)){
$sites[] = array('status' => $data['status'], 'nokomplain' => $data['nokomplain'], 'tglkomplain' => $data['tglkomplain'], 'layananygdikomplain' => $data['layananygdikomplain'], 'isikomplain' => $data['isikomplain'],'usernamecustomer' => $data['usernamecustomer'], 'notanggapan' => $data['notanggapan'], 'tgltanggapan' => $data['tgltanggapan'], 'usernameadmin' => $data['usernameadmin'], 'isitanggapan' => $data['isitanggapan']);
}
$document = new DOMDocument();
$document->formatOutput = true;

$root = $document->createElement("data");
$document->appendChild($root);

foreach($sites as $apikomplain){
$block = $document->createElement("komplain");

$status = $document->createElement("status");
$status->appendChild($document->createTextNode($apikomplain['status']));
$block->appendChild($status);

$nokomplain = $document->createElement("nokomplain");
$nokomplain->appendChild($document->createTextNode($apikomplain['nokomplain']));
$block->appendChild($nokomplain);

$tglkomplain = $document->createElement("tglkomplain");
$tglkomplain->appendChild($document->createTextNode($apikomplain['tglkomplain']));
$block->appendChild($tglkomplain);

$layananygdikomplain= $document->createElement("layananygdikomplain");
$layananygdikomplain->appendChild($document->createTextNode($apikomplain['layananygdikomplain']));
$block->appendChild($layananygdikomplain);

$isikomplain = $document->createElement("isikomplain");
$isikomplain->appendChild($document->createTextNode($apikomplain['isikomplain']));
$block->appendChild($isikomplain);

$usernamecustomer = $document->createElement("usernamecustomer");
$usernamecustomer->appendChild($document->createTextNode($apikomplain['usernamecustomer']));
$block->appendChild($usernamecustomer);
    
$notanggapan = $document->createElement("notanggapan");
$notanggapan->appendChild($document->createTextNode($apikomplain['notanggapan']));
$block->appendChild($notanggapan);
    
$tgltanggapan= $document->createElement("tgltanggapan");
$tgltanggapan->appendChild($document->createTextNode($apikomplain['tgltanggapan']));
$block->appendChild($tgltanggapan);
    
$usernameadmin = $document->createElement("usernameadmin");
$usernameadmin->appendChild($document->createTextNode($apikomplain['usernameadmin']));
$block->appendChild($usernameadmin);
    
$isitanggapan = $document->createElement("isitanggapan");
$isitanggapan->appendChild($document->createTextNode($apikomplain['isitanggapan']));
$block->appendChild($isitanggapan);

$root->appendChild($block);
}
$document->save("api/komplain.xml");

?>