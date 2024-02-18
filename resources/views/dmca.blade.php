@extends('layout.main')
@section('title')
{!! 'DMCA iSportIndia' !!}
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
<!-- <section class="style_bannerSection__rx_fJ">
    <div class="container">
        <div class="style_content__nGCOg d-flex align-items-center justify-content-center">
            <h1 class="mb-0" style="padding:60px 20px;">About Us</h1>
        </div>
    </div>
</section>
<section class="undefined common-section text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="common-box mt-2 mb-2">
                    <h2 class="mb-2 mt-2">100000+</h2>
                    <p class="big-text mb-2">POSTS</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="common-box mt-2 mb-2">
                    <h2 class="mb-2 mt-2">200+</h2>
                    <p class="big-text mb-2">AUTHORS</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="common-box mt-2 mb-2">
                    <h2 class="mb-2 mt-2">1000000+</h2>
                    <p class="big-text mb-2">PAGE VIEWS DAILY</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="undefined common-section ">
    <div class="container">
        <div class="justify-content-center row">
            <div class="col-lg-8 col-md-10">
                <h2 class="text-center">DMCA</h2>
                <p class="big-text">iSportIndia would like to emphasize that the images utilized on the Website may be sourced from various locations on the Internet and are considered open source for representation purposes. The images and content circulating on the Internet are simultaneously in the public domain, allowing their use by interested parties. While exercising responsibility in our actions, iSportIndia never intentionally seeks to violate or infringe upon the rights of individuals or entities, as expressly stated by them.</p>
                <p class="big-text">If you are the sole rights holder of any image or material appearing on our website <a href="www.isportindia.com">www.isportindia.com</a>, kindly inform the company. Despite our efforts to avoid any violation of copyright or ownership rights, if any individual or entity has concerns about iSport India Pvt Ltd using their owned or copyrighted material without authorization or appropriate credits, they can submit a written complaint/notice/request to remove the image/content or other (please specify).
                </p>
                <p class="big-text">Contact: <a href="mailto:contact@isportindia.com">contact@isportindia.com</a></p>
                <p class="big-text">The submitted complaint/notice/request must include:
                </p>
                <p class="big-text">Name and valid details of the complainant, along with supporting documentation as proof of sole right ownership of the image, content, or other concerned materials.
                    The exact location on the website where the content was first viewed by the aggrieved party, accompanied by visual proof and/or the URL link of the page.
                    Specific details of the image, content, or other materials in question.
                    A declaration addressed to iSportIndia asserting rightful ownership of the work used inappropriately by the company (to be used against the complainant if the complaint is found to be fraudulent, misleading, or defamatory).
                </p>
                <p class="big-text">If you are a second party writing on behalf of the original copyright holder, ensure attaching a letter of authority along with the physically or electronically signed declaration by the first party or the original copyright holder.</p>
                <p class="big-text">Incomplete or inappropriate submission of the above details to iSportIndia may result in the request not being considered in minor cases and may lead to legal action by the company in specific cases where an attempt is made to wrongfully frame iSportindia in a baseless case.</p>
                <p class="big-text">It is noteworthy that upon receiving a fully valid and verified complaint/notice/request, the company is obligated to respond to the aggrieved party in writing (via the email address used for the submission) acknowledging the receipt and specifying the duration during which the issue will be duly and rightfully addressed.</p>
                <p class="big-text">In adherence to the founding policy of the company, iSportIndia affirms its commitment to never intentionally claim rights over anything owned by any party other than iSportIndia or its associates.</p>
            </div>
        </div>
    </div>
</section>
<!-- <section class="undefined common-section text-center bg-light">
    <div class="container">
        <div class="justify-content-center  row">
            <div class="col-lg-8 col-md-10">
                <h2>What is iSportIndia</h2>
                <p class="big-text">Something new is brought into existence when people notice a few missing links in what already exists. In an industry that had the biggest name as old as some of us with iSportIndia we wanted to connect the young cricket fans to the game. Despite the highs and lows on the cricket field it was expected that maturity of other sports and audience acceptance will witness a dip in the following for cricket. Being cricket crazy fans we wanted to defy that. </p>
                <p class="big-text">We made it our mission to bring back the focus on cricket and to date we strive to do that.</p>
                <p class="big-text">iSportIndia today is regarded as the fastest-growing phenomenon in the cricket publishing industry with a reader base of over 30 million page views each month. We cover all the aspects of the game via News, Match Predictions, Fantasy Tips, pre and post-Match Analysis, Statistics, Cricket Facts, Social Media Trends, Videos, Humour and more.</p>
                <h2>Our USP</h2>
                <p class="big-text">In a sector which has worked on set patterns and formulas we have created a unique range of articles which are quick to read and easy to digest and have been widely appreciated by our readers. This is what makes iSportIndia not just an informative website but also adds us into the entertainment category and thus, to categories us perfectly we arrive to the term ‘Infotainment’. Our content is spread in over 30 different categories that are designed considering the areas of interest of our readers from around the world. </p>
            </div>
        </div>
    </div>
</section>
<section class="undefined common-section text-center">
    <div class="container reverse_svg_color">
        <h2>The iSportIndia Pillars</h2>
        <div class="justify-content-center row">
            <div class="col-md-4">
                <div class="common-box mt-2 mb-2">
                    <div class="style_person__Jwv6O rounded-circle overflow-hidden mx-auto my-2"><img alt="sujjad" loading="lazy" width="400" height="400" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fsujjad.41f515ac.jpg&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fsujjad.41f515ac.jpg&amp;w=992&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fsujjad.41f515ac.jpg&amp;w=992&amp;q=75" style="color: transparent;"></div>
                    <h3 class="mb-2 mt-1">Syed Sujjad Pasha</h3>
                    <p>CEO, Founder</p>
                    <p class="big-text mb-2">A techie in his 20s based in Bangalore conceived the idea of starting a cricket website to channelize his love, passion and emotions for the game of cricket and to connect other like-minded people on the platform. Hard at work, a tough nut to crack and chilled outside Sujjad is the CEO &amp; Founder of iSportIndia. </p>
                    <ul class="style_socialMenu__iFP0d d-flex text-uppercase align-items-center justify-content-center my-3">
                        <li><a target="_blank" href="https://www.facebook.com/ImSujjad"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="fackbook-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="facebook" fill="#F2F4F7">
                                            <path d="M15.8861593,0 C24.6598428,0 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 0,24.6598428 0,15.8861593 C0,7.11247578 7.11247578,0 15.8861593,0 Z M16.823269,8.528 C13.8677161,8.528 13.1961504,10.5692278 13.1961504,11.872781 L13.1961504,11.872781 L13.1961504,13.6956571 L11.4863009,13.6956571 L11.4863009,16.5125908 L13.1961504,16.5125908 L13.1961504,24.528 L16.7912671,24.528 L16.7912671,16.5125908 L19.1641485,16.5125908 L19.4782411,13.6982799 L16.7915042,13.6982799 L16.7915042,12.0404244 C16.7915042,11.4185919 17.2371602,11.272587 17.5540975,11.272587 L17.5540975,11.272587 L19.4863009,11.272587 L19.4863009,8.5382728 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li><a target="_blank" href="https://twitter.com/ImSujjad"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_202_150)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16345 0 0 7.16345 0 16C0 24.8366 7.16345 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16345 24.8366 0 16 0ZM13.8597 17.1118L6.44681 7.2H12.1601L17.0198 13.698L23.0346 7.2H24.7134L17.77 14.7011L25.6 25.1704H19.8867L14.6098 18.115L8.07888 25.1704H6.4L13.8597 17.1118ZM11.5404 8.43664H8.91576L20.506 23.9336H23.1307L11.5404 8.43664Z" fill="#F2F4F7"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_202_150">
                                            <rect width="32" height="32" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/imsujjad/"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="instagram-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="instagram" fill="#F2F4F7" fill-rule="nonzero">
                                            <path d="M15.9569778,3.2471803e-13 C24.7694222,3.2471803e-13 31.9139556,7.14453333 31.9139556,15.9569778 C31.9139556,24.7694222 24.7694222,31.9139556 15.9569778,31.9139556 C7.14453333,31.9139556 -5.32907052e-15,24.7694222 -5.32907052e-15,15.9569778 C-5.32907052e-15,7.14453333 7.14453333,3.2471803e-13 15.9569778,3.2471803e-13 Z M20.7128889,6.40142222 L11.2010667,6.40142222 C8.60301261,6.40142222 6.47619304,8.45802412 6.36312759,11.0287083 L6.3584,11.2440889 L6.3584,20.7559111 C6.3584,23.3543111 8.4150019,25.4808034 10.985686,25.5938509 L11.2010667,25.5985778 L20.7128889,25.5985778 C23.3112889,25.5985778 25.4377812,23.5423125 25.5508287,20.971319 L25.5555556,20.7559111 L25.5555556,11.2440889 C25.5555556,8.57386667 23.3834667,6.40142222 20.7128889,6.40142222 Z M11.2010667,8.49066667 L20.7128889,8.49066667 C22.175223,8.49066667 23.3747816,9.63606475 23.4616319,11.0766106 L23.4666667,11.2440889 L23.4666667,20.7559111 C23.4666667,22.2182453 22.3209389,23.4178039 20.8803686,23.5046541 L20.7128889,23.5096889 L11.2010667,23.5096889 C9.7390749,23.5096889 8.53952897,22.3639611 8.4526792,20.9233908 L8.44764444,20.7559111 L8.44764444,11.2440889 C8.44764444,9.78209712 9.59304252,8.5825512 11.0335884,8.49570142 L11.2010667,8.49066667 L20.7128889,8.49066667 Z M15.9569778,11.056 C13.2309333,11.056 11.0129778,13.2739556 11.0129778,16 C11.0129778,18.7264 13.2309333,20.9443556 15.9569778,20.9443556 C18.6830222,20.9443556 20.9013333,18.7260444 20.9013333,16 C20.9013333,13.2739556 18.6833778,11.056 15.9569778,11.056 Z M15.9569778,13.1452444 C17.5310222,13.1452444 18.8117333,14.4263111 18.8117333,15.9996444 C18.8117333,17.5740444 17.5313778,18.8551111 15.9569778,18.8551111 C14.3832889,18.8551111 13.1018667,17.5740444 13.1018667,15.9996444 C13.1018667,14.4259556 14.3832889,13.1452444 15.9569778,13.1452444 Z M21.0602667,9.73866667 C20.4149333,9.73866667 19.8901333,10.2634667 19.8901333,10.9084444 C19.8901333,11.5534222 20.4149333,12.0782222 21.0602667,12.0782222 C21.7052444,12.0782222 22.2300444,11.5534222 22.2300444,10.9084444 C22.2300444,10.2634667 21.7052444,9.73866667 21.0602667,9.73866667 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/imsujjad/"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="linkedin-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Google" fill="#F2F4F7" fill-rule="nonzero">
                                            <path d="M15.8861593,-5.14077669e-12 C24.6598428,-5.14077669e-12 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 1.58060232e-11,24.6598428 1.58060232e-11,15.8861593 C1.58060232e-11,7.11247578 7.11247578,-5.14077669e-12 15.8861593,-5.14077669e-12 Z M20.026,13.0493333 C18.4126667,13.0493333 17.33,13.9346667 16.888,14.774 L16.888,14.774 L16.8413333,14.774 L16.8413333,13.3173333 L13.6593333,13.3173333 L13.6593333,23.9993333 L16.9726667,23.9993333 L16.9726667,18.71 L16.9737314,18.561021 C16.9933869,17.2228605 17.2982619,15.9706667 18.9613333,15.9706667 C20.6606667,15.9706667 20.686,17.56 20.686,18.7993333 L20.686,18.7993333 L20.686,24 L24,23.9993333 L24,18.1313333 L23.9989204,17.927428 C23.9690193,15.1566187 23.3020952,13.0493333 20.026,13.0493333 Z M11.5813333,13.318 L8.264,13.318 L8.264,24 L11.5813333,24 L11.5813333,13.318 Z M9.92133333,8 C8.86066667,8 8,8.86066667 8,9.92133333 C8,10.982 8.86066667,11.8606667 9.92133333,11.8606667 C10.982,11.8606667 11.8426667,10.982 11.8426667,9.92133333 C11.842,8.86066667 10.9813333,8 9.92133333,8 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="common-box mt-2 mb-2">
                    <div class="style_person__Jwv6O rounded-circle overflow-hidden mx-auto my-2"><img alt="sai" loading="lazy" width="400" height="400" decoding="async" data-nimg="1" class="d-block w-100 h-auto " srcset="/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fsai.16acd002.jpg&amp;w=520&amp;q=75 1x, /_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fsai.16acd002.jpg&amp;w=992&amp;q=75 2x" src="https://www.iSportIndia.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fsai.16acd002.jpg&amp;w=992&amp;q=75" style="color: transparent;"></div>
                    <h3 class="mb-2 mt-1">Sai Kishore</h3>
                    <p>Social Media Manager</p>
                    <p class="big-text mb-2">A mechanical engineer by qualification, his parents thought their obedient son would work as an engineer. An ardent Cricket fan is following his passion and making a living watching and working around his favorite sport. Kishore a pillar of the iSportIndia team handles the tough job of managing the millions of fans across all Social Media platforms. </p>
                    <ul class="style_socialMenu__iFP0d d-flex text-uppercase align-items-center justify-content-center my-3">
                        <li><a target="_blank" href="https://www.facebook.com/ImSaiKishore"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="fackbook-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="facebook" fill="#F2F4F7">
                                            <path d="M15.8861593,0 C24.6598428,0 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 0,24.6598428 0,15.8861593 C0,7.11247578 7.11247578,0 15.8861593,0 Z M16.823269,8.528 C13.8677161,8.528 13.1961504,10.5692278 13.1961504,11.872781 L13.1961504,11.872781 L13.1961504,13.6956571 L11.4863009,13.6956571 L11.4863009,16.5125908 L13.1961504,16.5125908 L13.1961504,24.528 L16.7912671,24.528 L16.7912671,16.5125908 L19.1641485,16.5125908 L19.4782411,13.6982799 L16.7915042,13.6982799 L16.7915042,12.0404244 C16.7915042,11.4185919 17.2371602,11.272587 17.5540975,11.272587 L17.5540975,11.272587 L19.4863009,11.272587 L19.4863009,8.5382728 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li><a target="_blank" href="https://twitter.com/DivingSlip"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_202_150)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16345 0 0 7.16345 0 16C0 24.8366 7.16345 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16345 24.8366 0 16 0ZM13.8597 17.1118L6.44681 7.2H12.1601L17.0198 13.698L23.0346 7.2H24.7134L17.77 14.7011L25.6 25.1704H19.8867L14.6098 18.115L8.07888 25.1704H6.4L13.8597 17.1118ZM11.5404 8.43664H8.91576L20.506 23.9336H23.1307L11.5404 8.43664Z" fill="#F2F4F7"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_202_150">
                                            <rect width="32" height="32" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/sai-kishore-18609b51/"><svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="linkedin-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Google" fill="#F2F4F7" fill-rule="nonzero">
                                            <path d="M15.8861593,-5.14077669e-12 C24.6598428,-5.14077669e-12 31.7723186,7.11247578 31.7723186,15.8861593 C31.7723186,24.6598428 24.6598428,31.7723186 15.8861593,31.7723186 C7.11247578,31.7723186 1.58060232e-11,24.6598428 1.58060232e-11,15.8861593 C1.58060232e-11,7.11247578 7.11247578,-5.14077669e-12 15.8861593,-5.14077669e-12 Z M20.026,13.0493333 C18.4126667,13.0493333 17.33,13.9346667 16.888,14.774 L16.888,14.774 L16.8413333,14.774 L16.8413333,13.3173333 L13.6593333,13.3173333 L13.6593333,23.9993333 L16.9726667,23.9993333 L16.9726667,18.71 L16.9737314,18.561021 C16.9933869,17.2228605 17.2982619,15.9706667 18.9613333,15.9706667 C20.6606667,15.9706667 20.686,17.56 20.686,18.7993333 L20.686,18.7993333 L20.686,24 L24,23.9993333 L24,18.1313333 L23.9989204,17.927428 C23.9690193,15.1566187 23.3020952,13.0493333 20.026,13.0493333 Z M11.5813333,13.318 L8.264,13.318 L8.264,24 L11.5813333,24 L11.5813333,13.318 Z M9.92133333,8 C8.86066667,8 8,8.86066667 8,9.92133333 C8,10.982 8.86066667,11.8606667 9.92133333,11.8606667 C10.982,11.8606667 11.8426667,10.982 11.8426667,9.92133333 C11.842,8.86066667 10.9813333,8 9.92133333,8 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->

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