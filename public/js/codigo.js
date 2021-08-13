$(document).ready(function(){
    $('form').on('submit',function(e){
        $('#code').val($('.principal pre').html());
    })
})