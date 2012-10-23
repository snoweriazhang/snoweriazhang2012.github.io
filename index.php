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

	<link rel="Shortcut Icon" href="images/icon.ico" type="image/ico" />

	<!-- iPhone/iPad -->
	<!--
	<meta name="viewport" content="width=980" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">
	-->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


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
			document.location="mobile.html"
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

	<?php require($DOCUMENT_ROOT . "header.html");?>

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
	    <div class="content">
	    	<!--<p class="light">Portfolio available in <a href="">PDF</a></p>-->
	    	
	        <div class="gallery">
	        	<a class="image" href="">
	        		<span class="overlay"><p>architecture</p></span>
		        	<img src="images/port_arch.jpg" />
		        </a>
		        <a class="image" href="">
	        		<span class="overlay"><p>fashion</p></span>
		        	<img src="images/port_fashion.jpg" />
		        </a>
		        <a class="image" href="">
	        		<span class="overlay"><p>drawing</p></span>
		        	<img src="images/port_draw.jpg" />
		        </a>
		        <a class="image" href="">
	        		<span class="overlay"><p>painting</p></span>
		        	<img src="images/port_paint.jpg" />
		        </a>
	        </div>
	        <div class="gallery">
	        	<a class="image" href="">
	        		<span class="overlay"><p>photography</p></span>
		        	<img src="images/port_photo.jpg" />
		        </a>
		        <a class="image" href="">
	        		<span class="overlay"><p>set design</p></span>
		        	<img src="images/port_set.jpg" />
		        </a>
		        <a class="image" href="">
	        		<span class="overlay"><p>web design</p></span>
		        	<img src="images/port_web.jpg" />
		        </a>
		        <a class="image" href="">
	        		<span class="overlay"><p>misc.</p></span>
		        	<img src="images/port_misc.jpg" />
		        </a>
	        </div>

	        
		</div>
	</div>	
	<!--END portfolio page-->

	<!--BEGIN about page-->
	<div class="about">
    	<a id="about"></a>
    <!--
        <h2>About me</h2>
        <img src="images/snoweria.png" alt="Snoweria Zhang" />
        <p>Hi! My name is <a href="http://www.snoweria.com" alt="www.snoweria.com">Snoweria</a>. I am an artist + designer who<br/> enjoys mathematics, earrings, and tea.</p>
		<p>A Canadian citizen, I have worked and lived in many cities,<br/> including Boston, Shanghai, Paris, and London. As a result, <br/>I am a teensy culturally “messed up.” My work draws <br/>inspiration from my travels, daydreams, and actual dreams. </p>
		<p>I own 43 pairs of <a href="fashion.html" alt="www.snoweria.com/fashion.html">earrings</a>, 21 of which I made from things <br/>my friends threw away. None of them match the <a href="fashion.html" alt="www.snoweria.com/fashion.html">dresses</a> <br/>I have designed. </p>
		<p>In May, 2012, I graduated from Harvard University with a B.A.<br/> in <a href="" alt="">mathematics</a> and a minor in fine arts.</p>
	-->
	</div>
	<!--END about page-->

	
	<!--BEGIN contact page-->
	<div class="contact">
    	<a id="contact"></a>
    <!--
	 	<img src="images/icon_contact.png" />
        <h2>Contact Me</h2>

        <p>Please feel free to contact me about my work or to suggest<br/> improvements to my portfolio. You may email me at<br/> <a href="">snoweriazhang@gmail.com</a> or use the form on the left. </p>
		<p>Alternatively, you can fine me on <a href="" alt="">LinkedIn</a> or <a href="" alt="">GitHub</a>.</p>
       

        <div id="sendform">            
        	<div id="response"></div>

         	<form id="formail" action="" method ="post" name="sendform">
				<input type="text" name="subject" id="subject" value="Name" onclick="this.value='';" onfocus="this.select()" onblur=
                "this.value=!this.value?'Name':this.value;" /><br />
				<input type="text" name="mail" id="mail" value="Email Address" onclick="this.value='';" onfocus="this.select()" onblur=
                "this.value=!this.value?'Email Address':this.value;" /><br />
				<textarea name="text" rows="" cols="" id="text" onclick="document.sendform.text.value='';" onfocus="this.select()" onblur=
                "document.sendform.text.value=!document.sendform.text.value?'Message':this.value;">Message</textarea> <br />
            	<input type="image" src="images/submit_button.png" onmouseover='this.src="images/submit_button_hover.png"' onmouseout=
                'this.src="images/submit_button.png"' alt="Submit" class="submit" id="sendmail" name="sendmail" value="send mail" />
			</form>
		</div>
	-->
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
			        	$(this).animate( { backgroundColor: "transparent" }, 200);
	        	}).click(function(){

		        	$(this).animate( { backgroundColor: "#000" }, 200).unbind("hover");
		        	
		        	$(this).siblings()
		        	.animate( { backgroundColor: "transparent" }, 200)	
		        	.hover(
		        		function(){
				        	$(this).animate( { backgroundColor: "#000" }, 200);
			        	},function(){
				        	$(this).animate( { backgroundColor: "transparent" }, 200);
			        });	

			        //animate body
			        var $anchor = $(this);
			        $('html, body').stop(false, true).animate(
			        	{scrollTop: $($anchor.attr('href')).offset().top}, 
			        	1000, 
			        	'easeInOutExpo'
			        );
			        event.preventDefault();
	        	});

	        	$(function() {
				    $('.menu a').click(function(){

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
				
				
		       	        	
        	});
        	
        	
        	
        	
        </script> 

	<?php require($DOCUMENT_ROOT . "footer.html");?>

</body>
</html>