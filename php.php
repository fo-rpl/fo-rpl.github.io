<?php
system('clear'); 
echo "nama : ";
$nama = trim(fgets(STDIN));
echo "==============================\n";
echo "link gambar : ";
$gambar = trim(fgets(STDIN));
echo "==============================\n";
echo "link download : ";
$download = trim(fgets(STDIN));
echo "==============================\n";
echo "link demo : ";
$demo = trim(fgets(STDIN));
echo "==============================\n";
echo "link share to WhatsApp : ";
$share = trim(fgets(STDIN));
echo "==============================\n";
echo "tunggu dalam 2 detik\n";sleep(1);
echo "===============";
sleep(1);
echo "===============\n";
sleep(1);
echo "\033[34m Berhasil \n";
sleep(1);
echo "\033[34m Memproses \n";
sleep(1);
system('clear');
$file = "data.json";

$anggota = file_get_contents($file);

$data = json_decode($anggota,true);
$data [] =array(
     'url' => 'http://localhost:8080/download.html?gmb='.$gambar.'&dw='.$download.'&dm='.$demo.'&wa='.$share,
     'nama' => $nama
     );
     
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);


$anggota = file_put_contents($file, $jsonfile);


?>
