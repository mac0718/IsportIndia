@extends('layout.main')
@section('title')
{!! 'Terms and Conditions' !!}
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
<section class="undefined common-section">
    <div class="container">
        <div class="justify-content-center row">
            <div class="col-lg-8 col-md-10">
                <h2 class="text-center">Terms and Conditions</h2>
                <p class="big-text">Welcome to iSportIndia. By continuing to browse and use this website, you agree to comply with and be bound by the following terms and conditions of use. These terms, along with our privacy policy, govern the relationship between you and iSport India in connection with this website. The terms 'iSport India,' 'us,' or 'we' refer to the owner of the website. The term 'you' refers to the user or viewer of our website. Your use of this website is subject to the following terms of use:</p>
                <ol>
                    <li>
                        <b>General Information:</b>The content on the pages of this website is for your general information and use only. It is subject to change without notice.
                    </li>
                    <li>
                        <b>Accuracy and Warranty:</b>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness, or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors, and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.

                    </li>
                    <li>
                        <b>Use at Your Own Risk:</b>Your use of any information or materials on this website is entirely at your own risk, and we shall not be liable. It is your responsibility to ensure that any products, services, or information available through this website meet your specific requirements.
                    </li>
                    <li>
                        <b>Ownership and Reproduction:</b>This website contains material that is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.
                    </li>
                    <li>
                        <b>Trademarks:</b>All trademarks reproduced on this website, which are not the property of, or licensed to the operator, are acknowledged on the website.
                        Unauthorized Use: Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense.
                    </li>
                    <li>
                        <b>Links to Other Websites:</b>From time to time, this website may include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).
                    </li>
                    <li>
                        <b>Creating Links:</b>You may not create a link to this website from another website or document without iSport India's prior written consent.
                    </li>
                </ol>
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