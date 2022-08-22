<?php
$judul=$_POST['judul'];
$data=$_POST['isidata'];
 
   $file="draft.up.json";
   $upfile=file_get_contents($file);
   $upload=json_decode($upfile,false);

$upload [0] = array(
       'judul' => $judul,
        'isi' => $data
 );
 $upjson=json_encode($upload, JESON_PRETTY_PRINT);
 $upfile=file_put_contents($file,$upjson);
 ?>