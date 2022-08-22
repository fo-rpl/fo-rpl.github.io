function komen(){
	  document.getElementById('komentar').innerHTML =`
<style>
 .komen{
background:aqua;width:80%;
position: fixed;display: inline-block;
display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
text-align: center;
            top:10%;
            left: 0;
            width: 100%;
            z-index: 999;
  
 }
</style>
 <div class="komentar">
	<h2 align="center" style="margin: 60px 10px 10px 10px;">Kirim Komentar</h2><hr>
	<form method="POST" id="form_komen">
		<div class="form-group">
			<input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="Masukkan Nama" />
		</div>
		<div class="form-group">
			<textarea name="komen" id="komen" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="komentar_id" id="komentar_id" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
			<input onclick="lastkomen()" type="button" name="batal" id="batal" class="btn btn-info" style="background:red" value="batal" />
		</div>
		
	</form>
	</div>
	  `;
	 }
	 function lastkomen(){
document.getElementById('komentar').innerHTML ='';
	 }