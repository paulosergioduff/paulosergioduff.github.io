(function($){
	$(window).load(function(){

		$('#loading').fadeOut('slow');

		var images = $('#css3panels .panel img');
		if(!$('html').hasClass('oldie')) {
			images.each(function(){
				var el = $(this);
				//el.clone().addClass('grayscale').css({"z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
				el.clone().addClass('grayscale').insertBefore(el).queue(function(){
					var el = $(this);
					el.dequeue();
				});
				// this.src = grayscale(this.src);
				el.css({"top":"-"+ el.height() +"px"});
			});
		}
	});
})(jQuery);
