
<?php
$files = $_FILES;

$berkas='gambar/';
$judul=$_POST['judul'];
$desk=$_POST['deskripsi'];
$tautan=$_POST['url'];
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
$file = "upload.json";

$anggota = file_get_contents($file);

$gambarku = 'https://fo-rpl.github.io/'.$berkas.$namaFile;
$data = json_decode($anggota,true);
$data [] =array(
     'image'   => $gambarku,
     'judul'   => $judul,
     'deskrisi'   => $desk,
     'url' => $tautan
     );
     
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);


$anggota = file_put_contents($file, $jsonfile);

foreach($data as $dtb){

}

?>
