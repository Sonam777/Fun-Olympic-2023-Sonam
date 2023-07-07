@extends('frontend.layouts.master')
@section('style')
    <title>About Us</title>
@endsection
@section('content')
    <!--// SubHeader //-->
    <div class="ritekhela-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                    <ul class="ritekhela-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>About Us</li>
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
                        <div class="row">
                            <div class="col-md-8 text-justify" style="margin: auto">
                                {!! $profile->introduction !!}
                            </div>
                            <div class="col-md-4" style="margin: auto">
                                <img src="{{ asset('upload/images/settings/'.$profile->image) }}" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <!--// Fancy Title //-->
                        <div class="ritekhela-fancy-title-two">
                            <h2>Mission</h2>
                        </div>
                        <!--// Fancy Title //-->
                        <div class="text-justify">
                            {!! $profile->mission !!}
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <!--// Fancy Title //-->
                        <div class="ritekhela-fancy-title-two">
                            <h2>Vision</h2>
                        </div>
                        <!--// Fancy Title //-->
                        <div class="text-justify">
                            {!! $profile->vision !!}
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
