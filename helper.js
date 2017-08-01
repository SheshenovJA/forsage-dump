if ($(window).width() < 960) {

  $("#helper-vin").click(function(){

        var e = document.getElementById("foo");
        if(e.style.display == 'block')
           e.style.display = 'none';
        else
           e.style.display = 'block';
  });
}
else {

  $("#helper-vin").hover(function(){

        var e = document.getElementById("foo");
        if(e.style.display == 'block')
           e.style.display = 'none';
        else
           e.style.display = 'block';

  });
}
