
<?php


$username=$_POST['username'];
$useremail=$_POST['useremail'];
$userpassword=$_POST['userpassword'];

$file = "account.json";

$anggota = file_get_contents($file);

$data = json_decode($anggota, false);

$data [] =
    array(
    $_POST['username']   =>[$_POST['username']]=
     array(
    ['username'   => $username,
    'useremail'   => $useremail,
    'userpassword' => $userpassword])
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$anggota = file_put_contents($file, $jsonfile);

?>