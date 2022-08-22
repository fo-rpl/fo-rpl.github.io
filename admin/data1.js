function sendData (sData) { location.search = sData; }

function GetURLParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}
var modul = GetURLParameter('modul');
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){ 
if (this.readyState == 4 && this.status == 200)
{ var data=JSON.parse(xhttp.responseText);
  

   document.getElementById('issi').innerHTML=data[modul].data;
document.getElementById('ns').value=modul;
document.getElementById('nilai2').value=modul;


 } }; 
xhttp.open("GET", "data.json", true); xhttp.send();

function juml(){

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){ 
if (this.readyState == 4 && this.status == 200)
{ var data=JSON.parse(xhttp.responseText);
   
var dua = document.getElementById('nilai2').value;

var satu = '1'; 
			var totals = parseInt(satu) + parseInt(dua);
sendData('modul=' +totals);
   document.getElementById('issi').innerHTML=data[totals].data;
document.getElementById('ns').value=totals;
document.getElementById('nilai2').value=totals;

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
			sendData('modul=' +totals);
document.getElementById('nilai2').value=totals;
document.getElementById('ns').value=totals;
   document.getElementById('issi').innerHTML =data[totals].data;
   
			}
   
 } }; 
xhttp.open("GET", "data.json", true); xhttp.send(); }


function rm(){
document.getElementById("data1").style='margin-left:-200px';
}
function fokus(){
document.getElementById("myinput").focus();
}
function Rview() {
document.getElementById('editor').style.display='none';
document.getElementById('rvi1').style.top="0";
document.getElementById('rvi').style.top="-50px";
}
function editz(){
document.getElementById('editor').style.display='block';
document.getElementById('rvi').style.top="0";
document.getElementById('rvi1').style.top="-50px";
}

function editz1(){
url = prompt('link url');
taut = prompt('nama');
document.getElementById('myinput').value +='<a href="' + url + '">' + taut + '</a>';
fokus();
}
function h(){
url = prompt('ukuran <h></h>');
taut = prompt('nama');
document.getElementById('myinput').value +='<h' + url + ' style="color: black" class="m-0 font-weight-bold">' + taut + '</h' + url + '>';
fokus()
}
function br(){
document.getElementById('myinput').value +='<br>';
fokus()
}
function img(){
url = prompt('link url');
document.getElementById('myinput').value +='<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"src="' + url + '">';
fokus()
}
function li(){
document.getElementById('myinput').value +='<li>';
fokus();
document.getElementById('myinput').value +='</li>';
}

document.getElementById('myinput').addEventListener('keyup',
function(e) {

  document.getElementById('dats').innerHTML =this.value;})
