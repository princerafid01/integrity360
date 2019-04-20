@extends('master')
@section('contents')
<!-- CONTENT START -->
<div class="page-content">
    <!-- SLIDER START -->
    <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
        <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
            <ul>
                @foreach($sliders as $slider)
                <!-- SLIDE 1 -->
                <li data-index="rs-{{$slider->id}}" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ Voyager::Image($slider->image) }}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ Voyager::Image($slider->image) }}" alt="" data-lazyload="{{ Voyager::Image($slider->image) }}" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- BACKGROUND VIDEO LAYER -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper " id="rrzb_{{$slider->id}}-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 4;background-color:rgba(0, 0, 0, 0.2);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                    </div>
                    <div id="rrzb_{{$slider->id}}" class="rev_row_zone rev_row_zone_middle" style="z-index: 7;">
                        <!-- Content Block -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption  " id="slide-{{$slider->id}}-layer-1" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="row" data-columnbreak="3" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[50,60,40,50]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[150,130,80,50]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[150,130,80,50]" style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption  " id="slide-{{$slider->id}}-layer-2" data-x="['left','left','left','left']" data-hoffset="['0','0','100','100']" data-y="['top','top','top','top']" data-voffset="['0','0','100','100']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":"+0","speed":750,"sfxcolor":"#fff","sfx_effect":"","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]' data-columnwidth="100%" data-verticalalign="top" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[50,50,50,50]" data-paddingright="[0,0,30,30]" data-paddingbottom="[50,50,50,50]" data-paddingleft="[0,0,30,30]" style="z-index: 8; width: 100%;">
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" id="slide-{{$slider->id}}-layer-3" data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','bottom','bottom','bottom']" data-voffset="['0','260','250','190']" data-width="none" data-height="none" data-whitespace="['normal','nowrap','nowrap','nowrap']" data-type="text" data-basealign="slide" data-responsive_offset="off" data-frames='[{"delay":"+490","speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                                {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','inherit','inherit','inherit']" data-paddingtop="[5,5,5,5]" data-paddingright="[5,5,5,5]" data-paddingbottom="[5,5,5,5]" data-paddingleft="[5,5,5,5]" style="z-index: 10; white-space: normal; font-size: 18px; line-height: 15px; font-weight: 700; color: #fff; letter-spacing: 3px; display: inline-block;">
                                    GENERAL
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-{{$slider->id}}-layer-4" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="full" data-height="15" data-whitespace="normal" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                                {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; display: block;background-color:rgba(0, 0, 0, 0);">
                                </div>
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption   tp-resizeme  tp-linkmod" id="slide-{{$slider->id}}-layer-5" data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','bottom','bottom','bottom']" data-voffset="['0','170','140','120']" data-fontsize="['60','60','60','40']" data-lineheight="['60','60','60','40']" data-width="['900','700','100%','100%']" data-height="none" data-whitespace="normal" data-type="text" data-actions='' data-basealign="slide" data-responsive_offset="off" data-frames='[{"delay":"+590","speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                                {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},
                                                {"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[5,5,5,5]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[5,5,5,5]" style="z-index: 11; white-space: normal; font-weight: 600; color: #fff; letter-spacing: 2px; display: inline-block;cursor:pointer;
                                                text-decoration: none; text-transform:capitalize">Virtually Build Your House</div>
                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-{{$slider->id}}-layer-6" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="full" data-height="15" data-whitespace="normal" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                                {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; display: block;background-color:rgba(0, 0, 0, 0);"> </div>
                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption   tp-resizeme" id="slide-{{$slider->id}}-layer-7" data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','bottom','bottom','bottom']" data-voffset="['0','100','80','70']" data-width="['none','460','100%','100%']" data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="off" data-frames='[{"delay":"+690","speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                                {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[5,5,5,5]" data-paddingright="[5,5,5,5]" data-paddingbottom="[5,5,5,5]" data-paddingleft="[5,5,5,5]" style="z-index: 12; white-space: normal; font-size: 16px; line-height: 22px;
                                                font-weight: 400; color: #fff; letter-spacing: 0px; display: inline-block;">
                                    Excepteur sint occaecat cupidatat non proident laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- LAYER NR. 8 -->
                    <!-- Border Part -->
                    <div class="tp-caption tp-shape tp-shapewrapper " id="slide-{{$slider->id}}-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 80px 80px 80px;"> </div>
                </li>
                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- SLIDER END -->
    <!-- WELCOME SECTION START -->
    <div class="section-full p-t90 bg-gray">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-5 col-sm-12 text-uppercase text-black">
                        <span class="font-30 font-weight-300">Welcome</span>
                        <h2 class="font-40">
                            {{ $welcome_area->title}}
                        </h2>
                        <p>{{ $welcome_area->description }}
                        </p>
                        <a href="{{URL::to('/about-us')}}" class="btn-half site-button button-lg m-b15"><span>Read More</span><em></em></a>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="m-carousel-1 m-l100">
                            <div class="owl-carousel home-carousel-1 owl-btn-vertical-center">
                                <!-- COLUMNS 1 -->
                                @foreach($projects as $project)
                                <div class="item">
                                    <div class="ow-img wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="storage/{{$project->image}}"  style="max-width: 100%" alt=""></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                    <strong>18 Year</strong>
                    <span class="text-black">Experience Working</span>
                </div>
            </div>
        </div>
    </div>
    <!-- WELCOME  SECTION END -->
    <!-- LATEST PRJECTS SLIDER START -->
    <div class="section-full p-t90 p-lr80 latest_project-outer square_shape3">
        <!-- TITLE START -->
        <div class="section-head text-left">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="text-uppercase font-36">Latest Project</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator bg-black"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="btn-filter-wrap">
                        <li class="btn-filter btn-active" data-filter="*">All Project</li>
                        @foreach($p_categories as $cat)
                        <li class="btn-filter" data-filter=".{{$cat->name}}-col">{{$cat->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- TITLE END -->
        <!-- IMAGE CAROUSEL START -->
        <div class="section-content">
            <div class="owl-carousel owl-carousel-filter  owl-btn-bottom-left">
                <!-- COLUMNS 1 -->
                @foreach($all_projects as $project)
                <div class="item fadingcol {{$project->cat->name}}-col">
                    <div class="wt-img-effect ">
                        <img src="storage/{{$project->image}}" alt="{{$project->title}}">
                        <div class="overlay-bx-2 ">
                            <div class="line-amiation">
                                <div class="text-white  font-weight-300 p-a40">
                                    <h2><a href="javascript:void(0);" class="text-white font-20 letter-spacing-4 text-uppercase">{{$project->title}}</a></h2>
                                    <p>{{$project->description}}
                                    </p>
                                    <a href="{{ route('single_project',$project->id) }}" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
            <strong>Awesome</strong>
            <span class="text-black">Designs</span>
        </div>
    </div>
    <!-- LATEST PRJECTS SLIDER END -->
    <!-- WHO WE ARE SECTION START -->
    <div class="section-full p-t140 bg-repeat" style="background-image:url(images/background/ptn-1.png);">
        <div class="container-fluid">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <div class="wt-left-part">
                            <div class="text-uppercase text-black">
                                <span class="font-30 font-weight-300">Who We Are </span>
                                <h2 class="font-40">
                                    {{$who_we_are->title}}
                                </h2>
                                <p>{{$who_we_are->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <div class="m-carousel-2">
                            <div class="owl-carousel carousel-hover home-carousel-2 owl-btn-vertical-center">
                                <!-- COLUMNS 1 -->
                                @foreach($last_projects as $pro)
                                <div class="item">
                                    <div class="wt-box">
                                        <div class="ow-img wt-carousel-block gradi-black">
                                            <img src="storage/{{$pro->image}}" alt="">
                                            <div class="p-a50 wt-carousel-info text-white">
                                                <div class="carousel-line">
                                                    <h2 class="font-28 font-weight-400 m-b10">{{$pro->title}}</h2>
                                                    <p class="m-b0"> {{$pro->description}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="carousel-bg-img">
                                <img src="images/slider-corner.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="hilite-title p-lr20 m-tb20 text-left text-uppercase bdr-gray bdr-left">
                    <strong>30+ Projects</strong>
                    <span class="text-black">Completed</span>
                </div>
            </div>
        </div>
    </div>
    <!-- WHO WE ARE SECTION END -->
    <!-- OUR EXPERTS SECTION START -->
    <div class="section-full bg-gray square_shape3">
        <div class="container-fluid">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 col-sm-12 bg-black square_shape1 square_shape2 mb pb">
                        <div class=" m-experts p-t90">
                            <!-- TITLE START -->
                            <div class="section-head text-left text-white">
                                <h2 class="text-uppercase font-36">Our experts</h2>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator bg-white"></div>
                                </div>
                            </div>
                            <!-- TITLE END -->
                            <!--<div class="wt-team-six large-pic">
                                        <div class="wt-team-media wt-thum-bx">
                                            <img src="images/our-team5/pic1.jpg" alt="">
                                        </div>
                                        <div class="wt-team-info text-center p-lr10 p-tb20 text-white">
                                            <h2 class="wt-team-title text-uppercase"><a href="javascript:void(0);" class="text-white font-32 font-weight-500">Robert willson</a></h2>
                                            <p class="font-22">Co-manager associated</p>
                                            <ul class="social-icons social-md social-square social-dark white-border has-bg">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                              
                                    <div class="hilite-title p-lr20 m-tb20 text-left text-uppercase bdr-gray bdr-left">
                                        <strong class="text-gray">Experts</strong>
                                        <span class="text-white">Team Members</span>
                                    </div>
                                </div>
                            </div> -->
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
            <!-- COMPANY DETAIL SECTION START -->
            <div class="section-full p-tb100 overlay-wraper bg-top-center" data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg-11.jpg);">
                <div class="overlay-main opacity-08 bg-black"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="some-facts">
                                <div class="text-white text-uppercase">
                                    <span class="font-40 font-weight-300">Some</span>
                                    <h2 class="font-50">
                                        Intresting Facts
                                    </h2>
                                    <p class="font-18 font-weight-300">We will be amazed that we have so much popularity.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row some-facts-counter">
                                <div class="col-md-4 col-sm-4">
                                    <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                                        <div class="icon-content text-center">
                                            <div class="font-40 font-weight-600 m-b5"><span class="counter">{{ $fact->clients_number }}</span></div>
                                            <div class="wt-separator-outer m-b20">
                                                <div class="wt-separator bg-white"></div>
                                            </div>
                                            <span class="text-uppercase">Happy Clients</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                                        <div class="icon-content text-center">
                                            <div class="font-40 font-weight-600 m-b5"><span class="counter">{{ $fact->projects_number }}</span></div>
                                            <div class="wt-separator-outer m-b20">
                                                <div class="wt-separator bg-white"></div>
                                            </div>
                                            <span class="text-uppercase">Finished projects</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                                        <div class="icon-content text-center">
                                            <div class="font-40 font-weight-600 m-b5"><span class="counter">{{ $fact->working_days }}</span></div>
                                            <div class="wt-separator-outer m-b20">
                                                <div class="wt-separator bg-white"></div>
                                            </div>
                                            <span class="text-uppercase">Working Days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COMPANY DETAIL SECTION End -->
            <!-- TESTIMONIALS SECTION START -->
            <div class="section-full p-t140 bg-repeat " style="background-image:url(images/background/ptn-1.png);">
                <div class="container">
                    <div class="section-content">
                        <!-- TITLE START -->
                        <div class="section-head text-left">
                            <h2 class="text-uppercase font-36">Testimonials</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator bg-black"></div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                        <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                        <div class="section-content">
                            <div class="owl-carousel testimonial-home">
                                @foreach($testimonials as $testimonial)
                                <div class="item">
                                    <div class="testimonial-6">
                                        <div class="testimonial-pic-block">
                                            <div class="testimonial-pic">
                                                <img src="storage/{{ $testimonial->image }}" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix bg-white">
                                            <div class="testimonial-detail clearfix">
                                                <strong class="testimonial-name">{{ $testimonial->name }}</strong>
                                                <span class="testimonial-position p-t0">{{ $testimonial->designation }}</span>
                                            </div>
                                            <div class="testimonial-paragraph text-black p-t15">
                                                <span class="fa fa-quote-left"></span>
                                                <p>{{ $testimonial->quote }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                        <strong>Client</strong>
                        <span class="text-black">Says</span>
                    </div>
                </div>
            </div>
            <!-- TESTIMONIALS SECTION END -->
            <!-- CLIENT LOGO SECTION START -->
            <div class="section-full p-tb40 bg-black square_shape4">
                <div class="container">
                    <div class="section-content">
                        <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <!-- TITLE START -->
                                    <div class="text-left">
                                        <h2 class="text-uppercase font-36 text-white">Our Clients</h2>
                                        <div class="wt-separator-outer">
                                            <div class="wt-separator bg-white"></div>
                                        </div>
                                    </div>
                                    <!-- TITLE END -->
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="section-content bg-white p-tb10">
                                        <div class="owl-carousel home-client-carousel owl-btn-center-v">
                                            @foreach($clients as $client)
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo client-logo-media">
                                                        <a href="{{ 'http://'.$client->link }}"><img src="storage/{{ $client->image }}" alt=""></a></div>
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
            </div>
            <!-- CLIENT LOGO  SECTION End -->
        </div>
        <!-- CONTENT END -->
        @endsection
