<div id="wrapper" class="wrapper">  
<div id="tm-home-area" class="tm-header tm-header-sticky">
<div class="tm-header-toparea">  
<div class="container">
<div class="row align-items-center">
	<div class="col-md-8">
		<ul class="tm-header-info">
			<li><i class="fa fa-phone" aria-hidden="true"></i><b>Contact:</b> <a href="tel:02024352449">02024352449
			</a></li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i><b>Email:</b> <a href="mailto: kuldeepdole@yahoo.co.in">kuldeepdole@yahoo.co.in</a></li>  
		</ul>
	</div>
	<div class="col-md-4">
		<ul class="tm-header-icons">
			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		</ul>
	</div>  
</div>
</div>
</div>
<div class="tm-header-bottomarea">    
<div class="container">
<div class="tm-header-bottominside">
<div class="tm-header-searcharea">
<form action="#">
<input type="text" placeholder="Enter search keyword..">
<button type="submit"><i class="ti ti-search"></i></button>
</form>
<button class="tm-header-searchclose"><i class="ti ti-close" style="color: #000;"></i></button>
</div>
	<div class="tm-header-inner">
	<a href="{{ route('home')}}" class="tm-header-logo">
	<img src="{{ asset('/resources/assets/img/logo.png') }}" alt="logo" style="width: 250px;">  
	</a>
	<nav class="tm-header-nav">        
		<ul>
			<li><a href="{{ route('home')}}">Home</a></li>
			<li><a href="{{ route('about')}}">About Us</a></li>      
			<li class="tm-header-nav-dropdown"><a href="">Surgeries</a>
				<ul>
					<li><a href="{{ route('cataract-surgery')}}">Cataract Surgery</a></li>
					<li><a href="{{ route('canaloplasty')}}">Canaloplasty</a></li>
					<li><a href="{{ route('lasik-eye-surgery')}}">Lasik Eye Surgery</a></li>
					<li><a href="{{ route('corneal-surgery')}}">Corneal Surgery</a></li>
					<li><a href="{{ route('squint-surgery')}}">Squint Surgery</a></li>  
					<li><a href="{{ route('oculoplastic-surgery')}}">Oculoplastic Surgery</a></li>
					<!-- <li><a href="orbital-surgery.php">Orbital Surgery</a></li> -->
					<li class="last-menu-item"><a href="{{ route('anterior-segment-surgery')}}">Anterior Segment Surgery</a></li>
				</ul>  
			</li>
			<li class="tm-header-nav-dropdown"><a href="">Treatments</a>
				<ul>
					<li><a href="{{ route('basic-eye-check-up')}}">Basic Eye Check-up</a></li>
					<li><a href="{{ route('retina-examination')}}">Retina Examination</a></li>
					<li><a href="{{ route('glaucoma-treatment')}}">Glaucoma Treatment</a></li>
					<li><a href="{{ route('lazy-eye-treatment')}}">Lazy Eye Treatment</a></li>
					<li><a href="{{ route('pediatric-glaucoma-management')}}">Pediatric Glaucoma Management</a></li>
					<li class="last-menu-item"><a href="{{ route('diabetic-retina-treatment')}}">Diabetic Retina Treatment</a></li>
				</ul>   
			</li>
			<!-- <li class="tm-header-nav-dropdown"><a href="#tm-shop-area">Shop</a>
				<ul>
					<li><a href="products.html">Products</a></li>
					<li><a href="products-leftsidebar.html">Products Left Sidebar</a></li>
					<li><a href="products-nosidebar.html">Products Without Sidebar</a></li>
					<li><a href="product-details.html">Product Details</a></li>
					<li><a href="product-details-leftsidebar.html">Product Details Left
					Sidebar</a></li>
					<li><a href="product-details-nosidebar.html">Product Details Without
					Sidebar</a></li>
					<li><a href="#tm-home-area">Others</a>
						<ul>
							<li><a href="cart.html">Shopping Cart</a></li>
							<li><a href="wishlist.html">Wishlist</a></li>
							<li><a href="checkout.html">Checkout</a></li>
							<li><a href="login-register.html">Login & Register</a></li>
							<li><a href="my-account.html">My Account</a></li>
						</ul>
					</li>
				</ul>
			</li> -->
			<!-- <li class="tm-header-nav-dropdown"><a href="">Media</a>
				<ul>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="video.php">Videos</a></li>
				</ul>
			</li> -->
			<!-- <li><a href="testimonials.php">Testimonials</a></li> -->
			<li><a href="{{ route('gallery')}}">Gallery</a></li>
			<li><a href="{{ route('contact')}}">Contact</a></li>
		</ul>
	</nav>
<div class="tm-mobilenav"></div>  
</div>
</div>  
</div>
</div>
</div>