
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
var app = (function(){
	var defaults = [];
	return {

	}
})();
//JS Module Pattern
//app.js
var app = (function(){
	var defaults = [];
	return {

	}
})();
//jQuery document ready event
//base.js
$(function(){
	//jQuery methods go here
	new app.scrollUp();
});
//myModule.js
app.scrollUp = (function($, _, app){
	var def = function(){
		this.$els = {
			'scrollcontrol': $('.scrollcontrol'),
			'scrolltotop': $('.scrollup')
		};

		init.call(this);
	};

	var init = function() {
		this.setup();
	};

	def.prototype = {
		setup: function() {
			var self = this;

			$(window).on('scroll', function(){
				if($(this).scrollTop() > 950){
					self.$els.scrollcontrol.fadeIn();
				} else {
					self.$els.scrollcontrol.fadeOut();
				}
			});

			this.bind();
		},

		bind: function() {
			this.$els.scrolltotop.on('click', _.bind(this.scrollUp, this));
		},

		scrollUp: function(){
			$('html, body').animate({ scrollTop: 0 }, 'slow');
	  }

	};

	return def;
})(jQuery, _, app);
