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
    $("html").niceScroll({
        cursorcolor: "#0079BC",
        cursoropacitymin: 0.5,
        cursorwidth: "5px",
        cursorborder: "1px solid #263034"
    });
    var nameerror = true,
        companyerror = true,
        emailerror=true,
        mobileerror=true,
        msgerror=true;//setting error status
    $('.name').blur(function(){
    if($(this).val().length < 4){
        $(this).css('border','1px solid #f00');
        $(this).parent().find('.custom-alert').fadeIn(300);
        nameerror=true;
    }else{
        $(this).css('border','1px solid #0f0');
        $(this).parent().find('.custom-alert').fadeOut(300);
        nameerror=false;
    }
    });
    $('.company-name').blur(function(){
        if($(this).val() === ''){
            $(this).css('border','1px solid #f00');
            $(this).parent().find('.custom-alert').fadeIn(300);
            companyerror=true;
        }else{
            $(this).css('border','1px solid #0f0');
            $(this).parent().find('.custom-alert').fadeOut(300);
            companyerror=true;
        }
    });
    $('.email').blur(function(){
        if($(this).val() === ''){
            $(this).css('border','1px solid #f00');
            $(this).parent().find('.custom-alert').fadeIn(300);
            emailerror=true;
        }else{
            $(this).css('border','1px solid #0f0');
            $(this).parent().find('.custom-alert').fadeOut(300);
            emailerror=false;
        }
    });
    $('.mobile').blur(function(){
        if($(this).val() === ''){
            $(this).css('border','1px solid #f00');
            $(this).parent().find('.custom-alert').fadeIn(300);
            mobileerror=true;
        }else{
            $(this).css('border','1px solid #0f0');
            $(this).parent().find('.custom-alert').fadeOut(300);
            mobileerror=false;
        }
    });
    $('.msg').blur(function(){
        if($(this).val().length < 11){
            $(this).css('border','1px solid #f00');
            $(this).parent().find('.custom-alert').fadeIn(300);
            msgerror=true;
        }else{
            $(this).css('border','1px solid #0f0');
            $(this).parent().find('.custom-alert').fadeOut(300);
            msgerror=false;
        }
    }); 
    // submit form validation
    $('form').submit(function(e){
		if (nameerror=== true || companyerror === true || emailerror === true || mobileerror === true || msgerror === true){
            e.preventDefault();
        $('.name, .company-name, .email, .mobile, .msg').blur();
        }
    });
});
