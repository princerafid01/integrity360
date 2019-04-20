@extends('master')
@section('contents')

        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{ asset('images/banner/3.jpg') }});">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Sustainability, Innovation, and Craftmanship</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Porfolio</li>
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
                <h1 class="pl-3">All Projects</h1>
            	<div class="container">
                    <!-- PAGINATION START -->
                    <div class="filter-wrap p-tb50">
                        <ul class="masonry-filter link-style  text-uppercase">
                                <li class="active"><a data-filter="*" href="#">All</a></li>
                                @foreach($p_categories as $cat)
                        <li><a data-filter=".{{$cat->name}}-col" href="#">{{$cat->name}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
            	</div>
                <!-- GALLERY CONTENT START -->
                 <div class="portfolio-wrap mfp-gallery work-grid clearfix">
                     <div class="container-fluid">
                 	      <div class="row">
                                <!-- COLUMNS 1 -->
                @foreach($projects as $project)

                                <div class="masonry-item {{$project->cat->name}}-col col-lg-3 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="storage/{{$project->image}}" alt="{{$project->title}}">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation">
                                                <div class="text-white  font-weight-300 p-a40">
                                                    <h2><a href="javascript:void(0);" class="text-white font-20 letter-spacing-4 text-uppercase">{{ $project->title }}</a></h2>
                                                    <p>{{ $project->description }}
                                                    </p>
                                                    <a href="{{ route('single_project',$project->id) }}" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>                                            @endforeach                                           
                            </div>
            			</div>
                    </div>
                <!-- GALLERY CONTENT END -->
            
            </div>
            <!-- SECTION CONTENT END  -->

        </div>
        <!-- CONTENT END -->
        
        @endsection