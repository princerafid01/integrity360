@extends('master')
@section('contents')
        <!-- CONTENT START -->
        <div class="page-content ">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(images/banner/3.jpg) ;">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">A truly integrated way of working.</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Post Image</li>
                                </ul>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-tb90 square_shape1 square_shape3">
                <h1 class="pl-3">All Post image</h1>

                <div class="container">
                    <!-- PAGINATION START -->
                    <div class="filter-wrap p-tb50">
                        <ul class="masonry-filter link-style  text-uppercase">
                                <li class="active"><a data-filter="*" href="#">All</a></li>
                                @foreach($cats as $cat)
                                <li><a data-filter=".{{ $cat->name }}" href="#">{{ $cat->name }}</a></li>
                                @endforeach
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                    <!-- GALLERY CONTENT START -->
                 <div class="portfolio-wrap mfp-gallery work-grid clearfix">
                     <div class="container-fluid">
                          <div class="row">
                                <!-- COLUMNS 1 -->
                                @foreach($post_images as $post)
                                <a class="post-image" href="{{ Voyager::image($post->image) }}">
                                    <div class="masonry-item {{ $post->cat->name }} col-lg-3 col-md-6 col-sm-6 m-b30">
                                        <div class="wt-img-effect ">
                                            <img src="{{ Voyager::image($post->image) }}" alt="">
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                                

                                                                                                                            
                            </div>
                        </div>
                    </div>
                <!-- GALLERY CONTENT END -->

                    
                    
                    
                        
                </div>
            </div>
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->
        
        @endsection