$(document).ready(function(){var MAX_KOL_VISITED=2;var counter_scrolled;$('.close-button').click(function(e){$('.pop-up').fadeOut(700);$('#overlay').removeClass('blur-in');$('#overlay').addClass('blur-out');e.stopPropagation();$.cookie("UserIsVisited",-100,{path:"/"});$.cookie("UserIsScrolled",1,{path:"/"});counter_scrolled=1;return false;});var uScrl=$.cookie("UserIsScrolled");if(uScrl!=null){counter_scrolled=Number($.cookie("UserIsScrolled"));}
else
{$.cookie("UserIsScrolled",0,{expires:3,path:"/"});counter_scrolled=0;}
$(window).scroll(function(){if(counter_scrolled==0)
{if($(this).height()<$(this).scrollTop()){$('.pop-up').fadeIn(1000);}}});var uVis=$.cookie("UserIsVisited");if(uVis!=null)
{var counter_visited=Number($.cookie("UserIsVisited"));if(counter_visited==MAX_KOL_VISITED)$('.pop-up').fadeIn(1000);else $.cookie("UserIsVisited",counter_visited+1,{path:"/"});}
else{$.cookie("UserIsVisited",1,{expires:3,path:"/"});}});