@extends('master')
@section('contents')
        <!-- CONTENT START -->
        <div class="page-content">
<!-- OUR SERVICES SECTION START -->
            <div class="section-full bg-black p-tb90 square_shape1">
                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head text-left text-white">
                        <h2 class="text-uppercase font-36">Our Services</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-white"></div>
                        </div>
                    </div>
                    <!-- TITLE END -->
                    <div class="section-content circle-block-outer">
                        <div class="row">
                            @foreach($services as $service)
                            <div class="col-md-4 col-sm-12 m-b30">
                                
                                    <div class="wt-icon-box-wraper  p-a20 m-b50 text-white">
                                        <a href="{{ route('single_service',$service->id) }}">
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase">{{ $service->title }}</h4>
                                            <p>{{ substr($service->description,0,90).'...' }}</p>
                                        </div>
                                </a>

                                    </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR SERVICES SECTION END -->
        </div>
        @endsection