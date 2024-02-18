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
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.isportindia.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Fixtures",
          "item": "https://isportindia.com/fixtures-list"
        },
      ]
    }
  </script>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>@yield('title', 'iSportIndia')</title>
  <link rel="canonical" href="https://www.isportindia.com/" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
  <meta name="Author" content="isportindia" />
  <meta property="og:locale" content="en_US" />
  <meta name="description" content="Get cricket match updates (Domestic &amp;amp; International), team stats, series results, fixtures, latest news, top stories, match preview, predictions, review, results, fantasy tips, statistical highlights, videos and complete cricket analysis along with ICC Cricket player rankings on isportindia" />
  <meta name="robots" content="Follow, Index" />
  <meta property="og:title" content="Cricket Teams, Stats, Latest News, Match Predictions, Fantasy Tips &amp;amp; Results" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="isportindia" />
  <meta property="og:image:alt" content="Cricket Teams, Stats, Latest News, Match Predictions, Fantasy Tips &amp;amp; Results" />
  <meta property="og:image:width" content="640" />
  <meta property="og:image:height" content="400" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:domain" content="isportindia.com" />
  <meta property="twitter:title" content="Cricket Teams, Stats, Latest News, Match Predictions, Fantasy Tips &amp;amp; Results" />
  <meta property="twitter:image" content="https://isportindia.com/images/OG.jpg" />
  <meta property="twitter:url" content="https://isportindia.com/" />
  <meta property="twitter:image:alt" content="Cricket Teams, Stats, Latest News, Match Predictions, Fantasy Tips &amp;amp; Results" />
  <meta property="twitter:description" content="Get cricket match updates (Domestic &amp;amp; International), team stats, series results, fixtures, latest news, top stories, match preview, predictions, review, results, fantasy tips, statistical highlights, videos and complete cricket analysis along with ICC Cricket player rankings on isportindia" />
  @yield('meta_tags')
  <meta name="next-head-count" content="5" />
  @include('layout.css')
  @yield('style')
</head>

<body id="body" data-mode="light">

  <div id="__next" data-reactroot="">

    @include('layout.header')

    @yield('content')

    @include('layout.footer')

  </div>

  <div class="fade offcanvas-backdrop hide"></div>

  @include('layout.sidebar')

  <ul class="fixed false mobileMenu d-flex d-md-none text-center text-uppercase font-semi mb-0">
    <li><a class="{{ set_active('home') }}" href="/"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <g id="home-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon id="Path" fill="#212121" fill-rule="nonzero" points="10 20.5 10 14.5 14 14.5 14 20.5 19 20.5 19 12.5 22 12.5 12 3.5 2 12.5 5 12.5 5 20.5"></polygon>
          </g>
        </svg>Home </a></li>
    <li><a class="{{ set_active('fixture') }}" href="{{route('fixture')}}"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <g id="schedule-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" fill-opacity="0.87">
            <path d="M15.727914,16.342 L19.970514,20.5846 L18.556314,21.9988 L14.313714,17.7562 L15.727914,16.342 Z M5.1225,4.32 C5.5125,3.93 6.1425,3.93 6.5325,4.32 L6.5325,4.32 L15.0225,12.81 C15.4125,13.2 15.4125,13.83 15.0225,14.22 L15.0225,14.22 L12.1925,17.05 C11.8025,17.44 11.1725,17.44 10.7825,17.05 L10.7825,17.05 L2.2925,8.56 C1.9025,8.17 1.9025,7.54 2.2925,7.15 L2.2925,7.15 Z M18.4725,2 C20.4054966,2 21.9725,3.56700338 21.9725,5.5 C21.9725,7.43299662 20.4054966,9 18.4725,9 C16.5395034,9 14.9725,7.43299662 14.9725,5.5 C14.9725,3.56700338 16.5395034,2 18.4725,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
          </g>
        </svg>Schedule</a></li>
    <li><a class="{{ set_active('fantasypreview') }}" href="{{route('fantasypreview')}}"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <g id="fantasy-tips-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <path d="M10.1111111,21 L13.6666667,21 C13.6666667,22 12.8666667,22.8181818 11.8888889,22.8181818 C10.9111111,22.8181818 10.1111111,22 10.1111111,21 Z M8.11111111,19.8181818 L15.2222222,19.8181818 L15.2222222,18 L8.11111111,18 L8.11111111,19.8181818 Z M18.4444444,11.8181818 C18.4444444,15.2909091 16.08,17.1454545 15.0933333,17.7272727 L8.46222222,17.7272727 C7.47555556,17.1454545 5.11111111,15.2909091 5.11111111,11.8181818 C5.11111111,8.05454545 8.09777778,5 11.7777778,5 C15.4577778,5 18.4444444,8.05454545 18.4444444,11.8181818 Z M19.7733333,9.7 L18.5555556,10.2727273 L19.7733333,10.8454545 L20.3333333,12.0909091 L20.8933333,10.8454545 L22.1111111,10.2727273 L20.8933333,9.7 L20.3333333,8.45454545 L19.7733333,9.7 Z M4.66666667,7.45454545 L5.50222222,5.58181818 L7.33333333,4.72727273 L5.50222222,3.87272727 L4.66666667,2 L3.83111111,3.87272727 L2,4.72727273 L3.83111111,5.58181818 L4.66666667,7.45454545 Z" id="Shape" fill="#0E3778" fill-rule="nonzero"></path>
          </g>
        </svg>Fantasy Tips</a></li>
    <li><a class="{{ set_active('newslist') }}" href="{{route('newslist')}}"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
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
  @yield('script')
</body>

</html>