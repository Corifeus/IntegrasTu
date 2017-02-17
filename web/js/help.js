document.getElementById("quitar").onclick=function(){
  document.getElementById("help").style.display="none";
  document.getElementById("mostrar").style.display="block";
}
document.getElementById("mostrar").onclick=function(){
  document.getElementById("help").style.display="block";
  document.getElementById("mostrar").style.display="none";
}
document.getElementById("clientes").onmouseover=function(){
  document.getElementById("mensaje").innerHTML="Muestra el listado de clientes";
}
document.getElementById("clientes").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}
document.getElementById("servicios").onmouseover=function(){
  document.getElementById("mensaje").innerHTML="Muestra el listado de servicios";
}
document.getElementById("servicios").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}
document.getElementById("trabajadoras").onmouseover=function(){
  document.getElementById("mensaje").innerHTML="Muestra el listado de empleadas";
}
document.getElementById("trabajadoras").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}
document.getElementById("side-menu").onmouseover=function(){
  document.getElementById("mensaje").innerHTML="Muestra los datos de ... seleccionado";
}
document.getElementById("side-menu").onmouseout=function(){
  document.getElementById("mensaje").innerHTML="Mensajes de ayuda";
}
