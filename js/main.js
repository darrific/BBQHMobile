

var cash = 0;
var circle = 0;
var tent = 0;
var bbqh = 0;
var original = 0;
var ten = 0;

(function(){
	$(body).css('display','none');
})()

function cache(){
	cash = $("#index_section");
	circle = cash.find("#circle");
	tent = cash.find("#tent");
	bbqh = cash.find("#bbqh");
	original = cash.find("#original");
	ten = $("#tent");
}

function render(){
	
}

$(document).ready(function(){
	render();	
});

function logo_stuff(){
	
	circle.velocity({opacity: 0}).velocity({opacity: 1}, 1500);
	tent.velocity({opacity: 0}).velocity({opacity: 1}, 1000);
	bbqh.velocity({opacity: 0}).velocity({opacity: 1}, 1000);
	original.velocity({opacity: 0}).velocity({opacity: 1}, 1000);
}

