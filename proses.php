
<?php
$files = $_FILES;
$files1 = $_FILES;

$berkas='file/';
$nem=$_POST['nem'];
$image ='image';
mkdir('file');
mkdir($berkas.'/shr');
mkdir($berkas.'/gambar');
mkdir($berkas.'/down');

$jumlahFile0 = count($files['zipfile']['name']); for ($i = 0; $i < $jumlahFile0; $i++) { $namaFile0 = $files['zipfile']['name'][$i]; $lokasiTmp = $files['zipfile']['tmp_name'][$i];}



for ($i = 0; $i < $jumlahFile0; $i++) {
    $namaFile0 = $files['zipfile']['name'][$i];
    $lokasiTmp = $files['zipfile']['tmp_name'][$i];
    $prosesUpload = move_uploaded_file($lokasiTmp,$berkas.'/down/'.$namaFile0);

    # jika proses berhasil
    if ($prosesUpload) {
        echo "Upload file <a href='{}' target='_blank'>Zip file</a> berhasil. <br>";
    } else {
        echo "<span style='color: red'>Upload file zip file gagal</span> <br>";
    }
}
$jumlahFiles = count($files['listGambar']['name']); for ($i = 0; $i < $jumlahFiles; $i++) { $namaFiles = $files['listGambar']['name'][$i]; $lokasiTmp = $files['listGambar']['tmp_name'][$i];}



for ($i = 0; $i < $jumlahFiles; $i++) {
    $namaFiles = $files['listGambar']['name'][$i];
    $lokasiTmp = $files['listGambar']['tmp_name'][$i];
    $prosesUploads = move_uploaded_file($lokasiTmp,$berkas.$namaFiles);

    # jika proses berhasil
    if ($prosesUploads) {
        echo "Upload file <a href='{}' target='_blank'>$namaFiles</a> berhasil. <br>";
    } else {
        echo "<span style='color: red'>Upload file {$namaFiles} gagal</span> <br>";
    }

}
$jumlahFile5 = count($files['listGambar5']['name']); for ($i = 0; $i < $jumlahFiles; $i++) { $namaFile5 = $files['listGambar5']['name'][$i]; $lokasiTmp = $files['listGambar5']['tmp_name'][$i];}



for ($i = 0; $i < $jumlahFiles; $i++) {
    $namaFile5 = $files['listGambar5']['name'][$i];
    $lokasiTmp = $files['listGambar5']['tmp_name'][$i];
    $prosesUpload5 = move_uploaded_file($lokasiTmp,$berkas.'/shr/'.$namaFile5);

    # jika proses berhasil
    if ($prosesUpload5) {
        echo "Upload file <a href='{}' target='_blank'>$namaFile5</a> berhasil. <br>";
    } else {
        echo "<span style='color: red'>Upload file {$namaFile5} gagal</span> <br>";
    }

}


$jumlahFile1 = count($files['listGambar1']['name']); for ($i = 0; $i < $jumlahFile; $i++) { $namaFile1 = $files['listGambar1']['name'][$i]; $lokasiTmp1 = $files['listGambar1']['tmp_name'][$i];}




for ($i = 0; $i < $jumlahFile1; $i++) {
    $namaFile1 = $files['listGambar1']['name'][$i];
    $lokasiTmp = $files['listGambar1']['tmp_name'][$i];
    $prosesUploade = move_uploaded_file($lokasiTmp,$berkas.'/gambar/'.$namaFile1);

    # jika proses berhasil
    if ($prosesUploade) {
        echo "Upload file <a href='{}' target='_blank'>$namaFile1</a> berhasil. <br>";
    } else {
        echo "<span style='color: red'>Upload file {$namaFile1} gagal</span> <br>";
    }
}

$file = "data.json";

$anggota = file_get_contents($file);

$gambarku = 'https://fo-rpl.github.io/'.$berkas.'/gambar/'.$namaFile1;
$dnld = 'https://fo-rpl.github.io/'.$berkas.'/down/'.$namaFile0;
$shrbtn = 'https://fo-rpl.github.io/'.$berkas.'shr/'.$namaFile5;
$dmbtn = 'https://fo-rpl.github.io/'.$berkas.$namaFiles;

$data = json_decode($anggota,true);
$tautan ='https://fo-rpl.github.io/download.html?gmb='.$gambarku.'&modul='.$nem.'&dw='.$dnld.'&dm='.$dmbtn.'&wa='.$shrbtn;
$data [] =array(
     'nama'   => $nem,
     'url' => $tautan
     );
     
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);


$anggota = file_put_contents($file, $jsonfile);

foreach($data as $dtb){

}

?>
