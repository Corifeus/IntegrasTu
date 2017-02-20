$(document).ready(function () {
    var url = window.location;
    $('ul.nav a').filter(function () {
        return this.href == url;
    }).parent().addClass('active');


    var path = window.location.pathname;
    var barra = path.split("/");
    $('ul.nav a').filter(function () {
        console.log(this.href);
        return this.href ==('http://localhost:8000/')+ barra[1];
        console.log(this.href);
    }).parent().addClass('active');
})
