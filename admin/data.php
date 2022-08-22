<?php
$jfile=$_POST['jfile'];
$judul=$_POST['jdul'];
$dat=$_POST['dta'];

$file = "komen.json";

$anggota = file_get_contents($file);

$data = json_decode($anggota, false);

$data [] = array(
    'jfile'     => $jfile,
    'judul'   => $judul,
    'data' => $dat
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$anggota = file_put_contents($file, $jsonfile);

?>