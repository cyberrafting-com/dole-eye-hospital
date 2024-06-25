@php($title = "Expert Retina Examination by Dr. Kuldeep Suhas Dole")  
@section('meta_desc')Ensure optimal retinal health with thorough retina examinations by Dr. Kuldeep Suhas Dole, a trusted Pune specialist. Detect issues early for better eye care. @endsection

@extends('layouts.default')
@section('content')

<!-- banner design -->
<div class="tm-breadcrumb-area tm-padding-section tm-padding-section-banner bg-grey" data-bgimage="{{ asset('/resources/assets/img/services-banner/retina-examination-banner.jpg')}}">
    <div class="container">
        <div class="tm-breadcrumb">
            <h2>Surgeries</h2>
            <ul>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li>Retina Examination</li>
            </ul>
        </div>
    </div>
</div>

<!--  -->
<section class="sec-page-services">  
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="services-content">
                    <img src="{{ asset('/resources/assets/img/retina-examination.jpeg')}}" class="img-fluid" alt="retina-examination">
                    <div class="services-content-inner">
                        <h1>Retina Check Up in Pune</h1>
                        <p>At Dole Eye Clinic in Pune, we provide top-quality care for retinal conditions. We offer a wide range of services for different retinal disorders.</p>
                        <p>Our specialized clinic is committed to assisting you in restoring and safeguarding your vision, whether through surgical procedures or non-invasive treatments. Our main focus is to protect and maintain eye vision.</p>
                    </div>  
                    <div class="services-content-inner">
                        <h2>Importance of regular retina checkups</h2>
                        <p>The retina, located at the posterior part of your eye, is a tissue that responds to light and transforms it into electrical signals that your brain interprets as visual information. Regular retina examinations are crucial to identify and address retinal disorders, as they can potentially cause vision impairment or complete loss of sight.</p>
                        <p>Regular retina checkups can help detect retinal diseases early when they are most treatable. Early treatment can help prevent vision loss or blindness.</p>
                    </div>
                    <div class="services-content-inner">
                        <h2>Overview of retina-related conditions and diseases</h2>
                        <p>Some of the most common retina-related conditions include:</p>
                        <ul>
                            <li><strong>1. Age-related macular degeneration (AMD):</strong>This condition explicitly impacts the macula, which is crucial in central vision.</li>
                            <li><strong>2. Diabetic retinopathy:</strong>a complication of diabetes that impacts the blood vessels within the retina.</li>
                            <li><strong>3. Retinal detachment:</strong>It happens when the retina becomes detached from the rear part of the eye. This detachment can occur due to a retinal tear or hole.</li>
                            <li><strong>4. Retinitis pigmentosa (RP)</strong>is a group of inherited retinal diseases that cause progressive vision loss. RP affects the rods and cones, the light-sensitive cells in the retina.</li>
                        </ul>
                    </div>
                    <div class="services-content-inner">
                        <h2>Retina checkup procedures and techniques</h2>
                        <p>Eye doctors use a few different procedures and techniques to check the retina.</p>
                        <ul>
                            <li><strong>1. Ophthalmoscopy:</strong>This is the most common way to examine the retina. The doctor uses an ophthalmoscope to throw light into the eye and view the retina through the pupil.</li>
                            <li><strong>2. Slit-lamp examination:</strong>This procedure uses a slit beam of light to magnify and examine the front and back of the eye, including the retina.</li>
                            <li><strong>3. Fundus photography:</strong>This procedure takes retina pictures using a special camera. The pictures can be stored and reviewed later to track any changes in the retina over time.</li>
                            <li><strong>4. Fluorescein angiography:</strong>This procedure detects retinal diseases such as diabetic retinopathy and wet age-related macular degeneration (AMD).</li>
                            <li><strong>5. Indocyanine green angiography (ICG angiography):</strong>This procedure uses a different dye than fluorescein angiography. The dye is injected into an arm vein and passes through the blood vessels in the retina. ICG angiography can assist medical professionals in diagnosing and following retinal diseases that affect the choroids, the layer of blood vessels that feed the retina.</li>
                        </ul>
                    </div>
                    <div class="services-content-inner">
                        <h2>Treatment options for retinal conditions</h2>
                        <p>Some common treatment options include:</p>
                        <ul>
                            <li><strong>1. Laser surgery:</strong>This procedure uses a laser to seal off leaking blood vessels or create scars in the retina to help it reattach.</li>
                            <li><strong>2. Vitrectomy:</strong>This surgery removes the vitreous, the clear gel-like substance that fills the inside of the eye. This can be done to remove scar tissue, blood, or other debris causing damage to the retina.</li>
                            <li><strong>3. Injections of medications:</strong>Medications can be injected into the eye to help treat retinal diseases such as wet AMD and diabetic retinopathy. These medications can help to shrink abnormal blood vessels or stop the growth of new blood vessels.</li>
                            <li><strong>4. Gene therapy:</strong>Delivering genes into the retina as a new experimental therapy to help repair damaged cells or stop the progression of retinal diseases is known as gene therapy.</li>    
                        </ul>    
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <!-- 1st sidebar -->
                <h2 class="sidebar-head"><i class="fa fa-long-arrow-left pr-2" aria-hidden="true"></i>Services<i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></h2>
                <div class="service-menu-list">
                    <ul>
                        <li><a href="{{ route('basic-eye-check-up')}}"><i class="fa fa-reply" aria-hidden="true"></i>Basic Eye Check-up</a></li>
                        <li><a href="{{ route('retina-examination')}}" class="active"><i class="fa fa-reply" aria-hidden="true"></i>Retina Examination</a></li>
                        <li><a href="{{ route('glaucoma-treatment')}}"><i class="fa fa-reply" aria-hidden="true"></i>Glaucoma Treatment</a></li>
                        <li><a href="{{ route('lazy-eye-treatment')}}"><i class="fa fa-reply" aria-hidden="true"></i>Lazy Eye Treatment</a></li>
                        <li><a href="{{ route('pediatric-glaucoma-management')}}"><i class="fa fa-reply" aria-hidden="true"></i>Pediatric Glaucoma Management</a></li>
                        <li><a href="{{ route('diabetic-retina-treatment')}}"><i class="fa fa-reply" aria-hidden="true"></i>Diabetic Retina Treatment</a></li>
                    </ul>
                </div>
                
                <!-- 2nd sidebar -->
                <h2 class="sidebar-head"><i class="fa fa-long-arrow-left pr-2" aria-hidden="true"></i>Surgeries<i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></h2>
                <div class="service-menu-list">
                    <ul>
                        <li><a href="{{ route('cataract-surgery')}}"><i class="fa fa-reply" aria-hidden="true"></i>Cataract Surgery</a></li>
                        <li><a href="{{ route('canaloplasty')}}"><i class="fa fa-reply" aria-hidden="true"></i>Canaloplasty</a></li>
                        <li><a href="{{ route('lasik-eye-surgery')}}"><i class="fa fa-reply" aria-hidden="true"></i>Lasik Eye Surgery</a></li>
                        <li><a href="{{ route('corneal-surgery')}}"><i class="fa fa-reply" aria-hidden="true"></i>Corneal Surgery</a></li>
                        <li><a href="{{ route('squint-surgery')}}"><i class="fa fa-reply" aria-hidden="true"></i>Squint Surgery</a></li>
                        <li><a href="{{ route('oculoplastic-surgery')}}"><i class="fa fa-reply" aria-hidden="true"></i>Oculoplastic Surgery</a></li>
                        <li><a href="{{ route('anterior-segment-surgery')}}"><i class="fa fa-reply" aria-hidden="true"></i>Anterior Segment Surgery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@stop   