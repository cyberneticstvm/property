@extends("base")

@section("content")
<!-- Start Ecorik Navbar Area -->
<div class="eorik-nav-style eorik-nav-style-five fixed-top">
	<div class="navbar-area">
		<!-- Menu For Mobile Device -->
		<div class="mobile-nav">
			<a href="index.html" class="logo">
				<img src="{{ public_path().'/img/mobile-manu-logo.png' }}" alt="Logo">
			</a>
		</div>
		<!-- Menu For Desktop Device -->
		<div class="main-nav">
			<nav class="navbar navbar-expand-md navbar-light">
				<div class="container">
					<a class="navbar-brand" href="index.html">
						<img src="{{ public_path().'/img/home-five/logo.png' }}" alt="Logo">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle active">
									Home
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="index.html" class="nav-link">Home One</a>
									</li>
									<li class="nav-item">
										<a href="index-2.html" class="nav-link">Home Two</a>
									</li>
									<li class="nav-item">
										<a href="index-3.html" class="nav-link">Home Three</a>
									</li>
									<li class="nav-item">
										<a href="index-4.html" class="nav-link">Home Four</a>
									</li>
									<li class="nav-item">
										<a href="index-5.html" class="nav-link active">Home Five</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle">
									Pages
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="about.html" class="nav-link">About Us</a>
									</li>
									<li class="nav-item">
										<a href="team.html" class="nav-link">Team</a>
									</li>
									<li class="nav-item">
										<a href="pricing.html" class="nav-link">Pricing</a>
									</li>
									<li class="nav-item">
										<a href="faq.html" class="nav-link">FAQ</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Shop
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="product-grid.html" class="nav-link">Product Grid</a>
											</li>
											<li class="nav-item">
												<a href="checkout.html" class="nav-link">Checkout</a>
											</li>
											<li class="nav-item">
												<a href="cart.html" class="nav-link">Cart</a>
											</li>
											<li class="nav-item">
												<a href="single-product.html" class="nav-link">Single Product</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="testimonial.html" class="nav-link">Testimonial</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											User
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="log-in.html" class="nav-link">Log In</a>
											</li>
											<li class="nav-item">
												<a href="sign-up.html" class="nav-link">Sign Up</a>
											</li>
											<li class="nav-item">
												<a href="recover-password.html" class="nav-link">Recover Password</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="book-table.html" class="nav-link">Book Table</a>
									</li>
									<li class="nav-item">
										<a href="terms-conditions.html" class="nav-link">Terms Conditions</a>
									</li>
									<li class="nav-item">
										<a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
									</li>
									<li class="nav-item">
										<a href="coming-soon.html" class="nav-link">Coming Soon</a>
									</li>
									<li class="nav-item">
										<a href="404.html" class="nav-link">404 Error</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle">
									Rooms
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="room-grid-view.html" class="nav-link">Room Grid View</a>
									</li>
									<li class="nav-item">
										<a href="room-style-one.html" class="nav-link">Room Style One</a>
									</li>
									<li class="nav-item">
										<a href="room-style-two.html" class="nav-link">Room Style Two</a>
									</li>
									<li class="nav-item">
										<a href="room-details-left-sidebar.html" class="nav-link">Room Details Left Sidebar</a>
									</li>
									<li class="nav-item">
										<a href="room-details-right-sidebar.html" class="nav-link">Room Details Right Sidebar</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle">
									Gallery
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="gallery-columns-two.html" class="nav-link">Gallery Columns Two</a>
									</li>
									<li class="nav-item">
										<a href="gallery-columns-three.html" class="nav-link">Gallery Columns Three</a>
									</li>
									<li class="nav-item">
										<a href="gallery-columns-four.html" class="nav-link">Gallery Columns Four</a>
									</li>
									<li class="nav-item">
										<a href="gallery-light-box.html" class="nav-link">Gallery Light Box</a>
									</li>
									<li class="nav-item">
										<a href="gallery-masonry.html" class="nav-link">Gallery Masonry</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle">
									Services
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="service-style-one.html" class="nav-link">Service Style One</a>
									</li>
									<li class="nav-item">
										<a href="service-style-two.html" class="nav-link">Service Style Two</a>
									</li>
									<li class="nav-item">
										<a href="service-style-three.html" class="nav-link">Service Style Three</a>
									</li>
									<li class="nav-item">
										<a href="service-style-four.html" class="nav-link">Service Style Four</a>
									</li>
									<li class="nav-item">
										<a href="service-details.html" class="nav-link">Service Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle">
									News
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="news-grid.html" class="nav-link">News Grid</a>
									</li>
									<li class="nav-item">
										<a href="news-columns-two.html" class="nav-link">News Columns Two</a>
									</li>
									<li class="nav-item">
										<a href="news-left-sidebar.html" class="nav-link">News Left Sidebar</a>
									</li>
									<li class="nav-item">
										<a href="news-right-sidebar.html" class="nav-link">News Right Sidebar</a>
									</li>
									<li class="nav-item">
										<a href="news-details.html" class="nav-link">News Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle">
									Contacts
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="contact-style-one.html" class="nav-link">Contact Style One</a>
									</li>
									<li class="nav-item">
										<a href="contact-style-two.html" class="nav-link">Contact Style Two</a>
									</li>
								</ul>
							</li>
						</ul>
						<!-- Start Other Option -->
						<div class="others-option">
							<a class="call-us" href="tel:+009-8765-4332">
								<i class="bx bx-phone-call bx-tada"></i>
								+009 8765 4332
							</a>
						</div>
						<!-- End Other Option -->
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<!-- End Ecorik Navbar Area -->

<!-- Start Ecorik Slider Area -->
<section class="eorik-slider-area eorik-slider-area-five">
	<div class="eorik-slider-five owl-carousel owl-theme">
		<div class="eorik-slider-item slider-item-bg-13">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="eorik-slider-text overflow-hidden one">
							<h1>Deserves Vacation</h1>
							<span>Discover the place where you have fun & enjoy a lot</span>
							<div class="slider-btn">
								<a class="default-btn" href="#">
									Book To Stay
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="eorik-slider-item slider-item-bg-14">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="eorik-slider-text overflow-hidden two">
							<h1>Relax Vacation</h1>
							<span>Discover the place where you have fun & enjoy a lot</span>
							<div class="slider-btn">
								<a class="default-btn" href="#">
									Book To Stay
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="eorik-slider-item slider-item-bg-15">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="eorik-slider-text overflow-hidden three">
							<h1>Genius Vacation</h1>
							<span>Discover the place where you have fun & enjoy a lot</span>
							<div class="slider-btn">
								<a class="default-btn" href="#">
									Book To Stay
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Ecorik Slider Area -->

<!-- Start Check Area -->
<div class="check-area check-area-five mb-minus-70">
	<div class="container">
		<form class="check-form">
			<div class="row align-items-center">
				<div class="col-lg-3 col-sm-6">
					<div class="check-content">
						<p>Arrival Date</p>
						<div class="form-group">
							<div class="input-group date" id="datetimepicker-1">
								<i class="flaticon-calendar"></i>
								<input type="text" class="form-control" placeholder="29/02/2020">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-th"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
							
				<div class="col-lg-3 col-sm-6">
					<div class="check-content">
						<p>Departure Date</p>
						<div class="form-group">
							<div class="input-group date" id="datetimepicker-2">
								<i class="flaticon-calendar"></i>
								<input type="text" class="form-control" placeholder="29/02/2020">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-th"></i>
								</span>
							</div>
						</div>
					</div> 
				</div>
				<div class="col-lg-3">
					<div class="row">
						<div class="col-lg-6 col-sm-6">
							<div class="check-content">
								<p>Adults</p>
								<div class="form-group">
									<select name="adult" class="form-content">
										<option value="1">01</option>
										<option value="2">02</option>
										<option value="3">03</option>
										<option value="4">04</option>
										<option value="5">05</option>
									</select>
								</div>
							</div> 
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="check-content">
								<p>Children</p>
								<div class="form-group">
									<select name="adult" class="form-content">
										<option value="1">01</option>
										<option value="2">02</option>
										<option value="3">03</option>
										<option value="4">04</option>
										<option value="5">05</option>
									</select>
								</div>
							</div> 
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="check-btn check-content">
						<button class="default-btn">
							Check Availability
							<i class="flaticon-right"></i>
						</button>
					</div> 
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Check Section -->

<!-- Start facilities Area -->
<section class="facilities-area-four pt-170">
	<div class="container">
		<div class="section-title">
			<span>facilities</span>
			<h2>Giving entirely awesome</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="singles-facilities">
					<i class="flaticon-speaker"></i>
					<h3>Meetings & Special Events</h3>
					<p>Morem ipsum dol  sitamcectur Risus commodo vivercs.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="singles-facilities">
					<i class="flaticon-coffee-cup"></i>
					<h3>Welcome Drink</h3>
					<p>Morem ipsum dol  sitamcectur Risus commodo vivercs.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="singles-facilities">
					<i class="flaticon-garage"></i>
					<h3>Parking Space</h3>
					<p>Morem ipsum dol  sitamcectur Risus commodo vivercs.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="singles-facilities">
					<i class="flaticon-water"></i>
					<h3>Cold & Hot  Water</h3>
					<p>Morem ipsum dol  sitamcectur Risus commodo vivercs.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="singles-facilities">
					<i class="flaticon-pickup"></i>
					<h3>Pick Up & Drop</h3>
					<p>Morem ipsum dol  sitamcectur Risus commodo vivercs.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="singles-facilities">
					<i class="flaticon-swimming"></i>
					<h3>Swimming Pool</h3>
					<p>Morem ipsum dol  sitamcectur Risus commodo vivercs.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End facilities Area -->

<!-- Start Explore Area -->
<section class="explore-area explore-area-five pb-100">
	<div class="container">
		<div class="section-title">
			<span>Explore</span>
			<h2>We are cool to give you pleasure</h2>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo, quisquam quod minus quas quae dicta doloremque suscipit doloribus tempora fugiat.</p>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="explore-gallery bg-1">
					<img src="{{ public_path().'/img/explore-img-3.jpg' }}" alt="Image">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row explore-gallery-hight">
					<div class="col-lg-12 mb-30">
						<div class="explore-gallery bg-2">
							
						</div>
					</div>
					<div class="col-lg-12">
						<div class="explore-gallery bg-3">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Explore Area -->

<!-- Start Our Rooms Area -->
<section class="our-rooms-area pb-70"> 
	<div class="container">
		<div class="section-title">
			<span>Our Rooms</span>
			<h2>Fascinating rooms & suites</h2>
		</div>

		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="single-rooms-three-wrap">
					<div class="single-rooms-three">
						<img src="{{ public_path().'/img/rooms/5.jpg' }}" alt="Image">
						<div class="single-rooms-three-content">
							<h3>Deluxe Room for Relax</h3>
							<ul class="rating">
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
							</ul>
							<span class="price">From $50.6/night</span>
							<a href="book-table.html" class="default-btn">
								Book Online
								<i class="flaticon-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single-rooms-three-wrap">
					<div class="single-rooms-three">
						<img src="{{ public_path().'/img/rooms/6.jpg' }}" alt="Image">
						<div class="single-rooms-three-content">
							<h3>Double Room</h3>
							<ul class="rating">
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
							</ul>
							<span class="price">From $60.6/night</span>
							<a href="book-table.html" class="default-btn">
								Book Online
								<i class="flaticon-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single-rooms-three-wrap">
					<div class="single-rooms-three">
						<img src="{{ public_path().'/img/rooms/7.jpg' }}" alt="Image">
						<div class="single-rooms-three-content">
							<h3>Trippe Bed Room</h3>
							<ul class="rating">
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
							</ul>
							<span class="price">From $50.6/night</span>
							<a href="book-table.html" class="default-btn">
								Book Online
								<i class="flaticon-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single-rooms-three-wrap">
					<div class="single-rooms-three">
						<img src="{{ public_path().'/img/rooms/8.jpg' }}" alt="Image">
						<div class="single-rooms-three-content">
							<h3>Window Amenities Room</h3>
							<ul class="rating">
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
							</ul>
							<span class="price">From $50.6/night</span>
							<a href="book-table.html" class="default-btn">
								Book Online
								<i class="flaticon-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single-rooms-three-wrap">
					<div class="single-rooms-three">
						<img src="{{ public_path().'/img/rooms/9.jpg' }}" alt="Image">
						<div class="single-rooms-three-content">
							<h3>The royal room</h3>
							<ul class="rating">
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
							</ul>
							<span class="price">From $50.6/night</span>
							<a href="book-table.html" class="default-btn">
								Book Online
								<i class="flaticon-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single-rooms-three-wrap">
					<div class="single-rooms-three">
						<img src="{{ public_path().'/img/rooms/10.jpg' }}" alt="Image">
						<div class="single-rooms-three-content">
							<h3>Budget Room</h3>
							<ul class="rating">
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
								<li>
									<i class="bx bxs-star"></i>
								</li>
							</ul>
							<span class="price">From $90.6/night</span>
							<a href="book-table.html" class="default-btn">
								Book Online
								<i class="flaticon-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Our Rooms Area -->

<!-- Start Booking Area -->
<section class="bokking-area booking-area-five ptb-100">
	<div class="container">
		<div class="section-title">
			<span>Booking Area</span>
			<h2>Direct booking benefits</h2>
		</div>
		<div class="row">
			<div class="booking-col-2">
				<div class="single-booking">
					<i class="book-icon flaticon-online-booking"></i>
					<span class="booking-title">Free cost</span>
					<h3>No booking fee</h3>
				</div>
			</div>
			<div class="booking-col-2">
				<div class="single-booking">
					<i class="book-icon flaticon-podium"></i>
					<span class="booking-title">Free cost</span>
					<h3>Best rate guarantee</h3>
				</div>
			</div>
			<div class="booking-col-2">
				<div class="single-booking">
					<i class="book-icon flaticon-airport"></i>
					<span class="booking-title">Free cost</span>
					<h3>Reservations 24/7</h3>
				</div>
			</div>
			<div class="booking-col-2">
				<div class="single-booking">
					<i class="book-icon flaticon-slow"></i>
					<span class="booking-title">Free cost</span>
					<h3>High-speed Wi-Fi</h3>
				</div>
			</div>
			<div class="booking-col-2">
				<div class="single-booking">
					<i class="book-icon flaticon-coffee-cup-1"></i>
					<span class="booking-title">Free cost</span>
					<h3>Free breakfast</h3>
				</div>
			</div>
			<div class="col-lg-12 p-0">
				<div class="booking-bottom-title">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, architecto. Culpa eveniet molestiae fugit cum! Tenetur voluptatibus laborum dolorem.</p>
					<a href="#" class="default-btn">
						Get This Offer
						<i class="flaticon-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Booking Area -->

<!-- Start Counter Area -->
<section class="counter-area counter-area-five pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="single-counter">
					<p>Beaches</p>
					<h2>
						<span class="odometer" data-count="50">00</span> <span class="target">+</span>
					</h2>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-counter">
					<p>Spa offers</p>
					<h2>
						<span class="odometer" data-count="95">00</span> <span class="target">+</span>
					</h2>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-counter">
					<p>Rooms</p>
					<h2>
						<span class="odometer" data-count="45">00</span> <span class="target">+</span>
					</h2>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-counter">
					<p>Happy client</p>
					<h2>
						<span class="odometer" data-count="20">00</span> <span class="target">K</span>
					</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Counter Area -->

<!-- Start City View Area -->
<section class="city-view-area city-view-area-five pb-100">
	<div class="container">
		<div class="section-title">
			<span>Our Rooms</span>
			<h2>Fascinating rooms & suites</h2>
		</div>
		<div class="tab quote-list-tab choose-tab">
			<ul class="tabs">
				<li>
					Restaurant
				</li>
				<li>
					Swimming pool
				</li>
				<li>
					Conference room
				</li>
				<li>
					Meeting & event
				</li>
			</ul>
			<div class="tab_content">
				<div class="tabs_item">
					<div class="city-wrap">
						<div class="single-city-item owl-carousel owl-theme">
							<div class="city-view-single-item">
								<div class="city-content">
									<span>The City View</span>
									<h3>A charming view of the city town</h3>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>
			
									<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
								</div>
							</div>
							<div class="city-view-single-item">
								<div class="city-content">
									<span>The City View</span>
									<h3>The charming view of the city</h3>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>
			
									<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs_item">
					<div class="city-wrap">
						<div class="single-city-item owl-carousel owl-theme">
							<div class="city-view-single-item">
								<div class="city-content">
									<span>The City View</span>
									<h3>A charming view of the city town</h3>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>
			
									<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
								</div>
							</div>
							<div class="city-view-single-item">
								<div class="city-content">
									<span>The City View</span>
									<h3>A charming view of the city town</h3>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>
			
									<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs_item">
					<div class="city-wrap">
						<div class="single-city-item owl-carousel owl-theme">
							<div class="city-view-single-item">
								<div class="city-content">
									<span>The City View</span>
									<h3>A charming view of the city town</h3>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>
			
									<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
								</div>
							</div>
							<div class="city-view-single-item">
								<div class="city-content">
									<span>The City View</span>
									<h3>A charming view of the city town</h3>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>
			
									<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs_item">
					<div class="city-wrap">
						<div class="single-city-item owl-carousel owl-theme">
							<div class="city-view-single-item">
								<div class="city-content">
									<span>The City View</span>
									<h3>A charming view of the city town</h3>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>
			
									<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
								</div>
							</div>
							<div class="city-view-single-item">
								<div class="city-content">
									<span>The City View</span>
									<h3>A charming view of the city town</h3>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus fugit eligendi accusantium vel quos debitis cupiditate ducimus placeat explicabo distinctio, consectetur eos animi, a voluptate delectus. Id, explicabo saepe Consequuntur</p>
			
									<p>The view onin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation consectetur.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End City View Area -->

<!-- Start Facilities Area -->
<section class="facilities-area-five pb-100">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 p-0">
				<div class="facilities-single-bg"></div>
			</div>
			<div class="col-lg-8 p-0">
				<div class="facilities-right-wrap pt-100 pb-70">
					<div class="facilities-title">
						<span>AMENITIES</span>
						<h2>Favor will not have execution assumption go on you</h2>
					</div>
					<div class="row mr-0">
						<div class="col-lg-4 col-sm-6">
							<div class="single-facilities-wrap">
								<div class="single-facilities">
									<i class="facilities-icon flaticon-pickup"></i>
									<h3>Pick Up & Drop​</h3>
									<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu adiing</p>
									<a href="service-details.html" class="icon-btn">
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="single-facilities-wrap">
								<div class="single-facilities">
									<i class="facilities-icon flaticon-coffee-cup"></i>
									<h3>Welcome Drink​​​​</h3>
									<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu adiing</p>
									<a href="service-details.html" class="icon-btn">
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
							<div class="single-facilities-wrap">
								<div class="single-facilities">
									<i class="facilities-icon flaticon-garage"></i>
									<h3>​​Parking Space</h3>
									<p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu adiing</p>
									<a href="service-details.html" class="icon-btn">
										<i class="flaticon-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Facilities Area -->

<!-- Start Exclusive Offers Area -->
<section class="exclusive-offers-area-five pt-70 pb-70">
	<div class="container">
		<div class="section-title">
			<span>Exclusive Offers</span>
			<h2>You can get an exclusive offer</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="single-exclusive-four">
					<img src="{{ public_path().'/img/exclusive/10.jpg' }}" alt="Image">
					<div class="exclusive-content">
						<span class="title">Up To 30% Off</span>
						<h3>Swimming for man</h3>
						<span class="review">
							4.5
							<a href="#">(432 Reviews)</a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single-exclusive-four">
					<img src="{{ public_path().'/img/exclusive/11.jpg' }}" alt="Image">
					<div class="exclusive-content">
						<span class="title">This Month Only</span>
						<h3>$5 Breakfast package</h3>
						<span class="review">
							5.0
							<a href="#">(580 Reviews)</a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
				<div class="single-exclusive-four">
					<img src="{{ public_path().'/img/exclusive/12.jpg' }}" alt="Image">
					<div class="exclusive-content">
						<span class="title">30% OFFonly This Week</span>
						<h3>Free fitness club for women</h3>
						<span class="review">
							4.9
							<a href="#">(580 Reviews)</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Exclusive Offers Area -->

<!-- End Incredible Area -->
<section class="incredible-area ptb-100 jarallax">
	<div class="container">
		<div class="incredible-content">
			<a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">
				<i class="flaticon-play-button"></i>
			</a>
			<h2><span>Incredible!</span> Are you coming today</h2>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores sed obcaecati, magni excepturi, temporibus vero, inventore tenetur assumenda natus sequi labore. Voluptates eligendi dolores quod temporibus aperiam adipisci, quasi reprehenderit. Voluptates eligendi dolores quod temporibus.</p>
			<a href="#" class="default-btn">
				Join Us Today
				<i class="flaticon-right"></i>
			</a>
		</div>
	</div>
</section>
<!-- End Incredible Area -->

<!-- start Testimonials Area -->
<section class="testimonials-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>Testimonials</span>
			<h2>What customers say</h2>
		</div>
		<div class="testimonials-wrap owl-carousel owl-theme">
			<div class="single-testimonials">
				<ul>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
				</ul>
				<h3>Excellent Swimming</h3>
				<p>“Awesome yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod”</p>
				<div class="testimonials-content">
					<img src="{{ public_path().'/img/testimonials/2.jpg' }}" alt="Image">
					<h4>Ayman Jenis</h4>
					<span>CEO@Leasuely</span>
				</div>
			</div>
			<div class="single-testimonials">
				<ul>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
				</ul>
				<h3>Excellent hotel</h3>
				<p>“Awesome yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod”</p>
				<div class="testimonials-content">
					<img src="{{ public_path().'/img/testimonials/3.jpg' }}" alt="Image">
					<h4>Ayman Jenis</h4>
					<span>CEO@Leasuely</span>
				</div>
			</div>
			<div class="single-testimonials">
				<ul>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
					<li>
						<i class="bx bxs-star"></i>
					</li>
				</ul>
				<h3>Excellent Room</h3>
				<p>“Awesome yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod”</p>
				<div class="testimonials-content">
					<img src="{{ public_path().'/img/testimonials/1.jpg' }}" alt="Image">
					<h4>Ayman Jenis</h4>
					<span>CEO@Leasuely</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Testimonials Area -->

<!-- End News Area -->
<section class="news-area pb-70">
	<div class="container">
		<div class="section-title">
			<span>Our BLog</span>
			<h2>News & articles updates </h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-news">
					<div class="news-img">
						<a href="news-details.html">
							<img src="{{ public_path().'/img/news/1.jpg' }}" alt="Image">
						</a>
						<div class="dates">
							<span>HOTEL</span>
						</div>
					</div>
					<div class="news-content-wrap">
						<ul>
							<li>
								<a href="#">
									<i class="flaticon-user"></i>
									Admin
								</a>
							</li>
							<li>
								<a href="#">
									<i class="flaticon-conversation"></i>
									Comment
								</a>
							</li>
						</ul>
						<a href="news-details.html">
							<h3>Celebrating Decade Years Of Hotel In 2020</h3>
						</a>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis.</p>
						<a class="read-more" href="news-details.html">
							Read More
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-news">
					<div class="news-img">
						<a href="news-details.html">
							<img src="{{ public_path().'/img/news/2.jpg' }}" alt="Image">
						</a>
						<div class="dates">
							<span>PRICE</span>
						</div>
					</div>
					<div class="news-content-wrap">
						<ul>
							<li>
								<a href="#">
									<i class="flaticon-user"></i>
									Admin
								</a>
							</li>
							<li>
								<a href="#">
									<i class="flaticon-conversation"></i>
									Comment
								</a>
							</li>
						</ul>
						<a href="news-details.html">
							<h3>A Perfect Day With Businessman At Ecorik Hotel</h3>
						</a>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis.</p>
						<a class="read-more" href="news-details.html">
							Read More
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
				<div class="single-news">
					<div class="news-img">
						<a href="news-details.html">
							<img src="{{ public_path().'/img/news/1.jpg' }}" alt="Image">
						</a>
						<div class="dates">
							<span>STORE</span>
						</div>
					</div>
					<div class="news-content-wrap">
						<ul>
							<li>
								<a href="#">
									<i class="flaticon-user"></i>
									Admin
								</a>
							</li>
							<li>
								<a href="#">
									<i class="flaticon-conversation"></i>
									Comment
								</a>
							</li>
						</ul>
						<a href="news-details.html">
							<h3>Celebrating Decade Years Of Hotel In 2019</h3>
						</a>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis.</p>
						<a class="read-more" href="news-details.html">
							Read More
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End News Area -->

<!-- End News Area -->
<section class="subscribe-area ptb-100">
	<div class="container">
		<div class="subscribe-wraps">
			<div class="row align-items-center">
				<div class="col-lg-4">
					<h2>Subscribe newsletter</h2>
				</div>
				<div class="col-lg-6">
					<!-- Start Subscribe Area -->
					<div class="subscribe-wrap">
						<form class="newsletter-form" data-toggle="validator">
							<input type="email" class="input-tracking" placeholder="Your Email" name="EMAIL" required autocomplete="off">
		
							<button class="default-btn active" type="submit">
								Subscribe
								<i class="flaticon-right"></i>
							</button>
		
							<div id="validator-newsletter" class="form-result"></div>
						</form>
					</div>
					<!-- End Subscribe Area -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End News Area -->
@endsection