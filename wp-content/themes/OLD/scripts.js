//USE THE BELOW AS TEMPLATE FOR FUNCTION FILES
(function ($, root, undefined) {
	
	$(function () {

		// YOUR CODE HERE

	});

})(jQuery, this);
(function ($, root, undefined) {
	
	$(function () {

		var $this = $(".menuToggle")
			menu = $(".header")
			menuItem = menu.find("li")
			ham1 = $(".hamTop")
			ham2 = $(".hamMid")
			ham3 = $(".hamBot")
			theBody = $("body")
			theMain = $("main")
			logo = $(".mobile-logo")
			headerInfo = $(".headerInfo div")
			backing = $(".headerBackground")
			uniTime = .3
			uniTime2 = .5
			
		$(".menuToggle").on("click", function() {
	

			if (screen.width <= 767) {

				if($this.hasClass('openMenu')) {
					closeMenuMobile();
				} else {
					openMenuMobile();
				}
			} 
			else {
				
				if($this.hasClass('openMenu')) {
					closeMenuDesktop();
				} else {
					openMenuDesktop();
				}
			}
		});

		function openMenuMobile() {
			var tl = new TimelineMax()
			tl.set(backing, {zIndex:98})
				.to(backing, uniTime2, {opacity:.9}, "menuOpen")
				.staggerTo(headerInfo, uniTime2, {opacity:1, y:0}, .1, "menuClose+=.3")
				.to(menu, uniTime2, {left:"0%",onComplete:addOpenClass}, "menuOpen")
				.staggerTo(menuItem, uniTime2, {opacity:1, x:0, ease: Elastic.easeOut.config(1, .75)}, .1, "menuOpen+=.5")
				.to(ham1, uniTime, {rotation:-227, x:0, y:3, transformOrigin:"50% 50%"}, "menuOpen")
				.to(ham2, uniTime, {width:"0%", x:"-50%"}, "menuOpen")
				.to(ham3, uniTime, {rotation:227, x:0, y:-4, transformOrigin:"50% 50%"}, "menuOpen")
				.to($this, uniTime, {rotation:-360}, "menuOpen")
				.to(logo, uniTime, {opacity:1}, "menuOpen+=.5")

		}

		function closeMenuMobile() {
			var tl = new TimelineMax()
			tl.to(backing, uniTime2, {opacity:0}, "menuClose+=.5")
			.staggerTo(headerInfo, uniTime2, {opacity:0, y:20}, .1, "menuClose")
			.to(menu, uniTime2, {left:"100%", onComplete:removeOpenClass}, "menuClose+=.5")
			.to(logo, uniTime, {opacity:0}, "menuClose+=.1")
			.staggerTo(menuItem, uniTime2, {opacity:0, x:100, ease: Elastic.easeIn.config(1, .75)}, .04, "menuClose")
			.to(ham1, uniTime, {rotation:0, x:0, y:0, transformOrigin:"50% 50%"}, .1, "menuClose")
			.to(ham2, uniTime, {width:"100%", x:"0%"}, "menuClose")
			.to(ham3, uniTime, {rotation:0, x:0, y:0, transformOrigin:"50% 50%"}, "menuClose")
			.to($this, uniTime, {rotation:0}, "menuClose")
			.set(backing, {zIndex:-1})
		}

		function closeMenuDesktop() {
			var tl = new TimelineMax()
			tl.to(backing, uniTime2, {opacity:0}, "menuClose+=.5")
				.staggerTo(headerInfo, uniTime2, {opacity:0, y:20}, .1, "menuClose")
				.to(menu, uniTime2, {right:"-100%", onComplete:removeOpenClass}, "menuClose+=.5")
				.staggerTo(menuItem, uniTime2, {opacity:0, x:100, ease: Elastic.easeIn.config(1, .75)}, .04, "menuClose")
				.to(ham1, uniTime, {rotation:0, x:0, y:0, transformOrigin:"50% 50%"}, .1, "menuClose")
				.to(ham2, uniTime, {width:"100%", x:"0%"}, "menuClose")
				.to(ham3, uniTime, {rotation:0, x:0, y:0, transformOrigin:"50% 50%"}, "menuClose")
				.to($this, uniTime, {rotation:0}, "menuClose")
				.set(backing, {zIndex:-1})
		}

		function openMenuDesktop() {
			var tl = new TimelineMax()
			tl.set(backing, {zIndex:98})
			.to(backing, uniTime2, {opacity:.9}, "menuOpen")
			.staggerTo(headerInfo, uniTime2, {opacity:1, y:0}, .1, "menuClose+=.3")
			.to(menu, uniTime2, {right:"0%",onComplete:addOpenClass}, "menuOpen")
			.staggerTo(menuItem, uniTime2, {opacity:1, x:0, ease: Elastic.easeOut.config(1, .75)}, .1, "menuOpen+=.5")
			.to(ham1, uniTime, {rotation:-227, x:0, y:5, transformOrigin:"50% 50%"}, "menuOpen")
			.to(ham2, uniTime, {width:"0%", x:"-50%"}, "menuOpen")
			.to(ham3, uniTime, {rotation:227, x:0, y:-5, transformOrigin:"50% 50%"}, "menuOpen")
			.to($this, uniTime, {rotation:-360}, "menuOpen")
		}
		

		function addOpenClass() {
			$this.addClass('openMenu');
		}

		function removeOpenClass() {
			$this.removeClass('openMenu');
		}



		function closeAboutPage() {
			var tl = new TimelineMax()
					page = $(".aboutPage")
					aboutClose = $(".aboutClose")
					aboutHeadline = $(".aboutHeadline")
					aboutSig = $(".aboutSig")
					words = $(".aboutPage p")
					aName = $(".aboutName")
					uniTime = .3
					uniTime2 = .5

			tl.set(theBody, {height:"auto", overflow:"visible"})
				.to([aName, words], uniTime, {opacity:0}, "aboutClosed-=.2")
				.to(aboutHeadline, uniTime, {opacity:0, y:40}, "aboutClosed")
				.to(aboutSig, uniTime, {opacity:0, y:-40}, "aboutClosed")
				.to(aboutClose, uniTime, {opacity:0, rotation:0}, "aboutClosed")
				.to(page, uniTime, {top:"100vh"}, "aboutClosed+=.15")
		}


		function openAboutPage() {
  		var tl = new TimelineMax()
				page = $(".aboutPage")
				aboutClose = $(".aboutClose")
				aboutHeadline = $(".aboutHeadline")
				aboutSig = $(".aboutSig")
				words = $(".aboutPage p")
				aName = $(".aboutName")
				uniTime = .3
				uniTime2 = .5

			tl.set(theBody, {height:"100%", overflow:"hidden"})
				.set([aboutClose, aboutHeadline, aboutSig, aName, words], {opacity:0})
				.set(aboutHeadline, {y:40})
				.set(aboutSig, {y:-40})
				.to(page, uniTime, {top:"0vh"})
				.to([aName, words], uniTime2, {opacity:1}, "aboutOpen+=.2")
				.to([aboutHeadline, aboutSig], uniTime2, {opacity:1, y:0}, "aboutOpen")
				.to(aboutClose, uniTime2 + .1, {opacity:1, rotation:360,onComplete:aboutMenuClose}, "aboutOpen")
		}

		function aboutMenuClose() {
			if (screen.width <= 767) {
				closeMenuMobile();
			} 
			else {
				closeMenuDesktop();
			}
		}
		

		
		$( "a" ).on('click', function( event ) {
  		// if($(this).text() == 'About') {
  		if (this.href.indexOf('/about/') != -1) {
  			event.preventDefault();	
  			openAboutPage();
  		}
		});			

		$( ".aboutClose" ).on('click', function( event ) {
			closeAboutPage();
  	});
		
	});
	
})(jQuery, this);


(function ($, root, undefined) {
  $(function () {

  	$(window).load(function(){
			$('#preloader').fadeOut('slow',function(){$(this).remove();});
		});
  });
})(jQuery, this);