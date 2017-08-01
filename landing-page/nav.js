
$(window).scroll(function(){
    if ($(window).scrollTop() > 950) {
      $('#top-phones').hide();

        $('#main-nav').css('top','0px');
    }
    else
    {
         $('#top-phones').show();
         $('#main-nav').css('top','0px');
    }
});
$(window).scroll(function(){
    if ($(window).scrollTop() > 950) {
      $('#logo-main-ss').hide();

        $('#main-nav').css('top','0px');
    }
    else
    {
         $('#logo-main-ss').show();
         $('#main-nav').css('top','0px');
    }
});
