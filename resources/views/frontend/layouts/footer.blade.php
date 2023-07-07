@php
    $profile = \Modules\Setting\Entities\CompanyProfile::first();
@endphp
<!--// Footer //-->
<footer id="ritekhela-footer" class="ritekhela-footer-one">

    <!--// Footer Widget //-->
    <div class="ritekhela-footer-widget">
        <div class="container">
            <div class="row">
                <aside class="widget col-md-4 widget_about_info">
                    <a href="{{ route('index') }}"><img src="{{ asset('upload/images/settings/' . $profile->footer_logo) }}"
                            alt=""></a>
                    <p>{!! $profile->footer_text !!}</p>

                </aside>
                <aside class="widget col-md-4 widget_twitter_feeds">
                    <div class="footer_widget_title">
                        <h2>Quick Links</h2>
                    </div>
                    <div class="row">
                        <ul class="col-6">
                            <li>
                                <a href="{{ route('index') }}" style="color: #fff;">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" style="color: #fff;">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('news') }}" style="color: #fff;">News</a>
                            </li>

                        </ul>
                        <ul class="col-6">
                            <li>
                                <a href="{{ route('gallery.list') }}" style="color: #fff;">Gallery</a>
                            </li>
                            <li>
                                <a href="{{ route('karate.tv') }}" style="color: #fff;">Karate TV</a>
                            </li>
                            <li>
                                <a href="{{ route('fixture') }}" style="color: #fff;">Fixtures</a>
                            </li>
                        </ul>
                    </div>

                </aside>
                <aside class="widget col-md-4 widget_about_info">

                    <div class="widget_about_info_social">
                        @if ($profile->facebook)
                            <a href="{{ $profile->facebook }}" class="fab fa-facebook-f" target="__blank"></a>
                        @endif
                        @if ($profile->twitter)
                            <a href="{{ $profile->twitter }}" class="fab fa-twitter" target="__blank"></a>
                        @endif
                        @if ($profile->instagram)
                            <a href="{{ $profile->instagram }}" class="fab fa-instagram" target="__blank"></a>
                        @endif
                        @if ($profile->youtube)
                            <a href="{{ $profile->youtube }}" class="fab fa-youtube" target="__blank"></a>
                        @endif
                    </div>
                    <ul>
                        <li><i class="fa fa-map-marker-alt"></i>
                            {{ $profile->company_address }}</li>
                        <li><i class="fa fa-phone"></i>{{ $profile->company_phone }}</li>
                        <li><i class="fa fa-envelope"></i> <a style="color: #fff;"
                                href="#">{{ $profile->company_email }}</a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
    <!--// Footer Widget //-->

    <!--// Footer CopyRight //-->
    <div class="ritekhela-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row" style="color: #fff;">
                        <div class="col-md-6">
                            <p>All Rights Reserved, 2023 <a href="index.html" style="color: #fff;" target="_blank"><i
                                        class="fa fa-copyright"></i> {{ $profile->company_name }}</a></p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed and Developed By <a href="https://sonamtmg.com.np/" style="color: #fff;"
                                    target="_blank">Sonam Tamang</a></p>
                        </div>
                    </div>
                    <a href="#" class="ritekhela-back-top" style="color: #fff;"><i
                            class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--// Footer CopyRight //-->

</footer>
<!--// Footer //-->

</div>


<!--// Login ModalBox //-->
<div class="loginmodalbox modal fade" id="ritekhelamodalcenter" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body ritekhela-bgcolor-two">
                <h5 class="modal-title">Login To Your Account</h5>
                <a href="#" class="close ritekhela-bgcolor-two" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </a>
                <form class="loginmodalbox-search">
                    <input type="text" value="Enter User Name"
                        onblur="if(this.value == '') { this.value='Enter User Name'; }"
                        onfocus="if(this.value =='Enter User Name') { this.value= ''; }">
                    <input type="text" value="Type Here Password"
                        onblur="if(this.value == '') { this.value='Type Here Password'; }"
                        onfocus="if(this.value
                            =='Type Here Password') { this.value= ''; }">
                    <input type="submit" value="Login Now" class="ritekhela-bgcolor">
                    <a href="#" class="loginmodalbox-forget">Forget
                        Password?</a>
                </form>
                <div class="ritekhela-loginbox-social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i>
                                Facebook</a></li>
                        <li class="twitter"><a href="#"><i
                                    class="fab
                                        fa-twitter"></i> Twitter</a>
                        </li>
                        <li class="linkedin"><a href="#"><i
                                    class="fab
                                        fa-linkedin-in"></i>
                                Linkedin</a></li>
                        <li class="dribbble"><a href="#"><i
                                    class="fab
                                        fa-dribbble"></i>
                                Dribbble</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--// Login ModalBox //-->
<div class="loginmodalbox modal fade" id="ritekhelamodalrg" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body ritekhela-bgcolor-two">
                <h5 class="modal-title">Sign Up Now</h5>
                <a href="#" class="close ritekhela-bgcolor-two" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </a>
                <form class="loginmodalbox-search">
                    <input type="text" value="Enter User Name"
                        onblur="if(this.value == '') { this.value='Enter User Name'; }"
                        onfocus="if(this.value =='Enter User Name') { this.value= ''; }">
                    <input type="text" value="Type Your Password"
                        onblur="if(this.value == '') { this.value='Type Your Password'; }"
                        onfocus="if(this.value
                            =='Type Your Password') { this.value= ''; }">
                    <input type="text" value="Confirm your password"
                        onblur="if(this.value == '') { this.value='Confirm your password'; }"
                        onfocus="if(this.value
                            =='Confirm your password') { this.value= ''; }">
                    <input type="submit" value="Sign Up" class="ritekhela-bgcolor">
                    <a href="#" class="loginmodalbox-forget">Forget
                        Password?</a>
                </form>
                <div class="ritekhela-loginbox-social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i>
                                Facebook</a></li>
                        <li class="twitter"><a href="#"><i
                                    class="fab
                                        fa-twitter"></i> Twitter</a>
                        </li>
                        <li class="linkedin"><a href="#"><i
                                    class="fab
                                        fa-linkedin-in"></i>
                                Linkedin</a></li>
                        <li class="dribbble"><a href="#"><i
                                    class="fab
                                        fa-dribbble"></i>
                                Dribbble</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--// Search ModalBox //-->
<div class="loginmodalbox modal fade" id="ritekhelamodalsearch" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body ritekhela-bgcolor-two">
                <h5 class="modal-title">Search Here</h5>
                <a href="#" class="close ritekhela-bgcolor-two" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </a>
                <form>
                    <input type="text" placeholder="Search Here Now"
                        onblur="if(this.value == '') { this.placeholder='Search Here Now'; }"
                        onfocus="if(this.placeholder =='Search Here Now') { this.value= ''; }">
                    <input type="submit" value="Search Now" class="ritekhela-bgcolor">
                </form>
            </div>
        </div>
    </div>
</div>
