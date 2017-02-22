$(document).ready(function () {
    var url = window.location;
    $('ul.nav a').filter(function () {
        return this.href == url;
    }).parent().addClass('active');

    var host = window.location.hostname;
    var path = window.location.pathname;
    var barra = path.split("/");
    $('ul.nav a').filter(function () {
        console.log(this.href);
        return this.href =='http://'+ host + '/admin/')+ barra[2];
    }).parent().addClass('active');
})
