@extends('frontend.header')
@section('title', 'BECC-About')
@section('content')

    <!--==============================    Breadcumb    ============================== -->
    <div class="breadcumb-wrapper ">
        <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Latest Program</h1>
                <div class="breadcumb-menu-wrap">
                    <i class="far fa-home-lg"></i>
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Program</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                Blog Area
                            ==============================-->
    <section class="vs-blog-wrapper space-top space-md-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    @isset($programs)
                        @foreach ($programs as $program)
                            <div class="vs-blog blog-single">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="documents/programs/{{ $program->image }}"
                                            alt="Blog Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="#"><i class="fal fa-eye"></i>Posted date: {{ $program->created_at }}</a>
                                    </div>
                                    <h2 class="blog-title h3"><a
                                            href="{{ route('programDetails', $program->id) }}">{{ $program->title }}</a></h2>
                                    <p>{!! $program->description !!}</p>
                                    <a href="" class="link-btn">Read More<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                        <div class="vs-pagination pb-30">
                            <ul>
                                <li>{{ $programs->links('frontend/css/custom-pagination') }}</li>
                            </ul>
                        </div>
                    @endisset
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar-area pl-30">
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Notice</h3>
                            <div class="recent-post-wrap">
                                @isset($notices)
                                    @foreach ($notices as $notice)
                                        <div class="thumb-post">
                                            <div class="media-img">
                                                <a href="{{ route('notice_show', $notice->id) }}"><img src="{{asset('documents/'.$notice->document)}}" height="80" width="90"
                                                        alt="Blog Image"></a>
                                            </div>
                                            <div class="media-body ">
                                                <h4 class="post-title"><a href="{{ route('notice_show', $notice->id) }}">{!! Str::limit($notice->description,40) !!}</a></h4>
                                                <a class="post-date" href="{{ route('notice_show', $notice->id) }}"><i class="fal fa-calendar-alt"></i>Mar 21,
                                                    2023</a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset



                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
