$(document).ready(function(){  
  // nav animation
  $("nav a").not(".current").hover(
    function(){
      $(this).animate( { backgroundColor: "#000" }, 200);
    },function(){
      $(this).animate( { backgroundColor: "transparent" }, 100);
  });

    //reposition figcaption
    $art_width=$('figure img').attr('width');
    $('figure figcaption').css('margin-left', (670-$art_width)/2).css('width',$art_width);

    //reposition social media icon
     $('#social_media').css('left',function(){
        return (parseInt($('figure img').attr('width'))/2+window.innerWidth/2+15);
     });

    if ((navigator.userAgent.match(/iPhone/i)) || 
      (navigator.userAgent.match(/iPod/i)) || 
      (navigator.userAgent.match(/Android/i)) ||
      (navigator.userAgent.match(/webOS/i)) ||
      (navigator.userAgent.match(/Windows Phone OS 7/i)) ||
      (screen.width <=480)) {
      document.location="../../mobile/"
       //location.replace("http://snoweria.com/mobile.html");
    }

});  