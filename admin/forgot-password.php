
<html>
<head><meta charset='UTF-8'/><meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/><meta content='IE=edge' http-equiv='X-UA-Compatible'/>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"><script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
</head>
<body>
<?php
 //ambil data json dari file
  $content=file_get_contents("account.json");

  //mengubah standar encoding
  $content=utf8_encode($content);

  //mengubah data json menjadi data array asosiatif
  $result=json_decode($content,true);

  //looping data menggunakan foreach
  foreach ($result as $value) {
   

   //karena data Mk didalam array, maka ambil data menggunakan foreach
   foreach ($value[$_POST['username']] as $user) {
    # code...
    echo "<script>Swal.fire({ title:'Akun ditemukan', text:'email=".$user['useremail']."pasword=".$user['userpassword']."', icon:'success' }).then(()=>{window.open('login.html')})</script>";
       }
  }
?>

</body>
</html>