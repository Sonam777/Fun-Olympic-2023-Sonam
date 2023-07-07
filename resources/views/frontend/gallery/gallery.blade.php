@extends('frontend.layouts.master')
@section('style')
    <title>Gallery</title>
@endsection
@section('content')
    <!--// SubHeader //-->
    <div class="ritekhela-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Gallery</h1>
                    <ul class="ritekhela-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Gallery</li>
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
                        <!--// Gallery //-->
                        <div class="ritekhela-gallery ritekhela-gallery-view1">
                            <ul class="row">
                                @foreach ($galleries as $gallery)
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="{{ route('gallery.image',$gallery->slug) }}">
                                                <img src="{{ asset('upload/images/gallery/' . $gallery->image) }}"
                                                    alt=""> <i
                                                    class="fa
                                                        fa-plus
                                                        ritekhela-bgcolor"></i>
                                            </a>
                                            <figcaption>
                                                @php
                                                    $count = \Modules\Gallery\Entities\GalleryImages::where('gallery_id', $gallery->id)
                                                        ->where('status', 'on')
                                                        ->count();
                                                @endphp
                                                <span class="ritekhela-bgcolor-two">{{ $count }}
                                                    Photos</span>
                                            </figcaption>
                                        </figure>
                                        <a href="{{ route('gallery.image',$gallery->slug) }}">
                                            <h2>{{ $gallery->name }}</h2>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--// Gallery //-->
                        <!--// Pagination //-->
                        <div class="ritekhela-pagination">
                            <ul>
                                <li>{{ $galleries->links('pagination::bootstrap-4') }}</li>
                            </ul>
                        </div>
                        <!--// Pagination //-->
                    </div>
                    <!--// Full Section //-->

                </div>
            </div>
        </div>
        <!--// Main Section //-->

    </div>
    <!--// Content //-->
@endsection
