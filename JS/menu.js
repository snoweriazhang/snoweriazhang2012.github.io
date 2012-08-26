$(function() {
	$('ul.menu li').hover(function(){
		$(this).find('img').animate({left:'0px'},{queue:false,duration:250});
	}, function(){
		$(this).find('img').animate({left:'-140px'},{queue:false,duration:250});
	});

});
