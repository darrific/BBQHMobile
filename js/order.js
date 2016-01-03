var order = {};
var combos = [];
var sides = [];
var combosTemplate = '{{#ComboItems}}<div class="row" style="cursor:pointer;" id="combo_item{{comboID}}"><div class="col-lg-12 col-lg-offset-0 col-xl-12 col-xl-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 bg_4"><div class="row padding_20"><div class="col-lg-1 col-xl-1 col-md-1 col-sm-1 col-xs-1 text-center"><br><span id="badge_" class="badge_r padding_1">{{quantity}}</span></div><div id="order_image" class="col-lg-2 col-xl-3 col-md-2 col-sm-2 col-xs-3"><img src="{{image}}" /></div><div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-5 ordername"><b class="w">{{name}}</b><br><i>{{details}}</i></div><div class="col-lg-1 col-xl-1 col-md-2 col-sm-2 col-xs-2 w"><br>${{price}}</div></div></div></div><br>{{/ComboItems}}';
var sidesTemplate = '{{#SidesItems}}<div class="row" style="cursor:pointer;" id="side_item{{sideID}}"><div class="col-lg-12 col-lg-offset-0 col-xl-12 col-xl-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 bg_4"><div class="row padding_20"><div class="col-lg-1 col-lg-offset-1 col-xl-1 col-md-1 col-sm-1 col-sm-offset-1 col-xs-1 text-center"><br><span id="badge_" class="badge_r padding_1">{{quantity}}</span></div><div class="col-lg-4 col-lg-offset-1 col-xl-4 col-xl-offset-2 col-md-5 col-md-offset-0 col-sm-7 col-sm-offset-1 col-xs-7 col-xs-offset-1 ordername"><b class="w">{{name}}</b><br>{{#details}}<i>{{details}}</i>{{/details}}</div><div class="col-lg-2 col-lg-offset-3 col-xl-1 col-xl-offset-3 col-md-1 col-md-offset-3 col-sm-2 col-xs-2 w">${{price}}</div></div></div></div><br>{{/SidesItems}}';

order.items = [];
getData();

function getData(){
	$.post('php/ajax.php', {action: 'getSides'}, function(data, textStatus, xhr) {
		sides = $.parseJSON(data);
		if(combos && sides){ 
			render();
		}
	});
	$.post('php/ajax.php', {action: 'getCombos'}, function(data, textStatus, xhr) {
		combos = $.parseJSON(data);
		if(combos && sides){ 
			render();
		}
	});
	$.post('php/ajax.php', {action: 'getOrders'}, function(data, textStatus, xhr) {
		if(data.length){
			order = $.parseJSON(data);
			if(combos && sides){ 
				render();
			}
		}
	});
}

function registerButtons(){
	$("div[id^='combo_item']").each(function(){
		var id = parseInt(this.id.replace("combo_item", ""), 10);
		var hammerTime = new Hammer(this, "");
		hammerTime.on("tap", function(){
			var OrderObject = {};
			var ObjectCache = $('#combo_item' + id).children().first().children().first().children();
			var titleDetails = ObjectCache.first().next().next();
			var quantity = parseInt(ObjectCache.first().html().replace('<br><span id="badge_" class="badge_r padding_1"', '').replace('</span>', '').replace('style="display: none;"','').replace('>', "").replace(" ", ""), 10);

			OrderObject.name = titleDetails.children().first().html();
			OrderObject.details = titleDetails.children().first().next().next().html();
			OrderObject.price = titleDetails.next().html().replace("<br>$", "");
			OrderObject.img = ObjectCache.first().next().html().replace('<img src="','').replace('">','');
			OrderObject.quantity = quantity;
			OrderObject.type = "Combo";
			OrderObject.ID = id;

			if(order.items){
				for(var i = 0; i < order.items.length; i++){
					if(JSON.stringify(OrderObject) === JSON.stringify(order.items[i])){
						order.items.splice(i,1);
						break;
					}
				}
			}
			quantity++;
			ObjectCache.first().html('<br><span id="badge_" class="badge_r padding_1">'+ quantity + '</span>');

			OrderObject.quantity = quantity;
			order.items.push(OrderObject);
			//alert(JSON.stringify(order));
		});
	});

	$("div[id^='side_item']").each(function(){
		var id = parseInt(this.id.replace("side_item", ""), 10);
		var hammerTime = new Hammer(this, "");
		hammerTime.on("tap", function(){
			var OrderObject = {};
			var ObjectCache = $('#side_item' + id).children().first().children().first().children();
			var titleDetails = ObjectCache.first().next();
			var quantity = parseInt(ObjectCache.first().html().replace('<br><span id="badge_" class="badge_r padding_1"', '').replace('</span>', '').replace('style="display: none;"','').replace('>', "").replace(" ", ""), 10);

			OrderObject.name = titleDetails.children().first().html();
			if((titleDetails.children().first().next() != null) && (typeof(titleDetails.children().first().next()) != 'undefined')){
				OrderObject.details = titleDetails.children().first().next().html();
			}
			OrderObject.price = titleDetails.next().html().replace("<br>$", "").replace("$","");
			OrderObject.quantity = quantity;
			OrderObject.type = "Side";
			OrderObject.ID = id;

			if(order.items){
				for(var i = 0; i < order.items.length; i++){
					if(JSON.stringify(OrderObject) === JSON.stringify(order.items[i])){
						order.items.splice(i,1);
						break;
					}
				}
			}
			quantity++;
			ObjectCache.first().html('<br><span id="badge_" class="badge_r padding_1">'+ quantity + '</span>');

			OrderObject.quantity = quantity;
			order.items.push(OrderObject);
			//alert(JSON.stringify(order));
		});
	});
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
	      	for(var o in combos){
	      		combos[o].quantity = 0;
	      	}
	      	for(var o in sides){
	      		sides[o].quantity = 0;
	      	}
			render();
	    }
	});
});

$('#ConfirmButton').on("click", function(){
	$.post('php/ajax.php', {'OrderJSON': JSON.stringify(order), 'action': 'updateOrderJSON'}, function(data, textStatus, xhr) {
		$(location).attr('href','cart.php');
	});
});

function render(){
	$('#CombosUI').html(Mustache.render(combosTemplate, {ComboItems : combos}));
	$('#SidesUI').html(Mustache.render(sidesTemplate, {SidesItems :  sides}));
	registerButtons();
	hidebadge();
}

function hidebadge(){
	var value_badge = $("span[id^='badge_']").each(function(){
		if ($(this).html() === "0") {
				$(this).hide();
		}
	});
}