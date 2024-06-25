@php($title = "Contact Dole Eye Hospital Pune - Expert Eye Care")  
@section('meta_desc')Reach out to Dole Eye Hospital Pune for exceptional eye care. Contact us for appointments, inquiries, and personalized solutions. Your vision is our priority. @endsection

@extends('layouts.default')    
@section('content')      

<!-- banner design -->
<div class="tm-breadcrumb-area tm-padding-section tm-padding-section-banner bg-grey" data-bgimage="{{ asset('/resources/assets/img/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="tm-breadcrumb">
            <h2>Dole Eye Clinic</h2>
            <ul>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>  
</div>  

<!-- start contact design -->    
<section class="sec-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d121043.88018056109!2d73.7216198343111!3d18.546009840698193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d18.6250096!2d73.7595528!4m5!1s0x3bc2955da9c21cff%3A0xe603733e0532c2a2!2sDole%20Eye%20Hospital%20Pune!3m2!1d18.4719797!2d73.8208885!5e0!3m2!1sen!2sin!4v1686649791983!5m2!1sen!2sin" width="100%" height="430" style="border-radius: 8px;border: 2px dotted #fff;padding: 2px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>  
        <div class="row cat-contact">
            <div class="col-lg-4 col-md-4 col-12 services">
                <div class="box">
                    <div class="box-icon">
                        <i class="fa fa-mobile" aria-hidden="true" style="font-size: 28px;border: dashed 1px;padding: 6px 14px;border-radius: 31px;"></i>
                    </div>
                    <div class="box-text">
                        <h3>Phone Number</h3>
                        <a href="tel:919822499066">+ 91 9822499066</a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-icon">
                        <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 28px;border: dashed 1px;padding: 6px 12px;border-radius: 31px;"></i>
                    </div>
                    <div class="box-text">
                        <h3>Address</h3>
                        <p>Narveer Tanaji Malusare Rd, Anand Nagar, Pune, Maharashtra 411051</p>
                    </div>
                </div>
                <div class="box">
                    <div class="box-icon">
                        <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 21px;border: dashed 1px;padding: 10px 10px;border-radius: 31px;"></i>
                    </div>
                    <div class="box-text">
                        <h3>Address</h3>
                        <a href="mailto: kuldeepdole@yahoo.co.in">kuldeepdole@yahoo.co.in</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
                <div class="contact-form">
                    <h2>Send Us Message</h2>
                    @if(session('success'))
                    <p style="color: red;">{{ session('success') }}</p>
                    @endif
                    <form method="post" action="{{ route('saveContact') }}">
                    @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control form-control-lg" name="name" aria-describedby="name" placeholder="Enter Your Name" value="{{ old('name') }}">
                            @error('name')
                            <p style="color: red;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email" aria-describedby="email" placeholder="Enter email Id" value="{{ old('email') }}">
                                    @error('email')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Mobile No</label>
                                    <input type="tel" class="form-control form-control-lg" name="mobile" aria-describedby="email" placeholder="Enter Mobile No" value="{{ old('email') }}">
                                    @error('mobile')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>  
                            </div>      
                        </div>                   
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4" name="message">{{ old('message') }}</textarea>
                            @error('message')
                            <p style="color: red;">{{ $message }}</p>
                            @enderror
                        </div>  
                        <button type="submit" class="btn read-more-btn mt-3">Submit</button>
                    </form>    
                </div>
            </div>    
        </div>
    </div>    
</section>
@stop        