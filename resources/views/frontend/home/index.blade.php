@extends('frontend.layouts.master')
@section('style')
    @php
        $profile = \Modules\Setting\Entities\CompanyProfile::first();
        $abc = str_replace('value', '', $profile->meta_keywords);
        $bcd = str_replace('{"":"', '', $abc);
        $cde = str_replace('"}', '', $bcd);
        $def = str_replace('[', '', $cde);
        $keywords = str_replace(']', '', $def);
    @endphp
    <title>{{ $profile->company_name }}</title>
    <meta name="description" content="{{ $profile->meta_description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="title" content="{{ $profile->meta_title }}">
    <style>
        .inner-img {
            transition: 0.3s;
        }

        .inner-img:hover {
            transform: scale(1.1);
        }
    </style>
@endsection
@section('content')
    <!--// Banner //-->
    <div class="ritekhela-banner-one">
        @foreach ($sliders as $slider)
            <div class="ritekhela-banner-one-layer">
                <span class="ritekhela-banner-transparent"></span>
                <img src="{{ asset('upload/images/sliders/' . $slider->image) }}" alt="">
                <div class="ritekhela-banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>{{ $slider->title }}</h1>
                                <div class="clearfix"></div>
                                <!--<h1>नेपाल  <strong-->
                                <!--        class="ritekhela-color">कराते  </strong>महासंघ</h1>-->
                                <!--<h1 style="font-size: 35px;"><strong-->
                                <!--    class="ritekhela-color">National</strong> Sports  <strong-->
                                <!--        class="ritekhela-color">Council</strong></h1>-->
                                <!--<h1 style="font-size: 30px;">Ministry of <strong-->
                                <!--        class="ritekhela-color">Youth & Sports</strong></h1>-->
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur
                                                                                            adipiscing elit. Ut ac malesuada ante
                                                                                            Curabitur lacinia diam tempus tempor
                                                                                            consectetur. Sed vitae dignissim
                                                                                            purueget aliquam libero.</p> -->
                                <!-- <div class="clearfix"></div>
                                                                                        <a href="#" class="ritekhela-banner-btn">Read
                                                                                            More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--// Banner //-->

    <!--// Content //-->
    <div class="ritekhela-main-content">

        <!--// Main Section //-->
        <div class="ritekhela-main-section
                    ritekhela-fixture-slider-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 mb-4">
                        <div class="ritekhela-fancy-title-two">
                            <h2>Welcome To {{ $profile->company_name }}</h2>
                        </div>
                        <div>
                            {!! $profile->introduction !!}
                        </div>
                    </div>

                    <div class="col-md-8">
                        <!--// Fancy Title Two //-->
                        <div class="ritekhela-fancy-title-two">
                            <h2>Latest News</h2>
                        </div>
                        <!--// Fancy Title Two //-->

                        <!--// Latest Blog's //-->
                        <div class="ritekhela-blogs
                                    ritekhela-blog-view1">
                            <ul class="row">
                                @foreach ($news->take(2) as $new)
                                    <li class="col-md-6">
                                        <figure><a href="{{ route('news.show', $new->slug) }}"><img
                                                    src="{{ asset('upload/images/blogs/' . $new->image) }}" alt="">
                                                <i
                                                    class="fa
                                                        fa-link"></i>
                                            </a></figure>
                                        <div class="ritekhela-blog-view1-text">
                                            <ul class="ritekhela-blog-options">
                                                <li><i
                                                        class="far
                                                            fa-calendar-alt"></i>
                                                    {{ $new->created_at->format('F d, Y H:i A') }}</li>
                                                <li><i
                                                        class="far
                                                                fa-user"></i>
                                                    {{ $new->user->name }}</li>
                                            </ul>
                                            <h2><a href="{{ route('news.show', $new->slug) }}">{{ $new->title }}</a>
                                            </h2>
                                            @php
                                                $des = strip_tags($new->description);
                                            @endphp
                                            <p>{!! \Illuminate\Support\Str::limit($des, 166) !!}</p>
                                            <a href="{{ route('news.show', $new->slug) }}"
                                                class="ritekhela-blog-view1-btn">Read
                                                More</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="ritekhela-blogs
                                    ritekhela-blog-view2">
                            <ul class="row">
                                @foreach ($news->skip(2)->take(6) as $new)
                                    <li class="col-md-6">
                                        <figure><a href="{{ route('news.show', $new->slug) }}"><img
                                                    src="{{ asset('upload/images/blogs/' . $new->image) }}"
                                                    alt=""></a>
                                        </figure>
                                        <div class="ritekhela-blog-view2-text">
                                            <h2><a href="{{ route('news.show', $new->slug) }}">{{ $new->title }}</a>
                                            </h2>
                                            <time
                                                datetime="2008-02-14
                                                    20:00">{{ $new->created_at->format('F d, Y H:i A') }}</time>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--// Latest Blog's //-->
                    </div>

                    <!--// SideBaar //-->
                    <aside class="col-md-4">

                        <!--// Widget Popular News //-->
                        <div class="widget widget_popular_news">
                            <div class="ritekhela-fancy-title-two">
                                <h2>Upcoming Events</h2>
                            </div>
                            <ul>
                                @foreach ($events as $event)
                                    <li>
                                        <span>0{{ $loop->iteration }}</span>
                                        <div class="popular_news_text">
                                            {{-- <small>The Team</small> --}}
                                            <a>{{ $event->title }}</a>
                                            <time
                                                datetime="2008-02-14
                                                    20:00">{{ $event->created_at->format('F d, Y') }}</time>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!--// Widget Next Match //-->
                        @if ($match)
                            <div class="widget widget_next_match">
                                <div class="ritekhela-fancy-title-two">
                                    <h2>Next Match</h2>
                                </div>
                                <div class="widget_next_match_title">
                                    <h5>{{ $match->title }}</h5>
                                    <span>{{ date('l, d M, Y', strtotime($match->date)) }}</span>
                                </div>
                                <ul>
                                    <li>
                                        <img src="{{ asset('upload/images/match/' . $match->image1) }}" alt="">
                                        <h6><a href="#"></a>{{ $match->team1 }}</h6>
                                        <!-- <small>Sports And Magazine</small> -->
                                    </li>
                                    <li>
                                        <div class="widget_next_match_option">
                                            <h6>{{ date('H:m A', strtotime($match->time)) }}</h6>
                                            <small>{{ $match->stadium }}</small>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('upload/images/match/' . $match->image2) }}" alt="">
                                        <h6>{{ $match->team2 }}</h6>
                                        <!-- <small>Madison Stadium</small> -->
                                    </li>
                                </ul>
                            </div>
                        @endif
                        <!--// Widget Next Match //-->

                    </aside>
                    <!--// SideBaar //-->

                </div>
            </div>
        </div>
        <!--// Main Section //-->

    </div>
    <!--// Content //-->
@endsection
