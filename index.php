
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<title>
		Untitled No.43 - Snoweria Zhang's Online Portfolio
	</title>

	<!-- Meta Tags -->
	<meta property="og:site_name" content="Untitled No.43"/>
	<meta property="og:title" content="Snoweria Zhang's Online Portfolio"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.snoweria.com"/>
	<meta property="og:description" content="Untitled No.43: the online portfolio of Snoweria Zhang, a Toront- and Boston-based artist and designer."/>
	<meta name="keywords" content="Snoweria, Toronto-based artist, mathematics, Boston-based" />
	<meta name="description" content="Untitled No.43: the online portfolio of Snoweria Zhang, a Toront- and Boston-based artist and designer. " />
	<meta charset="utf-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta name="title" content=" Untitled No.43 - Snoweria Zhang's Online Portfolio " />
	<meta name="copyright" content="Copyright (c) 2012 Snoweria Zhang" />

	<link rel="Shortcut Icon" href="images/icon.ico" type="image/ico" />

	<!--[if IE 6]>
		<link href="stylesheet/ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	                
	<!--[if IE 7]>
		<link href="stylesheet/ie7.css" rel="stylesheet" type="text/css" />
	<![endif]-->


	<!-- iPhone/iPad -->
	<!--
	<meta name="viewport" content="width=980" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">
	-->

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" media="screen, projection" href="stylesheet/style.css" />
	

	<!-- Scripts -->

	<!-- BEGIN Google Analytics-->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-33850959-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<!--END Google Analytics-->

	<!--general mobile redirect
	<script type="text/javascript">
		if(screen.width <=500){
			document.location="mobile.html"
		}
	</script>
	-->

	<!--BEGIN mobile redirect-->
	<script type="text/javascript">
	if ((navigator.userAgent.match(/iPhone/i)) || 
		(navigator.userAgent.match(/iPod/i)) || 
		(navigator.userAgent.match(/Android/i)) ||
		(navigator.userAgent.match(/webOS/i)) ||
		(navigator.userAgent.match(/Windows Phone OS 7/i)) ||
		(screen.width <=480)) {
		document.location="mobile.html"
	   //location.replace("http://snoweria.com/mobile.html");
	}
	</script>
	<!--END mobile redirect-->



	<script src="JS/jQuery.js" type="text/javascript" charset="utf-8"></script>
	<script src="JS/jQuery.easing.js" type="text/javascript" charset="utf-8"></script>
	<script src="JS/jcarousellite_1.0.1.js" type="text/javascript" charset="utf-8"></script>
	<script src="JS/menu.js" type="text/javascript" charset="utf-8"></script>

</head>


<body onLoad="javascript:_gaq.push(['_setVar','user_self']);">

	<!-- include navigation bar, social media buttons, and footer-->
	<?php require($DOCUMENT_ROOT . "navigation.html");?>

	<!--BEGIN about page-->
	<div id="about_page">
     <a id="about"></a>
           <center>About page content goes here.</center>
	</div>
	<!--END about page-->

	<!--BEGIN architecture page-->
	<div id="architecture_page">
     <a id="architecture"></a>
           <center>Architecture page content goes here.</center>
	</div>
	<!--END architecture page-->


	<!--BEGIN horizontal page scroll-->
	<script type="text/javascript">
	$(function() {
	    //$('ul.nav a').bind('click',function(event){
	    $('ul.menu a').click(function(){
	        var $anchor = $(this);
	        $('html, body').stop(false, true).animate(
	        	{scrollLeft: $($anchor.attr('href')).offset().left}, 
	        	1000, 
	        	'easeInOutExpo'
	        );
	        event.preventDefault();

	    });
	});
	</script>
	<!--END horizontal page scroll-->

</body>
</html>