$(document).ready( function(){

	// menu navegacion
	$('#menu-header .menu-item-has-children').mouseover( function(){
		var submenuActive = $('.sub-menu').hasClass('active');
		if ( submenuActive = false ) {
			$(this).find('.sub-menu').removeClass('active'), 2000;
		} else {
			$(this).find('.sub-menu').addClass('active'), 2000;
		}
	});
	$('#menu-header .menu-item-has-children').mouseleave( function(){
		var submenuActive = $('.sub-menu').hasClass('active');
		if ( submenuActive = true ) {
			$(this).find('.sub-menu').removeClass('active'), 2000;
		} else {
			$(this).find('.sub-menu').addClass('active'), 2000;
		}
	});
	
	var getWidthSubmenu = $('.sub-menu').width()/2;
	$('.sub-menu').css('margin-left', '-' + getWidthSubmenu + 'px');
	
	// se agrega color seleccionado cuando se detecta un submenu
	$('.sub-menu').find('.current-menu-item').parents("ul li").addClass('selectedMenuNav');
	
	$('.current-menu-parent').find('.sub-menu').css('display', 'block');


	
	// pagina general
	// se agrega validacion para cuando el height de un page sea mayor de 700px
	var getHeightGeneral = $('#fixGeneral').outerHeight();
	var myHeight = getHeightGeneral - 200; // deduct 100 from height
	var heightPageGeneral = $('.contentPage').outerHeight();

	if (heightPageGeneral >= 100) {
		$('#fixGeneral').addClass('removeFixGeneral');
		$('#fixGeneral').css('height', heightPageGeneral + 'px');
	} else {
		$('#fixGeneral').removeClass('removeFixGeneral');
	}
	
	
	// galeria
	$('.thumber').mouseenter( function(){
		$(this).find('.titulo, .more').show();
		$(this).addClass('galleryFixTitle');
	});
	$('.thumber').mouseleave( function(){
		$(this).find('.titulo, .more').hide();
		$(this).removeClass('galleryFixTitle');
	});
	
	
	// footer
	var getFooterNav = $('#primary').width();
	var footerWidth = getFooterNav + 100;
	var footerFix = ('-' + myHeight + 'px')
	$('.navFoot').css('width', footerWidth, 'marginleft', footerFix);

	
	//
	var windwodH = $(window).outerHeight()/1.6;
	$('.content-area-fixed, .content-area-fixed .post-thumbnail').css('height', windwodH);
	
	// .onSizeChange()
	// resize()


	// nueva galeria con resize de navegador
	$('.element').hide();
	$('.element:first-child').show();
	var sliderElementWidth = $(window).width();
	var sliderElementHeight = $(window).height();
	var slideHeightElmtImg = $('.site-main .trabajo').height();
	var elementHeight = $('.content-area-fixed').height();
	var navFooter = sliderElementWidth - 200;
	var thunbnailHeight = $('#fixGeneral .container .row .thumber').width();
	
	$('.galleriaIO').css('height', elementHeight);
	$('.thumber').css('height', thunbnailHeight);
	console.log(thunbnailHeight);
	$('.element').css('height', slideHeightElmtImg);
	
	
	$('.navFoot').css('width', navFooter);
	
	
	// get height from general layout
	$('.column').each( function(){
		var outerHeight = 0;
		outerHeight += $(this).outerHeight();
	});
	$('.layoutArea .column').height(outerHeight);
	
	
	// get width of proyect
	var getWidthProject = $('#fixGeneral .container .row a').width();
	$('#fixGeneral .container .row a').css('height', getWidthProject);
	

});

$(window).resize( function(){
	// nueva galeria con resize de navegador
	var sliderElementWidth = $(window).width();
	var sliderElementHeight = $(window).height();
	var slideHeightElmtImg = $('.site-main .trabajo').height();
	var elementHeight = $('.content-area-fixed').height();
	var navFooter = sliderElementWidth - 200;
	$('.galleriaIO').css('height', elementHeight);
	$('.element img').css('height', slideHeightElmtImg);
	$('.element').css('height', slideHeightElmtImg);
	
	$('.navFoot').css('width', navFooter);
	
	var getWidthPage = $('#fixGeneral').width();
	
	if ( getWidthPage <= 625 ) {
		$('#fixGeneral').addClass('fixMobile');
	} else {
		$('#fixGeneral').removeClass('fixMobile');
	}
	
	$('.column').each( function(){
		var outerHeight = 0;
		outerHeight += $(this).outerHeight();
	});
	$('.layoutArea .column').height(outerHeight);
	
	// get width of proyect
	var getWidthProject = $('#fixGeneral .container .row a').width();
	$('#fixGeneral .container .row a').css('height', getWidthProject);
	
});

/*$(document).on("pagecreate","#pageone",function(){
  $("p").on("swipeleft",function(){
    $(this).hide();
  });                       
});*/