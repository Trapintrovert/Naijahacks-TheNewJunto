<?php include 'base.php' ?>

	<?php startblock('mainNav') ?>
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
									<li><a href="ginger.php">Ginger <i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li><a href="cocoa.php">Cocoa<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Sesame Seed<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Rubber<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Shrimps<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Garlic<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Cashew Nuts<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Charcoal<i class="fas fa-chevron-right"></i></a></li>
									<li class="hassubs">
										<a href="#">More<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li><a href="#">Yam Tubers<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
	<?php endblock() ?>
		<!-- Menu -->




	<?php startblock('home') ?>
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url(images/ginger.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">Post, Meet Potential Buyer, Sell your Agricultural Product to the World.</h1>
						<div class="button banner_button"><a href="http://localhost/naijahacks-the-new-junto/signup.php">Get Stated</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Characteristics -->

	<div class="characteristics">
		<div class="container">
			<div class="row">

				<!-- Char. Item -->
				<div class="col-lg-4 col-md-6 char_col">

					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Easy Logistics</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-4 col-md-6 char_col">

					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Secure Payment</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-4 col-md-6 char_col">

					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">24/7 Customer Service</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Homepage Product  Post-->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title"></div>
							<ul class="clearfix">
								<li class="active"></li>

							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="images/cocoa.jpg" alt=""></div>
									</div>
								</div>
							</div>
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cocoa_2.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$2,000</div>
														<div class="product_name"><div><a href="product.php">Dried Grade A Cocoa bean</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cocoa_02.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.php">Natural Cocoa for sale</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cocoa_03.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$1,500</div>
														<div class="product_name"><div><a href="product.php">cocoa (Organic certified)</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cocoa_04.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$2,000</div>
														<div class="product_name"><div><a href="product.php">cocoa (Organic)</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cocoa_04.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$2,225</div>
														<div class="product_name"><div><a href="product.php">cocoa for sale</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cocoa_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$3,000</div>
													<div class="product_name"><div><a href="product.php">cocoa (Organic certified)</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cocoa_02.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$1,500</div>
													<div class="product_name"><div><a href="product.php">cocoa (Organic certified)</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cocoa_04.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$2,205</div>
													<div class="product_name"><div><a href="product.php">Cocoa Beans</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cocoa_04.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$1,800</div>
													<div class="product_name"><div><a href="product.php">Ghana Cocoa Beans</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cocoa_02.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$1,500</div>
													<div class="product_name"><div><a href="product.php">Chocolate bean</a></div></div>
												</div>
											</a>
											</div>
										</div>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title"></div>
							<ul class="clearfix">
								<li class="active"></li>

							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="images/ginger1.jpg" alt=""></div>
									</div>
								</div>
							</div>
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/ginger_2.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$1,000</div>
														<div class="product_name"><div><a href="product.php"> Fresh Ginger</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/ginger_3.jpg" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$1,300</div>
														<div class="product_name"><div><a href="product.php">dry split ginger </a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/ginger_4.jpg" alt="" style="height:115px;"></div>
												<div class="product_content">
													<div class="product_price">$2,000</div>
													<div class="product_name"><div><a href="product.php">Wholesale ginger</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/ginger_5.jpg" alt="" style="height:115px;"></div>
												<div class="product_content">
													<div class="product_price">$1,125</div>
													<div class="product_name"><div><a href="product.php">Air dry Ginger for EU</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/ginger_6.jpg" alt=""style="height:115px;"></div>
												<div class="product_content">
													<div class="product_price">$900</div>
													<div class="product_name"><div><a href="product.php">yellow fresh ginger</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/ginger_2.jpg" alt=""style="height:115px;"></div>
												<div class="product_content">
													<div class="product_price">$1,000</div>
													<div class="product_name"><div><a href="product.php">fresh ginger</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/ginger_3.jpg" alt=""style="height:115px;"></div>
												<div class="product_content">
													<div class="product_price">$1,200</div>
													<div class="product_name"><div><a href="product.php"> ginger</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/ginger_4.jpg" alt=""style="height:115px;"></div>
												<div class="product_content">
													<div class="product_price">$900</div>
													<div class="product_name"><div><a href="product.php">ginger</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/ginger_6.jpg" alt=""style="height:115px;"></div>
												<div class="product_content">
													<div class="product_price">$800</div>
													<div class="product_name"><div><a href="product.php">fresh ginger</a></div></div>
												</div>
											</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/ginger_3.jpg" alt="" style="height:115px;"></div>
												<div class="product_content">
													<div class="product_price">$1,300</div>
													<div class="product_name"><div><a href="product.php"> ginger</a></div></div>
												</div>
											</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title"></div>
							<ul class="clearfix">
								<li class="active"></li>

							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="images/cashew.jpg" alt=""></div>

									</div>
								</div>
							</div>
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cashew_01.jpg" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$1,000</div>
														<div class="product_name"><div><a href="product.php">Organic Cashew nuts</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cashew_02.png" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$1,200</div>
														<div class="product_name"><div><a href="product.php">Fresh Cashew nuts</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cashew_03.jpg" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$1,500</div>
														<div class="product_name"><div><a href="product.php">Raw Cashew Nuts</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cashew_04.jpg" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$1,000</div>
														<div class="product_name"><div><a href="product.php">cashew kernels</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cashew_05.jpg" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$1,600</div>
														<div class="product_name"><div><a href="product.php">Cashews Nut W-320</a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cashew_01.jpg" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$950</div>
														<div class="product_name"><div><a href="product.php">Dried Cashew Nuts </a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cashew_02.png" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$1,000</div>
														<div class="product_name"><div><a href="product.php"> Cashew Nuts </a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cashew_04.jpg" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$950</div>
														<div class="product_name"><div><a href="product.php">Dried Cashew Nuts </a></div></div>
													</div>
												</a>
											</div>
										</div>
										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cashew_04.jpg" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$1,050</div>
														<div class="product_name"><div><a href="product.php">Dried Cashew Nuts </a></div></div>
													</div>
												</a>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/cashew_01.jpg" alt="" style="height:115px;"></div>
													<div class="product_content">
														<div class="product_price">$950</div>
														<div class="product_name"><div><a href="product.php">Quality Cashew Nuts </a></div></div>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Best Sellers</div>
							<ul class="clearfix">
								<li class="active"></li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>

						<div class="bestsellers_panel panel active">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/ginger_2.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Ginger</a></div>
												<div class="bestsellers_name"><a href="product.php">dry split ginger</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$1,025</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/cocoa_03.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Cocoa</a></div>
												<div class="bestsellers_name"><a href="product.php">Fresh Cocoa </a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$1,025</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/cashew_04.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Cashew</a></div>
												<div class="bestsellers_name"><a href="product.php">Original Cashew</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$2,000</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/ginger_3.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Ginger</a></div>
												<div class="bestsellers_name"><a href="product.php">Original ginger</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$1,000</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/ginger_4.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Ginger</a></div>
												<div class="bestsellers_name"><a href="product.php">Original ginger</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$900</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/cocoa_02.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Cocoa</a></div>
												<div class="bestsellers_name"><a href="product.php">Original Cocoa</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$1,000</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/ginger_2.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Ginger</a></div>
												<div class="bestsellers_name"><a href="product.php">dry split ginger</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$1,025</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/cocoa_03.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Cocoa</a></div>
												<div class="bestsellers_name"><a href="product.php">Fresh Cocoa </a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$1,025</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/cashew_04.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Cashew</a></div>
												<div class="bestsellers_name"><a href="product.php">Original Cashew</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$2,000</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/ginger_3.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Ginger</a></div>
												<div class="bestsellers_name"><a href="product.php">Original ginger</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$1,000</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/ginger_4.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Ginger</a></div>
												<div class="bestsellers_name"><a href="product.php">Original ginger</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$900</div>
											</div>
										</a>
									</div>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<a href="product.php">
											<div class="bestsellers_image"><img src="images/cocoa_02.jpg" alt=""style="height:115px;"></div>
											<div class="bestsellers_content">
												<div class="bestsellers_category"><a href="#">Cocoa</a></div>
												<div class="bestsellers_name"><a href="product.php">Original Cocoa</a></div>
												<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<div class="bestsellers_price discount">$1,000</div>
											</div>
										</a>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endblock() ?>
