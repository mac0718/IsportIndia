@extends('layout.main')
@section('title')
{!! 'Privacy Policy iSportIndia' !!}
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
                <h2 class="text-center">Privacy</h2>
                <p class="big-text">Isportndia Pvt Ltd (“us”, “we”, or “our”) operates the website <a href="www.isportindia.com">www.isportindia.com</a> (the “Site”). This page outlines our policies regarding the collection, use, and disclosure of Personal Information obtained from users of the Site. We utilize your Personal Information exclusively to enhance your user experience and improve the Site. By accessing and using the Site, you agree to the collection and use of information as specified in this policy. Unless explicitly defined otherwise in this Privacy Policy, terms used herein have the same meanings as those in our Terms and Conditions, accessible at <a href="www.isportindia.com">www.isportindia.com</a>.</p>
                <h2>Information Collection And Use</h2>
                <p class="big-text">While utilizing our Site, we may request certain personally identifiable information from you that can be utilized to contact or identify you. Personally identifiable information may encompass, but is not limited to, your name, age, gender, email address, country, postal address, and phone number (“Personal Information”).</p>
                <h2>Log Data</h2>
                <p class="big-text">Similar to many site operators, we gather information that your browser transmits whenever you visit our Site (“Log Data”). This Log Data may comprise details such as your computer’s Internet Protocol (“IP”) address, browser type, browser version, the pages of our Site that you visit, the time and date of your visit, the duration spent on those pages, and additional statistics.
                </p>
                <h2>Cookies</h2>
                <p class="big-text">Cookies are files containing a small amount of data, potentially including an anonymous unique identifier. These files are sent to your browser from a website and stored on your computer’s hard drive. We employ “cookies” to collect information. You can instruct your browser to reject all cookies or notify you when a cookie is being sent. However, refusing cookies may limit your ability to use certain portions of our Site.</p>
                <h2>Security</h2>
                <p class="big-text">While we prioritize the security of your Personal Information, it's crucial to acknowledge that no method of transmission over the Internet or electronic storage is 100% secure. While we strive to implement commercially acceptable means to safeguard your Personal Information, we cannot guarantee absolute security.
                </p>
                <p class="big-text">User Account Deletion and Restoration Policy
                    <br>
                    Account Deletion Request:
                    <br>
                    Upon choosing to delete your account, we respect and comprehend your decision. To ensure the validity of such requests, we adhere to a specific protocol for account deletion.
                </p>
                <ul style="list-style: none;">
                    <li>
                        30-Day Grace Period: Following the initiation of an account deletion request, a 30-day grace period is enforced. During this time, your account will be in a "pending deletion" status.
                    </li>
                    <li>
                        Account Restoration: If you decide to continue using our services within the 30-day grace period, you can restore your account. By logging in as usual, you'll find an option to cancel the deletion request and reinstate your account. Restoration ensures the retention of all account details and associated data.
                    </li>
                    <li>
                        Permanent Deletion: Failing to log in or take any action within the 30-day grace period results in the permanent deletion of your account and associated data. Please note that this process is irreversible, and all data, records, or preferences linked to your account will be completely removed.
                    </li>
                </ul>
                <h2>Your Data Privacy</h2>
                <p class="big-text">We prioritize your data privacy. Throughout the 30-day grace period, your data remains secure and protected according to our standard data protection protocols. Post permanent deletion, we ensure the erasure of all your personal information, records, and preferences from our databases in compliance with relevant data protection regulations.
                </p>
                <h2>Links To Other Sites</h2>
                <p class="big-text">Our Site may feature links to other sites not operated by us. Clicking on a third-party link redirects you to that third-party’s site. We strongly recommend reviewing the Privacy Policy of every site visited. iSport India Pvt Ltd does not control and assumes no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>
                <h2>Changes To This Privacy Policy</h2>
                <p>iSport India Pvt Ltd reserves the right to update this Privacy Policy periodically. Notification of any changes will be provided by posting the revised Privacy Policy on the Site. It is advisable to regularly review this Privacy Policy for any modifications.</p>
                <h2>Contact Us</h2>
                <p>If you have inquiries regarding this Privacy Policy, please contact us.
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