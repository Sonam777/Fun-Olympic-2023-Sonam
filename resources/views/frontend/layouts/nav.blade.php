@php
    $profile = \Modules\Setting\Entities\CompanyProfile::first();
    $news = \Modules\Blog\Entities\Blog::where('status', 'on')
        ->latest()
        ->take(5)
        ->get();
    $tournaments = \Modules\Tournament\Entities\Tournament::where('status', 'on')->get();
@endphp
<!--// Header //-->
<header id="ritekhela-header" class="ritekhela-header-one">

    <!--// TopStrip //-->
    <div class="ritekhela-topstrip">
        <div class="container">
            <div class="row">

                <aside class="col-md-6">
                    <strong>Latest News :</strong>
                    <div class="ritekhela-latest-news-slider">
                        @foreach ($news as $value)
                            <div class="ritekhela-latest-news-slider-layer">
                                <a href="{{ route('news.show', $value->slug) }}"
                                    style="color: white;">{{ $value->title }}</a>
                            </div>
                        @endforeach
                    </div>
                </aside>
                <aside class="col-md-6">
                    <ul class="ritekhela-user-strip">
                        <!-- <li><a href="#"><i class="fa fa-globe-asia"></i>
                                Support</a></li> -->
                        @if ($profile->facebook)
                            <li>
                                <a href="{{ $profile->facebook }}" target="__blank"><i class="fab fa-facebook"></i>
                                    <span class="social">Facebook</span>
                                </a>
                            </li>
                        @endif
                        @if ($profile->twitter)
                            <li>
                                <a href="{{ $profile->twitter }}" target="__blank"><i class="fab fa-twitter"></i>
                                    <span class="social">Twitter</span>
                                </a>
                            </li>
                        @endif
                        @if ($profile->instagram)
                            <li>
                                <a href="{{ $profile->instagram }}" target="__blank"><i class="fab fa-instagram"></i>
                                    <span class="social">Instagram</span>
                                </a>
                            </li>
                        @endif
                        @if ($profile->youtube)
                            <li>
                                <a href="{{ $profile->youtube }}" target="__blank"><i class="fab fa-youtube"></i>
                                    <span class="social">Youtube</span>
                                </a>
                            </li>
                        @endif
                        <!-- <li><a href="#" data-toggle="modal"
                                data-target="#ritekhelamodalcenter"><i
                                    class="fa fa-user-alt"></i>
                                Login</a></li>
                        <li><a href="#" data-toggle="modal"
                                data-target="#ritekhelamodalrg"><i
                                    class="fa fa-sign-in-alt"></i>
                                Signup</a></li> -->
                    </ul>
                </aside>

            </div>
        </div>
    </div>
    <!--// TopStrip //-->

    <!--// Main Header //-->
    <div class="ritekhela-main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('index') }}" class="ritekhela-logo"><img
                            src="{{ asset('upload/images/settings/' . $profile->logo) }}" alt="logo"
                            width="200px"></a>
                    <div class="ritekhela-right-section">
                        <div class="ritekhela-navigation">
                            <span class="ritekhela-menu-link">
                                <span class="menu-bar"></span>
                                <span class="menu-bar"></span>
                                <span class="menu-bar"></span>
                            </span>
                            <nav id="main-nav">
                                <ul id="main-menu" class="sm
                                    sm-blue">
                                    <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a
                                            href="{{ route('index') }}">Home</a></li>
                                    <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a
                                            href="{{ route('about') }}">About Us</a></li>
                                    <li class="{{ request()->routeIs('karate.tv') ? 'active' : '' }}"><a
                                            href="{{ route('karate.tv') }}">Live TV</a>
                                    </li>
                                    <li class="{{ request()->routeIs('fixture') ? 'active' : '' }}"><a
                                            href="{{ route('fixture') }}">Fixtures</a>
                                    </li>
                                    <li class="{{ request()->routeIs('tournament.show') ? 'active' : '' }}"><a
                                            href="#">Tournaments</a>
                                        <ul>
                                            @foreach ($tournaments as $tournament)
                                                <li><a
                                                        href="{{ route('tournament.show', $tournament->slug) }}">{{ $tournament->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ request()->routeIs('news', 'news.show') ? 'active' : '' }}"><a
                                            href="{{ route('news') }}">News</a>
                                    </li>
                                    <li
                                        class="{{ request()->routeIs('gallery.list', 'gallery.image') ? 'active' : '' }}">
                                        <a href="{{ route('gallery.list') }}">Gallery</a>
                                    </li>
                                    @if (auth()->user())
                                        <li class=""><a href="#">
                                            @if (auth()->user()->image)
                                            <img
                                            src="{{ asset('upload/images/users/' . auth()->user()->image) }}"
                                            width="30px"> 
                                        @else
                                        <img src="{{ asset('frontend/images/default.png') }}" width="30px"
                                        style="border-radius: 50%;">
                                            @endif
                                            
                                            {{ auth()->user()->name }}</a>
                                            <ul>
                                                <li><a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    @else
                                    <li
                                        class="">
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                    @endif

                                </ul>
                            </nav>
                        </div>
                        {{-- <ul class="ritekhela-navsearch">
                            <li><a href="#" data-toggle="modal" data-target="#ritekhelamodalsearch"><i
                                        class="fa fa-search"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Header //-->

</header>
<!--// Header //-->
