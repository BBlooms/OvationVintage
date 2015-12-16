/* This code is executed after the DOM has been completely loaded */
$(document).ready(function(){


	/* Display first five slides, hide rest */


$('#slider_prev').hide();

	$('.slide').addClass('hide').hide();
	$('.slide:lt(5)').removeClass('hide').addClass('show').show();

var first_active = $('.thumbnails img:first').clone().attr('style', 'width: 75%');
var first_active_name = $('.thumbnails div.name:first').text();
var first_active_desc = $('.thumbnails div.description:first').text();
$('#active').children().replaceWith(first_active);
$('#active_description').html(first_active_desc);
$('#active_name').html(first_active_name);

$('#active').ready(function(){
	if ($('.thumbnails').children().length==0){
		$('#active').children().replaceWith('<p>no items matched your filter preferences</p>');
	}
});


var pos = 0;

$('.slide:last-of-type').ready(function() {
	if ($('.slide:last-of-type').index()<6){
		$('#slider_next').hide();
	}
});


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
		var new_active = $(this).find('img').clone().attr('style', 'width: 75%');
		var new_active_name = $(this).find('div.name').text();
		var new_active_desc = $(this).find('div.description').text();
		$('#active').children().replaceWith(new_active);
		$('#active_description').html(new_active_desc);
		$('#active_name').html(new_active_name);

		
		var detect_xtraimgs = $(this).find('.xtraimg').text();
		if(detect_xtraimgs.length!=0){
		//	$(this).find('xtraimg').each(function(){
		//		$('#xtraimgs').append('<p>image</p>');
		//	});
			//$('#xtraimgs').append('<p>Extra Images detected</p>');	
			//$('#xtraimgs').append(detect_xtraimgs);

			var ftrd_thumbs = detect_xtraimgs.split(" ").join('"></a></li><li class="span1"><a href="#" class="thumbnail ftrd"><img src="img/jewelry/');
			ftrd_thumbs = '<ul class="thumbnails" style="text-align:center" ><li class="span1"><a href="#" class="thumbnail ftrd"><img src="img/jewelry/' + ftrd_thumbs + '"></a></li></ul>';
			$('#xtraimgs').children().replaceWith(ftrd_thumbs);
		} else {
			$('#xtraimgs').children().replaceWith('<div></div>');
		}
	});

	$('.ftrd').click(function(e){
		e.preventDefaul();
		var new_ftrd = $('#active').find('img').clone().attr('style', 'width: 100%');
		var replace_active = $(this).find('img').clone().attr('style', 'width: 75%');
		$('#active').children().replaceWith(replace_active);
		$(this).children().replaceWith(new_ftrd);
	});

	/* On arrow click change thumbnails */

});


































