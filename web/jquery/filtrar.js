$(document).ready(function(){
    $('#asignados td').each(function(i){
        var asignados = $(this).text();
        $('#todos td').each(function(j){
            var todos = $(this).text();
            if( todos == asignados){
                $(this).css('display','none');
            }
        });
    });
});
