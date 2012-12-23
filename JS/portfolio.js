$(document).ready(function(){

	// nav animation
	        		
	$("nav a").not(".current").hover(
		function(){
        	$(this).animate( { backgroundColor: "#000" }, 200);
    	},function(){
        	$(this).animate( { backgroundColor: "transparent" }, 100);
	});

	// scroll to top

    $('.top a').click(function(event){
    	//animate body
        var $anchor = $(this);
        $('html, body').stop(false, true).animate(
        	{scrollTop: $($anchor.attr('href')).offset().top}, 
        	1500, 
        	'easeInOutExpo'
        );
        event.preventDefault();
    });

    //change position attribute of header and filter on scroll
	$(window).scroll(function() {
		//alert("Hi");
	    if ($(document).scrollTop() > 167) {
	        $("#filters_container").css({
	            'position': 'fixed', 
	            'top': '-167px'
	        });
	    } else {
	        $("#filters_container").css({
	            'position': 'absolute',
	            'top':'0px'
	        });
	    }
	});

   
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

	/*--------------------------------------------------
		FILTER
	----------------------------------------------------*/      	 
	// This filter is later used as the selector for which grid items to show.
      	// Get variable from url and set filter
		var filter = getUrlVars()["id"];

		function getUrlVars() {
		    var vars = {};
		    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		        vars[key] = value;
		    });
		    return vars;
		}

      var handler;
      
      // Prepare layout options.
      var options = {
        autoResize: true, // This will auto-update the layout when the browser window is resized.
        container: $('#main'), // Optional, used for some extra CSS styling
        offset: 17, // Optional, the distance between grid items
        itemWidth: 310 // Optional, the width of a grid item
      };
      
      // This function filters the grid when a change is made.
      var refresh = function() {
        // Clear our previous handler.
        if(handler) {
          handler.wookmarkClear();
          handler = null;
        }
        
        // This hides all grid items ("inactive" is a CSS class that sets opacity to 0).
        $('#tiles li').addClass('inactive');
        
        // Create a new layout selector with our filter.
        handler = $(filter);
        
        // This shows the items we want visible.
        handler.removeClass("inactive");
        
        // This updates the layout.
        handler.wookmark(options);
      }
      
      /**
       * This function checks all filter options to see which ones are active.
       * If they have changed, it also calls a refresh (see above).
       */
      var updateFilters = function() {
        var oldFilter = filter;
        filter = '';
        var filters = [];
        
        // Collect filter list.
        var lis = $('#filters li');
        var i=0, length=lis.length, li;
        for(; i<length; i++) {
          li = $(lis[i]);
          if(li.hasClass('active')) {
            filters.push('#tiles li.'+li.attr('data-filter'));
          }
        }
        
        // If no filters active, set default to show all.
        if(filters.length == 0) {
          filters.push('#tiles li');
        }
        
        // Finalize our filter selector for jQuery.
        filter = filters.join(', ');
        
        // If the filter has changed, update the layout.
        if(oldFilter != filter) {
          refresh();
        }
      };
      
      /*
       * When a filter is clicked, toggle it's active state and refresh.
       */

        var onClickFilter = function(event) {
	   	    var item = $(event.currentTarget);
	   	    if(item.text()=='ALL'){
	   	    	$('#filters li').removeClass('active');
	   	    }else{
	   	       item.siblings().removeClass('active');
		   	   item.toggleClass('active'); 
	   	    }
	        updateFilters();
       }
      
      // Capture filter click events.
      $('#filters li').click(onClickFilter);

      // Do initial update (show selected items)
      $("#filters li:contains("+filter+")").toggleClass('active');
      updateFilters();

     /*--------------------------------------------------
		OVERLAY ANIMATION
	----------------------------------------------------*/    

	$(function() {
		$(".overlay").css("opacity","0");
		$(".overlay").hover(
			function () {
				$(this).stop().animate({opacity: 1}, 200);
				$(this).css('height',$(this).parent().height()-21);
			},
			function () {
				$(this).stop().animate({opacity: 0}, 200);
		});
	});

	/*--------------------------------------------------
		MODAL
	----------------------------------------------------*/   

	$id='';

    function showART(str){
		
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200){
		  	$("#txtHint").html(xmlhttp.responseText);
		  	//position image
		  	$art_height=$('img.art').attr('height');
	   		$art_width=$('img.art').attr('width');
	    	$('img.art').css('left',360-$art_width/2).css('top',265-$art_height/2);
		  }
		  if (xmlhttp.readyState==1 || xmlhttp.readyState==2 || xmlhttp.readyState==3){
		  	$("#txtHint").html("<p class='alert'>Loading...<p>");
		  }
		  if (xmlhttp.status==404){
		  	$("#txtHint").html("<p class='alert'>Image not found.</p>");
		  }
		}
		xmlhttp.open("GET","getlist.php?q="+str,true);
		xmlhttp.send();

	}

	$('#modal').hide();
	
	//show modal on click
	$('ul li').click(function(){
		$id=this.id;
		showART($id);
		$('#modal').fadeIn(200);
	});
	
	//hide modal when area outside of modal is clicked
	$('#modal').click(function(event){
	    if (event.target == $('#modal').get(0)){
			$('#modal').fadeOut(200);
	    }
	    
    });
    
    //hide modal when close button is closed
    $('#close').click(function(){
	    $('#modal').fadeOut(500);
    });
    
    $('#prev').click(function(){
        $id=$('#'+$id).prevAll().not('.inactive').first().attr('id');
        if($id==undefined)
	        $id=$('ul li').not('.inactive').last().attr('id');
	    showART($id);
    });
    
    $('#next').click(function(){
        $id=$('#'+$id).nextAll().not('.inactive').first().attr('id');
        if($id==undefined)
	        $id=$('ul li').not('.inactive').first().attr('id');
	    showART($id);
    });

});
 	