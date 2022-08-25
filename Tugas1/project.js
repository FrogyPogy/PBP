
function validasi() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Nama tidak boleh kosong");
    return false;
  }
  var y = document.forms["myForm"]["fpass"].value;
	  if (y == null || y == ""){
		alert("Password tidak boleh kosong");
		return false;
	}
	if (y.length < 8) {
        alert("Panjang password minimal 8");
		return false;
    }
    if (y.search(/[a-z]/i) < 0) {
        alert("Harus terdiri dari paling tidak 1 huruf kecil");
		return false;
    }
    if (y.search(/[0-9]/) < 0) {
        alert("Harus terdiri dari paling tidak 1 angka"); 
		return false;
    }
	if (y.search(/[0-9]/) < 0) {
        alert("Harus terdiri dari paling tidak 1 angka"); 
		return false;
    }
  var z = document.forms["myForm"]["femail"].value;
	  if (z == null || z == ""){
		alert("Email tidak boleh kosong");
		return false;
	}
}
function showpass(){
  var xa = document.getElementById("psw");
  if(xa.type === "password"){
    xa.type = "text";
  }
  else{
    xa.type = "password";
  }
}
