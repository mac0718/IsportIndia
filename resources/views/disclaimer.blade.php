@extends('layout.main')
@section('title')
{!! 'Disclaimer iSportIndia' !!}
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
<section class="undefined common-section ">
    <div class="container">
        <div class="justify-content-center row">
            <div class="col-lg-8 col-md-10">
                <h2 class="text-center">Disclaimer</h2>
                <p class="big-text">The content provided on this website is intended for general information purposes only. It is presented by iSportIndia and, while we make every effort to ensure its accuracy and timeliness, we make no representations or warranties of any kind, express or implied, regarding the completeness, accuracy, reliability, suitability, or availability of the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.</p>
                <p class="big-text">In no event shall iSportIndia be liable for any loss or damage, including but not limited to indirect or consequential loss or damage, or any loss or damage whatsoever arising from the loss of data or profits in connection with the use of this website.</p>
                <p class="big-text">This website may contain links to other websites that are not under the control of iSportIndia. We have no control over the nature, content, and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.</p>
                <p class="big-text">While we strive to maintain the smooth operation of the website, iSportIndia takes no responsibility for and will not be liable for the website's temporary unavailability due to technical issues beyond our control.</p>
                <p class="big-text">The opinions and analyses presented by authors in various categories, including but not limited to opinions and analysis, are the views of the writers and should not be considered as those of the company. In the event of any disputes arising from it, iSportIndia will not entertain any claims against content published on the website and such claims should be directed to the respective author.</p>
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