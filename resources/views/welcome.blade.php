
    @extends('layout.main')

    @section('title','Stem For Super Girls')


    @section('content')

    <!-- home-section
        ================================================== -->
    <section id="home-section">
    <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper" data-alias="concept1" style="background-color:#000000;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
        <div id="rev_slider_202_1" class="rev_slider" data-version="5.1.1RC">
            <ul>
                @include('layout.frontend_layout.frontend_slider')
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</section>
    <!-- End home section -->

    <!-- countdown-section
        ================================================== -->
    <section class="countdown-section">
        <div class="container">
            <div class="countdown-box">
                <h1>@if(isset($aboutmessage)) {{$aboutmessage->title}} @else {{'comming soon!'}} @endif</h1>
                <p>@if(isset($aboutmessage)) {{$aboutmessage->description}} @else {{'Comming soon!'}} @endif</p>
                <div class="countdown-item" data-date="2019/12/14">
                    <div class="countdown-col">
							<span class="countdown-unit countdown-days">
								<span class="number" id="days"></span>
								<span class="text">days</span>
							</span>
                    </div>
                    <div class="countdown-col">
							<span class="countdown-unit countdown-hours">
								<span class="number" id="hours"></span>
								<span class="text">hours</span>
							</span>
                    </div>
                    <div class="countdown-col">
							<span class="countdown-unit countdown-min">
								<span class="number" id="minutes"></span>
								<span class="text">minutes</span>
							</span>
                    </div>
                    <div class="countdown-col">
							<span class="countdown-unit countdown-sec">
								<span class="number" id="seconds"></span>
								<span class="text">seconds</span>
							</span>
                    </div>
                </div>
                @if(isset($aboutmessage))
                    <a class="button-two" target="_blank" href="{{$aboutmessage->link}}"> {{$aboutmessage->link_title}} </a>
                @else
                    <a class="button-two" href="#"> {{'comming soon'}} </a>
                @endif
            </div>
        </div>
    </section>
    <!-- End countdown section -->

    <!-- feature-section
    ================================================== -->
    <section class="feature-section">
        <div class="container">
            <div class="feature-box">
                <div class="row">
                    @foreach($whatwedos as $whatwedo)
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-post">
                            <div class="icon-holder">
                                <i class="{{$whatwedo->icon}}"></i>
                            </div>
                            <div class="feature-content">
                                <h2>
                                    {{$whatwedo->title}}
                                </h2>
                                <p>
                                    {{$whatwedo->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End feature section -->

    <section class="clients-section">
        <div class="container">
            <div class="clients-box">
                <h1>Our Partners</h1>
                <p>Sed vehicula consectetur rutrum</p>
                <ul class="clients-list d-flex justify-content-center">
                    @foreach($partners as $partner)
                    <li>
                        <img src="{{asset('storage/partners/'.$partner->image)}}" style="height: 200px; object-fit: contain;" alt="">
                        <a><span>{{$partner->name}}</span></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    @endsection

    @section('script')

        <script>
            var tpj=jQuery;
            var revapi202;
            tpj(document).ready(function() {
                if (tpj("#rev_slider_202_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_202_1");
                } else {
                    revapi202 = tpj("#rev_slider_202_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "js/",
                        dottedOverlay: "none",
                        delay: 5000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            arrows: {
                                enable: true,
                                style: 'gyges',
                                left: {
                                    container: 'slider',
                                    h_align: 'left',
                                    v_align: 'center',
                                    h_offset: 20,
                                    v_offset: -60
                                },

                                right: {
                                    container: 'slider',
                                    h_align: 'right',
                                    v_align: 'center',
                                    h_offset: 20,
                                    v_offset: -60
                                }
                            },
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 50,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            bullets: {

                                enable: false,
                                style: 'persephone',
                                tmp: '',
                                direction: 'horizontal',
                                rtl: false,

                                container: 'slider',
                                h_align: 'center',
                                v_align: 'bottom',
                                h_offset: 0,
                                v_offset: 55,
                                space: 7,

                                hide_onleave: false,
                                hide_onmobile: false,
                                hide_under: 0,
                                hide_over: 9999,
                                hide_delay: 200,
                                hide_delay_mobile: 1200
                            }
                        },
                        responsiveLevels: [1210, 1024, 778, 480],
                        visibilityLevels: [1210, 1024, 778, 480],
                        gridwidth: [1210, 1024, 778, 480],
                        gridheight: [700, 700, 600, 600],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "slidercenter",
                            speed: 1000,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                            type: "scroll",
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "0px",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            }); /*ready*/
        </script>
    @endsection




