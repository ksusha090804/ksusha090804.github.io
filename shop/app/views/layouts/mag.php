<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>

<?=$this->getMeta();?>

<base href="/">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- //for-mobile-apps -->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
<link rel="stylesheet" href="css/jquery.countdown.css" />
    <link rel="stylesheet" href="megamenu/css/style.css">
	<link rel="stylesheet" href="megamenu/css/ionicons.min.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>



<!-- js -->

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
    <!-- JS -->
    

<!-- //for bootstrap working -->

<!-- timer -->

<!-- //timer -->
<!-- animation-effect -->





<!-- //animation-effect -->
</head>
	
<body>
	
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<!--<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.html">Login</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.html">Register</a></li>
					</ul>
				</div>-->
				<div class="btn-group">
                        <a class="dropdown-toggle" data-toggle="dropdown">Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php if(!empty($_SESSION['user'])): ?>
                                <li><a href="<?=PATH;?>">Добро пожаловать, <?=h($_SESSION['user']['name']);?></a></li>
								<li><a href="user/logout">Выход</a></li>
								<li><a href="admin">Администратор</a></li>
                            <?php else: ?>
                                <li><a href="user/login">Вход</a></li>
								<li><a href="user/signup">Регистрация</a></li>
								<li><a href="admin">Администратор</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						
						<li><a href="https://www.instagram.com" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>

			
			
			<div class="logo-nav">
			
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
				
					<div><h1><a href="<?=PATH;?>">Best Store <span>Shop anywhere</span></a></h1>
				</div>
				
				</div>

				
				<!-- Mega Menu -->
				<div class="menu-container">
								<div class="menu">
                    				<?php new \app\widgets\menu\Menu([
                        			'tpl' => WWW . '/menu/menu.php',
                    					]); ?>
								</div>

								<div class="clearfix"> </div>
				</div>
				
				<h1><a href="<?=PATH;?>">Home</a></h1>
				<div class="clearfix"> </div>
				<div class="logo-nav-right">
				
					<div class="search-bar">
					<div class="clearfix"> </div>
                    	<form action="search" method="get" autocomplete="off">
                        	<input type="text" class="typeahead" id="typeahead" name="s">
                       		<input type="submit" value="Search">
                    	</form>
                    <!--<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">-->
                	</div>
					<!---<div class="search-box">
					<div id="sb-search" class="sb-search">
					<form action="search" method="get" autocomplete="off">
                        <input type="text" class="typeahead" id="typeahead" name="s">
						<input type="submit" value="">
						<span class="sb-icon-search"> </span>
						<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
                    </form>
						
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>-->
							<div class="clearfix"> </div>
						
				</div>
				
				<div class="clearfix"> </div>
				<div class="header-right">
					<div class="cart box_1">
					<a href="cart/show" onclick="getCart(); return false;">
                        <div class="total">
                            <img src="images/bag.png" alt="" />
                            <?php if(!empty($_SESSION['cart'])): ?>
                                <span class="simpleCart_total">$ <?= $_SESSION['cart.sum'] ?></span>
                            <?php else: ?>
                                <span class="simpleCart_total">Empty Cart</span>
                            <?php endif; ?>
                        </div>
                    </a>
						<!--<a href="checkout.html">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="images/bag.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>-->
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
<div class="content">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?=$content;?>
</div>

<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="footer-grids">
			<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>shop@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>89039116235</li>
					</ul>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="<?=PATH;?>">Best Store <span>shop anywhere</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&copy 2016 Best Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>


<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Корзина</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                <a href="cart/view" type="button" class="btn btn-primary">Оформить заказ</a>
                <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>
            </div>
        </div>
    </div>
</div>

<script>
    var path = '<?=PATH;?>';
        
</script>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.js"></script>
<script src="js/typeahead.bundle.js"></script>
	<script src="js/wow.min.js"></script>

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	
<script>
 new WOW().init();
</script>

<script type='text/javascript'>//<![CDATA[ 
						$(window).load(function(){
						 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 10000, 60000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


						});//]]>
						</script>
						<script type="text/javascript" src="js/jquery-ui.min.js"></script>

						<script defer src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>

<script src="js/imagezoom.js"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="megamenu/js/vendor/jquery-1.12.0.min.js"><\/script>')
    </script>
	
	<script type='text/javascript'>//<![CDATA[ 
						$(window).load(function(){
						 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 10000, 60000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


						});//]]>
						</script>
						<script type="text/javascript" src="js/jquery-ui.min.js"></script>
						<script src="js/imagezoom.js"></script>
						<script defer src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
						<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>


					-->
					<script src="js/main.js"></script>
					<script src="megamenu/js/megamenu.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script>
        window.Modernizr || document.write('<script src="megamenu/js/vendor/modernizr-2.8.3.min.js"><\/script>')
	</script>
	
<?php 
    $logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();


?>
<script src="js/main.js"></script>
</body>
</html>