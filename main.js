$(document).ready(function() {
 	$('#cloud').hide();
 	$('#cloud .top').click(function(){
 		$('html, body').animate({
 		scrollTop: $('body').offset().top
 		}, 2000);
 		
 	});
 	$('#kite').click(function(){
	 	$('html, body').animate({
	 	scrollTop: $('#kiteproj').offset().top
	 	}, 1000,function(){
	 	   });
 	});
 	$('#igdis').click(function(){
 		$('html, body').animate({
 		scrollTop: $('#igdisproj').offset().top
 		}, 1000,function(){
 		   });
 	});
 	$('#whoop').click(function(){
 		$('html, body').animate({
 		scrollTop: $('#whoopproj').offset().top
 		}, 1500,function(){
 		   });
 	});
 	$('#neblot').click(function(){
 		$('html, body').animate({
 		scrollTop: $('#neblotproj').offset().top
 		}, 2000,function(){
 		   });
 	});
 	$('#cloud .rez').click(function(){
 		$('html, body').animate({
 		scrollTop: $('#resume').offset().top
 		}, 2000);
 		
 	});
 	$('#cloud .abocon').click(function(){
 		$('html, body').animate({
 		scrollTop: $('#about').offset().top
 		}, 2000);
 		
 	});
 	$('#nav li').click(function(e){
 		//console.log(e.target);
 		e.preventDefault();
 		var nava = $(e.target).closest('a').attr('href');
 		$('html, body').animate({
 		scrollTop: $(nava).offset().top
 		}, 2000,function(){
 		   });
 		
 	});
 	$('#windthing').css('background','none');
 	//$('#submit').attr('disabled','disabled');
 	function isiPhone(){
 	    return (
 	        (navigator.platform.indexOf("iPhone") != -1) ||
 	        (navigator.platform.indexOf("iPod") != -1)
 	    );
 	}
 	
 	$('#portbody .portproj .thumbnails img').click(function(e){
 		var srcimg = $(e.target).attr('src');
 		srcimg = srcimg.replace("tiny", "big").replace("images/","");
 		//console.log($("img[src$='"+srcimg+"']"));
 		//$(e.target).parent().parent().find('img.mainimg').attr('src',srcimg);
 		//console.log($(e.target).parent().parent().find('img.mainimg'));
 		$(e.target).parent().parent().find('img.mainimg').hide().change();
 		$("img[src$='"+srcimg+"']").fadeIn();
 	
 	});
 	if(!isiPhone()){
 	  $(window).scroll(function(){
 	  	//console.log($(window).scrollTop());
 	  	if($(window).scrollTop() > 500){
 	  		if(jQuery.browser.msie){
 	  		$('#cloud').show();
 	  		}else{
 	  		$('#cloud').fadeIn();
 	  		}
 	  	}else{
 	  		if(jQuery.browser.msie){
 	  		$('#cloud').hide();
 	  		}else{
 	  		$('#cloud').fadeOut();
 	  		}
 	  	}
 	  });
 	}
 	$('#portfolio .piecehead').hover(function(e){$(this).children('img.overlap').fadeTo(500, 1)},function(e){$(this).children('img.overlap').stop().fadeTo(1000, 0)});
 	
 	//$('#overlay').prepend('<div id="touch"></div>');
 	//$('#topmenu').html('<span class="kite-gray"></span><span class="igdis-gray"></span><span class="whoop-gray"></span>');
 	$("#topmenu").delegate("a", "click", function(e){
 		e.preventDefault();
 		if (e.target.nodeName == "SPAN"){
 		var loaditems = $(e.target).parent('a').attr('class');
 		$(e.target).parent('a').append('<img class="load" src="images/93232.gif"/>');
 		} else if (e.target.nodeName == "A"){
 		var loaditems = $(e.target).attr('class');
 		$(e.target).append('<img class="load" src="images/93232.gif"/>');
 		}	
 	}); 
 intializer = {
 	pplOn : 0,
 	writepeopletodom : function(){
 			var persons=["images/build3.png","images/build2.png","images/build4.png"];
 			var processed=[];
 			for (i=0;i<persons.length;i++){
 			processed[i]=new Image();
 			processed[i].src = persons[i];
 			}
 			
 			
 			var i=0;
 			kittycat = setInterval (function(){
 			//for (i=0;i<=5;i++){
 			if(intializer.pplOn < 25){
 				rainpeople.createpeople(i,processed[0],processed[1],processed[2], GetWidth());
 				intializer.pplOn++;
 				}
 			//}
 			
 			//console.log(intializer.pplOn);
 			i++;
 			}, 1250);
 			kittycatz = setInterval (function(){
 				c.rotate(.5);
 			},83);
 	},
 	writedinotodom : function(){
 			var persons=["images/build4.png"];
 			var processed=[];
 			processed[0]=new Image();
 			processed[0].src = persons[0];
 				rainpeople.createdinosaurz((Math.floor(Math.random()*1000)),processed[0], GetWidth());
 	}
 	}
 	var paper = Raphael(document.getElementById("windthing"), 148, 148);
 	var c = paper.image("images/windthing.png", 0, 0, 148, 148);
 	intializer.writepeopletodom();
 	$("#mainBody").delegate(".midimgnav img", "click", function(e){
 		var kitten = $(e.target).attr('src').toString().replace("tiny", "body");
 		$('#imagearea img').attr('src', kitten);
 		$('#imagearea img').change();
 	});

	$('#seedino').click(function(){
		intializer.writedinotodom();
		$('html, body').animate({
		scrollTop: $('body').offset().top
		}, 2000,function(){
		   $('.dino').click();
		   });
		
	});
});
function getStyle(el,styleProp)
{
	var x = document.getElementById(el);
	if (x.currentStyle)
		var y = x.currentStyle[styleProp];
	else if (window.getComputedStyle)
		var y = document.defaultView.getComputedStyle(x,null).getPropertyValue(styleProp);
	return y;
}

 function GetWidth()
 {
         var x = 0;
         if (self.innerHeight)
         {
                 x = self.innerWidth;
         }
         else if (document.documentElement && document.documentElement.clientHeight)
         {
                 x = document.documentElement.clientWidth;
         }
         else if (document.body)
         {
                 x = document.body.clientWidth;
         }
         return x;
 }

 function GetHeight()
 {
         var y = 0;
         if (self.innerHeight)
         {
                 y = self.innerHeight;
         }
         else if (document.documentElement && document.documentElement.clientHeight)
         {
                 y = document.documentElement.clientHeight;
         }
         else if (document.body)
         {
                 y = document.body.clientHeight;
         }
         return y;
 }
  function findPosX(obj)
  {
    var curleft = 0;
    if(obj.offsetParent)
        while(1) 
        {
          curleft += obj.offsetLeft;
          if(!obj.offsetParent)
            break;
          obj = obj.offsetParent;
        }
    else if(obj.x)
        curleft += obj.x;
    return curleft;
  }

  function findPosY(obj)
  {
    var curtop = 0;
    if(obj.offsetParent)
        while(1)
        {
          curtop += obj.offsetTop;
          if(!obj.offsetParent)
            break;
          obj = obj.offsetParent;
        }
    else if(obj.y)
        curtop += obj.y;
    return curtop;
  }