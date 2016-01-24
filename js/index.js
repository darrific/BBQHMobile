var $index = $('#index');
var $navbar = $('#navigationbar');
var $menu = $index.find('#menu');
var $top_index = $index.find('#top_index');

var $google_map = $('#google_map');
var $map_overlay = $google_map.find('#map_overlay');
var $click_map_instruct = $google_map.find('#click_map_instruct');

var map_overlay = $map_overlay;
var google_map = $google_map;

map_overlay.on('click', enablemap);
google_map.on('mouseleave', disablemap);

function enablemap(){
	$map_overlay.fadeOut(1);
	$click_map_instruct.fadeOut(500);
}

function disablemap(){								
	$map_overlay.fadeIn(1);
	$click_map_instruct.fadeIn(500);
}

$("#readstory").click(function(){
    var scrollPos = $(window).scrollTop();
    $("#morestory").css('margin-top',scrollPos);
    $('#morestory').fadeIn(600);
});

$(window).scroll(function(){
	$('#morestory').fadeOut(200);
});

$('#morestory').click(function(){
	$('#morestory').fadeOut(200);
});

function smoothanchor(event){
var target = $($(this).attr('href'));
if(target.length){
	event.preventDefault();
	$('body').animate({scrollTop: (target.offset().top)}, 1000);}
}