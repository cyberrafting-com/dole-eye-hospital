@php($title = "Gallery")  
@section('meta_desc')Hospital Gallery. @endsection

@extends('layouts.default')
@section('content')

<!-- banner design -->  
<div class="tm-breadcrumb-area tm-padding-section tm-padding-section-banner bg-grey" data-bgimage="{{ asset('/resources/assets/img/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="tm-breadcrumb">
            <h2>Dole Eye Clinic</h2>
            <ul>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li>Gallery</li>
            </ul> 
        </div>
    </div>
</div>

<!-- gallery design -->
<div class="sec-gallery tm-section tm-portfolio-area mt-0 mt-lg-5 mt-md-5 mb-5">
    <div class="container pt-0 pt-lg-5 pt-md-5">
        <div class="row tm-portfolio-wrapper mt-30-reverse">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="tm-portfolio tm-portfolio1 tm-scrollanim scrollanim-action">
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img1.jpeg')}}"s data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="348577512" src="{{ asset('/resources/assets/img/gallery/gallery-img1.jpeg')}}" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="tm-portfolio tm-portfolio1 tm-scrollanim scrollanim-action">
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img2.jpeg')}}" data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="643077433" src="{{ asset('/resources/assets/img/gallery/gallery-img2.jpeg')}}" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="tm-portfolio tm-portfolio1 tm-scrollanim scrollanim-action">
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img3.jpeg')}}" data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="937577354" src="{{ asset('/resources/assets/img/gallery/gallery-img3.jpeg')}}" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="tm-portfolio tm-portfolio1 tm-scrollanim scrollanim-action">
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img4.jpeg')}}" data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="1232077275" src="{{ asset('/resources/assets/img/gallery/gallery-img4.jpeg')}}" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="tm-portfolio tm-portfolio1 tm-scrollanim scrollanim-action">
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img5.jpeg')}}" data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="1232077275" src="{{ asset('/resources/assets/img/gallery/gallery-img5.jpeg')}}" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="tm-portfolio tm-portfolio1 tm-scrollanim scrollanim-action">
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img6.jpeg')}}" data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="1232077275" src="{{ asset('/resources/assets/img/gallery/gallery-img6.jpeg')}}" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="tm-portfolio tm-portfolio1 tm-scrollanim scrollanim-action">
                    <a href="{{ asset('/resources/assets/img/gallery/gallery-img7.jpeg')}}" data-fancybox="portfolio-gallery">
                    <img alt="portfolio image" data-pagespeed-url-hash="1232077275" src="{{ asset('/resources/assets/img/gallery/gallery-img7.jpeg')}}"s onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about design -->

@stop   