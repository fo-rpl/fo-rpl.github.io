<?php 
$jfile=$_POST['jfile'];
$judul=$_POST['nama_pengirim'];
$dat=$_POST['komen'];

$file = "komen.json";

$anggota = file_get_contents($file);

$data = json_decode($anggota, false);

$data [] = array(
    "judul" => $dat,
    "data" => $judul,
    "jfile" => $jfile
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$anggota = file_put_contents($file, $jsonfile);
$datas = file_get_contents($file);
echo $datas;
$s=fopen('z.js','w');

 fwrite($s,"var au=`".$datas."`;");

 fclose($s);