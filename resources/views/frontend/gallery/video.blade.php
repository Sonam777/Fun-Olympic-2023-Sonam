@extends('frontend.layouts.master')

@section('style')
    <title>Karate TV</title>
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css">

    <style>
        iframe {
            height: 36vw !important;
        }

        .ekko-lightbox .modal-content {
            background-color: transparent !important;
            border: none !important;
        }

        .ekko-lightbox .modal-header {
            display: none;
        }

        .ekko-lightbox .modal-body {
            padding: 0rem;
        }

        .img-responsive {
            width: 100%;
        }

        button.btn-play {
            position: absolute;
            top: 0;
            bottom: 0;
            padding: 0;
            margin: 0;
            margin-left: -15px;
            border: 0;
            border-radius: 0;
            outline: 0 !important;
            width: 100%;
            background-color: transparent;
            color: rgba(245, 245, 245, 0.8);
        }

        button.btn-play:hover,
        button.btn-play:active,
        button.btn-play:visited,
        button.btn-play:focus {
            color: white;
        }

        button.btn-play .glyphicon {
            padding: 0;
            margin: 0;
            color: inherit;
            background-color: inherit;
            font-size: 64px;
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            button.btn-play .glyphicon {
                font-size: 56px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            button.btn-play .glyphicon {
                font-size: 46px;
            }
        }

        @media (max-width: 767px) {
            a.video {
                display: block;
            }

            button.btn-play .glyphicon {
                font-size: 56px;
            }
        }

        .content .content-overlay {
            background: rgba(0, 0, 0, 0.7);
            position: absolute;
            height: 99%;
            width: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }

        .content:hover .content-overlay {
            opacity: 1;
        }

        .content-image {
            width: 100%;
        }

        .content-details {
            position: absolute;
            text-align: center;
            padding-left: 1em;
            padding-right: 1em;
            width: 100%;
            top: 50%;
            left: 50%;
            opacity: 0;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }

        .content:hover .content-details {
            top: 50%;
            left: 50%;
            opacity: 1;
        }

        .content-details h3 {
            color: #fff;
            font-weight: 500;
            letter-spacing: 0.15em;
            margin-bottom: 0.5em;
            text-transform: uppercase;
        }

        .content-details p {
            color: #fff;
            font-size: 0.8em;
        }

        .fadeIn-bottom {
            top: 80%;
        }

        .fadeIn-top {
            top: 20%;
        }

        .fadeIn-left {
            left: 20%;
        }

        .fadeIn-right {
            left: 80%;
        }

        .heading {
            color: #666666;
            text-align: center;
        }

        .button-group {
            margin-bottom: 20px;
        }

        .counter {
            display: inline;
            margin-top: 0;
            margin-bottom: 0;
            margin-right: 10px;
        }

        .posts {
            clear: both;
            list-style: none;
            padding-left: 0;
            width: 100%;
            text-align: left;
        }

        .posts li {
            background-color: #fff;
            border: 1.5px solid #d8d8d8;
            border-radius: 10px;
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 10px;
            margin-bottom: 10px;
            word-wrap: break-word;
            min-height: 42px;
            box-shadow: 8px 8px 5px #888888;
        }

        .btn-primary {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }
    </style>
@endsection
@section('content')
    <!--// SubHeader //-->
    <div class="ritekhela-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Karate TV</h1>
                    <ul class="ritekhela-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Karate TV</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// SubHeader //-->

    <!--// Content //-->
    <div class="ritekhela-main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <iframe width="100%" height="100vh"
                        src="https://www.youtube.com/embed/{{ $main->code }}?controls=0&autoplay=1&loop=1"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

                <div class="col-md-4">
                    <h2>Comments</h2>
                    <hr>
                    <div style="height: 600px; overflow-y: scroll;">
                        @foreach ($comments as $comment)
                            <div>
                                @if ($comment->user->image)
                                    <img src="{{ asset('upload/images/users/' . $comment->user->image) }}" width="60px"
                                        style="border-radius: 50%;">
                                @else
                                    <img src="{{ asset('frontend/images/default.png') }}" width="60px"
                                        style="border-radius: 50%;">
                                @endif

                                <h5>{{ $comment->user->name }}</h5>
                                <p>{{ $comment->comment }}</p>
                                <hr>
                            </div>
                        @endforeach
                    </div>



                    <form class="form" action="{{ route('comment.post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control status-box" name="comment" cols="5" rows="5"
                                placeholder="Enter your comment here..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
        <!--// Main Section //-->
        <div class="container mb-4 mt-4">
            <div class="row mt-4">
                <!--// Fancy Title //-->
                <div class="ritekhela-fancy-title-two">
                    <h2>Popular Videos</h2>
                </div>
                @foreach ($videos as $video)
                    <a href="{{ $video->link }}" data-title="{{ $video->title }}" data-width="1024" data-toggle="lightbox"
                        data-gallery="youtubevideos" class="col-sm-4 video content">
                        <div class="content-overlay"></div>
                        <button type="button" class="btn btn-play">
                            <span class="glyphicon glyphicon-play" aria-label="Play"></span>
                        </button>
                        <img src="https://img.youtube.com/vi/{{ $video->code }}/mqdefault.jpg" class="img-responsive">

                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title"><i class="fa fa-play"></i></h3>
                        </div>
                        <h5 style="color: black; text-align: center">{{ $video->title }}</h5>
                    </a>
                @endforeach
                <div class="ritekhela-pagination">
                    <ul>

                        <li>{{ $videos->links('pagination::bootstrap-4') }}</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Section //-->

    </div>
    <!--// Content //-->
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>
    <script>
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
@endsection
