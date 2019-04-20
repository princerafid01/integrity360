@extends('master')
@section('contents')
        <!-- CONTENT START -->
        <div class="page-content ">
            <!-- SECTION CONTENT START -->
            <div class="section-full p-tb90 square_shape1 square_shape3">
                <h1 class="pl-3">All Post Videos</h1>

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
                                @foreach($post_video as $video)
                                <a class="post-image" href="{{ Voyager::image($video->image) }}">
                                    <div class="masonry-item {{ $video->cat->name }} col-lg-3 col-md-6 col-sm-6 m-b30">
                                        <div class="wt-img-effect ">
                                           <a class="popup-youtube" href="http://{{ $video->link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen><img src="{{ Voyager::image($video->image) }}" alt=""></a>
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