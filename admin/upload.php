<script>
	function ambilId(file){
		return document.getElementById(file);
	}
 
	$(document).ready(function(){
		$("#upload").click(function(){
			ambilId("progressBar").style.display = "block";
			var file = ambilId("file").files[0];
 
			if (file!="") {
				var formdata = new FormData();
				formdata.append("file", file);
				var ajax = new XMLHttpRequest();
				ajax.upload.addEventListener("progress", progressHandler, false);
				ajax.addEventListener("load", completeHandler, false);
				ajax.addEventListener("error", errorHandler, false);
				ajax.addEventListener("abort", abortHandler, false);
				ajax.open("POST", "upload.php");
				ajax.send(formdata);
			}
		});
	});
 
	function progressHandler(event){
		ambilId("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
		var percent = (event.loaded / event.total) * 100;
		ambilId("progressBar").value = Math.round(percent);
		ambilId("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
	}
	function completeHandler(event){
		ambilId("status").innerHTML = event.target.responseText;
		ambilId("progressBar").value = 0;
	}
	function errorHandler(event){
		ambilId("status").innerHTML = "Upload Failed";
	}
	function abortHandler(event){
		ambilId("status").innerHTML = "Upload Aborted";
	}
</script>