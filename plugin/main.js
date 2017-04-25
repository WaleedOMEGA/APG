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
});