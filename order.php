<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/velocity.js"></script>
<script type="text/javascript" src="js/mustache.js"></script>
<script type="text/javascript" src="js/hammer.min.js"></script>

<head>
<script type="text/javascript" src="js/redirect.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Place an Order - Original Bar-B-Que Hut - The Best Bar-B-Que Around</title>
</head>

<body>
<div id="resetpopup">
	Your order has been reset.
</div>

<div id="bigOrderContainer" class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
	<div class="col-xs-12 visible-xs visible-sm">
		<br>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="bg_4 o9 col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
			<div class="row">
				<br>
				<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs heading2 center_text w">The Delicious Order</div>
				<div class="visible-xs center_text col-xs-12 heading2 w">The Delicious Order</div>
				<hr class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1 hr_w">
			</div>
			<div id="currentorder" class="row">
				<div id="orderscontainer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<br>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-family: bebasbook; font-size: 20px;">TOTAL:</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="font-family: bebasbook; font-size: 20px; text-align:right;">$<span id="carttotal">0</span>.00</div>
				</div>
				<div class="col-lg-7 col-lg-offset-3 col-xl-8 col-xl-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<br>
					<a id="ConfirmURL">
						<button id="ConfirmButton" class="btn btn-warning btn-block">Confirm Order</button>
					</a>
				</div>
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xl-8 col-xl-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><br></div>
				<div class="col-lg-7 col-lg-offset-3 col-xl-8 col-xl-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<a id="ResetURL">
						<button id="ResetButton" class="btn btn-danger btn-block">Reset Order</button>
					</a>
					<br>
				</div>
			</div>
		</div>
	</div>
</div>

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
			<li><a href="menu.html">Menu</a></li>
			<li><a href="order.php">Place an Order</a></li>
			<li><a href="index.html#about_header">About</a></li>
			<li><a href="index.html#contact_header">Contact</a></li>
			<li><a href="catering_form.html">Catering Quote</a></li>
		</ul>
	</div> 
</nav>
<section>
	<div id="order" class="row">
		<br><br><br>
		<div class="hidden-md hidden-sm hidden-xs"><br><br><br><br><br><br><br><br></div><br><br><br><br><br>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 hidden-xs center_text w heading0">Place An Order</div>
			<div class="col-xs-12 visible-xs center_text w heading2">Place An Order</div>
		</div>
		<hr class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 hr_w">
		<br>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 w center_text sectext order_flowery">
			Waiting in line is a pain. We get it.
			<br>
			Wouldn't it be awesome if you could just go in and pick up your order at a set time? 
			<br><br>
			<i>Introducing our shiny new ordering system.</i>
		</div>
		<div class="col-lg-8 col-lg-offset-2">
			<div class="hidden-xs"><br><br></div><br><br>
			<div class=" col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-10 col-xs-offset-1">
				<div class="button">TAKE THE TUTORIAL</div>
			</div>
			<div class="hidden-xs"><br><br><br><br><br></div><br><br><br><br>
			<a href="#ordering"><div id="button_tutorial" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12 center_text w" style="font-family: bebasthin; font-size: 30px;">SCROLL OR CLICK HERE TO BEGIN</div></a>
			<br><br><br><br><br><br><br>
		</div>
	</div>
	<div id="bannerorderpage" class="orderbanner hidden-xs hidden-sm">
		<a name="ordering"></a>
		<div class="row">
			<br><br><br><br><br><br><br><br><br><br>
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 bg_3 center_text bannertext o8">
				Click on an option to add to your order.
			</div>
		</div>
	</div>
	<div class="row">
		<br class="visible sm">
		<div class="col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 bg_3 center_text heading2 o8 visible-xs visible-sm">
			Click on an option to add to your order.
		</div>
	</div>
	<br><br>
	<div id="BigUIContainer" class="row">
		<div id="UIContainer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="fun_zebra_combinations" class="col-lg-4 col-lg-offset-2 col-md-4 col-sm-6 col-xs-12">
					<div class="bg_4 o9 col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
						<div class="row">
							<div class="typetitle col-lg-12 col-md-12 col-sm-12 hidden-xs heading2 w">The Popular Combinations</div>
							<div class="visible-xs col-xs-12 heading2 center_text w">The Popular Combinations</div>
							<hr class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1 hr_w">
						</div>
						<div class="row">
							<div id="CombosUI" class="noselect col-lg-10 col-lg-offset-1 col-xl-6 col-xl-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"></div>
						</div>
					</div>
				</div>
				<div id="fun_zebra_sides" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="bg_4 o9 col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
						<div class="row">
							<div class="typetitle col-lg-12 col-md-12 col-sm-12 col-xs-12 heading2 w">The All Star Sides <br class="visible-sm"><br class="visible-sm"></div><br class="visible-md"><br class="visible-md">
							<hr class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1 hr_w">
						</div>
						<div class="row">
							<div id="SidesUI" class="noselect col-lg-10 col-lg-offset-1 col-xl-6 col-xl-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br><br>
<div class="row" id="footer">
</div>	
</body>	

<footer>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/order.js"></script>
	<script type="text/javascript" src="js/footer.js"></script>
</footer>
