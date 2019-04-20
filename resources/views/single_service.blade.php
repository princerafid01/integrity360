@extends('master')
@section('contents')      
        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{ asset('images/banner/3.jpg') }})">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Creating places that enhance the human experience.</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Service detail</li>
                                </ul>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
			<!-- SECTION CONTENT START -->
            <div class="section-full p-tb90">
            	<div class="container">
                    <div class="project-detail-outer bg-top-left bg-parallax bg-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{ Voyager::image($service->image) }})">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 project-detail-pic"></div>
                            <div class="col-md-6 col-sm-12 project-detail-containt bg-black square_shape3">
                                <div class="p-lr20 p-tb80">
                                    <div class="bg-white p-lr30 p-tb50 text-black">
                                        <h2 class="m-t0"><span class="font-34 text-uppercase">{{ $service->title }}</span></h2>
                                        <p>{{ $service->description }}</p>
                                        {{-- <div class="product-block">
                                            <div class="row">
                                              <div class="col-md-6 col-sm-6 m-b30">
                                                <h5 class="text-uppercase">Date</h5>
                                                <p>January 08, 2018</p>
                                              </div>
                                              <div class="col-md-6 col-sm-6 m-b30">
                                                <h5 class="text-uppercase">Client</h5>
                                                <p>Branding NthPsd Company</p>
                                               </div>
                                              <div class="col-md-6 col-sm-6 m-b30">
                                                <h5 class="text-uppercase">Project type</h5>
                                                <p>Contruction, Brading</p>
                                              </div>
                                              <div class="col-md-6 col-sm-6 m-b30">
                                                <h5 class="text-uppercase">Creative Director</h5>
                                                <p>Lorem Ipsum doler</p>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="p-t0">
                                            <ul class="social-icons social-square social-darkest m-b0">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION CONTENT END  -->

        </div>
        <!-- CONTENT END -->
        
        @endsection
