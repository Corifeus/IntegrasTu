document.getElementById("quitar").onclick=function(){
  document.getElementById("help").style.display="none";
  document.getElementById("mostrar").style.display="block";
}
document.getElementById("mostrar").onclick=function(){
  document.getElementById("help").style.display="block";
  document.getElementById("mostrar").style.display="none";
}
document.getElementById("clientes").onmouseover=function(){
  document.getElementById("mensaje").innerHTML="Haz click aquí para mostrar el listado de clientes";
}
document.getElementById("clientes").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}
document.getElementById("servicios").onmouseover=function(){
  document.getElementById("mensaje").innerHTML="Haz click aquí para mostrar el listado de servicios";
}
document.getElementById("servicios").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}
document.getElementById("trabajadoras").onmouseover=function(){
  document.getElementById("mensaje").innerHTML="Haz click aquí para mostrar el listado de empleadas";
}
document.getElementById("trabajadoras").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}

document.getElementById("side-menu").onmouseover=function(){
  var url=window.location.href;
  var ruta=url.split("/");
  console.log(ruta);
  switch(ruta[3]){
    case "clientes":
      document.getElementById("mensaje").innerHTML="Haz click aquí para poder ver los datos del cliente seleccionado";
      break;
    case "servicios":
      document.getElementById("mensaje").innerHTML="Haz click aquí para poder ver los datos del servicio seleccionado";
      break;
    case "trabajadoras":
      document.getElementById("mensaje").innerHTML="Haz click aquí para poder ver los datos de la empleada seleccionada";
      break;
    default:
      break;
  }
 
}
document.getElementById("side-menu").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}
document.getElementById("user").onmouseover=function(){
  document.getElementById("mensaje").innerHTML="Permite registrar nuevos usuarios y cerrar la sesión actual";
}
document.getElementById("user").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}

var url=window.location.href;
var ruta=url.split("/");
if(ruta[4]=="login"){
    document.getElementById("mensaje").innerHTML="Debes iniciar sesión para poder acceder";
}

document.getElementById("datos").onmouseover=function(){
  var url=window.location.href;
  var ruta=url.split("/");
  console.log(ruta);
  switch(ruta[3]){
    case "clientes":
      document.getElementById("mensaje").innerHTML="Se muestran los datos del cliente";
      break;
    case "servicios":
      document.getElementById("mensaje").innerHTML="Se muestran los datos del servicio";
      break;
    case "trabajadoras":
      document.getElementById("mensaje").innerHTML="Se muestran los datos de la empleada";
      break;
    default:
      break;
  }
 
}
document.getElementById("datos").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}

document.getElementById("extra").onmouseover=function(){
  var url=window.location.href;
  var ruta=url.split("/");
  console.log(ruta);
  switch(ruta[3]){
    case "clientes":
      document.getElementById("mensaje").innerHTML="Se muestran los servicios contratados por el cliente";
      break;
    case "servicios":
      document.getElementById("mensaje").innerHTML="Se muestran las empleadas asignadas al servicios y las empleadas disponibles para dicho servicio";
      break;
    case "trabajadoras":
      document.getElementById("mensaje").innerHTML="Se muestan los servicios a los que está asignada la empleada";
      break;
    default:
      break;
  }
 
}
document.getElementById("extra").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}