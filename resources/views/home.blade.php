@php($title = "Expert Eye Specialist Pune | Dr. Kuldeep Suhas Dole")  
@section('meta_desc')Get expert eye care in Pune from Dr. Kuldeep Suhas Dole, a trusted specialist. Offering advanced treatments for various eye conditions. Book now! @endsection

@extends('layouts.default')    
@section('content')

<!-- start slider design -->
<div id="carouselEye" class="carousel slide carousel-custom" data-ride="carousel">
  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="{{ asset('/resources/assets/img/banner-img2.jpg')}}" class="d-block w-100" alt="banner-img2">
	    </div>
        <!-- <div class="carousel-item">
          <img src="{{ asset('/resources/assets/img/banner-img1.jpg')}}" class="d-block w-100" alt="banner-img1">    
        </div>-->
  </div>  

  <!-- <a class="carousel-control-prev" href="#carouselEye" role="button" data-slide="prev"> 
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselEye" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>    

<!-- vision 2 -->
<div class="banner_section_2">
    <div class="row">
        <div class="col-lg-4 col-sm-12 padding_0">
            <div class="box_main">
                <div class="vision-icon"><i class="fa fa-eye" aria-hidden="true"></i></div>
                <h4 class="box-main-text">Vision</h4>
                <p class="many_text">Delivering compassionate eye care services to everyone, prioritizing their well-being</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 padding_0">
            <div class="box_main active">
                <div class="vision-icon"><i class="fa fa-space-shuttle" aria-hidden="true"></i></div>
                <h4 class="box-main-text active">Mission</h4>
                <p class="many_text active">Our mission is to decrease preventable blindness by offering affordable eye care services with empathy and kindness.</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 padding_0">
            <div class="box_main">
                <div class="vision-icon"><i class="fa fa-diamond" aria-hidden="true"></i></div>
                <h4 class="box-main-text">Values</h4>
                <p class="many_text">We prioritize empathy and understanding in our interactions with patients</p>
            </div>
        </div>
    </div>
</div>      

<!-- about hospital -->
<section class="aboutus-section pb-100">
   <div class="custom-div-75">
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6 col-12 p-0 about-circul-img">
                <div class="about-circul scroll-element js-scroll fade-in-bottom scrolled">
                    <img src="{{ asset('/resources/assets/img/gallery/gallery-img1.jpeg')}}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 about-para scroll-element js-scroll fade-in-bottom scrolled">
               <h2>Dole Eye Hospital</h2>
               <div>
                  <p>Dole's Eye Clinic in Manik Baug, Pune is a top player in the category Eye Clinics in the Pune. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Pune. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>   

<!-- about 2 -->
<section class="about-one">
    <div class="about-one_pattern">
		<div class="container">
			<div class="row clearfix">				
				<!-- Image Column -->
				<div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_image-inner-column">
						<div class="about-one_image">
							<img src="{{ asset('/resources/assets/img/about-ot.jpg')}}" alt="about-ot">
						</div>
						<div class="about-one_image-two">
							<img src="{{ asset('/resources/assets/img/doctor-about-page-img.JPG')}}" alt="doctor-about-page-img">
						</div>
					</div>
				</div>				
				<!-- Content Column -->
				<div class="about-one_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_content-inner-column">
                        <div class="cat-about mt-4 mt-lg-0 mt-md-0">
                            <h1>Dr. Kuldeep Suhas Dole</h1> 
                            <h4>MBBS, M.S (Ophthalmology)</h4>
                            <h4>Ophthalmologist/ Eye Surgeon</h4>
                            <p class="pt-2">Dr. Kuldeep Suhas Dole, a highly skilled and experienced general physician, boasts over 26 years of working experience. Renowned for his exceptional medical expertise and compassionate patient care, he has devoted his career to diagnosing and treating a wide range of medical conditions while providing personalized healthcare services to his patients. Characterized by compassion and personalization, Dr. Dole patient care approach involves attentively listening to his patients' concerns and collaborating closely with them to create customized treatment plans that cater to their specific needs. Furthermore, he remains committed to advancing healthcare services and has significantly contributed to the field of medicine. Actively participating in medical conferences and workshops, Dr. Dole stays abreast of the latest advancements in medical research and technology. Additionally, he conducts research studies on various medical conditions and publishes his findings in reputable medical journals, thereby contributing to the overall knowledge of the medical community.</p>
                        </div>
			        </div>
		        </div>				
			</div>
		</div>
    </div>
</section>

<!-- start treatments design -->
<section class="sec-treatments">
	<div class="container">
		<div class="tm-sectiontitle text-center">
			<h2>Surgeries</h2>
			<span class="tm-sectiontitle-divider">
			<img alt="section divider" src="{{ asset('/resources/assets/img/icons/eye-border-icon.png')}}" alt="eye-border-icon">
			</span>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-5 mt-md-0">
                <a href="{{ route('cataract-surgery')}}">
                    <div id="color_chang" class="services_box text-center">
                        <figure><img src="{{ asset('/resources/assets/img/treatments/cataract-surgery-img.jpg')}}" alt="cataract-surgery-img"></figure>
                        <h3>Cataract Surgery</h3>
                        <a href="{{ route('cataract-surgery')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </a>        
			</div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-5 mt-md-0">
                <a href="{{ route('canaloplasty')}}">
                    <div id="color_chang" class="services_box text-center">
                        <figure><img src="{{ asset('/resources/assets/img/treatments/canaloplasty-img.jpg')}}" alt="canaloplasty-img"></figure>
                        <h3>Canaloplasty</h3>
                        <a href="{{ route('canaloplasty')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </a>
			</div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-5 mt-md-0">
                <a href="{{ route('lasik-eye-surgery')}}">
                    <div id="color_chang" class="services_box text-center">
                        <figure><img src="{{ asset('/resources/assets/img/treatments/lasik-eye-surgery-img.jpg')}}" alt="lasik-eye-surgery-img"></figure>
                        <h3>Lasik Eye Surgery</h3>
                        <a href="{{ route('lasik-eye-surgery')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </a>
			</div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-5 mt-md-0">
                <a href="{{ route('corneal-surgery')}}">
                    <div id="color_chang" class="services_box text-center">
                        <figure><img src="{{ asset('/resources/assets/img/treatments/corneal-surgery-img.jpg')}}" alt="corneal-surgery-img"></figure>
                        <h3>Corneal Surgery</h3>
                        <a href="{{ route('corneal-surgery')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </a>
			</div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-5 mt-md-0">
                <a href="{{ route('squint-surgery')}}">
                    <div id="color_chang" class="services_box text-center">
                        <figure><img src="{{ asset('/resources/assets/img/treatments/squint-surgery-img.jpg')}}" alt="squint-surgery-img"></figure>
                        <h3>Squint Surgery</h3>
                        <a href="{{ route('squint-surgery')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </a>
			</div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-5 mt-md-0">
                <a href="{{ route('oculoplastic-surgery')}}">
                    <div id="color_chang" class="services_box text-center">
                        <figure><img src="{{ asset('/resources/assets/img/treatments/oculoplastic-surgery-img.jpg')}}" alt="oculoplastic-surgery-img"></figure>
                        <h3>Oculoplastic Surgery</h3>
                        <a href="{{ route('oculoplastic-surgery')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </a>
			</div>
		</div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-5 mt-md-0">
                <a href="{{ route('anterior-segment-surgery')}}">
                    <div id="color_chang" class="services_box text-center">
                        <figure><img src="{{ asset('/resources/assets/img/treatments/anterior-segment-surgery-img.jpg')}}" alt="anterior-segment-surgery-img"></figure>
                        <h3>Anterior Segment Surgery</h3>
                        <a href="{{ route('anterior-segment-surgery')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </a>
            </div>
        </div>
	</div>	
</section>

<!-- service Design 2-->
<section class="services-area-bg">
    <div class="container">
        <div class="tm-sectiontitle text-center">
            <h2>Treatments</h2>
            <span class="tm-sectiontitle-divider">
            <img alt="section divider" src="{{ asset('/resources/assets/img/icons/eye-border-icon.png')}}" alt="eye-border-icon">
            </span>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <a href="{{ route('basic-eye-check-up')}}">           
                    <div class="single-services">   
                        <span>
                        <img src="{{ asset('/resources/assets/img/icons/basic-eye-check-up-icon.png')}}" alt="basic-eye-check-up-icon">
                        </span>
                        <h3>Basic Eye Check-up</h3>  
                        <a href="{{ route('basic-eye-check-up')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <div class="services-shape">
                            <img src="{{ asset('/resources/assets/img/services-bg-eye-shape.png')}}" alt="services-bg-eye-shape">
                        </div>
                    </div>   
                </a>     
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <a href="{{ route('retina-examination')}}"> 
                    <div class="single-services">   
                        <span>  
                        <img src="{{ asset('/resources/assets/img/icons/retina-treatment-icon.png')}}" alt="retina-treatment-icon">
                        </span>
                        <h3>Retina Examination</h3>  
                        <a href="{{ route('retina-examination')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <div class="services-shape">
                            <img src="{{ asset('/resources/assets/img/services-bg-eye-shape.png')}}" alt="services-bg-eye-shape">
                        </div>
                    </div>      
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-12">  
                <a href="{{ route('glaucoma-treatment')}}">   
                    <div class="single-services">     
                        <span>  
                        <img src="{{ asset('/resources/assets/img/icons/glaucoma-investigations-icon.png')}}" alt="glaucoma-investigations-icon">
                        </span>
                        <h3>Glaucoma Treatment</h3>  
                        <a href="{{ route('glaucoma-treatment')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <div class="services-shape">
                            <img src="{{ asset('/resources/assets/img/services-bg-eye-shape.png')}}" alt="services-bg-eye-shape">
                        </div>
                    </div>   
                </a>   
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <a href="{{ route('lazy-eye-treatment')}}">
                    <div class="single-services">   
                        <span>  
                        <img src="{{ asset('/resources/assets/img/icons/lazy-eye-treatment-icon.png')}}" alt="lazy-eye-treatment-icon">
                        </span>
                        <h3>Lazy Eye Treatment</h3>  
                        <a href="{{ route('lazy-eye-treatment')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <div class="services-shape">
                            <img src="{{ asset('/resources/assets/img/services-bg-eye-shape.png')}}" alt="services-bg-eye-shape">
                        </div>
                    </div> 
                </a>        
            </div>  
        </div>  
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-4 col-12">
                <a href="{{ route('pediatric-glaucoma-management')}}">
                    <div class="single-services">
                        <span>
                        <img src="{{ asset('/resources/assets/img/icons/glaucoma-investigations-icon.png')}}" alt="glaucoma-investigations-icon">
                        </span>
                        <h3>Pediatric Glaucoma</h3>  
                        <a href="{{ route('pediatric-glaucoma-management')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <div class="services-shape">
                            <img src="{{ asset('/resources/assets/img/services-bg-eye-shape.png')}}" alt="services-bg-eye-shape">
                        </div>
                    </div> 
                </a>     
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <a href="{{ route('diabetic-retina-treatment')}}">
                    <div class="single-services">  
                        <span>
                        <img src="{{ asset('/resources/assets/img/icons/diabetic-retina-icon.png')}}" alt="diabetic-retina-icon">
                        </span>
                        <h3>Diabetic Retina</h3>  
                        <a href="{{ route('diabetic-retina-treatment')}}">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <div class="services-shape">
                            <img src="{{ asset('/resources/assets/img/services-bg-eye-shape.png')}}" alt="services-bg-eye-shape">
                        </div>
                    </div>  
                </a>    
            </div>
        </div>
    </div>
</section>  

<section>
    <div class="container-fluid" style="padding: 0px;">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{ asset('/resources/assets/img/sec-banner.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>  

<!-- start testimonials -->
<section class="sec-testimonials">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="tm-sectiontitle text-center mt-5 mt-lg-0 mt-md-0">
                    <h2 style="color: #fff;">Patient Testimonials</h2>
                    <span class="tm-sectiontitle-divider tm-sectiontitle-divider-white">
                    <img src="{{ asset('/resources/assets/img/icons/eye-border-icon-white.png')}}" alt="eye-border-icon-white">        
                    </span>                    
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12">
            <img src="{{ asset('/resources/assets/img/testimonials-review.png')}}" alt="eye-border-icon-white"> 
            </div>
            <div class="col-lg-5 col-md-5 col-12 tm-testimonial-wrapper">
                <div class="tm-testimonial-slider tm-scrollanim">
                    <div class="tm-testimonial">
                        <div class="tm-testimonial-author">
                            <h6>Tejas Pasalkar</h6>
                        </div>
                        <p>Excellent experience, The doctor is an expert so the eye was immediately relieved. thank you</p>
                    </div>
                    <div class="tm-testimonial">
                        <div class="tm-testimonial-author">
                            <h6>Pratiksha Balkawade</h6>
                        </div>
                        <p>Excellent experience. The doctor is very calm and explains everything very patiently.</p>
                    </div>
                    <div class="tm-testimonial">
                        <div class="tm-testimonial-author">
                            <h6>Vikram Shelke</h6>
                        </div>
                        <p>Experienced Doctor, patient caring and helpful staff. Located at convinient Place.</p>
                    </div>
                    <div class="tm-testimonial">
                        <div class="tm-testimonial-author">
                            <h6>Sagar Suresh Dhole</h6>
                        </div>
                        <p>Best Eye Surgeons and treatment in Pune. Doctors with assured treatment relief.</p>
                    </div>
                </div>
                <a href="https://www.google.com/search?kgmid=/g/1tmckp7p&hl=en-IN&q=Dole+Eye+Hospital&kgs=ca9166ff8864c9c2&shndl=0&source=sh/x/kp/osrp/4" class="mt-4">View All Reviews</a>
            </div>
        </div>
    </div>
</section>  

<!-- start Best eye care clinic design -->
<section class="best-eye-care-sec">
    <div class="container">
        <div class="tm-sectiontitle text-center">
            <h2>Best eye care clinic in Pune</h2>
            <span class="tm-sectiontitle-divider">
            <img alt="section divider" src="{{ asset('/resources/assets/img/icons/eye-border-icon.png')}}" alt="eye-border-icon">
            </span>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="single-item">
                            <div class="icon-holder d-flex align-items-center">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('/resources/assets/img/icons/best-specialist-icon.png')}}" class="img-fluid" alt="best-specialist-icon">
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Best Specialist</h3>
                                <p>Dr. Dole ensures exceptional care, personally monitoring your progress from start to finish, including regular checkups.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mt-5">
                        <div class="single-item">
                            <div class="icon-holder d-flex align-items-center">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('/resources/assets/img/icons/careful-surgery-icon.png')}}" class="img-fluid" alt="careful-surgery-icon">
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Careful Surgery</h3>
                                <p>You will be in the capable hands of our experienced surgeons with several years of practical experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mt-5 mt-lg-0">
                        <div class="single-item">
                            <div class="icon-holder d-flex align-items-center">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('/resources/assets/img/icons/best-treatment-icon.png')}}" class="img-fluid" alt="best-treatment-icon">
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Best Treatment</h3>
                                <p>We prioritize treating our patients with compassion, consideration, and the utmost respect they deserve.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mt-5">
                        <div class="single-item">
                            <div class="icon-holder d-flex align-items-center">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('/resources/assets/img/icons/best-technology-icon.png')}}"s class="img-fluid" alt="best-technology-icon">
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Best Technology</h3>
                                <p>Our clinic is outfitted with modern equipment, which enables us to perform precise and comprehensive eye exams.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 d-flex align-items-center mt-5 mt-lg-0 mt-md-0">
                <div class="cat-best-eye-care">
                    <img src="{{ asset('/resources/assets/img/best-eye-care-clinic.png')}}" class="img-fluid" alt="best-eye-care-clinic">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- frequent ask question design -->
<section class="sec-question">
	<div class="container">
		<div class="tm-sectiontitle text-center">
			<h2>Frequently Asked Questions</h2>
			<span class="tm-sectiontitle-divider">
			<img alt="section divider" src="{{ asset('/resources/assets/img/icons/eye-border-icon.png')}}" alt="eye-border-icon">
			</span>
		</div>
		<div class="row">
			<div class="col-lg-7 col-md-7 col-12">
				<div class="cat-question panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingOne">
	                        <h4 class="panel-title">
	                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	                                1. What is the contact number of Dole Eye Clinic, Pune?
	                                <span> </span>
	                            </a>
	                        </h4>
	                    </div>
	                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	                        <div class="panel-body">
	                            <p>You can contact the Hospital by Calling on phone no.<a href="tel: +919822499066">+91 9822499066</a></p>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingTwo">
	                        <h4 class="panel-title">
	                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	                               2. Which specialties and treatments are offered by Dole Eye Clinic, Pune?
	                                <span> </span>
	                            </a>
	                        </h4>
	                    </div>
	                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	                        <div class="panel-body">
	                            <p>Dole Eye Clinic, Pune handles multiple specialties. Check the department-wise treatments covered by the hospital below: Cataract Treatment Phacoemulsification Cataract Treatment Glaucoma Treatment Squint Eye Treatment Diabetic Retinopathy Treatment
	                                   </p>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingThree">
	                        <h4 class="panel-title">
	                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	                                4. What are the facilities available at the Dole Eye Clinic, Pune?
	                                <span> </span>
	                            </a>
	                        </h4>
	                    </div>
	                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	                        <div class="panel-body">
	                            <p>OPD, OT facilities are available at Dole Eye Clinic, Pune.</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!-- <div class="text-center"> 
	            	<a href="faq.php" class="btn-view-all">View All Faqs</a>
	            </div>-->
			</div>
			<div class="col-lg-5 col-md-5 col-12 mt-5 mt-lg-0 mt-md-0">
				<img src="{{ asset('/resources/assets/img/faq-img.png')}}" class="img-fluid" alt="faq-img">
			</div>      
		</div>
	</div>
</section>   

<!-- our focus 2 -->
<div class="container-fluid focus-service position-relative mt-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-12 col-md-12 col-12">
        <div class="bg-focus border-inner text-center text-white p-5">
          <p>Ensuring Patient Safety through Safe Environments.</p>
          <p>Continuously Evaluating and Enhancing Patient Safety and Quality Performance.</p>
          <p>Supporting our staff in Monitoring and Ensuring Accountability for Safety and Quality of Care across all Levels within our Organization.</p>
        </div>          
      </div>
      <div class="col-lg-12 col-md-6 text-center bg-focus-head">  
        <h2>Our Focus</h2>
        <h3>Our Dedication to Quality and Safety is Unwavering!</h3>
      </div>
    </div>
  </div>
</div>

<!-- gallery design -->
<div class="sec-gallery tm-section tm-portfolio-area tm-padding-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                <div class="tm-sectiontitle text-center">
                    <h2>Gallery</h2>
                    <span class="tm-sectiontitle-divider">
                    <img alt="section divider" src="{{ asset('/resources/assets/img/icons/eye-border-icon.png')}}" alt="eye-border-icon">
                </span>
        </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row tm-portfolio-wrapper mt-30-reverse">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="tm-portfolio tm-scrollanim scrollanim-action">  
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img1.jpeg')}}" data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="348577512" src="{{ asset('/resources/assets/img/gallery/gallery-img1.jpeg')}}" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="tm-portfolio tm-scrollanim scrollanim-action">
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img2.jpeg')}}" data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="643077433" src="{{ asset('/resources/assets/img/gallery/gallery-img2.jpeg')}}" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="tm-portfolio tm-scrollanim scrollanim-action">
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img3.jpeg')}}" data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="937577354" src="{{ asset('/resources/assets/img/gallery/gallery-img3.jpeg')}}" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="tm-portfolio tm-scrollanim scrollanim-action">
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img4.jpeg')}}" data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="1232077275" src="{{ asset('/resources/assets/img/gallery/gallery-img4.jpeg')}}" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-counter bg-counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="cat-counter border-inner-counter">
                    <div class="icon">
                        <img src="{{ asset('/resources/assets/img/icons/experience-icon.png')}}" alt="experience-icon">
                    </div>
                    <div class="content">
                        <h2 class="title">Experience</h2>
                        <p><span class="counter-count">22</span>+</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-5 mt-lg-0 mt-md-0">
                <div class="cat-counter border-inner-counter">
                    <div class="icon">
                        <img src="{{ asset('/resources/assets/img/icons/surgery-icon.png')}}" alt="surgery-icon">
                    </div>
                    <div class="content">
                        <h2 class="title">Surgery</h2>
                        <p><span class="counter-count">853</span>+</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-5 mt-lg-0 mt-md-5">
                <div class="cat-counter border-inner-counter">
                    <div class="icon">
                        <img src="{{ asset('/resources/assets/img/icons/patients-icon.png')}}" alt="patients-icon">
                    </div>
                    <div class="content">
                        <h2 class="title">Happy Patients</h2>
                        <p><span class="counter-count">2400</span>+</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-5 mt-lg-0 mt-md-5">
                <div class="cat-counter border-inner-counter">
                    <div class="icon">
                        <img src="{{ asset('/resources/assets/img/icons/star-icon.png')}}" alt="star-icon">
                    </div>
                    <div class="content">
                        <h2 class="title">Star Rated</h2>
                        <p><span class="counter-count">5</span>+</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- consulting hospitals -->
<section class="sec-consulting">
    <div class="container">
        <div class="tm-sectiontitle text-center">
            <h2>Consulting Hospital</h2>
            <span class="tm-sectiontitle-divider">
            <img alt="section divider" src="{{ asset('/resources/assets/img/icons/eye-border-icon.png')}}" alt="eye-border-icon">
            </span>
        </div>
        <div class="row
         d-flex justify-content-center">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="consulting-box">
                    <div class="consulting-box-inner">
                        <img src="{{ asset('/resources/assets/img/sahyadri-hospital-consulting-logo.png')}}" alt="sahyadri-hospital-consulting-logo" class="sahyadri-hospital-consulting-logo">
                    </div>
                    <h2>Sahyadri Hospital</h2>
                    <div class="d-flex">
                        <div>
                            <h5>Address</h5>
                        </div>
                        <div>
                            <p class="pb-4">Plot No. 30-C, Erandvane, Karve Rd, Deccan Gymkhana, Pune, Maharashtra 411004</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-5 mt-lg-0 mt-md-0">
                <div class="consulting-box">
                    <div class="consulting-box-inner">
                        <img src="{{ asset('/resources/assets/img/hv-desai-eye-clinic-consulting-logo.png')}}" alt="hv-desai-eye-clinic-consulting-logo" class="sahyadri-hospital-consulting-logo">
                    </div>
                    <h2>H. V. Desai Eye Hospital</h2>
                    <div class="d-flex">
                        <div>
                            <h5>Address</h5>
                        </div>
                        <div>
                            <p class="pb-3">93, Tarawade Vasti, Mohammadwadi, Hadapsar, Pune MH 411060 India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop   