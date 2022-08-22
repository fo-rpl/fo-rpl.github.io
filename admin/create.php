<?php
/*
system('clear');
echo "file name : ";
$file1 = trim(fgets(STDIN));
echo "==============================\n";
echo "judul : ";
$judul = trim(fgets(STDIN));
echo "==============================\n";
echo "isi : ";
$konten = trim(fgets(STDIN));
sleep (2);
*/

$data = $_POST['data'];
$file1 = $_POST['jfile'];


$file = fopen('draft/'.$file1, 'w');

fwrite($file, '<html>'.$data.'<!-- Bootstrap core JavaScript-->
<script src="https://fo-rpl.github.io/vendor/jquery/jquery.min.js"></script>
<script src="https://fo-rpl.github.io/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="https://fo-rpl.github.io/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="https://fo-rpl.github.io/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="https://fo-rpl.github.io/vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="https://fo-rpl.github.io/js/demo/chart-area-demo.js"></script>
<script src="https://fo-rpl.github.io/js/demo/chart-pie-demo.js"></script>
<script src="https://bucin-app.storyku.repl.co/vendor/js/font-awsome.js" crossorigin="anonymous"></script>
<link href="https://fo-rpl.github.io/vendor/ads/style.css" rel="stylesheet" type="text/css" >
<div class="sticky-ad" id="sticky-ad"><div class="adB">
<script type="text/javascript">atOptions = {"key" : "5191ed80f94c64ee2927836f190c3553","format" : "iframe","height" : 50,"width" : 320,"params" : {}};document.write(`<scr` + `ipt type="text/javascript" src="http` + (location.protocol === `https:` ? `s` : ``) + `://walkingtutor.com/5191ed80f94c64ee2927836f190c3553/invoke.js"></scr` + `ipt>`);</script></div><button aria-label="Close this ad" id="adss" class="sticky-ad-close-button" onclick="hilangkan()"></button></div><script src="https://fo-rpl.github.io/vendor/ads/script.js"></script>
</body>
</html>');
fclose($file);
echo "<html><a href='".$file1."')</a></html>";
?>
<html>
<script>

window.open('<?php
echo "draft/".$file1
?>');
</script>
</html>
