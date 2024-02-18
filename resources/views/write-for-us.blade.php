@extends('layout.main')
@section('title')
{!! 'Write For Us' !!}
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
                <h2>Write For Us</h2>
                <p class="big-text">Contribute to iSportIndia</p>
                <p class="big-text">Are you a fervent follower of sports, particularly cricket, and possess a profound understanding of the game? Have you ever aspired to venture into writing or harbored dreams of sports journalism? Look no further! We present you with an exciting platform that opens doors to a vast readership spanning the globe.</p>
                <p class="big-text">iSportIndia, the contemporary sports hub with an expanding audience base, is actively seeking content writers, guest authors, and freelance contributors, whether seasoned or fresh enthusiasts. Join us in enriching our audience with top-notch, meticulously researched content across diverse categories.</p>
                <strong class="big-text">What We Feature?</strong>
                <p class="big-text">iSportIndia publishes a wide array of content, including news articles, trending stories, match reports, feature articles, interviews, analyses, match predictions, cricket fantasy guides, statistical pieces, listicles, and much more.</p>
                <strong class="big-text">Content Writing Guidelines:</strong>
                <p class="big-text">A. Minimum Word Count:</p>
                <ul>
                    <li>For news and trending stories, the content should be a minimum of 350 words.</li>
                    <li>In the case of news pieces, aim to keep it under 500 words. If there's extensive content, focus on the crucial details in your own narrative style.
                    </li>
                    <li>Your content should take center stage in the article, emphasizing original description over excessive quotes. Maintain consistency from the introduction to the conclusion.</li>
                </ul>
                <p class="big-text">B. Paragraph Structure:</p>
                <ul>
                    <li>Aim for paragraphs with 4-5 lines, ensuring a smooth reader flow throughout the entire article.</li>
                    <li>For news articles, the first two paragraphs should be your description, excluding direct quotes. Reserve a space to discuss quotes separately, providing sources when quoting from other portals or post/pre-match press conferences.</li>
                </ul>
                <p class="big-text">C. Originality:</p>
                <ul>
                    <li>Avoid repetition of lines or segments from previous articles on the same subject. Convey the information differently, utilizing a fresh approach.
                    </li>
                </ul>
                <p class="big-text">D. Subheadings:</p>
                <ul>
                    <li>Incorporate subheadings in all articles to enhance readability and structure.
                    </li>
                </ul>
                <p class="big-text">E. Proofreading:
                </p>
                <ul>
                    <li>Prior to submission, thoroughly revisit and copy-edit your article for quality assurance.
                    </li>
                </ul>
                <p class="big-text">F. Writing Approach:
                </p>
                <ul>
                    <li>For longer posts, create a clear outline before commencing. Approach it step by step, building the narrative like a storyteller. Generate reader interest, curiosity, and satisfaction as they progress through the article.
                    </li>
                    <li>Reinforce your arguments with statistics and facts, delivering content with authority.</li>
                </ul>
                <strong class="big-text">How to Apply?</strong>
                <p class="big-text">To become a contributor to iSportIndia, send an email to contact@isportindia.com. Provide a writing sample on an original topic that exemplifies your skills and showcases your in-depth understanding of the game. We look forward to welcoming passionate individuals into our dynamic team!
                </p>

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