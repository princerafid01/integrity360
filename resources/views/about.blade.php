@extends('master')
@section('contents')
        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image:url({{ asset('images/banner/3.jpg') }});">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Fusing logic with imagination and truth with discovery.</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-tb90 bg-gray square_shape2">
                <div class="container">
                    <div class="section-content ">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <div class="m-about m-l50 m-r50">
                                    <div class="owl-carousel about-us-carousel owl-btn-bottom-right">
                                        <!-- COLUMNS 1 -->
                                        @foreach($projects as $project)
                                        <div class="item">
                                            <div class="ow-img wt-img-effect zoom-slow">
                                                <a href="{{ route('single_project',$project->id) }}"><img src="{{ Voyager::image($project->image) }}" alt=""></a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="m-about-containt text-uppercase text-black p-t30">
                                    <span class="font-30 font-weight-300">About Us</span>
                                    <h2 class="font-40">{{ $who_we_are->title }}</h2>
                                    <p>{{ $who_we_are->description }}
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT COMPANY SECTION END -->
            <!-- OUR EXPERTS SECTION START -->
            <div class="section-full bg-white  square_shape2">
                <div class="container-fluid">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 bg-repeat" style="background-image:url(images/background/ptn-1.png);">
                                <div class="m-experts p-tb90">
                                    <!-- TITLE START -->
                                    <div class="section-head text-left text-black">
                                        <h2 class="text-uppercase font-36">Our experts</h2>
                                        <div class="wt-separator-outer">
                                            <div class="wt-separator bg-black"></div>
                                        </div>
                                    </div>
                                    <!-- TITLE END -->
                                    <!-- <div class="wt-team-six large-pic">
                                        <div class="wt-team-media wt-thum-bx">
                                            <img src="images/our-team5/pic1.jpg" alt="">
                                        </div>
                                        <div class="wt-team-info text-center p-lr10 p-tb20 bg-white">
                                            <h2 class="wt-team-title text-uppercase"><a href="javascript:void(0);" class="text-black font-32 font-weight-500">Robert willson</a></h2>
                                            <p class="font-22">Co-manager associated</p>
                                            <ul class="social-icons social-md social-square social-dark">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="">
                                    <div class="row">
                                        <!-- COLUMNS 1 -->
                                        @foreach($team_members as $member)
                                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                            <div class="wt-team-six bg-white">
                                                <div class="wt-team-media wt-thum-bx wt-img-overlay1">
                                                    <img src="storage/{{$member->image}}" alt="">
                                                    <div class="overlay-bx">
                                                        <div class="overlay-icon">
                                                            <ul class="social-icons social-square social-dark">
                                                                <li><a href="http://{{$member->facebook_id}}" class="fa fa-facebook"></a></li>
                                                                <li><a href="http://{{$member->twitter_id}}" class="fa fa-twitter"></a></li>
                                                                <li><a href="http://{{$member->linkedin_id}}" class="fa fa-linkedin"></a></li>
                                                                <li><a href="http://{{$member->youtube_id}}" class="fa fa-youtube"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wt-team-info text-center bg-white p-lr10 p-tb20">
                                                    <h5 class="wt-team-title text-uppercase m-a0"><a href="javascript:void(0);">{{$member->name}}</a></h5>
                                                    <p class="m-b0">{{$member->designation}}</p>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR EXPERTS SECTION END -->
            
            <!-- OUR STORY SECTION START -->
            <!-- <div class="section-full bg-gray p-tb90 square_shape1">
                <div class="container">
                    <div class="section-head text-left text-black">
                        <h2 class="text-uppercase font-36">Our Story</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-black"></div>
                        </div>
                    </div>
                    <div class="section-content our-story">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="wt-media our-story-pic">
                                    <img src="images/gallery/pic1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="wt-box our-story-detail">
                                    <h3 class="text-uppercase">2011-12</h3>
                                    <h2 class="text-uppercase">Park Boathouse</h2>
                                    <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum stie id viverra. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="wt-box our-story-detail">
                                    <h3 class="text-uppercase">2013-14</h3>
                                    <h2 class="text-uppercase">Museum Expansion</h2>
                                    <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum stie id viverra. </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="wt-media our-story-pic">
                                    <img src="images/gallery/pic3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="wt-media our-story-pic">
                                    <img src="images/gallery/pic4.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="wt-box our-story-detail">
                                    <h3 class="text-uppercase">2015-16</h3>
                                    <h2 class="text-uppercase">Eisenhower Memoria</h2>
                                    <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum stie id viverra. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="wt-box our-story-detail">
                                    <h3 class="text-uppercase">2017-18</h3>
                                    <h2 class="text-uppercase">Columbia Sport Center</h2>
                                    <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum stie id viverra. </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="wt-media our-story-pic">
                                    <img src="images/gallery/pic5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- OUR STORY SECTION END -->
        </div>
        <!-- CONTENT END -->
        @endsection