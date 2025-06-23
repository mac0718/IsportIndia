@extends('layout.main')
@section('title')
{!! 'Career with iSportIndia' !!}
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
<div class="container">


    <section class="page-header_pageHeader__zpOCm common-box mt-20 light-bg p-3 p-sm-4 br-lg position-relative">
        <div class="d-flex align-items-start justify-content-between">
            <nav aria-label="breadcrumb" class="style_breadcrumb__mf4ER text-capitalize">
                <ol class="breadcrumb d-block mb-2">
                    <li class="style_item__zcYDx d-inline mb-1"><a href="/">Home</a></li>
                    <li class="breadcrumb-item style_item__zcYDx style_active__yLmuP mb-1 d-inline ps-2 active" aria-current="page">careers</li>
                </ol>
            </nav>
        </div>
        <div class="justify-content-between row">
            <div class="col-lg-6">
                <h1 class="d-flex align-items-center flex-wrap">Join Our Team</h1>
            </div>
            <div class="mt-2 mt-lg-0 col-lg-auto">
                <div class="undefined px-3 py-2 mb-3 d-flex align-items-center rounded-pill bg-info">
                    <div class="me-1"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g id="mail-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M20,4 L4,4 C2.9,4 2.01,4.9 2.01,6 L2,18 C2,19.1 2.9,20 4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 Z M20,8 L12,13 L4,8 L4,6 L12,11 L20,6 L20,8 Z" id="Shape" fill="#045DE9" fill-rule="nonzero"></path>
                            </g>
                        </svg></div>
                    <p class="mb-0">career@iSportIndia.com</p><a href="mailto:career@iSportIndia.com" class="text-primary fw-bold ms-auto">Apply</a>
                </div>
                <div class="reverse_svg_color style_socialbox__0sm9N d-flex align-items-center justify-content-center justify-content-sm-between border border-secondary rounded-pill">
                    <p class="mb-0 me-3 d-none d-sm-block p-2 ">Get all the updates</p>
                    <ul class="undefined d-flex align-items-center mb-0 mx-n1">
                        <li class="mx-1"><a target="_blank" href="https://www.facebook.com/iSportIndia/"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="fackbook-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="facebook" fill="#F2F4F7">
                                            <path d="M15.8861593,0 C24.6598428,0 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 0,24.6598428 0,15.8861593 C0,7.11247578 7.11247578,0 15.8861593,0 Z M16.823269,8.528 C13.8677161,8.528 13.1961504,10.5692278 13.1961504,11.872781 L13.1961504,11.872781 L13.1961504,13.6956571 L11.4863009,13.6956571 L11.4863009,16.5125908 L13.1961504,16.5125908 L13.1961504,24.528 L16.7912671,24.528 L16.7912671,16.5125908 L19.1641485,16.5125908 L19.4782411,13.6982799 L16.7915042,13.6982799 L16.7915042,12.0404244 C16.7915042,11.4185919 17.2371602,11.272587 17.5540975,11.272587 L17.5540975,11.272587 L19.4863009,11.272587 L19.4863009,8.5382728 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li class="mx-1"><a target="_blank" href="https://twitter.com/Cricketracker"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_202_150)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16345 0 0 7.16345 0 16C0 24.8366 7.16345 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16345 24.8366 0 16 0ZM13.8597 17.1118L6.44681 7.2H12.1601L17.0198 13.698L23.0346 7.2H24.7134L17.77 14.7011L25.6 25.1704H19.8867L14.6098 18.115L8.07888 25.1704H6.4L13.8597 17.1118ZM11.5404 8.43664H8.91576L20.506 23.9336H23.1307L11.5404 8.43664Z" fill="#F2F4F7"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_202_150">
                                            <rect width="32" height="32" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></li>
                        <li class="mx-1"><a target="_blank" href="https://www.instagram.com/iSportIndia/"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="instagram-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="instagram" fill="#F2F4F7" fill-rule="nonzero">
                                            <path d="M15.9569778,3.2471803e-13 C24.7694222,3.2471803e-13 31.9139556,7.14453333 31.9139556,15.9569778 C31.9139556,24.7694222 24.7694222,31.9139556 15.9569778,31.9139556 C7.14453333,31.9139556 -5.32907052e-15,24.7694222 -5.32907052e-15,15.9569778 C-5.32907052e-15,7.14453333 7.14453333,3.2471803e-13 15.9569778,3.2471803e-13 Z M20.7128889,6.40142222 L11.2010667,6.40142222 C8.60301261,6.40142222 6.47619304,8.45802412 6.36312759,11.0287083 L6.3584,11.2440889 L6.3584,20.7559111 C6.3584,23.3543111 8.4150019,25.4808034 10.985686,25.5938509 L11.2010667,25.5985778 L20.7128889,25.5985778 C23.3112889,25.5985778 25.4377812,23.5423125 25.5508287,20.971319 L25.5555556,20.7559111 L25.5555556,11.2440889 C25.5555556,8.57386667 23.3834667,6.40142222 20.7128889,6.40142222 Z M11.2010667,8.49066667 L20.7128889,8.49066667 C22.175223,8.49066667 23.3747816,9.63606475 23.4616319,11.0766106 L23.4666667,11.2440889 L23.4666667,20.7559111 C23.4666667,22.2182453 22.3209389,23.4178039 20.8803686,23.5046541 L20.7128889,23.5096889 L11.2010667,23.5096889 C9.7390749,23.5096889 8.53952897,22.3639611 8.4526792,20.9233908 L8.44764444,20.7559111 L8.44764444,11.2440889 C8.44764444,9.78209712 9.59304252,8.5825512 11.0335884,8.49570142 L11.2010667,8.49066667 L20.7128889,8.49066667 Z M15.9569778,11.056 C13.2309333,11.056 11.0129778,13.2739556 11.0129778,16 C11.0129778,18.7264 13.2309333,20.9443556 15.9569778,20.9443556 C18.6830222,20.9443556 20.9013333,18.7260444 20.9013333,16 C20.9013333,13.2739556 18.6833778,11.056 15.9569778,11.056 Z M15.9569778,13.1452444 C17.5310222,13.1452444 18.8117333,14.4263111 18.8117333,15.9996444 C18.8117333,17.5740444 17.5313778,18.8551111 15.9569778,18.8551111 C14.3832889,18.8551111 13.1018667,17.5740444 13.1018667,15.9996444 C13.1018667,14.4259556 14.3832889,13.1452444 15.9569778,13.1452444 Z M21.0602667,9.73866667 C20.4149333,9.73866667 19.8901333,10.2634667 19.8901333,10.9084444 C19.8901333,11.5534222 20.4149333,12.0782222 21.0602667,12.0782222 C21.7052444,12.0782222 22.2300444,11.5534222 22.2300444,10.9084444 C22.2300444,10.2634667 21.7052444,9.73866667 21.0602667,9.73866667 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li class="mx-1"><a target="_blank" href="https://www.linkedin.com/company/iSportIndia/ "><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="linkedin-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Google" fill="#F2F4F7" fill-rule="nonzero">
                                            <path d="M15.8861593,-5.14077669e-12 C24.6598428,-5.14077669e-12 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 1.58060232e-11,24.6598428 1.58060232e-11,15.8861593 C1.58060232e-11,7.11247578 7.11247578,-5.14077669e-12 15.8861593,-5.14077669e-12 Z M20.026,13.0493333 C18.4126667,13.0493333 17.33,13.9346667 16.888,14.774 L16.888,14.774 L16.8413333,14.774 L16.8413333,13.3173333 L13.6593333,13.3173333 L13.6593333,23.9993333 L16.9726667,23.9993333 L16.9726667,18.71 L16.9737314,18.561021 C16.9933869,17.2228605 17.2982619,15.9706667 18.9613333,15.9706667 C20.6606667,15.9706667 20.686,17.56 20.686,18.7993333 L20.686,18.7993333 L20.686,24 L24,23.9993333 L24,18.1313333 L23.9989204,17.927428 C23.9690193,15.1566187 23.3020952,13.0493333 20.026,13.0493333 Z M11.5813333,13.318 L8.264,13.318 L8.264,24 L11.5813333,24 L11.5813333,13.318 Z M9.92133333,8 C8.86066667,8 8,8.86066667 8,9.92133333 C8,10.982 8.86066667,11.8606667 9.92133333,11.8606667 C10.982,11.8606667 11.8426667,10.982 11.8426667,9.92133333 C11.842,8.86066667 10.9813333,8 9.92133333,8 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li class="mx-1"><a target="_blank" href="https://www.youtube.com/c/iSportIndia"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="youtube-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M15.8861593,-3.93285404e-12 C24.6598428,-3.93285404e-12 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 2.44781972e-12,24.6598428 2.44781972e-12,15.8861593 C2.44781972e-12,7.11247578 7.11247578,-3.93285404e-12 15.8861593,-3.93285404e-12 Z M16.8277862,9.60025513 L16.0028153,9.60014684 C13.8036103,9.59890281 11.5942314,9.60014684 9.41174073,9.83846686 C8.49063629,9.93923304 7.72559273,10.6147397 7.51012333,11.5303435 C7.23752648,12.6893817 7.20451053,13.9427817 7.20053905,15.1498745 L7.2,15.6000889 C7.2,16.9425717 7.2,18.3657385 7.50667146,19.6694788 C7.72177751,20.5849049 8.48700274,21.2604116 9.40865222,21.3613555 C11.3181726,21.570041 13.2482793,21.5970791 15.1742652,21.5997446 L15.9993635,21.5998532 C18.1989318,21.6010972 20.407584,21.5998532 22.5897113,21.3613555 C23.5108158,21.2605893 24.276586,20.5850826 24.4920554,19.6694788 C24.7648138,18.5104406 24.7959821,17.2571811 24.799541,16.0502443 L24.7999993,15.6000889 C24.7999993,14.2576061 24.8025421,12.8342615 24.4958707,11.5303435 C24.2804013,10.6147397 23.5148127,9.93923304 22.5931632,9.83846686 C20.6834839,9.62993684 18.7534964,9.60291813 16.8277862,9.60025513 Z M13.7287592,12.5787028 C15.5940412,13.5307389 17.446969,14.4763771 19.32406,15.4342779 L13.7287592,18.2722588 L13.7287592,18.2722588 L13.7287592,12.5787028 L13.7287592,12.5787028 Z" id="Combined-Shape" fill="#F2F4F7"></path>
                                    </g>
                                </svg></a></li>
                        <li><a href="https://www.threads.net/@iSportIndia" target="_blank" rel="noreferrer"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_118_146)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32ZM20.6738 14.7685C20.7654 14.8078 20.8558 14.8488 20.9448 14.8913C22.2029 15.4937 23.123 16.4056 23.6056 17.5285C24.2782 19.0943 24.3397 21.6449 22.2988 23.6797C20.7389 25.2351 18.8454 25.937 16.159 25.9556H16.1469C13.1253 25.9347 10.8018 24.9199 9.24081 22.9397C7.85177 21.1774 7.13526 18.7253 7.11119 15.6517L7.11111 15.6444L7.11119 15.6372C7.13526 12.5635 7.85177 10.1115 9.24081 8.34926C10.8018 6.36893 13.1253 5.35422 16.1469 5.33333H16.159C19.1868 5.35429 21.5366 6.36516 23.1433 8.33795C23.9361 9.31124 24.5187 10.4848 24.8889 11.8468L23.1511 12.3095C22.8456 11.203 22.3823 10.2541 21.7678 9.49945C20.5145 7.96067 18.6256 7.17121 16.153 7.15287C13.6981 7.17107 11.8416 7.95675 10.6345 9.48814C9.50419 10.9221 8.92002 12.9934 8.89823 15.6444C8.92002 18.2955 9.50419 20.3667 10.6345 21.8007C11.8416 23.3321 13.6982 24.1178 16.153 24.136C18.366 24.1197 19.8303 23.5943 21.0485 22.3797C22.4389 20.9933 22.413 19.2928 21.9683 18.2579C21.7068 17.6491 21.2332 17.1427 20.5943 16.7578C20.4386 17.9154 20.0862 18.834 19.5289 19.5429C18.7951 20.4764 17.7433 20.9869 16.4025 21.0602C15.3873 21.1156 14.4104 20.8712 13.652 20.3716C12.7549 19.7805 12.2299 18.8757 12.1737 17.824C12.063 15.7506 13.7111 14.2584 16.2748 14.111C17.1848 14.059 18.0361 14.1 18.8233 14.2335C18.7188 13.5956 18.5077 13.0902 18.1922 12.7245C17.7586 12.2221 17.0886 11.9645 16.2008 11.9588L16.1761 11.9587C15.4633 11.9587 14.4954 12.1578 13.8786 13.0917L12.3957 12.0764C13.2213 10.8262 14.5626 10.1392 16.1754 10.1392L16.212 10.1393C18.9084 10.1565 20.5143 11.8356 20.6738 14.7685ZM13.9581 17.7251C14.0157 18.8032 15.183 19.3065 16.3066 19.2433C17.4066 19.1831 18.6553 18.7523 18.8682 16.0991C18.2975 15.9746 17.6697 15.9095 16.9986 15.9095C16.7947 15.9095 16.5871 15.9155 16.3755 15.9277C14.5281 16.0339 13.9155 16.9258 13.9581 17.7251Z" fill="#F2F4F7"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_118_146">
                                            <rect width="32" height="32" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></li>
                        <li class="mx-1"><a target="_blank" href="https://bit.ly/3n0jQL6"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="telegram-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Google-Copy-2" fill="#F2F4F7">
                                            <path d="M15.8861593,0 C24.6598428,0 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 0,24.6598428 0,15.8861593 C0,7.11247578 7.11247578,0 15.8861593,0 Z M21.8035369,9.07980371 L5.83565346,15.1930222 C4.74587729,15.61602 4.76237769,16.2235169 5.65039901,16.4987655 L9.73274705,17.768509 L19.2152248,11.8352895 C19.6614855,11.539791 20.0672452,11.7032902 19.7334872,11.9987887 L12.063053,18.8860032 L11.7652959,23.0739816 C12.1913061,23.0739816 12.3758105,22.8909826 12.5970658,22.6712337 L14.5943638,20.7624935 L18.7329632,23.7932279 C19.4919814,24.2162258 20.0267443,23.9934769 20.2314992,23.0949815 L22.9480644,10.3660471 L22.9488144,10.3652971 C23.1895702,9.24330287 22.5430547,8.80455513 21.8035369,9.07980371 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-md-9">
            <section class="mt-2">
                <div class="style_commonNav__Mds9z d-sm-inline-flex text-uppercase nav nav-pills">
                    <div class="style_item__9KqZl nav-item"><a class="style_active__7Ye5K nav-link" href="/careers/#">Current Jobs</a></div>
                </div>
                <div class="undefined row">
                    <div id="6518195bf525abc58a956eb2" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/human-resources-head/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-team-icon.c59255c2.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Head - Human Resource</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 2 - 4 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 1</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                    <div id="64f3416a6a0a40376f33cbcb" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/business-development-executive/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Business Development Executive</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 3 - 4 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 2</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                    <div id="64be42ef369271e3a9b97746" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/social-media-manager/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Social Media Manager</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 2 - 4 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 5</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                    <div id="648592fdf6a0cc52c6783181" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/graphic-designer/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Graphic Designer</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 1 - 3 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 10</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                    <div id="6481a7b3f6a0cc52c67820d5" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/chief-operating-officer/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Chief Operating Officer</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 5 - 6 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 1</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                    <div id="64815c64514e8fd8ddd8fc7a" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/seo-manager/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">SEO Manager</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 5 - 6 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 1</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                    <div id="64183fbefd45dcfcf610f3af" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/sales-executive/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Sales Manager</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 4 - 8 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Anywhere</p>
                            <p><span class="text-muted">Open Positions</span> 1</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1"></span></p>
                        </a></div>
                    <div id="641834f9fd45dcfcf610f322" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/anchor-reporter/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Anchor/Reporter</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 1 - 3 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 1</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                    <div id="641833016171c4e4d78649f1" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/animator/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Animation Artist</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 2 - 3 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 2</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                    <div id="641828ccfd45dcfcf610f2b6" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/digital-marketing-executive/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Digital Marketing Executive</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 2 - 3 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 5</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                    <div id="641824206171c4e4d7864903" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/content-writer/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Brands Manager</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 2 - 3 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 3</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                    <div id="64182223fd45dcfcf610f1f8" class="col-lg-4 col-sm-6 col-12 col"><a class="style_item__ngLZY common-box d-block" href="/careers/sales-admin/">
                            <div class="undefined d-flex align-items-center mb-4">
                                <div class="style_icon__ftwYs me-2"><img loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="d-block w-100 h-auto " src="https://www.iSportIndia.com/_next/static/media/seo-search-icon.b2936b18.svg" style="color: transparent;"></div>
                                <h3 class="small-head mb-0 font-semi">Sales Admin</h3>
                            </div>
                            <p><span class="text-muted">Exp.</span> 2 - 3 Years</p>
                            <p><span class="text-muted">Opening for</span> Work From Office</p>
                            <p><span class="text-muted">Open Positions</span> 1</p>
                            <p class="undefined mt-4"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="map-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M12,2 C8.13,2 5,5.13 5,9 C5,14.25 12,22 12,22 C12,22 19,14.25 19,9 C19,5.13 15.87,2 12,2 Z M12,11.5 C10.62,11.5 9.5,10.38 9.5,9 C9.5,7.62 10.62,6.5 12,6.5 C13.38,6.5 14.5,7.62 14.5,9 C14.5,10.38 13.38,11.5 12,11.5 Z" id="Shape" fill="#50555D" fill-rule="nonzero"></path>
                                    </g>
                                </svg><span class="font-semi ms-1">Bangalore</span></p>
                        </a></div>
                </div>
            </section>
        </div>
    </div>
</div>
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