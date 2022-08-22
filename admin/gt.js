
function juml(){

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){ 
if (this.readyState == 4 && this.status == 200)
{ var data=JSON.parse(xhttp.responseText);
   
var dua = document.getElementById('nilai2').value;

var satu = '1'; 
			var totals = parseInt(satu) + parseInt(dua);

   document.getElementById('issi').innerHTML=data[totals].data;

document.getElementById('nilai2').value=totals;
document.getElementById('ns').value=totals;

 } }; 
xhttp.open("GET", "data.json", true); xhttp.send(); }

function kembl(){

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){ 
if (this.readyState == 4 && this.status == 200)
{ var data=JSON.parse(xhttp.responseText);
   
var dua = document.getElementById('nilai2').value;
			
			var satu = 1; 
			if (dua > 0){
			var totals = dua - 1;
			
document.getElementById('nilai2').value=totals;
document.getElementById('isi').value=totals;
document.getElementById('ns').value=totals;

   document.getElementById('issi').innerHTML =data[totals].data;
   
			}
   
 } }; 
xhttp.open("GET", "data.json", true); xhttp.send(); }