var fail = window.setTimeout(failure, 30000);

checkReached();

function checkReached(){
	$.post('php/ajax.php', {action: 'checkReached'}, function(data, textStatus, xhr) {
<<<<<<< HEAD
		//alert(data);
=======
		alert(data);
>>>>>>> f42b4484c2cd262597099cfc6fbd08ba04fba06f
		var repeat = setTimeout(checkReached, 5000);
		switch(data){
			case "No order":
				window.clearTimeout(fail);
				window.clearTimeout(repeat);
				alert("You have not placed an order to process yet!");
				window.location.href = 'failure.html';
				break;
			case "Reached":
				window.clearTimeout(fail);
				window.clearTimeout(repeat);
				window.location.href = 'success.html';
				break;
		}
	});
}

function failure(){
	window.location.href = 'failure.html';
}