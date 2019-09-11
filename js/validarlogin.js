function validarlogin(){


var usu,pass;
usu=document.getElementById('usu').value;
pass=document.getElementById('pass').value;

if (usu==""  || pass=="") {
  alert("obligatorios")
  return false;
}else if (usu.length>15) {
alert(" largo");
return false;

}else if (pass.length>10) {
  alert("larga ");
return false;
}
}
