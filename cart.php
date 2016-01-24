<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="css/jquery-ui.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/velocity.js"></script>
<script type="text/javascript" src="js/mustache.js"></script>

<head>
<script type="text/javascript" src="js/redirect.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Checkout - Original Bar-B-Que Hut - The Best Bar-B-Que Around</title>
</head>

<body>
<nav class="navbars navbar navbar-inverse navbar-fixed-top" id="navbar_color">
	<br>
	<a href="index.html" id="nav_brand" class="navbar-brand padding_30">Original Bar-B-Que Hut</a>
	<button id="navbar_menu_button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<div class="collapse navbar-collapse navHeaderCollapse">
		<ul class="nav navbar-nav navbar-right text-center" id="navbar_inner">
			<li><a href="index.html">Home</a></li>
			<li><a href="index.html#about_header">About</a></li>
			<li><a href="menu.html">Menu</a></li>
			<li><a class="r" href="order.php">Place an Order</a></li>
			<li><a href="index.html#contact_container">Contact</a></li>
			<li><a href="catering_form.html">Catering Quote</a></li>
			
		</ul>
	</div> 
</nav>
<section>
	<div id="cart">
		<br><br><br><br>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12 center_text w heading">Cart</div>
			<hr class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 hr_w">
		</div>
		<div class="row">
			<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
				<div class="container">
					<h3 class="w center_text">Please finalize your order.</h3>
					<br>	
				</div>
			</div>
		</div>
		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0 bg_4">
			<br><br>
			<div class="row" id="cart_table_list">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="col-lg-11 col-lg-offset-1 col-xl-6 col-xl-offset-3 col-md-11 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0 bg_2">
						<div class="row">
							<br>
							<div class="col-lg-12 heading2 center_text w">Your Order</div>
						</div>
						<br>
						<div class="row">
							<div class="col-lg-10 col-lg-offset-1 col-xl-6 col-xl-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
								<div class="col-lg-2 col-lg-offset-0 col-xl-2 col-xl-offset-0 col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-2 col-xs-offset-0 center_text w">Qty</div>
								<div class="col-lg-5 col-lg-offset-1 col-xl-5 col-xl-offset-1 col-md-5 col-md-offset-0 col-sm-5 col-sm-offset-0 col-xs-5 col-xs-offset-0 w">Item</div>
								<div class="col-lg-3 col-lg-offset-0 col-xl-2 col-xl-offset-0 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-0 w">Price</div>
								<hr>
							</div>
						</div>
						<div class="row">
							<div id="allorderscontainer" class="col-lg-10 col-lg-offset-1 col-xl-10 col-xl-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
								<div id="OrderTable"></div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1 text_center cart_total"><b>
								<div class="col-xs-6 w">TOTAL</div>
								<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-4 col-xs-offset-1 w" id="totalPrice"><span id="totalPriceSpan">$0.00</span></div></b>
							</div>
						</div>
						<br>
					</div>
				</div>
				<div class="visible-sm"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
				<div class="visible-xs"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="col-lg-11 col-lg-offset-0 col-xl-11 col-xl-offset-0 col-md-11 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0 bg_2">
						<div class="row">
							<br>
							<div class="col-lg-12 heading2 center_text w">Contact Information</div>
							<div class="col-lg-12 center_text sectext w">Please fill out your information</div>
						</div>
						<div class="row">
							<br>
							<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
								<div class="center_text w">
									<form role="form">
										<div class="form-group">
											<label for="consumerName">Name</label>
											<input type="text" class="center_text form-control" id="consumerName" placeholder="Name of Customer">
										</div>
										<div class="form-group">
											<label for="consumerNo">Cellphone</label>
											<input type="text" class="center_text form-control" id="consumerNo" placeholder="###-####">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 text-center w">
								<div class="row">
									<br>
									<div class="col-lg-12 heading2 center_text w">Pickup Time</div>
								</div>
								<br>
								<div id="time" class="bg_9 col-lg-8 col-lg-offset-2 col-xl-4 col-xl-offset-4 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
								</div>
								<br><br><br><br><br><br><br><br><br><br><br><br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<a href="order.php#ordering"><div class="button">GO BACK</div></a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div id="placeOrderButton" class="button">PLACE ORDER</div>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>
</section>
<br><br>
<div class="row" id="footer">
</div>	

</body>	
	
	<footer>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/footer.js"></script>
		<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script src="js/cart.js"></script>
	</footer>
