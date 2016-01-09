<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="css/jquery-ui.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/parallaxscroll.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/velocity.js"></script>
<script type="text/javascript" src="js/hammer.min.js"></script>
<script type="text/javascript" src="js/mustache.js"></script>

<head>
<script type="text/javascript" src="js/custom.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Checkout - Original Bar-B-Que Hut - The Best Bar-B-Que Around</title>
</head>

<body>
<div class="pageload hidden-xs"></div>

<div id="navigationbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="index.html">Original Bar-B-Que Hut</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-center col-lg-10 col-xl-10">
                <li class="col-lg-2 col-lg-offset-1 col-xl-2 col-xl-offset-0"><a href="index.html">Home</a>
                </li>
                <li class="col-lg-2 col-lg-offset-0 col-xl-2 col-xl-offset-0"><a href="menu.html">See Our Menu</a>
				</li>
                <li class="col-lg-2 col-lg-offset-0 col-xl-2 col-xl-offset-0"><a href="order.php">Place An Order</a>
                </li>
                <li class="col-lg-2 col-lg-offset-0 col-xl-2 col-xl-offset-0"><a id="navabout" href="index.html#aboutus">About Us</a>
                </li>
                <li class="col-lg-2 col-lg-offset-0 col-xl-2 col-xl-offset-0"><a id="navcontact" href="index.html#contactus">Contact Us</a>
                </li>
                <li class="col-lg-1"><a style="color: rgba(227, 227, 227, 1); border-left:solid 1px #52AE3D; border-right:solid 1px #52AE3D;" id="cartli" href="cart.php"><img id="cartbutton" src="images/SVG/shopping112.svg" alt="Cart"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<section id="cart_background" data-speed="11" data-type="vbackground">
<br><br><br><br>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-12 center_text w heading">Checkout</div>
</div>
<br>
<br>
<div class="row">
	<div class="col-xs-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
		<div class="container">
			<h3 class="w center_text">Last chance to edit your order.</h3>
			<br>	
		</div>
	</div>
</div>
<div class="col-lg-8 col-lg-offset-2 bg_2 b_rad">
	<br><br>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 col-xl-6 col-xl-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			<a href="order.php">
				<button type="button" class="btn btn-info btn-block text-center">
					Add An Item
				</button>
			</a>
		</div>
	</div>
	<br><br><br>
	<div class="row" id="cart_table_list">
		<div class="col-lg-10 col-lg-offset-1 col-xl-6 col-xl-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center">
			<div class="col-lg-1 col-xl-1 col-md-1 col-sm-1 col-xs-1">Qty</div>
			<div class="col-lg-5 col-lg-offset-1 col-xl-5 col-xl-offset-1 col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1">Item</div>
			<div class="col-lg-3 col-lg-offset-0 col-xl-2 col-xl-offset-0 col-md-1 col-md-offset-2 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-0">Price</div>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 col-xl-6 col-xl-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center">
			<div id="OrderTable"></div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="container ">
			<div class="row">
				<div class="col-lg-12 col-lg-offset-0 col-xl-12 col-xl-offset-0 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center"><h3>Enter Information</h3></div>
				<br>
				<div class="col-xs-10 col-xs-offset-1">
					<div class="jumbotron">
						<form role="form">
							<div class="form-group">
								<label for="consumerName">Name</label>
								<input type="text" class="form-control" id="consumerName">
							</div>
							<div class="form-group">
								<label for="consumerNo">Cellphone</label>
								<input type="text" class="form-control" id="consumerNo">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center"><h3>Pickup Time</h3><div id="time" class="bg_9 col-lg-4 col-lg-offset-4 col-xl-4 col-xl-offset-4 col-md-4 col-md-offset-4 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0"></div></div>
				<br>
			</div>
		</div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 col-xl-6 col-xl-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 bg_9 r warningmessage center_text">
			<i>You will be required to collect your order within one hour of the time given. Your order will be cancelled one hour after the set pickup time, with no exceptions.
				<br>By clicking the "Place Order" button, you agree to our Terms and Conditions of use here</p></h6></i>
		</div>
	</div>
	<br>
	<div class="col-lg-6 col-lg-offset-3 col-xl-6 col-xl-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
		<button id="placeOrderButton" type="button" class="btn btn-success btn-block text-center"><div class="hidden-xs"><br></div>Place Order<div class="hidden-xs"><br></div></button>
	</div>
	<br><br><br><br><br>
</div>
</section>
<br><br><br>
<div class="row" id="footer">
	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xl-8 col-xl-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 center_text">
			<div class="col-lg-4 col-md-4 col-xl-4 col-xs-12 col-sm-12">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xl-8 col-xl-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<div class="footerheading"><b>Navigation</b></div>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<a href="index.html"><div class="footerlinks">Home</div></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<a href="menu.html"><div class="footerlinks">Our Menu</div></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<a href="order.php"><div class="footerlinks">Place Your Order</div></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<a href="index.html#aboutus"><div class="footerlinks">About Us</div></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<a href="family.html"><div class="footerlinks">Meet the Family</div></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<a href="index.html#contactus"><div class="footerlinks">Contact Us</div></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<a href="catering_form.html"><div class="footerlinks">Catering Services</div></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<a href="cart.php"><div class="footerlinks">Checkout</div></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-xl-4 col-xs-12 col-sm-12">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xl-8 col-xl-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<div class="visible-xs hidden-sm hidden-xl hidden-lg hidden-md"><br></div>
					<div class="visible-sm hidden-xs hidden-xl hidden-lg hidden-md"><br></div>
					<div class="footerheading"><b>Social Media</b></div>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-4">
					<a href="https://www.facebook.com/pages/Original-Bar-B-Que-Hut/201312543262192?fref=ts" target="_blank"><div class="footerlinks">Facebook</div></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-4">
					<a href="https://www.twitter.com/OriginalBBQHut" target="_blank"><div class="footerlinks">Twitter</div></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-4">
					<a href="https://www.instagram.com/originalbarbquehut/" target="_blank"><div class="footerlinks">Instagram</div></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-xl-4 col-xs-12 col-sm-12">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xl-8 col-xl-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<div class="visible-xs hidden-sm hidden-xl hidden-lg hidden-md"><br></div>
					<div class="visible-sm hidden-xs hidden-xl hidden-lg hidden-md"><br></div>
					<div class="footerheading"><b>Powered By</b></div>
				</div>
				<a href="https://www.facebook.com/RootTechnologiesTT/">
					<div class="col-lg-12 col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="footerlinks">Root Technologies</div>
					</div>
					<br><br>
					<div class="col-lg-8 col-lg-offset-2 col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<img id="rootimg" src="images/rtech.png" alt="">
					</div>
				</a>
			</div>
		</div>			
	</div> 
	<br><br>
</div>	

</body>	
	
	<footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script src="js/cart.js"></script>
	</footer>
