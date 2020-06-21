	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo"><a href="#">avision</a></div>
						<nav class="main_nav navbar">
							<ul>
								<li class="nav-lin active"> <a href="#">Home</a></li>
								<li class="nav-lin"><a href="#">Fashion</a></li>
								<li class="nav-lin"><a href="#">Gadgets</a></li>
								<li class="nav-lin"><a href="#">Lifestyle</a></li>
								<li class="nav-lin"><a href="#">Video</a></li>
								<li class="nav-lin"><a href="#">Contact</a></li>
							</ul>
						</nav>
						<div class="search_container ml-auto">
							<div class="weather">
								<div class="temperature">+10°</div>
								<img class="weather_icon" src="{{asset('frontend')}}/images/cloud.png" alt="">
							</div>
							<form action="cari" method="GET">
							<input type="search" name="cari" class="header_search_input" required="required" placeholder="Type to Search..." value="{{old('cari')}}">
								<img class="header_search_icon" src="{{asset('frontend')}}/images/search.png" alt="">
							</form>
							
						</div>
						<div class="hamburger ml-auto menu_mm">
							<i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Avision</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
				<img class="header_search_icon menu_mm" src="images/search_2.png" alt="">
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">home</a></li>
				<li class="menu_mm"><a href="#">Fashion</a></li>
				<li class="menu_mm"><a href="#">Gadgets</a></li>
				<li class="menu_mm"><a href="#">Lifestyle</a></li>
				<li class="menu_mm"><a href="#">Video</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>
