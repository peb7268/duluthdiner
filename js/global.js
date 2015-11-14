//equalize
;(function($){
	$.fn.equalize = function(){
		var elem1 = this[0], elem2 = this[1], max = 0,
			paddingTop = 0, paddingBottom = 0, totalPadding = 0
			h1 = 0, h2 = 0;

		this.each(function(i, elem) {
			var height = $(this).outerHeight();
			(i == 1) ? h1 = height : h2 = height;
      		max = Math.max(max, height);
    	});

		this.each(function() {
      		if($(this).outerHeight() !== max){
      			var currHeight 			= $(this).outerHeight();
      				//max = 446
      				//currHeight = 420
      				difference 			= max - currHeight,
      				calculatedHeight 	= currHeight + difference;
      			$(this).css('height', calculatedHeight);
      		}
    	});
	}
}(jQuery));


(function($){
	$('document').ready(function(){
		//Implementation
		var sel1 = ($('#body').length > 0) ? '#body' : '#blog';
		$( sel1 + ', #sidebar', '#wrapper').equalize();

		$('.trigger').on('click', function(evt){
			evt.preventDefault();
			$('#social .content').slideToggle(200);
		});

		$('#menu-primary-navigation li').hover(function(evt){
			evt.preventDefault();
			$(this).find('ul.sub-menu').slideDown(200);
		}, function(){
			$(this).find('ul.sub-menu').slideUp(200);
		})
	});

	//twitter
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
		if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

	//fb
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=187996341275269";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	//gp
	(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();


	//Method Definitions
	function toggleSelection(target){
		$('.active').removeClass('active').fadeOut(250, function(){
			$(target).fadeIn(250).addClass('active');
		});
	}
	function applyStyles(target, $ct, $cb){
		var color = $('a[href='+ target +']', $ct).css('background-color');
		$(target, $cb).parent().css({
			'border':'2px solid ' + color,
			'borderTop': 0
		});
	}

	  //Sidebar Tabs
	  if($('#dynamic-widget').length > 0){
	  	var $ct = $('#content-tabs'),
	  		$cb = $('#content-body'),
	  		$tab_links = $ct.find('li a');
	  		var target = $('li:first a', $ct)[0];
	  		applyStyles('#ue', $ct, $cb);

	  		$tab_links.on('click', function(evt){
	  			evt.preventDefault();
	  			var target = $(this).attr('href');
	  			applyStyles(target, $ct, $cb);
	  			toggleSelection(target);
	  		});
	  }
	   if($('#newsletter').length > 0){
	   		$('#newsletter a').on('click', function(evt){
	   			evt.preventDefault();
	   			$('input, p', '#mc').removeAttr('style');
	   			$(this).slideUp(100);
	   		});

	   		$('#reset', '#mc').on('click', function(evt){
	   			evt.preventDefault();
	   			$('input[type="text"]', '#mc').val('');
	   		});
	   		$('#submit', '#mc').on('click', function(evt){
	   			evt.preventDefault();
   				$('#mc input, p:first', '#newsletter').fadeOut(100, function(){
   					$('#success', '#mc').fadeIn(100, function(){
   						window.setTimeout(function(){
   							$('#success', '#mc').fadeOut(100, function(){
   								window.setTimeout(function(){
   									$('#newsletter a').slideDown(100);
   								}, 1000);
   							});
   						}, 3000);
   					});
   				});
	   		});
	   }

   //Contact form
   if($('#forms').length > 0){
   	$('#forms').prepend('<div class="stamp" />');
   	$('.wpcf7 form label').each(function(idx, elem){
   		var text = $(elem).html();
   		$(elem).parent().find('input, textarea').each(function(idx, input){
   			console.log('input', input);
   			$(input).attr('placeholder', text);
   		});
   		$(elem).remove();
   	})
   }

   //Nav
	var nav_link 	= $('div.navigation');
	var	nav 		= $('#navigation');

		nav_link.on('click', toggleNav);
		function toggleNav(evt){
			evt.preventDefault();
			nav.slideToggle(150);
		}
	//Redirect Links
	if($('ul li a.redirect_link').length > 0){
		var $links = $('ul li a.redirect_link');
		$links.on('click', function(evt){
			evt.preventDefault();
			var destination = $(this).data('redirect');

			window.location = destination;
		})
	}

	//Fancybox the menus
	var $fancyItems = $('.page-id-277 .fancybox');
	if($fancyItems.length > 0){
		$fancyItems.fancybox({
			padding    : 0,
        	margin     : 5,

        	autoCenter : false,
			openEffect  : 'none',
			closeEffect : 'none',
			iframe : {
				preload: false
			},
			autoSize : false,
        	beforeLoad : function() {
	            this.width  = parseInt(this.element.data('fancybox-width'));
	            this.height = parseInt(this.element.data('fancybox-height'));
        	},
			afterLoad  : function () {
	            $.extend(this, {
	                aspectRatio : false,
	                type    : 'html',
	                width   : '100%',
	                height  : '100%',
	                content : '<div class="fancybox-image" style="background-image:url(' + this.href + '); background-size: cover; background-position:50% 50%;background-repeat:no-repeat;height:100%;width:100%;" /></div>'
	            });
        	}
		});
	}

	//Geolocation
	var navId, lattitude, longitude;
	function getLocation(){
		if (navigator.geolocation) {
			var a = document.createElement('a');
			$(a).attr({'id' : 'location', 'href' : '#' }).html('<img src="http://duluthdiner.com/wp-content/themes/Zeus/img/location.png">');
			$('#locationWrapper').append(a);

			var optn = {
	            enableHighAccuracy : true,
	            timeout : Infinity,
	            maximumAge : 0
	        };

			watchId = navigator.geolocation.watchPosition(showPosition, showError, optn);
		} else {
		    alert('Geolocation is not supported in your browser');
		}
	}
	function stopWatch(){
		if (navId) {
	        navigator.geolocation.clearWatch(navId);
	        navId = null;
    	}
	}
	function showPosition(position) {
		lattitude = position.coords.latitude;
		longitude = position.coords.longitude;
		var ua = navigator.userAgent.toLowerCase();
		var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
		var location = '';
		if(isAndroid || (navigator.platform.toLowerCase().indexOf('win') > -1)) {
			location = 'https://maps.google.com/maps?q=Duluth+Diner,+Peachtree+Industrial+Boulevard,+Duluth,+GA&hl=en&ll=33.999842,-84.16714&spn=0.011118,0.019205&sll='+longitude+','+lattitude;

		} else {
			location = 'maps:ll='+ lattitude + ',' + longitude;
		}
		$('#location').attr('href', location);
	}
	function showError(error) {
	    switch(error.code) {
	        case error.PERMISSION_DENIED:
	            alert("User denied the request for Geolocation.");
	            break;
	        case error.POSITION_UNAVAILABLE:
	            alert("Location information is unavailable.");
	            break;
	        case error.TIMEOUT:
	            alert("The request to get user location timed out.");
	            break;
	        case error.UNKNOWN_ERROR:
	            alert("An unknown error occurred.");
	            break;
	    }
	}
	
}(jQuery));