/* This code is executed after the DOM has been completely loaded */
$(document).ready(function(){


	/* Display first five slides, hide rest */


$('#slider_prev').hide();

	$('.slide').addClass('hide').hide();
	$('.slide:lt(5)').removeClass('hide').addClass('show').show();

var first_active = $('.thumbnails img:first').clone().attr('style', 'width: 75%');
$('#active').children().replaceWith(first_active);



var pos = 0;

	$('#slider_prev').click(function(e){
		e.preventDefault();
		pos = pos -1;
		var beg = pos*5;
		var end = pos*5+5;
		$('.show').hide().addClass('hide').removeClass('show');
		$('.slide').slice(beg, end).removeClass('hide').addClass('show').show();

		if (pos==0) {
		$('#slider_prev').hide();
		}
		if ((pos*5+5)!=$('.thumbnails .slide').length) {
			$('#slider_next').show();
		}

	});


	$('#slider_next').click(function(e){
		e.preventDefault();
		pos = pos +1;
		var beg = pos*5;
		var end = pos*5+5;
		$('.show').hide().addClass('hide').removeClass('show');
		$('.slide').slice(beg, end).removeClass('hide').addClass('show').show();

		if (pos!=0) {
			$('#slider_prev').show();
		}

		if ((pos*5+5)==$('.thumbnails .slide').length) {
			$('#slider_next').hide();
		}
	});
	




	/* On thumbnail click update active image to clicked thumbnail */

	$('.thumbnail').click(function(e){
		e.preventDefault();
		var new_active = $(this).children().clone().attr('style', 'width: 75%');
		$('#active').children().replaceWith(new_active);
	});

	/* On arrow click change thumbnails */

});