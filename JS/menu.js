$(function() {
	$('ul.menu li').hover(function(){
		$(this).find('img').animate({left:'-27.5px'},{queue:false,duration:250});
	}, function(){
		$(this).find('img').animate({left:'-160px'},{queue:false,duration:250});
	});
});
