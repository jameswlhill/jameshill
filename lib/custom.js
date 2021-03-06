$(document).ready(function() {

	//timeline animation
	var $timeline_block = $('.cd-timeline-block');

	//hide timeline blocks which are outside the viewport
	$timeline_block.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		}
	});

	//on scrolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$timeline_block.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			}
		});
	});


	$(window).on('scroll', function(){
		$timeline_block.each(function(){
			if( $(this).offset().top >= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('bounce-in') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('bounce-in').addClass('is-hidden');
			}
		});
	});

	//carousel animation


	//navbar menu collapse after link selection
	$(".navbar-nav li a").click(function(event) {
		$(".navbar-collapse").collapse('hide');
	});


});
