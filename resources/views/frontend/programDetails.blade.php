@extends('frontend.header')
@section('title', 'BECC-About')
@section('content')

    <!--==============================    Breadcumb============================== -->
    <div class="breadcumb-wrapper ">
        <div class="parallax" data-parallax-image="{{asset('assets/img/breadcurmb/breadcurmb-1-1.jpg')}}"></div>
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Program Details</h1>
                <div class="breadcumb-menu-wrap">
                    <i class="far fa-home-lg"></i>
                    <ul class="breadcumb-menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Program Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================    Service Area    ==============================-->
    <section class="vs-service-wrapper space-top space-md-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content mb-30">
                        <div class="vs-surface wow" data-wow-delay="0.3s">
                            <img src="/documents/programs/{{$program->image}}" alt="Service Image" class="w-100" >
                        </div>
                        {{-- <div class="row justify-content-center">
                            <div class="col-xl-11 col-xxl-10 ">
                                <div class="service-bar">
                                    <div
                                        class="row justify-content-between align-items-center gy-4 text-center text-lg-start">
                                        <div class="col-sm-6 col-lg-auto">
                                            <span class="fs-xs">Treatment Name</span>
                                            <h2 class="h5 mb-0">Heart Transplant</h2>
                                        </div>
                                        <div class="col-sm-6 col-lg-auto">
                                            <span class="fs-xs">Time Duration</span>
                                            <h2 class="h5 mb-0">More Than 12 Hour</h2>
                                        </div>
                                        <div class="col-sm-6 col-lg-auto">
                                            <span class="fs-xs">Doctor Name</span>
                                            <h2 class="h5 mb-0">Dr. David Smith</h2>
                                        </div>
                                        <div class="col-sm-6 col-lg-auto">
                                            <a href="appointment.html" class="vs-btn style2">Contact<i
                                                    class="fal fa-calendar-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                        <p class="fs-md text-title mb-4 pb-2">{!!$program->title!!}</p>
                        <p>{!!$program->description!!}</p>
                      
              
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

