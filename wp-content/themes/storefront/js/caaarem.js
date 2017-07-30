var getWidthPrice = jQuery('.homePrice .amount').width();

jQuery(document).ready( function(){
	jQuery('.homePrice').addClass('CenterPrice').css('width', getWidthPrice);
});