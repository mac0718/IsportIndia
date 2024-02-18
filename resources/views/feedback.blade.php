@extends('layout.main')
@section('title')
{!! 'Feedback iSportIndia' !!}
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
<section class="style_bannerSection__FLIcb">
    <div class="container">
        <div class="undefined">
            <h1 class="mb-2 font-semi" style="padding: 50px 0;">Feedback</h1>
        </div>
    </div>
</section>
<section class="style_formBlock__NJWVF">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-lg-8">
                <div class="common-box">
                    <form autocomplete="off" class="m-2 m-md-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sName">Full Name*</label><input name="sName" type="text" id="sName" class="form_formControl__9cVu5 undefined style_formControl__MEbVv form-control"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sEmail">Email Address*</label><input name="sEmail" type="text" id="sEmail" class="form_formControl__9cVu5 undefined style_formControl__MEbVv form-control"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sPhone">Phone Number</label><input name="sPhone" type="number" id="sPhone" class="form_formControl__9cVu5 undefined style_formControl__MEbVv form-control"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="query">Category*</label>
                                    <div class="dropdown">
                                        <div class="style_selectContainer__4z_ou position-relative"><input placeholder="Select Feedback" readonly="" id="query" class="style_formControl__yKKc1 style_formSelect__qeNdb     undefined br-sm style_formControl__MEbVv form-control"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sSubject">Subject*</label><input name="sSubject" type="text" id="sSubject" class="form_formControl__9cVu5 undefined style_formControl__MEbVv form-control"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sPageLink">Page Link</label><input name="sPageLink" type="text" id="sPageLink" class="form_formControl__9cVu5 undefined style_formControl__MEbVv form-control"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form_formGroup__0HgVp"><label class="form_label__2YdED form-label" for="sMessage">Message*</label><textarea name="sMessage" id="sMessage" class="form_formControl__9cVu5 form_formTextarea__37KR6 undefined style_formControl__MEbVv form-control"></textarea></div>
                            </div>
                        </div><button type="submit" class="theme-btn btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4">
                <div class="common-box">
                    <h4 class="text-uppercase">Contact Information</h4>
                    <div class="style_contactInfo__CC6uX mb-3">
                        <p class="d-flex"><span class="d-block me-2"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="mail-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M20,4 L4,4 C2.9,4 2.01,4.9 2.01,6 L2,18 C2,19.1 2.9,20 4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 Z M20,8 L12,13 L4,8 L4,6 L12,11 L20,6 L20,8 Z" id="Shape" fill="#045DE9" fill-rule="nonzero"></path>
                                    </g>
                                </svg></span><a href="mailto:contact@iSportIndia.com">contact@iSportIndia.com</a></p>
                    </div>
                    <ul class="style_socialMenu__WYNuh d-flex text-uppercase align-items-center">
                        <li><a class="d-block" href="https://www.facebook.com/iSportIndia/" target="_blank" rel="noreferrer"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="fackbook-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="facebook" fill="#F2F4F7">
                                            <path d="M15.8861593,0 C24.6598428,0 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 0,24.6598428 0,15.8861593 C0,7.11247578 7.11247578,0 15.8861593,0 Z M16.823269,8.528 C13.8677161,8.528 13.1961504,10.5692278 13.1961504,11.872781 L13.1961504,11.872781 L13.1961504,13.6956571 L11.4863009,13.6956571 L11.4863009,16.5125908 L13.1961504,16.5125908 L13.1961504,24.528 L16.7912671,24.528 L16.7912671,16.5125908 L19.1641485,16.5125908 L19.4782411,13.6982799 L16.7915042,13.6982799 L16.7915042,12.0404244 C16.7915042,11.4185919 17.2371602,11.272587 17.5540975,11.272587 L17.5540975,11.272587 L19.4863009,11.272587 L19.4863009,8.5382728 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li><a class="d-block" href="https://twitter.com/Cricketracker" target="_blank" rel="noreferrer"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_202_150)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16345 0 0 7.16345 0 16C0 24.8366 7.16345 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16345 24.8366 0 16 0ZM13.8597 17.1118L6.44681 7.2H12.1601L17.0198 13.698L23.0346 7.2H24.7134L17.77 14.7011L25.6 25.1704H19.8867L14.6098 18.115L8.07888 25.1704H6.4L13.8597 17.1118ZM11.5404 8.43664H8.91576L20.506 23.9336H23.1307L11.5404 8.43664Z" fill="#F2F4F7"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_202_150">
                                            <rect width="32" height="32" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></li>
                        <li><a class="d-block" href="https://www.instagram.com/iSportIndia/" target="_blank" rel="noreferrer"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="instagram-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="instagram" fill="#F2F4F7" fill-rule="nonzero">
                                            <path d="M15.9569778,3.2471803e-13 C24.7694222,3.2471803e-13 31.9139556,7.14453333 31.9139556,15.9569778 C31.9139556,24.7694222 24.7694222,31.9139556 15.9569778,31.9139556 C7.14453333,31.9139556 -5.32907052e-15,24.7694222 -5.32907052e-15,15.9569778 C-5.32907052e-15,7.14453333 7.14453333,3.2471803e-13 15.9569778,3.2471803e-13 Z M20.7128889,6.40142222 L11.2010667,6.40142222 C8.60301261,6.40142222 6.47619304,8.45802412 6.36312759,11.0287083 L6.3584,11.2440889 L6.3584,20.7559111 C6.3584,23.3543111 8.4150019,25.4808034 10.985686,25.5938509 L11.2010667,25.5985778 L20.7128889,25.5985778 C23.3112889,25.5985778 25.4377812,23.5423125 25.5508287,20.971319 L25.5555556,20.7559111 L25.5555556,11.2440889 C25.5555556,8.57386667 23.3834667,6.40142222 20.7128889,6.40142222 Z M11.2010667,8.49066667 L20.7128889,8.49066667 C22.175223,8.49066667 23.3747816,9.63606475 23.4616319,11.0766106 L23.4666667,11.2440889 L23.4666667,20.7559111 C23.4666667,22.2182453 22.3209389,23.4178039 20.8803686,23.5046541 L20.7128889,23.5096889 L11.2010667,23.5096889 C9.7390749,23.5096889 8.53952897,22.3639611 8.4526792,20.9233908 L8.44764444,20.7559111 L8.44764444,11.2440889 C8.44764444,9.78209712 9.59304252,8.5825512 11.0335884,8.49570142 L11.2010667,8.49066667 L20.7128889,8.49066667 Z M15.9569778,11.056 C13.2309333,11.056 11.0129778,13.2739556 11.0129778,16 C11.0129778,18.7264 13.2309333,20.9443556 15.9569778,20.9443556 C18.6830222,20.9443556 20.9013333,18.7260444 20.9013333,16 C20.9013333,13.2739556 18.6833778,11.056 15.9569778,11.056 Z M15.9569778,13.1452444 C17.5310222,13.1452444 18.8117333,14.4263111 18.8117333,15.9996444 C18.8117333,17.5740444 17.5313778,18.8551111 15.9569778,18.8551111 C14.3832889,18.8551111 13.1018667,17.5740444 13.1018667,15.9996444 C13.1018667,14.4259556 14.3832889,13.1452444 15.9569778,13.1452444 Z M21.0602667,9.73866667 C20.4149333,9.73866667 19.8901333,10.2634667 19.8901333,10.9084444 C19.8901333,11.5534222 20.4149333,12.0782222 21.0602667,12.0782222 C21.7052444,12.0782222 22.2300444,11.5534222 22.2300444,10.9084444 C22.2300444,10.2634667 21.7052444,9.73866667 21.0602667,9.73866667 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li><a class="d-block" href="https://whatsapp.com/channel/0029VaAWZf67Noa8G0GHdJ2Q" target="_blank" rel="noreferrer"><svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <g clip-path="url(#clip0_309_148)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16ZM22.9981 9.15754C21.1931 7.35057 18.7929 6.35501 16.2356 6.35396C10.9664 6.35396 6.67779 10.6422 6.67574 15.913C6.675 17.598 7.11521 19.2425 7.95182 20.6923L6.59557 25.6461L11.6634 24.3167C13.0597 25.0783 14.6318 25.4798 16.2318 25.4803H16.2357C21.5043 25.4803 25.7933 21.1916 25.7955 15.9207C25.7964 13.3663 24.8029 10.9644 22.9981 9.15754ZM16.2356 23.8658H16.2324C14.8067 23.8653 13.4083 23.4822 12.1883 22.7582L11.8982 22.5861L8.89087 23.3749L9.6936 20.4428L9.50466 20.1422C8.7093 18.8771 8.28923 17.4149 8.28985 15.9136C8.29156 11.5327 11.8561 7.96854 16.2388 7.96854C18.3611 7.9692 20.3561 8.79681 21.8563 10.2987C23.3565 11.8006 24.1822 13.7969 24.1813 15.92C24.1795 20.3013 20.6151 23.8658 16.2356 23.8658ZM18.9618 17.1377C19.1808 17.2175 20.3552 17.7953 20.594 17.9149C20.6407 17.9382 20.6843 17.9593 20.7247 17.9788C20.8913 18.0593 21.0038 18.1137 21.0518 18.1939C21.1116 18.2934 21.1116 18.7718 20.9125 19.3298C20.7135 19.8877 19.7592 20.3969 19.3002 20.4655C18.8886 20.527 18.3679 20.5527 17.7957 20.3709C17.4488 20.2608 17.0039 20.1138 16.434 19.8677C14.1945 18.9007 12.6811 16.7301 12.3953 16.3201C12.3753 16.2914 12.3613 16.2714 12.3534 16.2609L12.3516 16.2584C12.2253 16.09 11.3781 14.9597 11.3781 13.7899C11.3781 12.6898 11.9185 12.113 12.1673 11.8475C12.1844 11.8293 12.2001 11.8126 12.2141 11.7972C12.433 11.5582 12.6919 11.4984 12.8511 11.4984C13.0103 11.4984 13.1698 11.4998 13.3089 11.5068C13.3261 11.5076 13.344 11.5075 13.3624 11.5074C13.5017 11.5066 13.6752 11.5057 13.8464 11.9168C13.9119 12.0743 14.0077 12.3074 14.1088 12.5536C14.3147 13.0549 14.5428 13.6102 14.5828 13.6904C14.6426 13.8099 14.6824 13.9494 14.6027 14.1089C14.5908 14.1328 14.5797 14.1554 14.5691 14.177C14.5093 14.2991 14.4653 14.3889 14.3639 14.5073C14.3241 14.5538 14.283 14.6039 14.2419 14.6539C14.1595 14.7542 14.0772 14.8544 14.0056 14.9258C13.886 15.045 13.7615 15.1742 13.9008 15.4133C14.0402 15.6525 14.5195 16.4347 15.2297 17.0681C15.9929 17.7489 16.6563 18.0366 16.9926 18.1825C17.0583 18.211 17.1115 18.2341 17.1505 18.2536C17.3894 18.3733 17.5287 18.3532 17.6681 18.1939C17.8074 18.0345 18.2652 17.4964 18.4244 17.2573C18.5836 17.0182 18.7429 17.058 18.9618 17.1377Z" fill="#F2F4F7"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_309_148">
                                            <rect width="32" height="32" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></li>
                        <li><a class="d-block" href="https://www.linkedin.com/company/iSportIndia/ " target="_blank" rel="noreferrer"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="linkedin-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Google" fill="#F2F4F7" fill-rule="nonzero">
                                            <path d="M15.8861593,-5.14077669e-12 C24.6598428,-5.14077669e-12 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 1.58060232e-11,24.6598428 1.58060232e-11,15.8861593 C1.58060232e-11,7.11247578 7.11247578,-5.14077669e-12 15.8861593,-5.14077669e-12 Z M20.026,13.0493333 C18.4126667,13.0493333 17.33,13.9346667 16.888,14.774 L16.888,14.774 L16.8413333,14.774 L16.8413333,13.3173333 L13.6593333,13.3173333 L13.6593333,23.9993333 L16.9726667,23.9993333 L16.9726667,18.71 L16.9737314,18.561021 C16.9933869,17.2228605 17.2982619,15.9706667 18.9613333,15.9706667 C20.6606667,15.9706667 20.686,17.56 20.686,18.7993333 L20.686,18.7993333 L20.686,24 L24,23.9993333 L24,18.1313333 L23.9989204,17.927428 C23.9690193,15.1566187 23.3020952,13.0493333 20.026,13.0493333 Z M11.5813333,13.318 L8.264,13.318 L8.264,24 L11.5813333,24 L11.5813333,13.318 Z M9.92133333,8 C8.86066667,8 8,8.86066667 8,9.92133333 C8,10.982 8.86066667,11.8606667 9.92133333,11.8606667 C10.982,11.8606667 11.8426667,10.982 11.8426667,9.92133333 C11.842,8.86066667 10.9813333,8 9.92133333,8 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li><a class="d-block" href="https://www.youtube.com/c/iSportIndia" target="_blank" rel="noreferrer"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="youtube-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path d="M15.8861593,-3.93285404e-12 C24.6598428,-3.93285404e-12 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 2.44781972e-12,24.6598428 2.44781972e-12,15.8861593 C2.44781972e-12,7.11247578 7.11247578,-3.93285404e-12 15.8861593,-3.93285404e-12 Z M16.8277862,9.60025513 L16.0028153,9.60014684 C13.8036103,9.59890281 11.5942314,9.60014684 9.41174073,9.83846686 C8.49063629,9.93923304 7.72559273,10.6147397 7.51012333,11.5303435 C7.23752648,12.6893817 7.20451053,13.9427817 7.20053905,15.1498745 L7.2,15.6000889 C7.2,16.9425717 7.2,18.3657385 7.50667146,19.6694788 C7.72177751,20.5849049 8.48700274,21.2604116 9.40865222,21.3613555 C11.3181726,21.570041 13.2482793,21.5970791 15.1742652,21.5997446 L15.9993635,21.5998532 C18.1989318,21.6010972 20.407584,21.5998532 22.5897113,21.3613555 C23.5108158,21.2605893 24.276586,20.5850826 24.4920554,19.6694788 C24.7648138,18.5104406 24.7959821,17.2571811 24.799541,16.0502443 L24.7999993,15.6000889 C24.7999993,14.2576061 24.8025421,12.8342615 24.4958707,11.5303435 C24.2804013,10.6147397 23.5148127,9.93923304 22.5931632,9.83846686 C20.6834839,9.62993684 18.7534964,9.60291813 16.8277862,9.60025513 Z M13.7287592,12.5787028 C15.5940412,13.5307389 17.446969,14.4763771 19.32406,15.4342779 L13.7287592,18.2722588 L13.7287592,18.2722588 L13.7287592,12.5787028 L13.7287592,12.5787028 Z" id="Combined-Shape" fill="#F2F4F7"></path>
                                    </g>
                                </svg></a></li>
                        <li><a class="d-block" href="https://www.threads.net/@iSportIndia" target="_blank" rel="noreferrer"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_118_146)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32ZM20.6738 14.7685C20.7654 14.8078 20.8558 14.8488 20.9448 14.8913C22.2029 15.4937 23.123 16.4056 23.6056 17.5285C24.2782 19.0943 24.3397 21.6449 22.2988 23.6797C20.7389 25.2351 18.8454 25.937 16.159 25.9556H16.1469C13.1253 25.9347 10.8018 24.9199 9.24081 22.9397C7.85177 21.1774 7.13526 18.7253 7.11119 15.6517L7.11111 15.6444L7.11119 15.6372C7.13526 12.5635 7.85177 10.1115 9.24081 8.34926C10.8018 6.36893 13.1253 5.35422 16.1469 5.33333H16.159C19.1868 5.35429 21.5366 6.36516 23.1433 8.33795C23.9361 9.31124 24.5187 10.4848 24.8889 11.8468L23.1511 12.3095C22.8456 11.203 22.3823 10.2541 21.7678 9.49945C20.5145 7.96067 18.6256 7.17121 16.153 7.15287C13.6981 7.17107 11.8416 7.95675 10.6345 9.48814C9.50419 10.9221 8.92002 12.9934 8.89823 15.6444C8.92002 18.2955 9.50419 20.3667 10.6345 21.8007C11.8416 23.3321 13.6982 24.1178 16.153 24.136C18.366 24.1197 19.8303 23.5943 21.0485 22.3797C22.4389 20.9933 22.413 19.2928 21.9683 18.2579C21.7068 17.6491 21.2332 17.1427 20.5943 16.7578C20.4386 17.9154 20.0862 18.834 19.5289 19.5429C18.7951 20.4764 17.7433 20.9869 16.4025 21.0602C15.3873 21.1156 14.4104 20.8712 13.652 20.3716C12.7549 19.7805 12.2299 18.8757 12.1737 17.824C12.063 15.7506 13.7111 14.2584 16.2748 14.111C17.1848 14.059 18.0361 14.1 18.8233 14.2335C18.7188 13.5956 18.5077 13.0902 18.1922 12.7245C17.7586 12.2221 17.0886 11.9645 16.2008 11.9588L16.1761 11.9587C15.4633 11.9587 14.4954 12.1578 13.8786 13.0917L12.3957 12.0764C13.2213 10.8262 14.5626 10.1392 16.1754 10.1392L16.212 10.1393C18.9084 10.1565 20.5143 11.8356 20.6738 14.7685ZM13.9581 17.7251C14.0157 18.8032 15.183 19.3065 16.3066 19.2433C17.4066 19.1831 18.6553 18.7523 18.8682 16.0991C18.2975 15.9746 17.6697 15.9095 16.9986 15.9095C16.7947 15.9095 16.5871 15.9155 16.3755 15.9277C14.5281 16.0339 13.9155 16.9258 13.9581 17.7251Z" fill="#F2F4F7"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_118_146">
                                            <rect width="32" height="32" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></li>
                        <li><a class="d-block" href="https://bit.ly/3n0jQL6" target="_blank" rel="noreferrer"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
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