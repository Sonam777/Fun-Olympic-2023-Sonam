@extends('frontend.layouts.master')
@section('style')
    <title>{{ $tournament->title }}</title>
@endsection
@section('content')
    <!--// SubHeader //-->
    <div class="ritekhela-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $tournament->title }}</h1>
                    <ul class="ritekhela-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>{{ $tournament->title }}</li>
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
                            <img src="{{ asset('upload/images/tournament/'.$tournament->image) }}" alt="">
                        </figure>

                        <div class="ritekhela-editor-detail text-justify">
                            <h2>{{ $tournament->title }}</h2>
                            @if ($tournament->file)
                                Download Form: <a href="{{ asset('upload/file/tournament/'.$tournament->file) }}" class="btn btn-info btn-sm"><i class="fa fa-download"></i> Download</a>
                            @endif
                            <p>{!! $tournament->description !!}</p>
                            
                            @if ($tournament->file)
                            <hr>
                                Download Form: <a href="{{ asset('upload/file/tournament/'.$tournament->file) }}" class="btn btn-info btn-sm"><i class="fa fa-download"></i> Download</a>
                            @endif
                        </div>
                    </div>
                    <!--// Full Section //-->

                    <!--// SideBaar //-->
                    <aside class="col-md-4">
                        <div class="ritekhela-fancy-title-two">
                            <h2>Tournaments</h2>
                        </div>
                        <div class="ritekhela-blogs ritekhela-blog-view1">
                            <ul class="row">
                                @foreach ($relateds as $related)
                                <li class="col-md-12">
                                    <figure><a href="{{ route('tournament.show',$related->slug) }}"><img src="{{ asset('upload/images/tournament/'.$related->image) }}" alt=""> <i
                                                class="fa fa-link"></i> </a></figure>
                                    <div class="ritekhela-blog-view1-text">
                                        <ul class="ritekhela-blog-options">
                                            <li><a href="{{ route('tournament.show',$related->slug) }}" style="font-size: 16px">{{ $related->title }}</a></li>
                                        </ul>
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
