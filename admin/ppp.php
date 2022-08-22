   <?php
echo"<script>document.body.innerHTML+='document.getElememtById('angka1').value'</script>";
        $jumlah=$_GET['angka1']+$_GET['angka2'];
        echo"<input type=text name=jumlah value='$jumlah'>";
    ?>