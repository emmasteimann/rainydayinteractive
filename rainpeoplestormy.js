	rainpeople = {
	
	setToRed : function (e)
	{	
		var a = 0;
		var blah = 0;
		if (!e) var e = window.event;
		var $target = $(e.target.id);
		var yayz = "wooMoveIntervalId" + $(e.target.id);
		var yayq = "wooYayIntervalId" + $(e.target.id);
		yayz = setInterval(function(){
			var boom = Math.floor(Math.random()*8);
			$(e.target).css('right',function(){
				return (parseInt($(e.target).css('right').replace("px", ""))-boom);
			});
			var bool = Math.random();
			var flip = 1;
			if (bool >= 0.5){
				flip = -1;
			} else{
				flip = 1;
			}
			var shoom = Math.floor(Math.random()*2);
			//console.log((bool));	
			$(e.target).css('top',function(){
				return (parseInt($(e.target).css('top').replace("px", ""))+(shoom * flip));
			});
			if ($(e.target).position().left > GetWidth()-100){
				$(e.target).fadeTo('slow', 0, function() {
				      $(e.target).remove();
				      clearInterval ( yayz );
				    });
			}
			
		}, 83);
		
		if(a != 12) {
	 		yayq = setInterval ( function(){
		 		a++;
		 		//console.log(a);
		 		if (a == 12){
		 			$(e.target).unbind();
		 		} else{
		 			if (a>0){
		 				$(e.target).unbind('click');
		 			}
			 		if(a < 12) {
			 			var meow = (blah - 65) + "px 0px";
			 			//console.log(meow);
			 			$(e.target).css('background-position',meow);
			 			return blah = (blah - 65);
			 			
			 			
			 			
			 		} else {
			 			clearInterval ( yayq );
			 			
			 		}
		 		}
	 		}, 83 );
	
	 	}
	},//end setToRed
	setToDino : function (e)
	{	
		var a = 0;
		var blah = 0;
		if (!e) var e = window.event;
		var $target = $(e.target.id);
		var yayz = "wooMoveIntervalId" + $(e.target.id);
		var yayq = "wooYayIntervalId" + $(e.target.id);
		if(a != 12) {
				yayq = setInterval ( function(){
		 		a++;
		 		//console.log(a);
		 		if (a == 12){
		 			$(e.target).unbind();
		 		} else{
		 			if (a>0){
		 				$(e.target).unbind('click');
		 			}
			 		if(a < 12) {
			 			var meow = (blah - 144) + "px 0px";
			 			//console.log(meow);
			 			$(e.target).css('background-position',meow);
			 			return blah = (blah - 144);
			 			
			 		} else {
			 			clearInterval ( yayq );
			 			
			 		}
		 		}
				}, 83 );
			
			 	}
		yayz = setInterval(function(){
			var boom = Math.floor(Math.random()*8);
			$(e.target).css('right',function(){
				return (parseInt($(e.target).css('right').replace("px", ""))+boom);
			});
			var bool = Math.random();
			var flip = 1;
			if (bool >= 0.5){
				flip = -1;
			} else{
				flip = 1;
			}
			var shoom = Math.floor(Math.random()*9);
			//console.log((bool));	
			if(a > 6) {
				$(e.target).css('top',function(){
					return (parseInt($(e.target).css('top').replace("px", ""))+15);
				}); 
			}
			var checker = $(e.target).position();
			//console.log(checker);
			if (checker != null){
				if (checker.top > 200){
					//clearInterval ( yayz );
					$(e.target).fadeTo('slow', 0, function() {
					      $(e.target).remove();
					      clearInterval ( yayz );
					    });
					
					
				}
				if (checker.left < 0){
					//clearInterval ( yayz );
					$(e.target).remove();
					clearInterval ( yayz );
				}
			}
			
		}, 83);
		

	},//end setToDino
	createdinosaurz : function(e,b1,shazoo){
			var screenwidth = shazoo;
			var temp = (Math.floor(Math.random()*GetWidth())).toString() + "px";
			
				var image = "build4.png";
				$('#maintop').append("<div id='raindino"+e+"' class='dino' style='right:"+temp+"'></div>");
				$("#raindino"+e).css('background-image','url("'+b1.src+'")');
			
			//console.log(temp);
			//$('#maintop').append($("<div />", { class: "rain", id:"rainperson"+i,})).css("right", temp);
			//$('#maintop').append("<div id='rainperson"+e+"' class='rain' style='right:"+temp+"; background-image:url(\""+image+"\");'></div>");
			var interva = "wooMoveIntervalId" + e;
			
				$("#raindino"+e).click(function(evt){
					rainpeople.setToDino(evt);
					clearInterval ( interva );
					});
			
			
			interva	 = setInterval (function(){
				$("#raindino"+e).css('top',function(){
					var boom = Math.floor(Math.random()*3);
					return (parseInt($("#raindino"+e).css('top').replace("px", ""))+boom);
				});
				$("#raindino"+e).css('right',function(){
					var boom = Math.floor(Math.random()*3);
					return (parseInt($("#raindino"+e).css('right').replace("px", ""))+boom);
				});
				var checker = $('#raindino'+e).position();
				//console.log(checker);
				if (checker != null){
					if (checker.top > 400){
						//clearInterval ( yayz );
						$("#raindino"+e).fadeTo('slow', 0, function() {
						      $("#raindino"+e).remove();
						      clearInterval ( interva );
						    });
						
						
					}
					if (checker.left < 10){
						//clearInterval ( yayz );
						
						
						$("#raindino"+e).fadeTo('slow', 0, function() {
						     $("#raindino"+e).remove();
						      clearInterval ( interva );
						    });
					}
				}
			},83);
	},//end createpeople
	createpeople : function(e,b1,b2,b3, shazoo){
			var screenwidth = shazoo;
			var temp = (Math.floor(Math.random()*GetWidth())).toString() + "px";
			var bool = Math.random();
			var turnOff = false;
			var switchOff = 0;
			
			
			
			
			if (bool >= 0.55){
				var image = "build2.png";
				$('#maintop').append("<div id='rainperson"+e+"' class='rain' style='right:"+temp+";'></div>");
				$("#rainperson"+e).css('background-image','url("'+b1.src+'")');
				
 			} else if (bool >= 0.1){
				var image = "build3.png";
				$('#maintop').append("<div id='rainperson"+e+"' class='rain' style='right:"+temp+";'></div>");
				$("#rainperson"+e).css('background-image','url("'+b2.src+'")');
			} else{
				var image = "build4.png";
				$('#maintop').append("<div id='rainperson"+e+"' class='dino' style='right:"+temp+"'></div>");
				$("#rainperson"+e).css('background-image','url("'+b3.src+'")');
			}
			//console.log(temp);
			//$('#maintop').append($("<div />", { class: "rain", id:"rainperson"+i,})).css("right", temp);
			//$('#maintop').append("<div id='rainperson"+e+"' class='rain' style='right:"+temp+"; background-image:url(\""+image+"\");'></div>");
			var interva = "wooMoveIntervalId" + e;
			interva	 = setInterval (function(){
				if(turnOff){
					if(switchOff < 1){
						intializer.pplOn--;
					}
					switchOff=1;
				}
				
				$("#rainperson"+e).css('top',function(){
					var boom = Math.floor(Math.random()*3);
					return (parseInt($("#rainperson"+e).css('top').replace("px", ""))+boom);
				});
				$("#rainperson"+e).css('right',function(){
					var boom = Math.floor(Math.random()*3);
					return (parseInt($("#rainperson"+e).css('right').replace("px", ""))+boom);
				});
				var checker = $('#rainperson'+e).position();
				//console.log(checker);
				if (checker != null){
					if (checker.top > 350){
						turnOff = true;
						//clearInterval ( yayz );
						$("#rainperson"+e).fadeTo('slow', 0, function() {
						      $("#rainperson"+e).remove();
						      clearInterval ( interva );
						    });
						
						
					}
					if (checker.left < 50){
						//clearInterval ( yayz );
						
						turnOff = true;
						$("#rainperson"+e).fadeTo('slow', 0, function() {
						     $("#rainperson"+e).remove();
						      clearInterval ( interva );
						    });
					}
				}
			},83);
	}//end createpeople
	
	
}
