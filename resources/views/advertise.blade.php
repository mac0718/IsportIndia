@extends('layout.main')
@section('title')
{!! 'Advertise with iSportIndia' !!}
@endsection

@section('meta_tags')
@php
$url = isset($res) ? url()->current() : 'https://isportindia.com/about';
$image = isset($res) ? getImageUrl($res->img) : 'https://isportindia.com/images/OG.jpg';
$description = isset($res) ? Str::limit($res->short_description, 40, ' ...') : 'Get cricket match updates (Domestic &amp;amp; International), team stats, series results, fixtures, latest news, top stories, match preview, predictions, review, results, fantasy tips, statistical highlights, videos and complete cricket analysis along with ICC Cricket player rankings on isportindia';
@endphp

<meta property="og:url" content="{{ $url }}" />
<meta property="og:image" content="{{ $image }}" />
<meta property="og:description" content="{!! $description !!}" />
@endsection

@section('content')
<section class="style_bannerSection__5Tu63">
    <div class="container">
        <div class="style_content__6S2ns py-5  d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-md-8">
                    <h1>Connect with more than 10 million unique users every month with iSportIndia.com</h1>
                    <p class="big-text mb-0">iSportIndia brings cricket lovers from around the world under one roof. We boast of an overwhelming reader base of young fans who like to follow all the updates of the game. Advertisers get a very specific audience that they want to cater to boost the value of their brand.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="style_bannerBottom__7fTZM py-3 py-md-5 text-center">
    <div class="container">
        <h3 class="mb-0">Following are the ways in which we can promote / create better awareness for your brand:</h3>
    </div>
</section>
<section class="undefined common-section">
    <div class="container">
        <h2 class="text-center mb-2">Marketing Solutions That Work</h2>
        <h4 class="text-center">A Medium Reaching Diverse Audiences in the Globe</h4>
        <ul class="style_list__vUK6b big-text mt-3 mt-md-5">
            <li>
                <h4>Standard Banner Ads on the website – desktop and mobile</h4>
            </li>
            <li>
                <h4>Interstitial Ads on the website – desktop and mobile</h4>
            </li>
            <li>
                <h4>Rich media ads</h4>
            </li>
            <li>
                <h4>Brand promotion on Social Media - Live Facebook videos, Brand powered by posts, Promotional posts</h4>
            </li>
            <li>
                <h4>Video promotion</h4>
            </li>
            <li>
                <h4>Brand integration on website content</h4>
            </li>
        </ul>
    </div>
</section>
<section class="common-section text-center bg-light">
    <div class="container">
        <h2>Our Team and Social Media Followers</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="common-box mt-2 mb-2">
                    <h2 class="mb-2 mt-2">150000+</h2>
                    <p class="big-text mb-2">POSTS</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="common-box mt-2 mb-2">
                    <h2 class="mb-2 mt-2">400+</h2>
                    <p class="big-text mb-2">AUTHORS</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="common-box mt-2 mb-2">
                    <h2 class="mb-2 mt-2">1000000+</h2>
                    <p class="big-text mb-2">PAGE VIEWS DAILY</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="common-box mt-2 mb-2">
                    <h2 class="mb-2 mt-2">15000000+</h2>
                    <p class="big-text mb-2">FOLLOWERS</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="common-section text-center">
    <div class="container">
        <h2>What makes us different from others</h2>
        <div class="justify-content-center row">
            <div class="col-md-4">
                <div class="style_item__ypD_4 common-box mt-2 mb-2">
                    <div class="style_person__UBTCn bg-light p-5 rounded-circle overflow-hidden mx-auto my-2"><img alt="visitors" loading="lazy" width="512" height="512" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fdata-visualization.db1fb52b.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fdata-visualization.db1fb52b.png&amp;w=1200&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fdata-visualization.db1fb52b.png&amp;w=1200&amp;q=75" style="color: transparent;"></div>
                    <h3 class="mb-2 mt-1">Unique Visitors</h3>
                    <p class="big-text mb-2">The iSportIndia website has an average monthly traffic of over 30 million page views with over 10 million unique visitors. Most of our readers also follow us on various Social Media platforms which drives a diverse audience to the platform from various major cricket-following nations. Organic traffic covers more than 50% of the website.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="style_item__ypD_4 common-box mt-2 mb-2">
                    <div class="style_person__UBTCn bg-light p-5 rounded-circle overflow-hidden mx-auto my-2"><img alt="target" loading="lazy" width="512" height="512" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Ftarget.51ad9d09.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Ftarget.51ad9d09.png&amp;w=1200&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Ftarget.51ad9d09.png&amp;w=1200&amp;q=75" style="color: transparent;"></div>
                    <h3 class="mb-2 mt-1">Targeted Audience</h3>
                    <p class="big-text mb-2">Cricket is one of the most popular sports and at times has a higher viewership than other popular sports. The iSportIndia audience can be easily classified. We give you an audience that has attracted the biggest of brands to pitch their brand around. With us the advertisers can reach out to their target audience – Cricket fans.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="style_item__ypD_4 common-box mt-2 mb-2">
                    <div class="style_person__UBTCn bg-light p-5 rounded-circle overflow-hidden mx-auto my-2"><img alt="logo" loading="lazy" width="512" height="512" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Ftarget-audience.52061130.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Ftarget-audience.52061130.png&amp;w=1200&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Ftarget-audience.52061130.png&amp;w=1200&amp;q=75" style="color: transparent;"></div>
                    <h3 class="mb-2 mt-1">Young Audience</h3>
                    <p class="big-text mb-2">This is the generation of the millennials and our audience is powered by the youth. The age group that is considered the most productive and valuable for all the various segments 18-44 years, the working class constitutes 96 % of our readers. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="common-section text-center bg-light">
    <div class="container">
        <h2>Monthly Traffic Stats</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="common-box mt-2 mb-2">
                    <h2 class="mb-2 mt-2">25 M+</h2>
                    <p class="big-text mb-2">Sessions</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="common-box mt-2 mb-2">
                    <h2 class="mb-2 mt-2">35 M+</h2>
                    <p class="big-text mb-2">Page Views</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="common-box mt-2 mb-2">
                    <h2 class="mb-2 mt-2">10 M+</h2>
                    <p class="big-text mb-2">Unique Visitors</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="common-section text-center">
    <div class="container">
        <h2>Our Clients &amp; Partners</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="700" height="600" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp1.b1e1a6c4.jpg&amp;w=768&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp1.b1e1a6c4.jpg&amp;w=1200&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp1.b1e1a6c4.jpg&amp;w=1200&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="290" height="291" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp2.a97d8889.png&amp;w=320&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp2.a97d8889.png&amp;w=768&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp2.a97d8889.png&amp;w=768&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="291" height="80" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp3.b091d289.png&amp;w=320&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp3.b091d289.png&amp;w=768&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp3.b091d289.png&amp;w=768&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="1170" height="1076" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp4.fd82f85b.jpg&amp;w=1200&amp;q=75 1x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp4.fd82f85b.jpg&amp;w=1200&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="225" height="225" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp5.0aeb93c6.png&amp;w=240&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp5.0aeb93c6.png&amp;w=520&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp5.0aeb93c6.png&amp;w=520&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="120" height="40" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp6.cbb84bee.png&amp;w=120&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp6.cbb84bee.png&amp;w=240&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp6.cbb84bee.png&amp;w=240&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="512" height="512" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp7.0aa5238f.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp7.0aa5238f.png&amp;w=1200&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp7.0aa5238f.png&amp;w=1200&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="1200" height="675" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp8.ae58ed40.png&amp;w=1200&amp;q=75 1x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp8.ae58ed40.png&amp;w=1200&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="400" height="300" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp9.2d0af6ac.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp9.2d0af6ac.png&amp;w=992&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp9.2d0af6ac.png&amp;w=992&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="400" height="400" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp10.fa0724ac.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp10.fa0724ac.png&amp;w=992&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp10.fa0724ac.png&amp;w=992&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="2700" height="1414" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp11.7801ce22.jpg&amp;w=1200&amp;q=75 1x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp11.7801ce22.jpg&amp;w=1200&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="200" height="70" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp12.5160d84f.png&amp;w=200&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp12.5160d84f.png&amp;w=520&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp12.5160d84f.png&amp;w=520&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="512" height="512" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp13.eb406e66.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp13.eb406e66.png&amp;w=1200&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp13.eb406e66.png&amp;w=1200&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="247" height="89" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp14.d29e0eb5.png&amp;w=280&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp14.d29e0eb5.png&amp;w=520&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp14.d29e0eb5.png&amp;w=520&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="250" height="250" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp15.aae0893d.png&amp;w=280&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp15.aae0893d.png&amp;w=520&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp15.aae0893d.png&amp;w=520&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="300" height="100" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp16.9930328b.jpg&amp;w=320&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp16.9930328b.jpg&amp;w=768&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp16.9930328b.jpg&amp;w=768&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="357" height="107" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp17.276e5111.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp17.276e5111.png&amp;w=768&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp17.276e5111.png&amp;w=768&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="1600" height="1600" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp18.38eb99c2.png&amp;w=1200&amp;q=75 1x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp18.38eb99c2.png&amp;w=1200&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="264" height="264" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp19.46936282.png&amp;w=280&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp19.46936282.png&amp;w=576&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fp19.46936282.png&amp;w=576&amp;q=75" style="color: transparent;"></div>
            </div>
        </div>
    </div>
</section>
<section class="common-section text-center bg-light">
    <div class="container">
        <h2>Our Advertisers</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="1200" height="1224" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises1.6d38c101.png&amp;w=1200&amp;q=75 1x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises1.6d38c101.png&amp;w=1200&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="379" height="132" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises2.b9b94f24.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises2.b9b94f24.png&amp;w=768&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises2.b9b94f24.png&amp;w=768&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="321" height="179" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises3.98514554.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises3.98514554.png&amp;w=768&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises3.98514554.png&amp;w=768&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="250" height="250" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises4.8ccb38c5.png&amp;w=280&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises4.8ccb38c5.png&amp;w=520&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises4.8ccb38c5.png&amp;w=520&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="1093" height="975" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises5.6082e8d1.jpg&amp;w=1200&amp;q=75 1x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises5.6082e8d1.jpg&amp;w=1200&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="740" height="291" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises6.c3d8b316.jpg&amp;w=768&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises6.c3d8b316.jpg&amp;w=1200&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises6.c3d8b316.jpg&amp;w=1200&amp;q=75" style="color: transparent;"></div>
            </div>
            <div class="style_slide__3bGMU common-box d-flex align-items-center justify-content-center m-1 m-sm-2">
                <div><img alt="logo" loading="lazy" width="338" height="149" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises7.62e15c5c.png&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises7.62e15c5c.png&amp;w=768&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fadvertises7.62e15c5c.png&amp;w=768&amp;q=75" style="color: transparent;"></div>
            </div>
        </div>
    </div>
</section>
<section class="style_ctaSection__fMkY_ py-3 py-md-4 text-center">
    <div class="container">
        <h3 class="mb-2">Awesome, I would like to start a Project Now.</h3>
        <p class="big-text mb-3">We are also experts at finding the sweet spot for you.</p><a class="theme-btn light-btn" href="/contact-us/">Contact</a>
    </div>
</section>


@endsection

@section('script')
<script>
    const tabclickHandler = (clickTab, tabs_root_id, active_class) => {
        $(`#${tabs_root_id} .${active_class}`).removeClass(`${active_class}`)
        clickTab.classList.add(active_class);
        let activeTabType = clickTab.getAttribute("tabtype")
        showRespectiveTabSection(tabs_root_id, activeTabType)
    }

    const showRespectiveTabSection = (tabs_root_id, activeTabType) => {
        $(`#${tabs_root_id} .tabs-data`).removeClass("show").addClass('hide');
        localStorage.setItem('news_type', activeTabType);
        $(`#${tabs_root_id} .${activeTabType}-data`).addClass("show")
    }
</script>

<script>
    var n_type = localStorage.getItem('news_type');

    if (n_type == null) {
        $('.Articles').click();
    } else {
        $('.' + n_type).click();
    }
</script>
@endsection