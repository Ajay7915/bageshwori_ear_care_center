@extends('frontend.header')
@section('title', 'BECC-Gallery')
@section('content')

    <!--==============================    Breadcumb       ============================== -->
    <div class="breadcumb-wrapper ">
        <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Gallery</h1>
                <div class="breadcumb-menu-wrap">
                    <i class="far fa-home-lg"></i>
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================     Project Area  ==============================-->
    <section class="vs-project-wrapper space">
        <div class="container z-index-common">
            <div class="row justify-content-center filter-active">

                @foreach ($data as $key => $value)
                    @php
                        $record = explode('|', $value->images);
                    @endphp
                    @foreach ($record as $image)
                        <div class="col-md-3 col-lg-3 filter-item cat-2">
                            <div class="vs-project-box mb-10">
                                <div class="project-img">
                                    <a href="#"><img src="/documents/gallery/{{ $image }}" alt="Project Image"
                                            class="w-100"></a>
                                </div>
                            </div>
                        </div>


                        
                    @endforeach
                @endforeach

                {{-- <div class="col-md-3 col-lg-3 filter-item cat-2">
                    <div class="vs-project-box mb-30">
                        <div class="project-img">
                            <a href="#"><img src="assets/img/project/pro-1-6.jpg" alt="Project Image"
                                    class="w-100"></a>
                        </div>
                    </div>
                </div> --}}




            </div>
        </div>
    </section>
@endsection
