function validar(){


var usuario,password,usualogin;
usuario=document.getElementById('usuario').value;
password=document.getElementById('password').value;

if (usuario==""  || password=="") {
  alert("Los datos son obligatorios")
  return false;
}else if (usuario.length>15) {
alert("El usuario es muy largo");
return false;

}else if (password.length>10) {
  alert("La contraseña es muy larga ");
return false;
}
}
