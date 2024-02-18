<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5M9G17JZP4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5M9G17JZP4');
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />

    <title>
        {{$res->title}}

    </title>

    <title>
        {!! Str::limit($res->title, 30, ' ...') !!}

    </title>

    <link rel="canonical" href="https://www.isportindia.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
    <meta name="Author" content="isportindia" />
    <meta property="og:locale" content="en_US" />
    <meta name="og:title" content="{!! Str::limit($res->title, 40, ' ...') !!}" />

    <meta name="robots" content="Follow, Index" />
    <meta property="og:title" content="{!! Str::limit($res->title, 50, ' ...') !!}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="isportindia" />
    <meta property="og:image" content="{{ getImageUrl($res->img) }}" />
    <meta property="og:image:alt" content="no image" />
    <meta property="og:image:width" content="640" />
    <meta property="og:image:height" content="400" />
    <meta property="og:image" content="{{ getImageUrl($res->img) }}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:description" content="{!! Str::limit($res->short_description, 40, ' ...') !!}" />


    <meta name="next-head-count" content="5" />

    <meta name="next-head-count" content="5" />
    <style>
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            width: 100% !important;
            overflow-x: scroll !important;
        }

        @media (max-width: 600px) {
            .style_commonContent__Aq_YG table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            .style_commonContent__Aq_YG p {
                font-size: 14px;
            }
        }
    </style>
    @include('layout.css')
    @yield('style')
</head>

<body id="body" data-mode="light">

    <div id="__next" data-reactroot="">

        @include('layout.header')

        <section class="style_articleBlockSec__Eg4q3 common-section false">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-start">
                    <div class="col-lg-8 col-md-11 left-content">
                        <section class="style_articleBlock__7galq common-box position-relative overflow-hidden">
                            <div class="d-flex flex-wrap flex-md-nowrap align-items-start justify-content-between false">
                                <nav aria-label="breadcrumb" class="style_breadcrumb__lfaU_ text-capitalize">
                                    <ol class="breadcrumb">
                                        <li class="style_item__p9Ik3 mb-1"><a href="/">Home</a></li>
                                    </ol>
                                </nav>
                                <p class="text-danger style_liveUpdate___7DmX mb-0">
                                    <span class="style_liveIcon__nYZ5O"></span>Live
                                </p>
                            </div>
                            <article>
                                <h1 class="style_title__1dJo7">
                                    {{ $res->title }}
                                </h1>
                                <h2 class="style_subTitle___67cW small-head mb-2 mb-md-3 pt-2 pt-md-3">
                                    {{$res->short_description}}
                                </h2>
                                <div class="undefined d-flex flex-wrap align-items-start mb-2 mb-md-3">
                                    <div class="style_author__Kem0w font-semi">
                                        <div class="undefined pe-2 my-1 mb-md-2 mt-md-0"><a class="text-capitalize " href="/author/ctstaff/"><span class="text-muted">By </span>{{ $res->user->name
                                        }} <span class="style_verfied__NQDlI d-inline-block rounded-circle align-text-top"></span></a>
                                        </div>
                                        <p class="undefined w-100 xsmall-text font-semi mb-0"><time class="op-published d-none d-md-inline-block" datetime="2023-06-14T09:30:18.000Z">Published - {{
                                        Carbon\Carbon::parse($res->created_at)->format('M d, Y H:m') }} IST
                                                |&nbsp;</time><time class="op-modified" datetime="2023-06-14T16:12:22.650Z">Updated - {{
                                        Carbon\Carbon::parse($res->updated_at)->format('M d, Y H:m') }}
                                                IST</time></p>
                                    </div>
                                    <div class="ms-auto">
                                        <p class="style_views__04sMk d-flex align-items-center mb-1"><span class="style_iconOuter__jQd_D"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="view-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon id="Path-5" fill="#21CB00" points="12.296317 11.7509766 14.5676618 15.8931362 4.28571429 19.6648996 10.4598214 15 6.75209263 11.7509766 16.4330357 6.85714286">
                                                        </polygon>
                                                        <polyline id="Path-6" stroke="#21CB00" stroke-width="1.71428571" points="10.4330357 4.28571429 19.0044643 4.28571429 19.0044643 12.8571429">
                                                        </polyline>
                                                    </g>
                                                </svg></span> View : {{$res->views}}</p>

                                        <p class="style_views__04sMk style_duration__EM9F7 mb-0 d-flex align-items-center">
                                            <span class="style_iconOuter__jQd_D"><svg width="14px" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="clock-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Group" transform="translate(0.200000, 0.200000)" fill="#757A82" fill-rule="nonzero">
                                                            <path d="M6.7875,0.96 C3.5675,0.96 0.96,3.57333333 0.96,6.79333333 C0.96,10.0133333 3.5675,12.6266667 6.7875,12.6266667 C10.0133333,12.6266667 12.6266667,10.0133333 12.6266667,6.79333333 C12.6266667,3.57333333 10.0133333,0.96 6.7875,0.96 Z M6.79333333,11.46 C4.215,11.46 2.12666667,9.37166667 2.12666667,6.79333333 C2.12666667,4.215 4.215,2.12666667 6.79333333,2.12666667 C9.37166667,2.12666667 11.46,4.215 11.46,6.79333333 C11.46,9.37166667 9.37166667,11.46 6.79333333,11.46 Z" id="Shape"></path>
                                                            <polygon id="Path" points="7.125 3.91666667 6.25 3.91666667 6.25 7.41666667 9.3125 9.25416667 9.75 8.53666667 7.125 6.97916667">
                                                            </polygon>
                                                        </g>
                                                    </g>
                                                </svg></span>{{$res->min}} Min Read
                                        </p>
                                    </div>
                                </div>
                                <figure class="op-tracker mb-0 order-2 order-md-1">
                                    <div class="style_postImg__QxVUm position-relative overflow-hidden"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 62.5% 0px 0px;"></span><img fetchpriority="high" alt="Lanka Premier League" sizes="(max-width: 767px) 240px, (max-width: 991px) 320px, (max-width: 1190px) 360px, (max-width: 1400px) 700px, (max-width: 1920px) 800px" src="{{ getImageUrl($res->img) }}" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>

                                        {{-- <div class="style_captionBlock__4sWuT">
                                    <div class="style_icon__aSBC0 rounded-circle overflow-hidden"><span
                                            style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span
                                                style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img
                                                alt="info" src="/_next/static/media/info-icon.bac5163c.svg"
                                                decoding="async" data-nimg="responsive" sizes="100vw"
                                                srcset="/_next/static/media/info-icon.bac5163c.svg 450w, /_next/static/media/info-icon.bac5163c.svg 992w, /_next/static/media/info-icon.bac5163c.svg 1200w, /_next/static/media/info-icon.bac5163c.svg 1900w"
                                                style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                                    </div>
                                    <div class="style_caption__3gJa4 xsmall-text d-inline-block">Lanka Premier
                                        League. (Photo Source: Twitter)</div>
                                </div> --}}
                                    </div>
                                </figure>
                                <div class="style_articleActionsMob__dRhgP text-center">
                                    <div class="style_shareList__84nbJ d-flex align-items-start justify-content-center mb-2 mb-md-3">
                                        <button type="button" class="like_add style_item__2FXS3 undefined   d-flex justify-content-center align-items-center position-relative btn btn-link"><span class="style_icon__hy_xe d-block">
                                                <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img alt="clap" sizes="100vw" srcset="/_next/static/media/clap-theme-icon.e7c59412.svg 450w, /_next/static/media/clap-theme-icon.e7c59412.svg 992w, /_next/static/media/clap-theme-icon.e7c59412.svg 1200w, /_next/static/media/clap-theme-icon.e7c59412.svg 1900w" src="/_next/static/media/clap-theme-icon.e7c59412.svg" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span>
                                            <span class="ms-2 likes">{{$res->likes}}</span>
                                            <span class="style_currentClap__T63UC d-block text-center bg-secondary rounded-circle"></span></button>
                                    </div>
                                </div>

                                <div class="style_commonContent__Aq_YG  ">
                                    <div class="undefined text-break" id="content">
                                        {!! $res->description !!}
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                    <div class="col-xxl-3 col-lg-4 common-sidebar">
                        <section class="widget">
                            <div class="widget-title">
                                <h3 class="small-head d-flex align-items-center text-uppercase mb-0"><span class="icon me-1"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img alt="winner" sizes="100vw" srcset="/_next/static/media/cup-dark-icon.133e379b.svg 450w, /_next/static/media/cup-dark-icon.133e379b.svg 992w, /_next/static/media/cup-dark-icon.133e379b.svg 1200w, /_next/static/media/cup-dark-icon.133e379b.svg 1900w" src="/_next/static/media/cup-dark-icon.133e379b.svg" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span><span>Current
                                        Series</span></h3>
                            </div>
                            <div class="font-semi">
                                @foreach (getSeasons() as $val)
                                <a class="cs-item common-box d-block overflow-hidden text-nowrap mb-2" href="{{ route('season.details',$val['cid']) }}">{{$val['title']}}</a>
                                @endforeach
                            </div>
                        </section>
                        <div class="style_cricSpecial__YjEar cric-special widget p-3">
                            <h3 class="small-head d-flex align-items-center text-uppercase justify-content-center justify-content-md-start">
                                <span class="style_icon__5WxUf me-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img alt="winner" sizes="100vw" srcset="/_next/static/media/star-fill-icon.b0baf1fe.svg 450w, /_next/static/media/star-fill-icon.b0baf1fe.svg 992w, /_next/static/media/star-fill-icon.b0baf1fe.svg 1200w, /_next/static/media/star-fill-icon.b0baf1fe.svg 1900w" src="/_next/static/media/star-fill-icon.b0baf1fe.svg" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></span><span>CricSpecial</span>
                            </h3>
                            <div class="style_slider__UbtNO   process-arrow position-relative">
                                @include('layout.cric_special')
                            </div>
                        </div>
                        <div class="trendingNews trending-news widget">
                            <h3 class="widget-title small-head d-flex align-items-center text-uppercase justify-content-center justify-content-md-start">
                                <span class="icon me-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9398 9.41527C16.9657 10.2702 18.0184 11.1473 18.5481 12.5281C19.5284 14.8807 18.8632 17.5845 17.0428 19.2787C15.3886 20.7974 13.0869 21.1924 10.9601 20.9203C9.47228 20.7271 5.33258 19.2173 5 14.3014C5 12.0804 5.60389 10.6056 6.19903 9.69269C6.45284 9.31522 7.04797 9.53468 6.99546 9.99116C6.85543 11.2289 7.02172 12.9583 8.60583 14.1609C8.94716 14.4243 9.41977 14.0468 9.26223 13.643C7.34554 8.70951 9.62982 4.94358 12.8068 3.065C13.1394 2.8631 13.5507 3.16156 13.4632 3.54781C12.7372 6.74654 14.3046 8.05264 15.9398 9.41527ZM12.5092 14.9158C12.3342 15.7235 11.6865 16.6364 10.4263 16.9437C12.9643 19.0329 15.3624 17.128 15.2924 14.9071C15.2924 13.9488 14.5556 13.2092 13.8263 12.4771C13.1927 11.8411 12.5647 11.2108 12.4305 10.4476C11.9797 11.6221 12.1915 12.532 12.3794 13.3394C12.5089 13.8959 12.6271 14.4037 12.5092 14.9158Z" fill="#0e3778"></path>
                                    </svg></span>Trending News
                            </h3>
                            <div class="trendingList">
                                @include('layout.news')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        @include('layout.footer')

    </div>

    <div class="fade offcanvas-backdrop hide"></div>

    @include('layout.sidebar')

    <ul class="fixed false mobileMenu d-flex d-md-none text-center text-uppercase font-semi mb-0">
        <li><a class="active" href="/"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g id="home-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon id="Path" fill="#212121" fill-rule="nonzero" points="10 20.5 10 14.5 14 14.5 14 20.5 19 20.5 19 12.5 22 12.5 12 3.5 2 12.5 5 12.5 5 20.5"></polygon>
                    </g>
                </svg>Home </a></li>
        <li><a class="false" href="{{route('fixture')}}"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g id="schedule-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" fill-opacity="0.87">
                        <path d="M15.727914,16.342 L19.970514,20.5846 L18.556314,21.9988 L14.313714,17.7562 L15.727914,16.342 Z M5.1225,4.32 C5.5125,3.93 6.1425,3.93 6.5325,4.32 L6.5325,4.32 L15.0225,12.81 C15.4125,13.2 15.4125,13.83 15.0225,14.22 L15.0225,14.22 L12.1925,17.05 C11.8025,17.44 11.1725,17.44 10.7825,17.05 L10.7825,17.05 L2.2925,8.56 C1.9025,8.17 1.9025,7.54 2.2925,7.15 L2.2925,7.15 Z M18.4725,2 C20.4054966,2 21.9725,3.56700338 21.9725,5.5 C21.9725,7.43299662 20.4054966,9 18.4725,9 C16.5395034,9 14.9725,7.43299662 14.9725,5.5 C14.9725,3.56700338 16.5395034,2 18.4725,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
                    </g>
                </svg>Schedule</a></li>
        <li><a class="false" href="{{route('fantasypreview')}}"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g id="fantasy-tips-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path d="M10.1111111,21 L13.6666667,21 C13.6666667,22 12.8666667,22.8181818 11.8888889,22.8181818 C10.9111111,22.8181818 10.1111111,22 10.1111111,21 Z M8.11111111,19.8181818 L15.2222222,19.8181818 L15.2222222,18 L8.11111111,18 L8.11111111,19.8181818 Z M18.4444444,11.8181818 C18.4444444,15.2909091 16.08,17.1454545 15.0933333,17.7272727 L8.46222222,17.7272727 C7.47555556,17.1454545 5.11111111,15.2909091 5.11111111,11.8181818 C5.11111111,8.05454545 8.09777778,5 11.7777778,5 C15.4577778,5 18.4444444,8.05454545 18.4444444,11.8181818 Z M19.7733333,9.7 L18.5555556,10.2727273 L19.7733333,10.8454545 L20.3333333,12.0909091 L20.8933333,10.8454545 L22.1111111,10.2727273 L20.8933333,9.7 L20.3333333,8.45454545 L19.7733333,9.7 Z M4.66666667,7.45454545 L5.50222222,5.58181818 L7.33333333,4.72727273 L5.50222222,3.87272727 L4.66666667,2 L3.83111111,3.87272727 L2,4.72727273 L3.83111111,5.58181818 L4.66666667,7.45454545 Z" id="Shape" fill="#0E3778" fill-rule="nonzero"></path>
                    </g>
                </svg>Fantasy Tips</a></li>
        <li><a class="false" href="{{route('newslist')}}"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g id="cup-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path d="M19,5 L17,5 L17,3 L7,3 L7,5 L5,5 C3.9,5 3,5.9 3,7 L3,8 C3,10.55 4.92,12.63 7.39,12.94 C8.02,14.44 9.37,15.57 11,15.9 L11,19 L7,19 L7,21 L17,21 L17,19 L13,19 L13,15.9 C14.63,15.57 15.98,14.44 16.61,12.94 C19.08,12.63 21,10.55 21,8 L21,7 C21,5.9 20.1,5 19,5 Z M5,8 L5,7 L7,7 L7,10.82 C5.84,10.4 5,9.3 5,8 Z M19,8 C19,9.3 18.16,10.4 17,10.82 L17,7 L19,7 L19,8 Z" id="Shape" fill="#0E3778" fill-rule="nonzero"></path>
                    </g>
                </svg>News</a></li>
        <li><button onclick="toggleSideMenu()" title="More" type="button" class="w-100 btn btn-link"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g id="menu-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="ic_search" fill-rule="nonzero">
                            <rect id="ViewBox" x="0" y="0" width="32" height="32"></rect>
                        </g>
                        <g id="Group">
                            <rect id="Rectangle" fill-opacity="0" fill="#D8D8D8" x="0" y="0" width="32" height="32"></rect>
                            <path d="M27,20.8 L25.7150442,24 L5,24 L6.28495575,20.8 L27,20.8 Z M27,14.4 L27,17.6 L5,17.6 L5,14.4 L27,14.4 Z M27,8 L25.7150442,11.2 L5,11.2 L6.28495575,8 L27,8 Z" id="Shape" fill="#FFFFFF"></path>
                        </g>
                    </g>
                </svg>More</button></li>
    </ul>
    @include('layout.script')
    <script>
        $('.like_add').click(function() {
            $.ajax({
                type: "post",
                url: "{{ route('likes.add') }}",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': "{{ $res->id }}",
                    'type': 'cricspecial'
                },
                dataType: "json",
                success: function(response) {
                    $('.likes').text(response)
                }
            });
        });
    </script>
</body>

</html>