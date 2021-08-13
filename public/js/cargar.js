$(document).ready(function(){
    $('form').on('submit', function(){
        $('body').append('<div class="loader">Loading...</div>');
        console.log('loader');
    })
})