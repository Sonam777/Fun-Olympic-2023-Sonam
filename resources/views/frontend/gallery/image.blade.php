@extends('frontend.layouts.master')
@section('style')
    <title>Gallery | Images</title>
    <!-- fancybox -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>
    <!-- magnific-popup -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <style>
        /* -----------------------------------
          Gallery Section
    --------------------------------------*/
        .portfolio-section {
            /* padding: 50px 0; */
            background-color: #fff;
        }

        .portfolio-section h2 {
            font-size: 28px;
            font-weight: 600;
            color: #000;
            text-transform: uppercase;
        }

        .portfolio-menu {
            text-align: center;
        }

        .control {
            background: #000;
            color: #fff;
            padding: 5px 10px;
            border: 1px solid #343a40;
            border-radius: 3px;
            margin: 5px;
            cursor: pointer;
            -webkit-transition: all 05s ease;
            -moz-transition: all 05s ease;
            -ms-transition: all 05s ease;
            -o-transition: all 05s ease;
            transition: all 0.5s ease;
        }

        .control:hover {
            background: #343a40;
        }

        .mixitup-control-active {
            color: #fff;
            background: #343a40;
        }

        .fancybox-container button:focus {
            outline: 0;
            box-shadow: none;
        }

        .portfolio-item {
            padding-top: 30px;
        }

        .pd {
            padding: 0;
            padding: 10px;
            list-style: none;
        }

        .pd img {
            height: 180px;
            transition: all 0.5s;
        }

        .portfolio-overlay {
            position: absolute;
            z-index: 2;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.7);
            width: 100%;
            height: 100%;
            text-align: center;
            visibility: hidden;
            transition: all 0.5s;
            transform: scale(0);
        }

        .portfolio-overlay p,
        .portfolio-overlay a {
            position: relative;
            z-index: 4;
        }

        .portfolio-overlay::before {
            content: "";
            width: 0;
            height: 0;
            border-width: 0;
            position: absolute;
            left: 10%;
            top: 10%;
            transition: 50ms height ease 150ms;
            z-index: 3;
        }

        .portfolio-overlay::after {
            content: "";
            width: 0;
            height: 0;
            border-width: 0;
            position: absolute;
            right: 10%;
            bottom: 10%;
            transition: 100ms width ease 200ms;
            z-index: 3;
        }

        .portfolio-item:hover .portfolio-overlay::before {
            width: 80%;
            height: 80%;
            border-top: 1px solid #50977f;
            border-right: 1px solid #50977f;
            transition: width 0.1s ease 0.3s, height 0.1s ease 0.5s;
        }

        .portfolio-item:hover .portfolio-overlay::after {
            width: 80%;
            height: 80%;
            border-bottom: 1px solid #50977f;
            border-left: 1px solid #50977f;
            transition: width 0.1s ease 0.6s, height 0.1s ease 0.7s;
        }

        .portfolio-item li:hover .portfolio-overlay {
            visibility: visible;
            transform: scale(1);
        }

        .portfolio-overlay .category {
            margin-top: 70px;
            margin-bottom: 20px;
            font-size: 16px;
            color: #fff;
            font-weight: 500;
        }

        .portfolio-overlay .magnify-icon {
            height: 40px;
            width: 40px;
            border-radius: 20px;
            background: #50977f;
            margin: 0 5px;
            cursor: pointer;
            display: inline-block;
            transition: all 0.25s;
        }

        .portfolio-overlay .magnify-icon:hover {
            background: #000;
        }

        .portfolio-overlay .magnify-icon p span i {
            font-size: 15px;
            color: #fff;
            line-height: 40px;
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <!--// SubHeader //-->
    <div class="ritekhela-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $gallery->name }}</h1>
                    <ul class="ritekhela-breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>{{ $gallery->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// SubHeader //-->

    <!--// Content //-->
    <div class="ritekhela-main-content">

        <!--// Main Section //-->
        <section class="portfolio-section" id="portfolio">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>{{ $gallery->name }}</h2>
                    </div>
                </div> --}}
                <ul class="row portfolio-item">
                    @forelse ($images as $image)
                    <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                        <a data-fancybox="item" title="click to zoom-in" href="{{ asset('upload/images/gallery/'.$image->image) }}">
                        <img src="{{ asset('upload/images/gallery/'.$image->image) }}"
                            itemprop="thumbnail" alt="Image description" />
                        </a>
                    </li>
                    @empty
                    <p>No Records Found!!</p>
                    @endforelse
                </ul>
                <div class="ritekhela-pagination">
                    <ul>

                        <li>{{ $images->links('pagination::bootstrap-4') }}</li>

                    </ul>
                </div>
            </div>
        </section>
        <!--// Main Section //-->

    </div>
    <!--// Content //-->
@endsection

@section('script')
    <!-- Mixitup -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>
    <!-- fancybox -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js'></script>
    <!-- Fancybox js -->
    <script>
        /*Downloaded from https://www.codeseek.co/ezra_siton/mixitup-fancybox3-JydYqm */
        // 1. querySelector
        var containerEl = document.querySelector(".portfolio-item");
        // 2. Passing the configuration object inline
        //https://www.kunkalabs.com/mixitup/docs/configuration-object/
        var mixer = mixitup(containerEl, {
            animation: {
                effects: "fade translateZ(-100px)",
                effectsIn: "fade translateY(-100%)",
                easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
            }
        });
        // fancybox insilaze & options //
        $("[data-fancybox]").fancybox({
            loop: true,
            hash: true,
            transitionEffect: "slide",
            /* zoom VS next////////////////////
            clickContent - i modify the deafult - now when you click on the image you go to the next image - i more like this approach than zoom on desktop (This idea was in the classic/first lightbox) */
            clickContent: function(current, event) {
                return current.type === "image" ? "next" : false;
            }
        });
    </script>
@endsection
