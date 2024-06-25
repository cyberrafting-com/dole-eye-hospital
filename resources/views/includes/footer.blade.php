<!-- appointment design 2    
<div class="gridBackground gridWrapper-one">
	<div class="gridWrapper">
		<div class="about-cataract">
			<a href="{{ route('cataract-surgery')}}"><img src="{{ asset('/resources/assets/img/about-cataract.png')}}" alt="Cataract"></a>
			<div class="about-cataract1">
				<ul class="about-cataract-nav">
					<li class="one"><a href="#"><span>01</span>What Causes Cataracts?</a>
						<p>The majority of cataracts form due to aging or injury altering the eye's lens. Other factors like diabetes or previous eye surgery can also lead to cataract development.</p>
					</li>
					<li class="two"><a href="#"><span>02</span>What Are Your Options?</a>
						<p>Cataracts can be effectively addressed through a quick day surgery procedure utilizing topical anesthesia.</p>
					</li>                
					<li class="four"><a href="#"><span>03</span>What do I do <br>
					next?</a>
						<p>To schedule a cataract assessment, please reach out to our receptionists at <span class="phone-mob"><a href="tel:02024352449" style="font-size:12px;cursor:pointer;">02024352449</a></span></p>
					</li>
				</ul>
			</div>
		</div>  
	</div>
</div>  -->     

<section class="sec-book-appoinment">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="cat-book-appoinment">  
                    <h3 class="pb-3 pb-lg-0">Your unique eyes deserve exceptional care<br>
</h3>
                    <h4 class="pb-5 pb-lg-0">Ensure they receive the treatment they deserve.</h4>
                </div>
            </div>  
            <div class="col-lg-3 col-md-3 col-12">
                <div class="cat-book-appoinment">  
                    <button type="button" class="btn" onclick="document.location='{{ route('contact')}}'">Book An Appointment</button>
                </div>  
            </div>     
        </div>    
    </div>
</section>

<!-- footer design -->
<div class="tm-footer footer-bg">
	<div class="tm-footer-toparea tm-padding-section" data-bgimage="assets/images/footer-bgimage.jpg" data-white-overlay="9">
		<div class="container">
			<div class="widgets widgets-footer row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-widget widget-info">
						<a class="widget-info-logo" href="index.php"style="
					    color: #fff;
					    font-size: 23px;
					    text-decoration: revert;
					    font-weight: 400;font-family: 'Montserrat', sans-serif;">
						<a href="{{ route('home')}}"><img src="{{ asset('/resources/assets/img/logo.png')}}" alt="Dole Eye Hospital"></a>
						<p>Dole Eye Clinic is an exceptional facility dedicated to providing top-tier eye care, utilizing modern technology and staffed by highly skilled doctors.</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>   
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-widget widget-quicklinks">
						<h4 class="widget-title">Services</h4>
						<ul>
							<li><a href="{{ route('basic-eye-check-up')}}"><i class="fa fa-eye" aria-hidden="true"></i>Basic Eye Check Up</a></li>
							<li><a href="{{ route('retina-examination')}}"><i class="fa fa-eye" aria-hidden="true"></i>Retina Examination</a></li>
							<li><a href="{{ route('glaucoma-treatment')}}"><i class="fa fa-eye" aria-hidden="true"></i>Glaucoma Treatment</a></li>
							<li><a href="{{ route('lazy-eye-treatment')}}"><i class="fa fa-eye" aria-hidden="true"></i>Lazy Eye Treatment</a></li>
							<li><a href="{{ route('pediatric-glaucoma-management')}}"><i class="fa fa-eye" aria-hidden="true"></i>Pediatric Glaucoma Management</a></li>
							<li><a href="{{ route('diabetic-retina-treatment')}}"><i class="fa fa-eye" aria-hidden="true"></i>Diabetic Retina Treatment</a></li>
						</ul>
					</div>  
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-widget widget-recentpost-2">
					<h4 class="widget-title">Get In Touch</h4>  
					<ul>
					<li>
					<h6><a href="#">Email Id</a></h6>
					<span><i class="fa fa-envelope-o mail-id" aria-hidden="true"></i> <a href="mailto: kuldeepdole@yahoo.co.in">kuldeepdole@yahoo.co.in</a></span>
					</li>
					<li>
					<h6><a href="#">Contact Number</a></h6>
					<span><i class="fa fa-mobile contact-number" aria-hidden="true"></i> <a href="tel:02024352449">02024352449 / +91 9822499066
					</a></span>
					</li>
					<li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<div class="single-widget widget-recentpost-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d121043.88018056109!2d73.7216198343111!3d18.546009840698193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d18.6250096!2d73.7595528!4m5!1s0x3bc2955da9c21cff%3A0xe603733e0532c2a2!2sDole%20Eye%20Hospital%20Pune!3m2!1d18.4719797!2d73.8208885!5e0!3m2!1sen!2sin!4v1686649791983!5m2!1sen!2sin" width="100%" height="280" style="border-radius: 8px;border: 2px dotted #fff;padding: 2px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>   

<div class="tm-footer-bottomarea">
	<div class="container">
		<div class="row justify-content-center">     
			<div class="col-md-7 text-center">
				<p class="tm-footer-copyright">2023 © Dole Eye Clinic In Pune All Rights Reserved.</p>
			</div>
		</div>
	</div>
	<button id="back-top-top"><i class="ti ti-arrow-up"></i></button>
</div>

<div id="mybutton" class="navbar-fixed-bottom d-lg-none d-xl-none d-md-none d-sm-none">
    <div class="d-flex">
        <div style="width: 100%;">
            <a href="tel:+919822499066"><button class="call-us btn" type="button"><img src="{{ asset('/resources/assets/img/icons/phone-icon.png')}}" alt="phone-icon">Call Us</button></a>
        </div>       
        <div style="width: 100%;">   
            <a href="https://api.whatsapp.com/send?phone=+919822499066&amp;text=book%20an%20appointment"><button class="whatsapp btn" type="button"><img src="{{ asset('/resources/assets/img/icons/whatsapp.png')}}" alt="whatsapp">WhatsApp</button></a>   
        </div>
    </div>  
</div>                          

<script type="text/javascript" data-pagespeed-no-defer="">pagespeed.lazyLoadImages.overrideAttributeFunctions();</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgwgIuDRkO7HlxvpWN-vPePnGVWss5r5g"></script>
<script src="{{ asset('/resources/assets/js/google-map.js') }}"></script>
<script src="{{ asset('/resources/assets/js/vendors/plugins.min.js') }}"></script>
<script src="{{ asset('/resources/assets/js/main.js') }}"></script>
<script src="{{ asset('/resources/assets/js/custom.js') }}"></script>     