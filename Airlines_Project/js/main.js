(function($){
	'use strict';
$('.menu-icon i').on('click', function(){
	$('.menu').slideToggle();
} );

$('.blank').animate({'width' :'100%'}, 4000)
$(window).scroll(function(){
	var scrl= $(window).scrollTop();
	if(scrl>350){
		$('.top').css({'opacity':'1'});
	}
	else
	{
		$('.top').css({'opacity': '0'});
	}
});

$('.top').on('click', function(){
	$('html').animate({'scrollTop' : '0'}, 1000);
});

}) (jQuery);