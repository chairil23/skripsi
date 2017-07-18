
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	
<!-- Mirrored from theme.stepofweb


.com/Atropos/v1.9.1/HTML/start.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jul 2017 00:44:41 GMT -->
<head>
		<meta charset="utf-8" />
		<title>Atropos - Responsive Multipurpose</title>

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" /> -->

		<!-- CORE CSS -->
		<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/font-awesome.css" rel="stylesheet')}}" type="text/css" />
		<link href="{{ asset('css/animate.css')}}" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="{{ asset('css/essentials.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/layout.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/layout-responsive.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/color_scheme/orange.css')}}" rel="stylesheet" type="text/css" /><!-- orange: default style -->


		<!-- Morenizr -->
		<script type="text/javascript" src="{{ asset('plugins/modernizr.min.js')}}"></script>
	</head>
	<body><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->

		<!-- Top Bar -->
		<header id="topHead">
			<div class="container">

				<!-- PHONE/EMAIL -->
				<span class="quick-contact pull-left">
					<i class="fa fa-phone"></i> 1800-555-1234 &bull; 
					<a class="hidden-xs" href="mailto:mail@yourdomain.com">mail@domain.com</a>
				</span>
				<!-- /PHONE/EMAIL -->

				<!-- LANGUAGE -->
				<div class="btn-group pull-right hidden-xs">
					<button class="dropdown-toggle language" type="button" data-toggle="dropdown">
						<img src="{{ asset('images/flags/us.png')}}" width="16" height="11" alt="EN Language" /> English <span class="caret"></span>
					</button>

					<ul class="dropdown-menu">
						<li>
							<a href="#">
								<img src="{{ asset('images/flags/us.png')}}" width="16" height="11" alt="EN Language" /> [US] English
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('images/flags/us.png')}}" width="16" height="11" alt="DE Language" /> [DE] German
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('images/flags/us.png')}}png" width="16" height="11" alt="FR Language" /> [FR] French
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('images/flags/us.png')}}" width="16" height="11" alt="RU Language" /> [RU] Russian
							</a>
						</li>
					</ul>
				</div>
				<!-- /LANGUAGE -->


				<!-- SIGN IN -->
				<div class="pull-right nav signin-dd">
					<a id="quick_sign_in" href="page-signin.html" data-toggle="dropdown"><i class="fa fa-users"></i><span class="hidden-xs"> Sign In</span></a>
					<div class="dropdown-menu" role="menu" aria-labelledby="quick_sign_in">

						<h4>Sign In</h4>
						<!-- http://theme.stepofweb.com/Atropos/v1.9.1/HTML/page-signin.html -->
						<form action="" method="post" role="form">

							<div class="form-group"><!-- email -->
								<input required type="email" class="form-control" placeholder="Username or email">
							</div>

							<div class="input-group">

								<!-- password -->
								<input required type="password" class="form-control" placeholder="Password">
								
								<!-- submit button -->
								<span class="input-group-btn">
									<button class="btn btn-primary">Sign In</button>
								</span>

							</div>

							<div class="checkbox"><!-- remmember -->
								<label>
									<input type="checkbox"> Remember me &bull; <a href="page-signin.html">Forgot password?</a>
								</label>
							</div>

						</form>

						<hr />
						
						<a href="#" class="btn-facebook fullwidth radius3"><i class="fa fa-facebook"></i> Connect With Facebook</a>
						<a href="#" class="btn-twitter fullwidth radius3"><i class="fa fa-twitter"></i> Connect With Twitter</a>
						<!--<a href="#" class="btn-google-plus fullwidth radius3"><i class="fa fa-google-plus"></i> Connect With Google</a>-->

						<p class="bottom-create-account">
							<a href="page-signup.html">Manual create account</a>
						</p>
					</div>
				</div>
				<!-- /SIGN IN -->

				<!-- CART MOBILE BUTTON -->
				<a class="pull-right" id="btn-mobile-quick-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
				<!-- CART MOBILE BUTTON -->

				<!-- LINKS -->
				<div class="pull-right nav hidden-xs">
					<a href="page-about-us.html"><i class="fa fa-angle-right"></i> About</a>
					<a href="contact-us.html"><i class="fa fa-angle-right"></i> Contact</a>
				</div>
				<!-- /LINKS -->

			</div>
		</header>
		<!-- /Top Bar -->

		<!-- TOP NAV -->
		<header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->
			<div class="container">

				<!-- Mobile Menu Button -->
				<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
					<i class="fa fa-bars"></i>
				</button>

				<!-- Logo text or image -->
				<a class="logo" href="index.html">
					<img src="{{ asset('images/logo.png')}}" alt="Atropos" />
				</a>

				<!-- Top Nav -->
				<div class="navbar-collapse nav-main-collapse collapse pull-right">
					<nav class="nav-main mega-menu">
						<ul class="nav nav-pills nav-main scroll-menu" id="topMain">
							<li class="dropdown active">
								<a class="dropdown-toggle" href="#">
									Home <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu"><a href="#">Revolution Slider V4</a>
										<ul class="dropdown-menu">
											<li><a href="revolution-half-slider.html">Half Slider</a></li>
											<li><a href="revolution-full-slider.html">Full Slider</a></li>
											<li><a href="revolution-video.html">Full Video</a></li>
											<li><a href="revolution-ken-burns.html">Ken Burns</a></li>
											<li><a href="revolution-official-1.html">More Examples</a></li>
										</ul>
									</li>
									<li><a href="start.html#rs5" data-toggle="tooltip" data-placement="top" title="" data-original-title="52 More RS5 Templates">Revolution Slider V5 &nbsp; <span class="label label-danger">new</span></a></li>
									<li class="dropdown-submenu"><a href="#">Superslides Slider</a>
										<ul class="dropdown-menu">
											<li><a href="superslides-slider-half.html">Half Slider</a></li>
											<li><a href="superslides-slider-full.html">Full Slider</a></li>
											<li><a href="superslides-video.html">Half Video</a></li>
											<li><a href="superslides-video-full.html">Full Video</a></li>
										</ul>
									</li>
									<li class="divider"></li>
									<li><a href="index-extended.html">Extended</a></li>
									<li><a href="portfolio-home.html">Portfolio</a></li>
									<li><a href="shop-home.html">Shop</a></li>
									<li><a href="realestate-home.html">Real Estate</a></li>
									<li><a href="church-home.html">Church</a></li>
									<li><a href="medical-home.html">Medical</a></li>
									<li><a href="college-home.html">College</a></li>
									<li class="divider"></li>
									<li><a href="onepage-superslides.html" target="_blank">Onepage - Superslides</a></li>
									<li><a href="onepage-revolution.html" target="_blank">Onepage - Revolution</a></li>
									<li><a href="index-more.html">More...</a></li>
								</ul>
							</li>
							<li class="dropdown mega-menu-item mega-menu-two-columns">
								<a class="dropdown-toggle" href="#">
									Pages <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="mega-menu-content">
											<div class="row">

												<div class="col-md-6">
													<ul class="sub-menu">
														<li>
															<ul class="sub-menu">

																<li><a href="shortcodes-rows.html"><i class="fa fa-star-o"></i> Shortcodes</a></li>
																<li><a href="page-about-us.html"><i class="fa fa-check-square-o"></i> About Us</a></li>
																<li><a href="page-about-me.html"><i class="fa fa-check-square-o"></i> About Me</a></li>
																<li><a href="page-team.html"><i class="fa fa-check-square-o"></i> Team</a></li>
																<li><a href="page-services.html"><i class="fa fa-check-square-o"></i> Services</a></li>
																<li><a href="page-faq.html"><i class="fa fa-check-square-o"></i> FAQ</a></li>
																<li><a href="page-support.html"><i class="fa fa-check-square-o"></i> Support</a></li>
																<li><a href="page-privacy-policy.html"><i class="fa fa-check-square-o"></i> Privacy Policy</a></li>
																<li><a href="page-terms-and-conditions.html"><i class="fa fa-check-square-o"></i> Terms Page</a></li>
																<li><a href="page-invoice.html"><i class="fa fa-check-square-o"></i> Invoice</a></li>
																<li class="dropdown-submenu">
																	<a href="#"><i class="fa fa-check-square-o"></i> Contact</a>
																	<ul class="dropdown-menu">
																		<li><a href="contact-us.html">Version 1</a></li>
																		<li><a href="contact-us-2.html">Version 2</a></li>
																		<li><a href="contact-us-3.html">Version 3</a></li>
																		<li><a href="contact-us-4.html">Version 4</a></li>
																	</ul>
																</li>
																<li><a href="page-sitemap.html"><i class="fa fa-sitemap"></i> Sitemap</a></li>
															</ul>
														</li>
													</ul>
												</div>

												<div class="col-md-6">
													<ul class="sub-menu">
														<li>
															<ul class="sub-menu">
																<li><a href="page-testimonials.html"><i class="fa fa-check-square-o"></i> Testimonials</a></li>
																<li><a href="page-pricing.html"><i class="fa fa-check-square-o"></i> Pricing</a></li>
																<li><a href="page-pricing-extended.html"><i class="fa fa-check-square-o"></i> Pricing Extended</a></li>
																<li><a href="page-signin.html"><i class="fa fa-check-square-o"></i> Login</a></li>
																<li><a href="page-signup.html"><i class="fa fa-check-square-o"></i> Register</a></li>
																<li><a href="page-404.html"><i class="fa fa-check-square"></i> 404 Error</a></li>
																<li><a href="page-maintenance.html"><i class="fa fa-check-square"></i> Maintenance</a></li>
																<li class="dropdown-submenu">
																	<a href="#"><i class="fa fa-check-square"></i> Coming Soon</a>
																	<ul class="dropdown-menu">
																		<li><a href="page-coming-soon-image.html">Coming Soon - Image</a></li>
																		<li><a href="page-coming-soon-video.html">Coming Soon - Video</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu">
																	<a href="#"><i class="fa fa-check-square"></i> Custom Header</a>
																	<ul class="dropdown-menu">
																		<li><a href="page-header-basic.html">Basic</a></li>
																		<li><a href="page-header-image.html">Image</a></li>
																		<li><a href="page-header-overlay1.html">Overlay 1</a></li>
																		<li><a href="page-header-overlay2.html">Overlay 2</a></li>
																		<li><a href="page-header-overlay3.html">Overlay 3</a></li>
																		<li><a href="page-header-delayed-parallax.html">Delayed Parallax</a></li>
																		<li><a href="page-header-standard-parallax.html">Standard Parallax</a></li>
																	</ul>
																</li>
																<li><a href="page-full-width.html"><i class="fa fa-check-square-o"></i> Full width</a></li>
																<li><a href="page-left-sidebar.html"><i class="fa fa-check-square-o"></i> Left Sidebar</a></li>
																<li><a href="page-right-sidebar.html"><i class="fa fa-check-square-o"></i> Right Sidebar</a></li>
																<li><a href="email-template.html"><i class="fa fa-envelope"></i>Email Template</a></li>
															</ul>
														</li>
													</ul>
												</div>
														
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown mega-menu-item mega-menu-fullwidth">
								<a class="dropdown-toggle" href="#">
									Features <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="mega-menu-content">
											<div class="row">
												<div class="col-md-3">
													<ul class="sub-menu">
														<li>
															<span class="mega-menu-sub-title">General Features</span>
															<ul class="sub-menu">
																<li><a href="feature-grid-system.html">Grid System</a></li>
																<li><a href="feature-icons.html">Icons</a></li>
																<li><a href="feature-pricing-tables.html"><em>Pricing Tables</em></a></li>
																<li><a href="feature-testimonials.html"><em>Testimonials</em></a></li>
																<li><a href="email-template.html"><em>Email Template</em></a></li>
																<li><a href="shortcodes-rows.html"><em>Shortcodes</em></a></li>
																<li><a href="feature-animations.html">Animations</a></li>
																<li><a href="feature-typograpy.html">Typograpy</a></li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-3">
													<ul class="sub-menu">
														<li>
															<span class="mega-menu-sub-title">Sliders</span>
															<ul class="sub-menu">
																<li><a href="feature-content-carousel.html">Content Carousel</a></li>
																<li><a href="revolution-official-1.html">(17) Premium Revolution Slider</a></li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-3">
													<ul class="sub-menu">
														<li>
															<span class="mega-menu-sub-title">Headers</span>
															<ul class="sub-menu">
																<li><a href="header-1.html">Header Version 1</a></li>
																<li><a href="header-2.html">Header Version 2</a></li>
																<li><a href="header-3.html">Header Version 3</a></li>
																<li><a href="header-4.html">Header Version 4</a></li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-3">
													<ul class="sub-menu">
														<li>
															<span class="mega-menu-sub-title">Unique Bonuses</span>
															<ul class="sub-menu">
																<li><a href="onepage-superslides.html" target="_blank">Onepage - Superslides</a></li>
																<li><a href="onepage-revolution.html" target="_blank">Onepage - Revolution</a></li>
																<li><a href="email-template.html">Email Template</a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#">
									<b>Special</b> <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="magazine-home.html">Magazine - Home</a></li>
									<li><a href="magazine-category.html">Magazine - Category</a></li>
									<li><a href="magazine-single.html">Magazine - Single</a></li>
									<li class="divider"></li>
									<li><a href="realestate-home.html">Real Estate - Home</a></li>
									<li><a href="realestate-list.html">Real Estate - List</a></li>
									<li><a href="realestate-single.html">Real Estate - Single</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#">
									Shop <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="shop-home.html">Shop - Home</a></li>
									<li class="divider"></li>
									<li><a href="shop-full-width.html">Shop Full Width</a></li>
									<li><a href="shop-product-full-width.html">Shop Product Full Width</a></li>
									<li class="divider"></li>
									<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
									<li><a href="shop-product-sidebar.html">Shop Product Sidebar</a></li>
									<li class="divider"></li>
									<li><a href="shop-cart.html">Shop Cart</a></li>
									<li><a href="shop-cc-pay.html">Shop Credit Card</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#">
									Blog <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="blog-full-width.html">Blog Without Sidebar</a></li>
									<li><a href="blog-left-sidebar.html">Blog With Sidebar Left</a></li>
									<li><a href="blog-right-sidebar.html">Blog With Sidebar Right</a></li>
									<li><a href="blog-timeline.html">Blog Timeline</a></li>
									<li><a href="blog-masonry.html">Blog Masonry</a></li>
									<li><a href="blog-masonry-full-width.html">Blog Masonry - Full Width</a></li>
									<li><a href="blog-masonry-sidebar.html">Blog Masonry - Sidebar</a></li>
									<li class="divider"></li>
									<li><a href="blog-single-sidebar-left.html">Single Sidebar Left</a></li>
									<li><a href="blog-single-sidebar-right.html">Single Sidebar Right</a></li>
									<li><a href="blog-single-sidebar-no.html">Single No Sidebar</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#">
									Portfolio <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="portfolio-2-columns.html">2 Columns</a></li>
									<li><a href="portfolio-3-columns.html">3 Columns</a></li>
									<li><a href="portfolio-4-columns.html">4 Columns</a></li>
									<li><a href="portfolio-lightbox.html">Portfolio - Gallery</a></li>
									<li><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
									<li><a href="portfolio-full-center.html">Portfolio Full Center</a></li>
									<li class="divider"></li>
									<li><a href="portfolio-single.html">Single - Basic</a></li>
									<li><a href="portfolio-single-extended.html">Single - Extended</a></li>
									<li><a href="portfolio-single-full-slider.html">Single - Full Slider</a></li>
								</ul>
							</li>

							<!-- GLOBAL SEARCH -->
							<li class="search">
								<!-- search form -->
								<form method="get" action="#" class="input-group pull-right">
									<input type="text" class="form-control" name="k" id="k" value="" placeholder="Search">
									<span class="input-group-btn">
										<button class="btn btn-primary notransition"><i class="fa fa-search"></i></button>
									</span>
								</form>
								<!-- /search form -->
							</li>
							<!-- /GLOBAL SEARCH -->

							<!-- QUICK SHOP CART -->
							<li class="quick-cart">
								<span class="badge pull-right">3</span>
								
								<div class="quick-cart-content">

									<p><i class="fa fa-warning"></i> You have 3 products on your cart</p>

									<a class="item" href="shop-product-full-width.html"><!-- item 1 -->
										<img class="pull-left" src="assets/images/demo/shop/thumb/1.jpg" width="40" alt="quick cart" />
										<div class="inline-block">
											<span class="title">Man shirt XL</span>
											<span class="price">2 &times; $44.00</span>
										</div>
									</a><!-- /item 1 -->

									<a class="item" href="shop-product-full-width.html"><!-- item 2 -->
										<img class="pull-left" src="assets/images/demo/shop/thumb/2.jpg" width="40" alt="quick cart" />
										<div class="inline-block">
											<span class="title">Great Black Shoes For Man and Only Man...</span>
											<span class="price">2 &times; $44.00</span>
										</div>
									</a><!-- /item 2 -->

									<a class="item" href="shop-product-full-width.html"><!-- item 3 -->
										<img class="pull-left" src="assets/images/demo/shop/thumb/4.jpg" width="40" alt="quick cart" />
										<div class="inline-block">
											<span class="title">Pink Lady Perfect Shoes</span>
											<span class="price">1 &times; $67.32</span>
										</div>
									</a><!-- /item 3 -->

									<!-- QUICK CART BUTTONS -->
									<div class="row cart-footer">
										<div class="col-md-6 nopadding-right">
											<a href="shop-cart.html" class="btn btn-primary btn-xs fullwidth">VIEW CART</a>
										</div>
										<div class="col-md-6 nopadding-left">
											<a href="shop-cc-pay.html" class="btn btn-info btn-xs fullwidth">CHECKOUT</a>
										</div>
									</div>
									<!-- /QUICK CART BUTTONS -->

								</div>

							</li>
							<!-- /QUICK SHOP CART -->


						</ul>
					</nav>
				</div>
				<!-- /Top Nav -->

			</div>
		</header>

		<span id="header_shadow"></span>
		<!-- /TOP NAV -->



		<!-- WRAPPER -->
		<div id="wrapper">

			<section class="text-center padding-top100 padding-bottom100" style="background-image:url({{asset('images/demo/revolution_slider/sliderbg.jpg')}}); border-bottom:rgba(0,0,0,0.1) 1px solid;">
				<h1>
					<strong>ATROPOS MULTIPURPOSE TEMPLATE</strong>
					<span class="subtitle"><span><b>[v 1.9.1]</b></span> LIFETIME UPDATE FOR FREE</span>
				</h1>
				<h3>CREATE POWERFUL WEBSITES WITH ATROPOS</h3>

				<a class="btn btn-default" href="https://wrapbootstrap.com/theme/atropos-responsive-website-template-WB05SR527" target="_blank" rel="nofollow">PURCHASE NOW</a>
				 &nbsp; 
				<a class="btn btn-default scrollTo" href="#maintpl">BROWSE NOW</a>

			</section>


			<section>
				<div class="margin-top30 text-center">

					<a class="label label-primary scrollTo" href="#maintpl">MAIN TEMPLATES</a> &nbsp; 
					<a class="label label-primary scrollTo" href="#onepagetpl">ONE PAGE</a> &nbsp; 
					<a class="label label-primary scrollTo" href="#rs5tpl">REVOLUTION SLIDER 5</a> &nbsp; 
					<a class="label label-primary scrollTo" href="#emailtpl">EMAIL</a> &nbsp; 
				
				</div>
			</section>


			<div class="margin-bottom150 margin-top30">
				<hr class="half-margins" /><!-- hr line -->
			</div>

			<!-- -->
			<section id="maintpl">
				<div class="container">

					<!-- Section Header -->
					<header class="section-header margin-bottom80 text-center">
						<div class="heading-title heading-line-double text-center">
							<h2>ATROPOS MAIN TEMPLATES</h2>
						</div>
					</header>
					<!-- /Section Header -->


					<div class="row text-center">

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="index.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="index.html">ATROPOS DEFAULT</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="index-extended.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="index-extended.html">DEFAULT EXTENDED</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="portfolio-home.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="portfolio-home.html">PORTFOLIO</a>
							</h4>

						</div>





						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="shop-home.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="shop-home.html">SHOP</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="realestate-home.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="realestate-home.html">REAL ESTATE</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="church-home.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="church-home.html">CHURCH</a>
							</h4>

						</div>




						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="medical-home.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="medical-home.html">MEDICAL</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="college-home.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="college-home.html">COLLEGE</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="magazine-home.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="magazine-home.html">MAGAZINE</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="index.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="index.html">ATROPOS DEFAULT</a>
							</h4>

						</div>





						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="blog-left-sidebar.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="blog-left-sidebar.html">BLOG SIDEBAR</a>
							</h4>

						</div>


						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="blog-masonry.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="blog-masonry.html">BLOG MASONRY</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="blog-timeline.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="blog-timeline.html">BLOG TIMELINE</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60">

							<div class="margin-bottom30">
								<a class="thumbnail" href="javascript:;">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" href="javascript:;">COMING SOON</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 hidden-xs">

							<div class="margin-bottom30">
								<a class="thumbnail" href="javascript:;">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" href="javascript:;">COMING SOON</a>
							</h4>

						</div>

					</div>

				</div>
			</section>
			<!-- / -->





			<div class="margin-bottom150 margin-top50">
				<hr class="half-margins" /><!-- hr line -->
			</div>



			<!-- -->
			<section id="onepagetpl">
				<div class="container">

					<!-- Section Header -->
					<header class="section-header margin-bottom80 text-center">
						<div class="heading-title heading-line-double text-center">
							<h2>ONEPAGE TEMPLATES</h2>
						</div>
					</header>
					<!-- /Section Header -->


					<div class="row text-center">

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="onepage-revolution.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/onepage_revolution-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="onepage-revolution.html">ONEPAGE REVOLUTION</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="onepage-superslides.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/onepage_superslide-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="onepage-superslides.html">ONEPAGE SUPERSLIDES</a>
							</h4>

						</div>

						<div class="col-md-4 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" href="javascript:;">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" href="javascript:;">COMING SOON</a>
							</h4>

						</div>

					</div>

				</div>
			</section>
			<!-- / -->


					



			<div class="margin-bottom150 margin-top50">
				<hr class="half-margins" /><!-- hr line -->
			</div>



			<!-- -->
			<section id="rs5tpl">
				<div class="container">
					
					<!-- Section Header -->
					<header class="section-header margin-bottom80 text-center">
						<div class="heading-title heading-line-double text-center">
							<h2>REVOLUTION SLIDER 5</h2>
						</div>
					</header>
					<!-- /Section Header -->


					<div class="row">

						<div class="col-md-3 col-sm-3 hidden-sm hidden-xs">
							<ul class="nav nav-list mix-filter">
								<li class="filter margin-bottom10 active" data-filter="all"><a href="#"><i class="fa fa-circle-o"></i> All Examples (<span id="rs5count">0</span>)</a></li>
								<li class="filter" data-filter="filterSlider"><a href="#"><i class="fa fa-circle-o"></i> Slider</a></li>
								<li class="filter" data-filter="filterDDD"><a href="#"><i class="fa fa-circle-o"></i> 3D</a></li>
								<li class="filter" data-filter="filterHero"><a href="#"><i class="fa fa-circle-o"></i> Hero Scene</a></li>
								<li class="filter" data-filter="filterTimer"><a href="#"><i class="fa fa-circle-o"></i> Timer</a></li>
								<li class="filter" data-filter="filterCarousel"><a href="#"><i class="fa fa-circle-o"></i> Carousel</a></li>
								<li class="filter" data-filter="filterAuto"><a href="#"><i class="fa fa-circle-o"></i> Auto-Size</a></li>
								<li class="filter" data-filter="filterFullwidth"><a href="#"><i class="fa fa-circle-o"></i> Full-Width</a></li>
								<li class="filter" data-filter="filterFullscreen"><a href="#"><i class="fa fa-circle-o"></i> Full-Screen</a></li>
								<li class="filter" data-filter="filterTabs"><a href="#"><i class="fa fa-circle-o"></i> Tabs</a></li>
								<li class="filter" data-filter="filterScroll"><a href="#"><i class="fa fa-circle-o"></i> Scroll Navigation</a></li>
								<li class="filter" data-filter="filterMenu"><a href="#"><i class="fa fa-circle-o"></i> Menu Navigation</a></li>
								<li class="filter" data-filter="filterFront"><a href="#"><i class="fa fa-circle-o"></i> Front Page</a></li>					
								<li class="filter" data-filter="filterSpecial"><a href="#"><i class="fa fa-circle-o"></i> Special Content</a></li>
								<li class="filter" data-filter="filterParallax"><a href="#"><i class="fa fa-circle-o"></i> Parallax</a></li>
								<li class="filter" data-filter="filterHTML5"><a href="#"><i class="fa fa-circle-o"></i> HTML5 Video</a></li>
								<li class="filter" data-filter="filterYouTube"><a href="#"><i class="fa fa-circle-o"></i> YouTube Video</a></li>
								<li class="filter" data-filter="filterVimeo"><a href="#"><i class="fa fa-circle-o"></i> Vimeo Video</a></li>
							</ul>
						</div>
						
						<div class="col-md-9 col-sm-9">

							<div class="row mix-grid text-center rs5">

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullscreen filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-52.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="{{ asset('images/demo/start/rs_52-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-52.html">CAR DEALER</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullscreen filterSpecial filterMenu filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-51.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_51-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-51.html">CREATIVE FRONTPAGE</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullscreen filterSpecial filterMenu filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-50.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_50-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-50.html">FULLSCREEN MENU</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullscreen filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-48.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_48-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-48.html">COMING SOON</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullscreen filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-49.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_49-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-49.html">APP LANDING PAGE</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullscreen filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-47.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_47-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-47.html">SLEEK LANDING PAGE</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullscreen filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-46.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_46-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-46.html">NEWS GALLERY</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterall filterSlider filterFullscreen filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-45.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_45-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-45.html">PHOTO GALLERY</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullscreen filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-44.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_44-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-44.html">WHITE BOARD</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullscreen filterSpecial filterParallax filterYouTube">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-43.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_4-min3.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-43.html">4K YOUTUBE SLIDER</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterCarousel filterFullwidth filterSpecial">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-42.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_42-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-42.html">TEAM CAROUSEL</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterHero filterFullscreen filterSpecial filterParallax filterYouTube">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-41.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_41-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-41.html">RESTAURANT</a>
									</h4>

								</div>


								<div class="col-md-6 margin-bottom60 mix filterHero filterFullscreen filterSpecial filterParallax filterYouTube">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-40.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_40-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-40.html">AGENCY SLIDER</a>
									</h4>

								</div>


								<div class="col-md-6 margin-bottom60 mix filterSlider filterTimer filterFullscreen filterSpecial filterParallax filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-33.html">
											<img class="img-responsive lazy" src="{{ asset('images/demo/tart/loading-min.png')}}" data-original="{{ asset('images/demo/start/rs_39-min.png')}}" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-33.html">CONCEPT SLIDER</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterDDD filterFullscreen filterSpecial filterParallax filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-34.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_34-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-34.html">CREATIVE FREEDOM</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterTimer filterAuto filterSpecial filterFullscreen filterParallax filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-35.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_35-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-35.html">FULLSCREEN TOGGLE</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterall filterHero filterDDD filterAuto filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-36.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_36-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-36.html">PARALLAX SCENE</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterall filterHero filterDDD filterAuto filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-37.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_37-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-37.html">WOW FACTOR</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterall filterHero filterDDD filterFullwidth filterSpecial filterParallax filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-38.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_38-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-38.html">3D WEB PRODUCT</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterall filterHero filterDDD filterFullwidth filterSpecial filterParallax filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-39.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_39-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-39.html">PREMIUM ECOMMERCE</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterCarousel filterFullwidth">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-1.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_1-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-1.html">CAROUSEL HIGHLIGHT</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterCarousel filterAuto filterSpecial">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-2.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_2-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-2.html">CAROUSEL INSTAGRAM</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix ilterCarousel filterFullwidth filterHTML5 filterYouTube filterVimeo filterTabs">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-3.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_3-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-3.html">CAROUSEL MEDIA</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterCarousel filterTimer filterFullwidth filterParallax filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-4.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_4-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-4.html">CAROUSEL CLASSIC</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterCarousel filterFullwidth filterFullscreen filterSpecial filterMenu">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-5.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_5-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-5.html">CAROUSEL SHOWCASE</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterCarousel filterFullwidth filterFullscreen filterSpecial filterMenu">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-6.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_6-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-6.html">CAROUSEL PHOTOGRAPHY</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterFullwidth filterSpecial filterParallax filterFullscreen filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-7.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_7-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-7.html">ROTATING WORDS</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterFullwidth filterFullscreen filterParallax filterSpecial">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-8.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_8-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-8.html">BIG BOLD</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullwidth filterFullscreen filterScroll filterFront">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-9.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_9-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-9.html">SLIDER FASHION</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullwidth filterFullscreen filterScroll filterMenu filterFront filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-10.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_10-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-10.html">SLIDER GYM</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullwidth filterFullscreen filterScroll filterFront filterSpecial filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-11.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_11-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-11.html">SLIDER RESTAURANT</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullwidth filterFullscreen filterScroll filterMenu filterFront filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-12.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_12-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-12.html">SLIDER PRODUCT DARK</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterFullwidth filterFullscreen filterScroll filterMenu filterFront filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-13.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_13-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-13.html">SLIDER PRODUCT LIGHT</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterTimer filterAuto filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-14.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_14-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-14.html">SLIDER CLASSIC</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterAuto filterTabs">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-15.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_15-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-15.html">GALLERY LIGHT</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterAuto filterTabs">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-16.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_16-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-16.html">GALLERY DARK</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterAuto filterTabs">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-17.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_17-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-17.html">SLIDER FANCY TEXT</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterTimer filterAuto filterTabs">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-18.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_18-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-18.html">SLIDER HIGHLIGHT</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterAuto filterHTML5 filterVimeo filterYouTube">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-19.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_19-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-19.html">SLIDER MEDIA</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterTimer filterFullwidth filterTabs filterParallax filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-20.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_20-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-20.html">SLIDER NEWS</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterAuto filterTabs filterVimeo">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-21.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_21-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-21.html">SLIDER VIMEO</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterAuto filterTabs filterYouTube">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-22.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_22-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-22.html">SLIDER YOUTUBE</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterSlider filterTimer filterAuto filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-23.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_23-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-23.html">SLIDER TRAVEL</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterHero filterFullwidth filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-24.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_24-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-24.html">HERO IMAGE</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterHero filterFullwidth filterSpecial filterVimeo">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-25.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_25-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-25.html">HERO NEWS</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterHero filterFullwidth filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-26.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_26-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-26.html">HERO NEWSLETTER</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterHero filterFullwidth filterSpecial filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-27.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_27-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-27.html">HERO SEARCH</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterall filterHero filterFullwidth filterParallax">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-28.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_28-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-28.html">HERO SPORTS</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterall filterHero filterFullwidth filterVimeo">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-29.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_29-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-29.html">HERO VIMEO</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterHero filterFullwidth filterYouTube">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-30.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_30-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-30.html">HERO YOUTUBE</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterFullwidth  filterSpecial filterHTML5">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-31.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_31-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-31.html">PREMIUM CONTENT ZOOM</a>
									</h4>

								</div>

								<div class="col-md-6 margin-bottom60 mix filterFullwidth filterTabs">

									<div class="margin-bottom30">
										<a class="thumbnail" target="_blank" href="rs-32.html">
											<img class="img-responsive lazy" src="assets/images/demo/start/loading-min.png" data-original="assets/images/demo/start/rs_32-min.png" alt="" />
										</a>
									</div>

									<h4 class="size-15">
										<a style="color:#333333;" target="_blank" href="rs-32.html">PREMIUM FOOD CAROUSEL</a>
									</h4>

								</div>

							</div>


						</div>

					</div>

				</div>
			</section>
			<!-- / -->





			<div class="margin-bottom150 margin-top50">
				<hr class="half-margins" /><!-- hr line -->
			</div>



			<!-- -->
			<section id="emailtpl">
				<div class="container">

					<!-- Section Header -->
					<header class="section-header margin-bottom80 text-center">
						<div class="heading-title heading-line-double text-center">
							<h2>EMAIL TEMPLATES</h2>
						</div>
					</header>
					<!-- /Section Header -->


					<div class="row text-center">

						<div class="col-md-6 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" target="_blank" href="email-template.html">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" target="_blank" href="email-template.html">DEFAULT EMAIL</a>
							</h4>

						</div>



						<div class="col-md-6 col-sm-6 margin-bottom60 ">

							<div class="margin-bottom30">
								<a class="thumbnail" href="javascript:;">
									<img class="img-responsive lazy" src="{{ asset('images/demo/start/loading-min.png')}}" data-original="{{ asset('images/demo/start/more_soon-min.png')}}" alt="" />
								</a>
							</div>

							<h4 class="size-15">
								<a style="color:#333333;" href="javascript:;">COMING SOON</a>
							</h4>

						</div>


					</div>

				</div>
			</section>
			<!-- / -->



		</div>
		<!-- /WRAPPER -->



		<!-- FOOTER -->
		<footer>

			<!-- copyright , scrollTo Top -->
			<div class="footer-bar">
				<div class="container">
					<span class="copyright">Copyright &copy; Your Company, LLC . All Rights Reserved.</span>
					<a class="toTop" href="#topNav">BACK TO TOP <i class="fa fa-arrow-circle-up"></i></a>
				</div>
			</div>
			<!-- copyright , scrollTo Top -->


			<!-- footer content -->
			<div class="footer-content">
				<div class="container">

					<div class="row">


						<!-- FOOTER CONTACT INFO -->
						<div class="column col-md-4">
							<h3>CONTACT</h3>

							<p class="contact-desc">
								Atropos is a very powerful HTML5 template, you will be able to create an awesome website in a very simple way.										
							</p>
							<address class="font-opensans">
								<ul>
									<li class="footer-sprite address">
										PO Box 21132<br />
										Here Weare St, Melbourne<br />
										Vivas 2355 Australia<br />
									</li>
									<li class="footer-sprite phone">
										Phone: 1-800-565-2390
									</li>
									<li class="footer-sprite email">
										<a href="mailto:support@yourname.com">support@yourname.com</a>
									</li>
								</ul>
							</address>

						</div>
						<!-- /FOOTER CONTACT INFO -->


						<!-- FOOTER LOGO -->
						<div class="column logo col-md-4 text-center">
							<div class="logo-content">
								<img class="animate_fade_in" src="{{ asset('images/logo_footer.png')}}" width="200" alt="" />
								<h4>ATROPOS TEMPLATE</h4>
							</div>											
						</div>
						<!-- /FOOTER LOGO -->


						<!-- FOOTER LATEST POSTS -->
						<div class="column col-md-4 text-right">
							<h3>RECENT POSTS</h3>

							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-single-sidebar-left.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>
							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-single-sidebar-left.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>
							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-single-sidebar-left.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>

							<a href="blog-masonry-sidebar.html" class="view-more pull-right">View Blog <i class="fa fa-arrow-right"></i></a>

						</div>
						<!-- /FOOTER LATEST POSTS -->

					</div>

				</div>
			</div>
			<!-- footer content -->

		</footer>
		<!-- /FOOTER -->



		<!-- JAVASCRIPT FILES -->
		<script>
			// REQUIRED !
			// Used by scripts.js when loadScript() is called
			// Example: see _mixitup() , _lazyload() functions on scripts.js 
			//var plugin_path="assets/plugins/index.html";
		</script>

		<script type="text/javascript" src="{{ asset('plugins/jquery-2.2.3.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('plugins/jquery.easing.1.3.js')}}"></script>
		<script type="text/javascript" src="{{ asset('plugins/jquery.cookie.js')}}"></script>
		<script type="text/javascript" src="{{ asset('plugins/jquery.appear.js')}}"></script>

		<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<script type="text/javascript" src="{{ asset('js/scripts.js')}}"></script>

		<script>
			var totalNewRs5 = jQuery("div.rs5>div").length;
			jQuery("#rs5count").html(totalNewRs5);
		</script>

	</body>

<!-- Mirrored from theme.stepofweb.com/Atropos/v1.9.1/HTML/start.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jul 2017 00:47:06 GMT -->
</html>