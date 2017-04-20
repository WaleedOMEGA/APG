$(document).ready(function(){
    /* nav button click event */
    $('header nav .nav-btn').click(function(){
        $(this).parent().toggleClass('active');
    });
});