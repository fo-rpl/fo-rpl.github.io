
<?php
$files = $_FILES;

$berkas='template/';
$judul=$_POST['judul'];
$link=$_POST['link'];
$tags1=$_POST['tags1'];
$tags2=$_POST['tags2'];
$tags3=$_POST['tags3'];
mkdir($berkas);

$jumlahFile = count($files['listGambar']['name']);

for ($i = 0; $i < $jumlahFile; $i++) {
    $namaFile = $files['listGambar']['name'][$i];
    $lokasiTmp = $files['listGambar']['tmp_name'][$i];
    $prosesUpload = move_uploaded_file($lokasiTmp,$berkas.$namaFile);

    # jika proses berhasil
    if ($prosesUpload) {
        echo "Upload file <a href='{}' target='_blank'>Zip file</a> berhasil. <br>";
    } else {
        echo "<span style='color: red'>Upload file zip file gagal</span> <br>";
    }
}

$jumlahFile1 = count($file1['listfile']['name']);

for ($i = 0; $i < $jumlahFile; $i++) {
    $namaFile1 = $file1['listfile']['name'][$i];
    $lokasiTmp1 = $file1['listfile']['tmp_name'][$i];
    $prosesUpload2 = move_uploaded_file($lokasiTmp1,$berkas.$namaFile1);

    # jika proses berhasil
    if ($prosesUpload2) {
        echo "Upload file <a href='{}' target='_blank'>Zip file</a> berhasil. <br>";
    } else {
        echo "<span style='color: red'>Upload file zip file gagal</span> <br>";
    }
}
$file = "js/upload.json";

$anggota = file_get_contents($file);

$gambarku = $berkas.$namaFile;
$data = json_decode($anggota,true);
$data [] =array(
     'image'   => $gambarku,
     'judul'   => $judul,
     'link'    => $link,
     'tags1'   => $tags1,
     'tags2'   => $tags2,
     'tags3'   => $tags3
     );
     
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);


$anggota = file_put_contents($file, $jsonfile);

foreach($data as $dtb){

}

?>
