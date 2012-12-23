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

});  