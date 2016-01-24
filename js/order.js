var order = {};
var combos = [];
var sides = [];
var cartCounter = 0;
var combosTemplate = '{{#ComboItems}}<div class="row" style="cursor:pointer;" id="combo_item{{comboID}}"><div class="col-lg-12 col-lg-offset-0 col-xl-12 col-xl-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 bg_2"><div class="row padding_20"><div id="order_image" class="col-lg-3 col-xl-3 col-md-4 col-sm-4 col-xs-3"><img style="border-radius:80px" src="{{image}}" /></div><div class="col-lg-7 col-xl-7 col-md-6 col-sm-6 col-xs-5 ordername"><b class="w">{{name}}</b><br><i>{{details}}</i></div><div class="col-lg-2 col-xl-1 col-md-2 col-sm-2 col-xs-2 w"><br>${{price}}</div></div></div></div><br>{{/ComboItems}}';
var sidesTemplate = '{{#SidesItems}}<div class="row" style="cursor:pointer;" id="side_item{{sideID}}"><div class="col-lg-12 col-lg-offset-0 col-xl-12 col-xl-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 bg_2"><div class="row padding_20"><div id="order_image" class="col-lg-3 col-xl-3 col-md-4 col-sm-4 col-xs-3"><img style="border-radius:80px" src="{{image}}" /></div><div class="col-lg-7 col-lg-offset-0 col-xl-4 col-xl-offset-2 col-md-6 col-md-offset-0 col-sm-5 col-sm-offset-0 col-xs-7 col-xs-offset-1 ordername"><b class="w">{{name}}</b><br>{{#details}}<i>{{details}}</i>{{/details}}</div><div class="col-lg-2 col-lg-offset-0 col-xl-1 col-xl-offset-3 col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-2 w">${{price}}</div></div></div></div><br>{{/SidesItems}}';
var cartTemplate = '{{#items}}<div id="orderitem" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xs-offset-0"><div id="cartitem" class="bg_2 col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"><div id="cartquantity" class="col-lg-1 col-md-1 col-sm-2 col-xs-1">{{quantity}}</div><div id="cartname" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">{{name}}</div><div id="cartprice" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">${{price}}</div><div id="cartdel{{cartCounter}}" class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><span id="removeButton" class="rembut">X</span></div></div><br><br><br></div><br>{{/items}}';
//DOM Cache
var $bigOrderContainer = $('#bigOrderContainer');
var $UIContainer = $('#UIContainer');

getData();

function getData(){
	$.post('php/ajax.php', {action: 'getSides'}, function(data, textStatus, xhr) {
		sides = $.parseJSON(data);
	});
	$.post('php/ajax.php', {action: 'getCombos'}, function(data, textStatus, xhr) {
		combos = $.parseJSON(data);
	});
	$.post('php/ajax.php', {action: 'getOrders'}, function(data, textStatus, xhr) {
		order.items = [];
		if(data.length){
			order = $.parseJSON(data);
		}
	});
	checkReached();
}

function checkReached(){
	if((combos.length > 0) && (sides.length > 0) && order.items){
		render();
	}else{
		setTimeout(checkReached, 100);
	}
}

function registerButtons(){
	$("div[id^='combo_item']").each(function(){
		var id = parseInt(this.id.replace("combo_item", ""), 10);
		$(this).on("click", function(){
			var OrderObject = {};
			var ObjectCache = $('#combo_item' + id).children().first().children().first().children();
			var titleDetails = ObjectCache.first().next();
			
			if(order.items){
				for(var i in order.items){
					if(order.items[i].name == titleDetails.children().first().html()){
						order.items[i].quantity += 1;
						render();
						return;
					}
				}
			}
			
			OrderObject.name = titleDetails.children().first().html(); //works
			OrderObject.details = titleDetails.children().first().next().next().html(); //works
			OrderObject.price = titleDetails.next().html().replace("<br>$", ""); //works
			OrderObject.img = ObjectCache.first().html().replace('<img style="border-radius:80px" src="','').replace('">','');
			OrderObject.quantity = 1;
			OrderObject.type = "Combo";
			OrderObject.ID = id;
			OrderObject.cartCounter = (cartCounter + 1);
			cartCounter++;
			order.items.push(OrderObject);
			render();
		});
	});

	$("div[id^='side_item']").each(function(){
		var id = parseInt(this.id.replace("side_item", ""), 10);
		$(this).on("click", function(){
			var OrderObject = {};
			var ObjectCache = $('#side_item' + id).children().first().children().first().children();
						var titleDetails = ObjectCache.first().next();
			
			if(order.items){
				for(var i in order.items){
					if(order.items[i].name == titleDetails.children().first().html()){
						order.items[i].quantity += 1;
						render();
						return;
					}
				}
			}

			OrderObject.name = titleDetails.children().first().html(); //works
			OrderObject.price = titleDetails.next().html().replace("<br>", "").replace('$', ''); //works
			OrderObject.img = ObjectCache.first().html().replace('<img style="border-radius:80px" src="','').replace('">','');
			OrderObject.quantity = 1;
			OrderObject.type = "Combo";
			OrderObject.ID = id;
			OrderObject.cartCounter = (cartCounter + 1);
			cartCounter++;
			order.items.push(OrderObject);
			render();
		});
	});
	
	$("div[id^='cartdel']").each(function(){
		$(this).on("click", function(){
			var name = $(this).prev().prev().html();
			for(var i in order.items){
				if(order.items[i].name == name){
					if(order.items[i].quantity < 2){
						order.items.splice(i, 1);
						render();
						return;
					}else{
						order.items[i].quantity -= 1;
						render();
						return;
					}
				}
			}
			
		});
	});
}

function render(){
	$('#CombosUI').html(Mustache.render(combosTemplate, {ComboItems : combos}));
	$('#SidesUI').html(Mustache.render(sidesTemplate, {SidesItems :  sides}));
	$('#orderscontainer').html(Mustache.render(cartTemplate, order));
	$('#carttotal').html(calculateTotal());
	registerButtons();
	animate();
}

function animate(){
	if(order.items.length > 0){
		showCart();
		return;
	}
	hideCart();
}

function showCart(){
	$UIContainer.velocity({translateX:60}, {duration:1000});
	$bigOrderContainer.velocity({opacity:1}, {duration:1000, delay:410});
}

function hideCart(){
	$UIContainer.velocity({translateX:310, delay:500}, {duration:1000, delay:250});
	$bigOrderContainer.velocity({opacity:0},{duration:500});
}


function calculateTotal(){
	var total = 0;
	for(var i in order.items){
		total += (order.items[i].price * order.items[i].quantity);
	}
	return total;
}


$('#ResetButton').on("click", function(){
	  $.ajax({
	  	cache: false,
	  	method: "POST",
	    url: 'php/ajax.php', 
	    data: {action:'clearOrderJSON'},
	    complete: function() {
	      	order = {};
	      	order.items = [];
			render();
	    }
	});
	  var scrollPos = $(window).scrollTop();
	  $("#resetpopup").css('margin-top',scrollPos);
	  $("#resetpopup").fadeIn(200).delay(2000).fadeOut(200);
});

$(window).scroll(function(){
	var scrollPos = $(window).scrollTop();
	$("#resetpopup").css('margin-top',scrollPos);
});

$('#ConfirmButton').on("click", function(){
	$.post('php/ajax.php', {'OrderJSON': JSON.stringify(order), 'action': 'updateOrderJSON'}, function(data, textStatus, xhr) {
		$(location).attr('href','cart.php');
	});
});