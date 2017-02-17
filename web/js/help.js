$(document).ready(function () {
    $('#clientes').mouseenter(function () {
      $('#mensaje').innerHTML="Muestra el listado de clientes";
    });
    $('#clientes').mouseleave(function () {
      $('#mensaje').innerHTML="Muestra el listado de clientes";
    });
    $('#quitar').click(function () {
      $('#help').innerHTML="<button id='mostrar'>Mostrar Ayuda</button>";
    });


})

/*document.getElementById("quitar").onclick=function(){
  document.getElementById("help").style.display="none";
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
}*/
