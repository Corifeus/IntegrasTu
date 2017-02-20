$(document).ready(function(){
    $('#asignados span').each(function(i){
        var asignados = $(this).text();
        $('#todos span').each(function(j){
            var todos = $(this).text();
            if( todos == asignados){
                $(this).parent().css('display','none');
            }
        });
    });
});
