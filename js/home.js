(function($){
	$('document').ready(function(){
		//http://responsiveslides.com/
		$('#ssw').responsiveSlides({
			timeout : 4000
		});

		 //Footer tabs
		 $('.left ul li a', '#home-footer').on('click', function(evt){
		 	evt.preventDefault();
		 	var id = $(evt.target).attr('href');
		 	
		 	$('div, li', '#home-footer').removeClass('active');
		 	
		 	$(this, '#home-footer .left').parent().addClass('active').show();
		 	$(id, '#home-footer .right').addClass('active').show();
		 });

		 //Video Lightbox
		 $('#intro_video').fancybox({
		 	type: 'iframe',
		 	width: 440
		 });
	});
})(jQuery);