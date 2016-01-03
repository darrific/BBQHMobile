var $index = $('#index');
var $navbar = $('#navigationbar');
var $menu = $index.find('#menu');
var $top_index = $index.find('#top_index');
var $anyanchor = $('a[href^="#"]');

var $google_map = $('#google_map');
var $map_overlay = $google_map.find('#map_overlay');
var $click_map_instruct = $google_map.find('#click_map_instruct');

var anyanchor = $anyanchor;
var map_overlay = $map_overlay;
var google_map = $google_map;

anyanchor.on('click', smoothanchor);
map_overlay.on('click', enablemap);
google_map.on('mouseleave', disablemap);

$(window).scroll(function(){
    var scrollPos = $(window).scrollTop();
    var height = $(window).height();
    var navOffset = $menu.offset().top;
    $([menu,top_index]).css({'opacity': ((height - scrollPos) / height)});
    
    if (scrollPos >= navOffset) {					
		$navbar.fadeIn(50);					
	} else {
		$navbar.fadeOut(50);					
	}
});

function smoothanchor(event){
var target = $($(this).attr('href'));
if(target.length){
	event.preventDefault();
	$('body').animate({scrollTop: (target.offset().top)}, 1000);}
};

function enablemap(){
	$map_overlay.fadeOut(1);
	$click_map_instruct.fadeOut(500);
};

function disablemap(){								
	$map_overlay.fadeIn(1);
	$click_map_instruct.fadeIn(500);
};

var aboutus = $("#aboutus").offset().top;
var contactus = $("#contactus").offset().top;

$(window).scroll(function(){
	var scrollPos = $(window).scrollTop();

	if ((scrollPos >= aboutus) && (scrollPos < contactus)) {
		$("#navabout").css('color','rgba(255, 255, 255, 1)');
		$("#navabout").css('border-left','solid 1px #52AE3D');
		$("#navabout").css('border-right','solid 1px #52AE3D');
		disablemap();
	} else {
		$("#navabout").css('color','rgba(227, 227, 227, 1)');
		$("#navabout").css('border-left','none');
		$("#navabout").css('border-right','none');
	}

	if (scrollPos >= contactus) {
		$("#navcontact").css('color','rgba(255, 255, 255, 1)');
		$("#navcontact").css('border-left','solid 1px #52AE3D');
		$("#navcontact").css('border-right','solid 1px #52AE3D');
	} else {
		$("#navcontact").css('color','rgba(227, 227, 227, 1)');
		$("#navcontact").css('border-left','none');
		$("#navcontact").css('border-right','none');
	}
});