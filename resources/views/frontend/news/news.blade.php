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
                        <li>News</li>
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
                    <div class="col-md-12">

                        <!--// Latest Blog's //-->
                        <div class="ritekhela-blogs
                                    ritekhela-blog-view1">
                            <ul class="row">
                                @foreach ($news->take(2) as $new)
                                    <li class="col-md-6">
                                        <figure><a href="{{ route('news.show',$new->slug) }}"><img
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
                                            <h2><a href="{{ route('news.show',$new->slug) }}">{{ $new->title }}</a></h2>
                                            @php
                                                $des = strip_tags($new->description);
                                            @endphp
                                            <p>{!! \Illuminate\Support\Str::limit($des, 166) !!}</p>
                                            <a href="{{ route('news.show',$new->slug) }}" class="ritekhela-blog-view1-btn">Read
                                                More</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="ritekhela-blogs
                                    ritekhela-blog-view1">
                            <ul class="row">
                                @foreach ($news->skip(2) as $new)
                                    <li class="col-md-4">
                                        <figure><a href="{{ route('news.show',$new->slug) }}"><img
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
                                            <h2><a href="{{ route('news.show',$new->slug) }}">{{ $new->title }}</a></h2>
                                            @php
                                                $des = strip_tags($new->description);
                                            @endphp
                                            <p>{!! \Illuminate\Support\Str::limit($des, 166) !!}</p>
                                            <a href="{{ route('news.show',$new->slug) }}" class="ritekhela-blog-view1-btn">Read
                                                More</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--// Latest Blog's //-->
                        <div class="ritekhela-pagination">
                            <ul>

                                <li>{{ $news->links('pagination::bootstrap-4') }}</li>

                            </ul>
                        </div>
                    </div>
                    <!--// Full Section //-->

                </div>
            </div>
        </div>
        <!--// Main Section //-->

    </div>
    <!--// Content //-->
@endsection
