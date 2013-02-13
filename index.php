<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<title>
		Snoweria Zhang
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
	<meta name="title" content=" Snoweria Zhang" />
	<meta name="copyright" content="Copyright (c) 2012 Snoweria Zhang" />

	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,300italic,400|Neuton' rel='stylesheet' type='text/css'>
	<link rel="Shortcut Icon" href="images/icon.ico" type="image/ico" />

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

	<!--BEGIN mobile redirect-->
	<script type="text/javascript">
		if ((navigator.userAgent.match(/iPhone/i)) || 
			(navigator.userAgent.match(/iPod/i)) || 
			(navigator.userAgent.match(/Android/i)) ||
			(navigator.userAgent.match(/webOS/i)) ||
			(navigator.userAgent.match(/Windows Phone OS 7/i)) ||
			(screen.width <=500) ||
			(window.innerWidth <=500)){
				document.location="mobile/index.html";
		   //location.replace("http://snoweria.com/mobile.html");
			}
		window.onresize=function(){
			if (window.innerWidth <=500){
				document.location="mobile/index.html";
			}
		};

	</script>
	<!--END mobile redirect-->


	<!--jQuery.easing.js included in jQuery.js-->
	<script src="JS/jQuery.js" type="text/javascript" charset="utf-8"></script>
	<script src="JS/jQuery.easing.js" type="text/javascript" charset="utf-8"></script>
	<script src="JS/jquery-ui-1.9.1.custom.min.js" type="text/javascript" charset="utf-8"></script> 
	<script src="JS/contact_form.js" type="text/javascript" charset="utf-8"></script>
	<!--[if IE]>  
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>  
	<![endif]-->  

</head>

<body>

	<header>
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
	    	<p class="light">Portfolio available in <a href="portfolio/portfolio_SnoweriaZhang.pdf" alt="PDF portfolio" target="_blank">PDF</a></p>
	    	
	        <div class="gallery">
	        	<a class="image" href="portfolio/index.html?id=Architecture"><span class="overlay"><p>architecture</p></span><img src="images/port_arch.jpg" /></a><!--
		     --><a class="image" href="portfolio/index.html?id=Fashion"><span class="overlay"><p>fashion</p></span><img src="images/port_fashion.jpg" /></a><!--
		     --><a class="image" href="portfolio/index.html?id=Drawing"><span class="overlay"><p>drawing</p></span><img src="images/port_draw.jpg" /></a><!--
		     --><a class="image" href="portfolio/index.html?id=Painting"><span class="overlay"><p>painting</p></span><img src="images/port_paint.jpg" /></a>
	        </div>
	        <div class="gallery">
	        	<a class="image" href="portfolio/index.html?id=Photo"><span class="overlay"><p>photography</p></span><img src="images/port_photo.jpg" /></a><!--
		     --><a class="image" href="portfolio/index.html?id=Set"><span class="overlay"><p>set design</p></span><img src="images/port_set.jpg" /></a><!--
		     --><a class="image" href="portfolio/index.html?id=Web"><span class="overlay"><p>web design</p></span><img src="images/port_web.jpg" /></a><!--
		     --><a class="image" href="portfolio/index.html?id=Misc"><span class="overlay"><p>misc.</p></span><img src="images/port_misc.jpg" /></a>
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
	        <p class="dark">Hi! My name is <a href="http://www.snoweria.com" alt="www.snoweria.com">Snoweria</a>. I am an artist + designer who enjoys mathematics, earrings, and tea.</p>
			<p class="dark">A naturalized Canadian citizen, I have lived and worked in many cities, including Toronto, Boston, Shanghai, Paris, and London. As a result, I am a teensy confused culturally. My work draws inspiration from my travels, daydreams, and actual dreams. </p>
			<p class="dark">I own 43 pairs of <a href="portfolio/index.html?id=Fashion" alt="Porfolio | Fashion">earrings</a>, 21 of which I made from things on their way to the trash can. None of them match the <a href="portfolio/index.html?id=Fashion" alt="Portfolio | Fashion">dresses</a> I have designed. </p>
			<p class="dark">In May, 2012, I graduated from Harvard University with B.A. in <a href="" alt="" id="thesis_click">mathematics</a> and minor in fine arts.</p>
			<p class="dark" id="thesis_paragraph">In case you are curious, I wrote my senior thesis on aperiodic tiling and Islamic architecture. </p>
			<img src="images/snoweria.png" alt="Snoweria Zhang" id="photo_snoweria"/>
		</div>
	</div>
	<!--END about page-->

	
	<!--BEGIN contact page-->
	<div class="contact">
    	<a id="contact"></a>
    	<div class="divider"><img src="images/divider_about.png" alt=""/></div>
        <h2>Contact me</h2>

        <p class="light">I would love to hear from you, especially if you have yummy tea suggestions! Please send me an email at <a href="mailto:snoweriazhang@gmail.com" target="_blank">snoweriazhang@gmail.com</a> or use the form on the left. </p>
		<p class="light">Alternatively, you can find me on <a href="http://www.linkedin.com/pub/snoweria-zhang/45/372/aa5" alt="Snoweria's LinkedIn" target="_blank">LinkedIn</a> or <a href="https://github.com/snoweriazhang" alt="Snoweria's GitHub" target="_blank">GitHub</a>.</p>
 
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

	       
	       //gallery animation
			$(function() {
				$(".overlay").css("opacity","1");
				$(".overlay").hover(
					function () {
						$(this).stop().animate({opacity: 0}, 200);
					},
					function () {
						$(this).stop().animate({opacity:1}, 200);
				});
			});
			
			//last page resize (for bigger screen resolution)
			$(function(){
				if(window.innerHeight>680)
					$(".contact").css("height",window.innerHeight);
			});

			//show thesis_paragraph
			$('#thesis_paragraph').css('display','none');
			$('#thesis_click').click(function(){
				event.preventDefault();
				$('#thesis_paragraph').fadeIn(200);
			});

	       	        	
    	});
    		
    </script> 

<footer>
	&copy; 2012 Snoweria Zhang
</footer>

</body>
</html>