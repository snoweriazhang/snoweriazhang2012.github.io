<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<title>
		Snoweria Zhang's Online Portfolio
	</title>

	<!-- Meta Tags -->
	<meta property="og:site_name" content="Snoweria Zhang"/>
	<meta property="og:title" content="Portfolio"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.snoweria.com"/>
	<meta property="og:description" content="The online portfolio of artist and designer Snoweria Zhang."/>
	<meta name="keywords" content="Snoweria, Toronto-based artist, mathematics, Boston-based" />
	<meta name="description" content="The online portfolio of artist and designer Snoweria Zhang. " />
	<meta charset="utf-8" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta name="title" content=" Snoweria Zhang's Online Portfolio" />
	<meta name="copyright" content="Copyright (c) 2012 Snoweria Zhang" />

	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,300italic,400|Neuton' rel='stylesheet' type='text/css'>
	<link rel="Shortcut Icon" href="images/icon.ico" type="image/ico" />

	<!-- iPhone/iPad -->
	<!--
	<meta name="viewport" content="width=980" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">
	-->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!--chrome frame-->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">


	<!-- CSS -->
	<link rel="stylesheet" type="text/css" media="screen, projection" href="stylesheet/main.css" />
	

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
			document.location="mobile/index.html"
		   //location.replace("http://snoweria.com/mobile.html");
		}
	</script>
	<!--END mobile redirect-->


	<!--jQuery.easing.js included in jQuery.js-->
	<script src="JS/jQuery.js" type="text/javascript" charset="utf-8"></script>
	<script src="JS/jQuery.easing.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js" type="text/javascript"></script> 
	<!--<script src="JS/jcarousellite_1.0.1.js" type="text/javascript" charset="utf-8"></script>-->
	<!--<script src="JS/menu.js" type="text/javascript" charset="utf-8"></script>-->
	<script src="JS/contact_form.js" type="text/javascript" charset="utf-8"></script>

</head>

<body>

	
	<header>
		<div id="header_bg_left"></div>
		<a href="http://www.snoweria.com" alt="www.snoweria.com">
			<img src="images/logo.png" alt="www.snoweria.com" />
		</a>
		<div id="header_bg_bottom"></div>
		<nav>
			<span id="left">
				<a href="#home">HOME</a>
				<a href="#portfolio">PORTFOLIO</a>
			</span>
			<span id="right">
				<a href="#about">ABOUT ME</a>
				<a href="#contact">CONTACT</a>
			</span>
		</nav>	
	</header>


	<!--BEGIN home page-->
	<div class="home">
	    <a id="home"></a>
		<div class="content">
		    <h1>Hello!</h1>
		    <h2>My name is Snoweria Zhang. <br/>I am an artist and designer who<br/> enjoys mathematics, earrings, and tea.</h2>
		    <div class="menu">
			    <a href="#portfolio">SEE MY WORK</a>
			    <a href="#about">ABOUT ME</a>
			    <a href="#contact">CONTACT ME</a>
			</div>
		</div>    
	</div>
	<!--END home page-->

	<!--BEGIN portfolio page-->
	<div class="portfolio">
    	<a id="portfolio"></a>
    	<div class="divider"><img src="images/divider_home.png" alt=""/></div>
    	<!--<div class="divider_home"></div><span id="divider_home_margin"></span>-->
	    <div class="content">	
	    	<p class="light">Portfolio available in <a href="" alt="PDF portfolio" target="_blank">PDF</a></p>
	    	
	        <div class="gallery">
	        	<a class="image" href=""><span class="overlay"><p>architecture</p></span><img src="images/port_arch.jpg" /></a><!--
		     --><a class="image" href=""><span class="overlay"><p>fashion</p></span><img src="images/port_fashion.jpg" /></a><!--
		     --><a class="image" href=""><span class="overlay"><p>drawing</p></span><img src="images/port_draw.jpg" /></a><!--
		     --><a class="image" href=""><span class="overlay"><p>painting</p></span><img src="images/port_paint.jpg" /></a>
	        </div>
	        <div class="gallery">
	        	<a class="image" href=""><span class="overlay"><p>photography</p></span><img src="images/port_photo.jpg" /></a><!--
		     --><a class="image" href=""><span class="overlay"><p>set design</p></span><img src="images/port_set.jpg" /></a><!--
		     --><a class="image" href=""><span class="overlay"><p>web design</p></span><img src="images/port_web.jpg" /></a><!--
		     --><a class="image" href=""><span class="overlay"><p>misc.</p></span><img src="images/port_misc.jpg" /></a>
	        </div>

	        
		</div>
	</div>	
	<!--END portfolio page-->

	<!--BEGIN about page-->
	<div class="about">
    	<a id="about"></a>
    	<div class="divider"><img src="images/divider_portfolio.png" alt=""/></div>
    	<div class="content">
	        <h2>About me</h2>
	        <p class="dark">Hi! My name is <a href="http://www.snoweria.com" alt="www.snoweria.com">Snoweria</a>. I am an artist + designer who<br/> enjoys mathematics, earrings, and tea.</p>
			<p class="dark">A Canadian citizen, I have worked and lived in many cities,<br/> including Boston, Shanghai, Paris, and London. As a result, <br/>I am a teensy culturally “messed up.” My work draws <br/>inspiration from my travels, daydreams, and actual dreams. </p>
			<p class="dark">I own 43 pairs of <a href="fashion.html" alt="www.snoweria.com/fashion.html">earrings</a>, 21 of which I made from things <br/>on their way to the trash can. None of them match the <br/><a href="fashion.html" alt="www.snoweria.com/fashion.html">dresses</a> I have designed. </p>
			<p class="dark">In May, 2012, I graduated from Harvard University with a <br/>B.A. in <a href="" alt="">mathematics</a> and a minor in fine arts.</p>
			<img src="images/snoweria.png" alt="Snoweria Zhang" id="photo_snoweria"/>
		</div>
	</div>
	<!--END about page-->

	
	<!--BEGIN contact page-->
	<div class="contact">
    	<a id="contact"></a>
    	<div class="divider"><img src="images/divider_about.png" alt=""/></div>
        <h2>Contact me</h2>

        <p class="light">Please feel free to contact me about my work or to suggest improvements to my portfolio. You may email me at <a href="mailto:snoweriazhang@gmail.com" target="_blank">snoweriazhang@gmail.com</a> or use the form on the left. </p>
		<p class="light">Alternatively, you can find me on <a href="http://www.linkedin.com/pub/snoweria-zhang/45/372/aa5" alt="Snoweria's LinkedIn" target="_blank">LinkedIn</a> or <a href="https://github.com/dobbyzhang" alt="Snoweria's GitHub" target="_blank">GitHub</a>.</p>
 
        <div id="sendform">            
        	
        	<div id="response"></div>
         	<form id="formail" action="" method ="post" name="sendform">

				<input type="text" name="subject" id="subject" value="Name*" required="required" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Name*':this.value;" />
				<input type="email" name="mail" id="mail" value="Email Address*" required="required" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Email Address*':this.value;" />
				<textarea name="text" rows="" cols="" id="text" required="required" onclick="document.sendform.text.value='';" onfocus="this.select()" onblur="document.sendform.text.value=!document.sendform.text.value?'Message*':this.value;">Message*</textarea> 
            	<input type="button" alt="Submit" class="submit" id="sendmail" name="sendmail" value="Send" />
			</form>
		</div>

	</div>
	<!--END contact page-->


	<!--BEGIN page scroll-->
	<script type="text/javascript">
/*
	$(function() {
	    $('nav a, .menu a').click(function(){

	    	//animate body
	        var $anchor = $(this);
	        $('html, body').stop(false, true).animate(
	        	{scrollTop: $($anchor.attr('href')).offset().top}, 
	        	1000, 
	        	'easeInOutExpo'
	        );
	        event.preventDefault();

	        //move nacigation bar color
	        //$(this).find('img').css('left','0px');

	    });
	});
*/
	</script>
	<!--END page scroll-->
       <script type="text/javascript"> 
        	$(document).ready(function(){
        	
        		// menu animation
        		        		
        		$("nav a").hover(
	        		function(){
			        	$(this).animate( { backgroundColor: "#000" }, 200);
		        	},function(){
			        	$(this).animate( { backgroundColor: "transparent" }, 100);
	        	}).click(function(){

		        	$(this).animate( { backgroundColor: "#000" }, 200).unbind("hover");
		        	
		        	//$(this).siblings()
		        	$("nav a").not(this)
		        	.animate( { backgroundColor: "transparent" }, 100)	
		        	.hover(
		        		function(){
				        	$(this).animate( { backgroundColor: "#000" }, 200);
			        	},function(){
				        	$(this).animate( { backgroundColor: "transparent" }, 100);
			        });	

			        //animate body
			        var $anchor = $(this);
			        $('html, body').stop(false, true).animate(
			        	{scrollTop: $($anchor.attr('href')).offset().top}, 
			        	1500, 
			        	'easeInOutExpo'
			        );
			        event.preventDefault();
	        	});

	        	$(function() {
				    $('.menu a').click(function(event){

				    	//animate body
				        var $anchor = $(this);
				        $('html, body').stop(false, true).animate(
				        	{scrollTop: $($anchor.attr('href')).offset().top}, 
				        	1500, 
				        	'easeInOutExpo'
				        );
				        event.preventDefault();

				        $("nav a").animate( { backgroundColor: "transparent" }, 200);
				        if($anchor.attr('href')=="#portfolio")
				        	$("nav a:contains('PORTFOLIO')").animate( { backgroundColor: "#000" }, 200);
				        else if($anchor.attr('href')=="#about")
				        	$("nav a:contains('ABOUT ME')").animate( { backgroundColor: "#000" }, 200);
				        else if($anchor.attr('href')=="#contact")
				        	$("nav a:contains('CONTACT')").animate( { backgroundColor: "#000" }, 200);

				    });
				});

	        	
	        
	        	//resize nav left block
	        	
        		resize_nav_left_bg();
	        	
	        	$(window).resize(resize_nav_left_bg);
					        	
		        function resize_nav_left_bg(){
			       	$("#header_bg_left").css("width",function(){
		        		return (window.innerWidth - 960)/2;
		        	});		
		        }
		        
		       
		       //gallery animation
		       
				$(function() {
					$(".overlay").css("opacity","1");
					$(".overlay").hover(
						function () {
							$(this).stop().animate({opacity: 0}, 200);
						},
						function () {
							$(this).stop().animate({opacity: 1}, 200);
					});
				});
				
				//last page resize (for bigger screen resolution)
				$(function(){
					if(window.innerHeight>680)
						$(".contact").css("height",window.innerHeight);
				});
		       	        	
        	});
        	
        	
        	
        	
        </script> 

	<footer>
		&copy; 2012 Snoweria Zhang
	</footer>

</body>
</html>