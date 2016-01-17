var order = {};
var template = '{{#OrderItems}}<div class="row" id="TableItem"><div class="col-lg-1 col-xl-1 col-md-1 col-sm-1 col-xs-1">{{quantity}}</div><div class="col-lg-5 col-lg-offset-1 col-xl-5 col-xl-offset-1 col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-5 col-xs-offset-1"><b>{{name}}</b></div><div class="col-lg-3 col-lg-offset-0 col-xl-2 col-xl-offset-0 col-md-1 col-md-offset-2 col-sm-2 col-sm-offset-0 col-xs-2 col-xs-offset-0">${{price}}</div><div class="col-xs-2 col-xs-offset-0"><span id="removeButton" class="rembut">X</div><br></div><br>{{/OrderItems}}';
var now = moment();

now.add(30, "m");

getData();

function getData(){
	$.post('php/ajax.php', {action: 'getOrders'}, function(data, textStatus, xhr) {
		if(data.length){
			order = $.parseJSON(data);
			renderTable();
		}
	});
}

function renderTable(){
	var totalPrice = 0;
	if(order.items){
		for(var i = 0; i < order.items.length; i++){
			var price = order.items[i].price;
			var quantity = order.items[i].quantity;
			totalPrice += (price*quantity);	
		}
		$('#totalPrice').html('<span id="totalPriceSpan">$'+totalPrice+'.00</span>');
		$('#OrderTable').html(Mustache.render(template, {OrderItems : order.items}));
		registerButtons();
	}
}

function registerButtons(){
	$("span[id^='removeButton']").each(function(){
		var ObjectCache = $(this).parent();

		var price = ObjectCache.prev().html().replace("$", "");
		var name = ObjectCache.prev().prev().html().replace("<b>", "").replace("</b>", "");
		var quantity = ObjectCache.prev().prev().prev().html();

		$(this).on("click", function(){
			for(var i = 0; i < order.items.length; i++){
				var orderQuantity = order.items[i].quantity;
				if((price == order.items[i].price) && (name == order.items[i].name) && (quantity == orderQuantity)){
					orderQuantity--;
					order.items[i].quantity = orderQuantity;
					if(orderQuantity < 1){
						order.items.splice(i,1);
					}
					renderTable();
					$.post('php/ajax.php', {'OrderJSON': JSON.stringify(order), 'action': 'updateOrderJSON'}, function(data, textStatus, xhr){} );
					break;
				}
			}
		})
	});
}

$('#time').datetimepicker({
	inline: true,
	sideBySide: true,
	format: 'LT',
	useCurrent: true,
	stepping: 5,
	defaultDate: now
});

$('#consumerNo').mask('999-9999', {placeholder:"#"});
$("#consumerName").mask('aaaaaaaaaaaaaaaaaaaaaaa');


$('#placeOrderButton').on("click", function(){
	var name = $('#consumerName').val();
	var number =  $('#consumerNo').val();
	var time = $('#time').data("DateTimePicker").date();
	if(name && number && time){
		order.pickup = time.format("X");
		order.consumerName = name;
		order.phoneNumber = number;
		// alert(JSON.stringify(order));
		$.post('php/ajax.php', {'OrderJSON': JSON.stringify(order), 'action': 'sendOrder'}, function(data, textStatus, xhr) {
			window.location.href = "loading.html";
		});
	}else{
		alert("You must fill out all of the fields!");
	}
});