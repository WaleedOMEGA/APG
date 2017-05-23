$(document).ready(function(){
    var clicked = false;
    /* nav button click event */
    $('header nav .nav-btn').click(function(){
        var $this = $(this);
        if(!clicked){
        clicked=true;
        $this.parent().toggleClass('active');
            setTimeout(function(){
                clicked=false
            },2250)
           } 
    });
    $(document).on('click',function(e){
        var clickhover=$(e.target);
        if(!clickhover.closest('header').length && $('nav').hasClass('active')){
            $('nav').removeClass('active');
        }
    });
    var $mainsection = $('.mainsection');
    var $header = $('header')
    $(window).scroll(function(){
        if($(window).scrollTop() >= $mainsection.height()- 900){
            $header.addClass('sticky');
        }
        else{
            $header.removeClass('sticky');
        }
    });
    console.log($mainsection.height());
});