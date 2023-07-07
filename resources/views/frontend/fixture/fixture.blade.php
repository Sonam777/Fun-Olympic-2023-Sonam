@extends('frontend.layouts.master')
@section('style')
    <title>Fixtures</title>
@endsection
@section('content')
    <!--// SubHeader //-->
    <div class="ritekhela-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Fixtures</h1>
                    <ul class="ritekhela-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Fixtures</li>
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
                        <div class="ritekhela-fixture ritekhela-modren-fixture">
                            <ul class="row">
                                @foreach ($matches as $match)
                                <li class="col-md-6">
                                    <div class="ritekhela-modren-fixture-wrap">
                                        <div class="ritekhela-modren-fixture-text">
                                            <div class="ritekhela-modren-team-one">
                                                <figure><img src="{{ asset('upload/images/match/'.$match->image1) }}" alt="">
                                                </figure>
                                                <br>
                                                <section>
                                                    <h6 style="font-size: 15px">{{ $match->team1 }}</h6>
                                                    {{-- <span>Bepop institute</span> --}}
                                                </section>
                                                <span></span>
                                            </div>
                                            <div class="ritekhela-modren-match-text">
                                                <h5 style="font-size: 12px">{{ $match->title }}</h5>
                                                <time datetime="2008-02-14 20:00">{{ date('l F d, Y', strtotime($match->date)) }}</time>
                                                <div class="clearfix"></div>
                                                <span>VS</span>
                                                <h6>{{ $match->stadium }}</h6>
                                                {{-- <a href="#" class="ticket-buy-btn">Buy Ticket</a> --}}
                                            </div>
                                            <div class="ritekhela-modren-team-two">
                                                <figure><img src="{{ asset('upload/images/match/'.$match->image2) }}" alt="">
                                                </figure>
                                                <br>
                                                <section>
                                                    <h6 style="font-size: 15px">{{ $match->team2 }}</h6>
                                                    {{-- <span>Icarus College</span> --}}
                                                </section>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <!--// Pagination //-->
                        <div class="ritekhela-pagination">
                            <ul>
                                <li>{{ $matches->links('pagination::bootstrap-4') }}</li>
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
