<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>watchstyle</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="public/frontend/css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="public/frontend/css/animate.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="public/frontend/css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="public/frontend/css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="public/frontend/css/font-awesome.min.css">
		<!-- flexslider.css-->
        <link rel="stylesheet" href="public/frontend/css/flexslider.css">
		<!-- chosen.min.css-->
        <link rel="stylesheet" href="public/frontend/css/chosen.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="public/frontend/style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="public/frontend/css/responsive.css">
		<!-- modernizr css -->
        <script src="public/frontend/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

<!-- header-area-start -->
<header>
			<!-- header-top-area-start -->
            <div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="language-area">
								<ul>
									<li><img src="public/frontend/img/flag/1.jpg" alt="flag" /><a href="#">English<i class="fa fa-angle-down"></i></a>
										<div class="header-sub">
											<ul>
												<li><a href="#"><img src="public/frontend/img/flag/2.jpg" alt="flag" />france</a></li>
												<li><a href="#"><img src="public/frontend/img/flag/3.jpg" alt="flag" />croatia</a></li>
											</ul>
										</div>
									</li>
									<li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
										<div class="header-sub dolor">
											<ul>
												<li><a href="#">EUR €</a></li>
												<li><a href="#">USD $</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="account-area text-right">
								<ul>
									<li><a href="dang-ky.php">My Account</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="login.php">Sign in</a></li>
									<li><a href="dang-ky.php">Sign up</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
			<!-- header-mid-area-start -->
			<div class="header-mid-area ptb-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
							<div class="header-search">
								<form action="#">
									<input type="text" placeholder="Search entire store here..." />
									<a href="#" ><i class="fa fa-search"></i></a>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
							<div class="logo-area text-center logo-xs-mrg">
								<a href="{{URL::to('/')}}"><img src="public/frontend/img/logo/logo1.png" alt="logo" /></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="my-cart">
								<ul>
									<li><a href="#"><i class="fa fa-shopping-cart"></i>My Cart</a>
										<span>2</span>
										<div class="mini-cart-sub">
											<div class="cart-product">
												<div class="single-cart">
													<div class="cart-img">
														<a href="#"><img src="public/frontend/img/product/1.jpg" alt="book" /></a>
													</div>
													<div class="cart-info">
														<h5><a href="#">Joust Duffle Bag</a></h5>
														<p>1 x £60.00</p>
													</div>
													<div class="cart-icon">
													    <a href="#"><i class="fa fa-remove"></i></a>
													</div>
												</div>
												<div class="single-cart">
													<div class="cart-img">
														<a href="#"><img src="public/frontend/img/product/5.jpg" alt="book" /></a>
													</div>
													<div class="cart-info">
														<h5><a href="#">Chaz Kangeroo Hoodie</a></h5>
														<p>1 x £52.00</p>
													</div>
													<div class="cart-icon">
                                                        <a href="#"><i class="fa fa-remove"></i></a>
                                                    </div>
												</div>
											</div>
											<div class="cart-totals">
												<h5>Total <span>£12.00</span></h5>
											</div>
											<div class="cart-bottom">
												<a class="view-cart" href="cart.html">view cart</a>
												<a href="checkout.html">Check out</a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-mid-area-end -->
			<!-- main-menu-area-start -->
			<div class="main-menu-area hidden-sm hidden-xs sticky-header-1" id="header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="menu-area">
								<nav>
									<ul>
										<li class="active"><a href="index.php">Home<i class="fa fa-angle-down"></i></a></li>
										<li><a href="thuong-hieu.php">Thương hiệu<i class="fa fa-angle-down"></i></a></li>
										<li><a href="donghonam.php">Đồng hồ Nam<i class="fa fa-angle-down"></i></a></li>
										<li><a href="donghonu.php">Đồng hồ Nữ<i class="fa fa-angle-down"></i></a></li>
										<li><a href="blog.php">Tin tức<i class="fa fa-angle-down"></i></a></li>
										<li><a href="lienhe.php">Liên hệ<i class="fa fa-angle-down"></i></a></li>
										<li><a href="khuyenmai.php">Khuyến mãi<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->
			<!-- mobile-menu-area-start -->
			<div class="mobile-menu-area hidden-md hidden-lg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul id="nav">
										<li><a href="index.html">Home</a>
											<ul>
												<li><a href="index-2.html">Home-2</a></li>
												<li><a href="index-3.html">Home-3</a></li>
												<li><a href="index-4.html">Home-4</a></li>
												<li><a href="index-5.html">Home-5</a></li>
												<li><a href="index-6.html">Home-6</a></li>
											</ul>
										</li>
										<li><a href="product-details.html">Book</a>
											<ul>
												<li><a href="shop.html">Tops & Tees</a></li>
												<li><a href="shop.html">Polo Short Sleeve</a></li>
												<li><a href="shop.html">Graphic T-Shirts</a></li>
												<li><a href="shop.html">Jackets & Coats</a></li>
												<li><a href="shop.html">Fashion Jackets</a></li>
												<li><a href="shop.html">Crochet</a></li>
												<li><a href="shop.html">Sleeveless</a></li>
												<li><a href="shop.html">Stripes</a></li>
												<li><a href="shop.html">Sweaters</a></li>
												<li><a href="shop.html">hoodies</a></li>
												<li><a href="shop.html">Heeled sandals</a></li>
												<li><a href="shop.html">Polo Short Sleeve</a></li>
												<li><a href="shop.html">Flat sandals</a></li>
												<li><a href="shop.html">Short Sleeve</a></li>
												<li><a href="shop.html">Long Sleeve</a></li>
												<li><a href="shop.html">Polo Short Sleeve</a></li>
												<li><a href="shop.html">Sleeveless</a></li>
												<li><a href="shop.html">Graphic T-Shirts</a></li>
												<li><a href="shop.html">Hoodies</a></li>
												<li><a href="shop.html">Jackets</a></li>
											</ul>
										</li>
										<li><a href="product-details.html">Audio books</a>
											<ul>
												<li><a href="shop.html">Tops & Tees</a></li>
												<li><a href="shop.html">Sweaters</a></li>
												<li><a href="shop.html">Hoodies</a></li>
												<li><a href="shop.html">Jackets & Coats</a></li>
												<li><a href="shop.html">Long Sleeve</a></li>
												<li><a href="shop.html">Short Sleeve</a></li>
												<li><a href="shop.html">Polo Short Sleeve</a></li>
												<li><a href="shop.html">Sleeveless</a></li>
												<li><a href="shop.html">Sweaters</a></li>
												<li><a href="shop.html">Hoodies</a></li>
												<li><a href="shop.html">Wedges</a></li>
												<li><a href="shop.html">Vests</a></li>
												<li><a href="shop.html">Polo Short Sleeve</a></li>
												<li><a href="shop.html">Sleeveless</a></li>
												<li><a href="shop.html">Graphic T-Shirts</a></li>
												<li><a href="shop.html">Hoodies</a></li>
											</ul>
										</li>
										<li><a href="product-details.html">children’s books</a>
											<ul>
												<li><a href="shop.html">Shirts</a></li>
												<li><a href="shop.html">Florals</a></li>
												<li><a href="shop.html">Crochet</a></li>
												<li><a href="shop.html">Stripes</a></li>
												<li><a href="shop.html">Shorts</a></li>
												<li><a href="shop.html">Dresses</a></li>
												<li><a href="shop.html">Trousers</a></li>
												<li><a href="shop.html">Jeans</a></li>
												<li><a href="shop.html">Heeled sandals</a></li>
												<li><a href="shop.html">Flat sandals</a></li>
												<li><a href="shop.html">Wedges</a></li>
												<li><a href="shop.html">Ankle boots</a></li>
											</ul>
										</li>
										<li><a href="#">blog</a>
											<ul>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-details.html">blog-details</a></li>
											</ul>
										</li>
										<li><a href="product-details.html">Page</a>
											<ul>
												<li><a href="shop.html">Shop</a></li>
												<li><a href="product-details.html">product-details</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-details.html">blog-details</a></li>
												<li><a href="about.html">About</a></li>
												<li><a href="contact.html">Contact</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="cart.html">Cart</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="register.html">Register</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="404.html">404 Page</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
		</header>
		<!-- header-area-end -->