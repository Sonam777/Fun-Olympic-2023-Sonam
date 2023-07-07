@extends('frontend.layouts.master')
@section('style')
    <title>News</title>
@endsection
@section('content')
    <!--// SubHeader //-->
    <div class="ritekhela-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>News</h1>
                    <ul class="ritekhela-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('news') }}">News</a></li>
                        <li>{{ $news->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// SubHeader //-->

    <!--// Content //-->
    <div class="ritekhela-main-content">

        <!--// Main Section //-->
        <div class="ritekhela-main-section ritekhela-fixture-list-full">
            <div class="container">
                <div class="row">

                    <!--// Full Section //-->
                    <div class="col-md-8">


                        <!--// Fixture Detail List //-->
                        <figure class="ritekhela-fixture-detail">
                            <img src="{{ asset('upload/images/blogs/'.$news->image) }}" alt="">
                            <ul class="ritekhela-blog-options">
                                <li><a ><i class="far fa-user"></i> By {{ $news->user->name }}</a></li>
                                <li><i class="far fa-calendar-alt"></i> {{ $news->created_at->format('F d, Y') }}</li>
                                {{-- <li><a href="#"><i class="far fa-comment"></i> Comments</a></li> --}}
                                <li><a ><i class="fa fa-tag"></i>News</a></li>
                            </ul>
                        </figure>

                        <div class="ritekhela-editor-detail">
                            <h2>{{ $news->title }}</h2>
                            <p>{!! $news->description !!}</p>
                        </div>
                    </div>
                    <!--// Full Section //-->

                    <!--// SideBaar //-->
                    <aside class="col-md-4">
                        <div class="ritekhela-fancy-title-two">
                            <h2>Related Blog</h2>
                        </div>
                        <div class="ritekhela-blogs ritekhela-blog-view1">
                            <ul class="row">
                                @foreach ($relateds as $related)
                                <li class="col-md-12">
                                    <figure><a href="{{ route('news.show',$related->slug) }}"><img src="{{ asset('upload/images/blogs/'.$related->image) }}" alt=""> <i
                                                class="fa fa-link"></i> </a></figure>
                                    <div class="ritekhela-blog-view1-text">
                                        <ul class="ritekhela-blog-options">
                                            <li><i class="far fa-calendar-alt"></i> {{ $related->created_at->format('F m, Y') }}</li>
                                            <li><a href="{{ route('news.show',$related->slug) }}"><i class="far fa-user"></i> {{ $related->user->name }}</a></li>
                                        </ul>
                                        <h2><a href="{{ route('news.show',$related->slug) }}">{{ $related->title }}</a>
                                        </h2>
                                        {{-- <p>Lorem ipsum dolor sit amet, consectet ad elit sed diam nonummy nibh euismod
                                            tincidunt ut laoreet dolore magnaLorem ipsum dolor sit amet, consectet ad elit
                                            sed onummy.</p> --}}
                                        {{-- <a href="{{ route('news.show',$related->slug) }}" class="ritekhela-blog-view1-btn">Read More</a> --}}
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>


                    </aside>
                    <!--// SideBaar //-->

                </div>
            </div>
        </div>
        <!--// Main Section //-->

    </div>
    <!--// Content //-->
@endsection
