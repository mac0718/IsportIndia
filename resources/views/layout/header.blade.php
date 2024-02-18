<header class="style_siteHeader__VeqhA undefined style_fixedAnimation__M5n2h position-sticky">
  <div class="container">
    <nav class="style_navbar__r9UeE align-items-center position-sticky top-0 navbar navbar-expand navbar-light">
      <a class="style_logo__iDBP2 navbar-brand d-block m-0 p-0" href="/"><span style="
              display: block;
              width: initial;
              height: initial;
              background: none;
              opacity: 1;
              border: 0;
              margin: 0;
              padding: 0;
              position: relative;
            "><span style="
                display: block;
                width: initial;
                height: initial;
                background: none;
                opacity: 1;
                border: 0;
                margin: 0;
                padding: 0;
                padding-top: 15.68702290076336%;
              "></span><img alt="logo" class="nav_logo" src="{{ asset('logo.png') }}" decoding="async"
            data-nimg="responsive" style="
                position: absolute;
                top: 0;
                left: -20px;
                bottom: 0;
                right: 0;
                padding: 0;
                border: none;
                margin: auto;
                display: block;
                width: 0;
                height: 0;
                min-width: 100%;
                max-width: 100%;
                min-height: 100%;
                max-height: 100%;
              " sizes="100vw" /></span></a>

      <div class="style_nav__1OO3C ms-auto align-items-center navbar-nav">
        <li>
        <!--<a class="style_navItem__o66ST hide_in_mobile  style_liveUpdate__l5Ln_ text-uppercase font-bold "
            target="_self" href="{{route('home')}}">Live</a>-->
         @if(!auth()->user())   
        <a class="style_navLink__aDOS0 style_fillBtn__xma7g rounded-pill" href="{{route('user-login')}}">Sign In</a>
        <a class="style_navLink__aDOS0 style_fillBtn__xma7g rounded-pill register_btn" href="{{route('user-register')}}">Register</a>
        @else
         <a class="style_navLink__aDOS0 style_fillBtn__xma7g rounded-pill" href="/sign-in/">Logout</a>
        @endif 
        </li>
        <!--<div class="hd-search-ot d-none d-md-block">
          <div class="style_navLink__aDOS0 style_iconItem__NTDWb p-0 searchItem">
            <button type="button" class="searchBtn border-0 btn btn-link">
              <span style="
                    display: block;
                    overflow: hidden;
                    width: initial;
                    height: initial;
                    background: none;
                    opacity: 1;
                    border: 0px;
                    margin: 0px;
                    padding: 0px;
                    position: relative;
                  "><span style="
                      display: block;
                      width: initial;
                      height: initial;
                      background: none;
                      opacity: 1;
                      border: 0px;
                      margin: 0px;
                      padding: 100% 0px 0px;
                    "></span><img alt="logo" src="/_next/static/media/search-icon.fe541e20.svg" decoding="async"
                  data-nimg="responsive" sizes="100vw" style="
                      position: absolute;
                      inset: 0px;

                      padding: 0px;
                      border: none;
                      margin: auto;
                      display: block;
                      width: 0px;
                      height: 0px;
                      min-width: 100%;
                      max-width: 100%;
                      min-height: 100%;
                      max-height: 100%;
                      filter: invert(59%) sepia(33%) saturate(2578%) hue-rotate(325deg) brightness(94%) contrast(93%);

                    " /></span>
            </button>
          </div>
        </div> -->

        
   
      </div>
    </nav>
  </div>
</header>

<!--<div class="style_headerMenu__YNVcR xsmall-text d-flex text-nowrap">
  <ul class="d-flex mb-0 m-auto">
    <li><a class="style_navItem__o66ST  style_liveUpdate__l5Ln_ text-uppercase font-bold  hide_in_desk" target="_self"
        href="{{route('home')}}">Live Scores</a></li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block " target="_self"
        href="{{route('home')}}">Cricket News</a></li>
    <li>
      <div id="uniq648979ca4c330e9fa30f2961" class="dropdown"><button id="648979ca4c330e9fa30f2961"
          aria-expanded="false" type="button"
          class="style_navMore__r_nff text-uppercase font-bold d-block dropdown-toggle btn btn-link">TNPL</button>
        <div id="648979ca4c330e9fa30f2961" x-placement="bottom-start" aria-labelledby="648979ca4c330e9fa30f2961"
          class="style_dropdownMenu__lVfAZ dropdown-menu" data-popper-reference-hidden="false"
          data-popper-escaped="false" data-popper-placement="bottom-start" style="position: absolute; ">
          <a class="dropdown-item" href="{{route('home')}}">TNPL Home</a>
          <a class="dropdown-item" href="{{route('home')}}">TNPL Schedule 2023</a><a class="dropdown-item"
            href="{{route('home')}}">TNPL Points Table 2023</a><a class="dropdown-item"
            href="{{route('home')}}">TNPL Stats 2023</a><a class="dropdown-item"
            href="{{route('home')}}">TNPL Winners List</a></div>
      </div>
    </li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="{{route('home')}}">LPL Auction</a></li>
    <li><a class="d-none" href="{{route('home')}}">W-Emerging Asia Cup Home</a><a class="d-none"
        href="{{route('home')}}">W-Emerging Asia Cup Schedule
        2023</a><a class="d-none" href="{{route('home')}}">W-Emerging Asia Cup
        Points Table 2023</a>
      <div id="uniq648979ca4c330e9fa30f2968" class="dropdown"><button id="648979ca4c330e9fa30f2968"
          aria-expanded="false" type="button"
          class="style_navMore__r_nff text-uppercase font-bold d-block dropdown-toggle btn btn-link">W-Emerging Asia
          Cup</button>
        <div id="648a9fda36430c395edf2678" x-placement="bottom-start" aria-labelledby="648a9fda36430c395edf2678"
          class="style_dropdownMenu__lVfAZ dropdown-menu " data-popper-reference-hidden="false"
          data-popper-escaped="false" data-popper-placement="bottom-start" style="position: absolute;"><a
            class="dropdown-item" href="{{route('home')}}">W-Emerging Asia Cup Home</a><a
            class="dropdown-item" href="{{route('home')}}">W-Emerging Asia Cup
            Schedule 2023</a><a class="dropdown-item"
            href="{{route('home')}}">W-Emerging Asia Cup Points Table 2023</a></div>
      </div>
    </li>
    <li>
      <div id="uniq648979ca4c330e9fa30f296c" class="dropdown"><button id="648979ca4c330e9fa30f296c"
          aria-expanded="false" type="button"
          class="style_navMore__r_nff text-uppercase font-bold d-block dropdown-toggle btn btn-link">SPL</button>

        <div id="648a9fda36430c395edf2671" x-placement="bottom-start" class="style_dropdownMenu__lVfAZ dropdown-menu "
          data-popper-escaped="false" data-popper-placement="bottom-start" style="position: absolute; "><a
            class="dropdown-item" href="/t20/saurashtra-premier-league/?ref=hm">SPL Home</a><a class="dropdown-item"
            href="/t20/saurashtra-premier-league/standings/?ref=hm">SPL Schedule 2023</a></div>
      </div>
    </li>
    <li>
      <a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/upcoming-cricket-schedule/?ref=hm">Blast</a>
    </li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/upcoming-cricket-schedule/?ref=hm">MPL Home</a></li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/fantasy-cricket-tips/?ref=hm">Fantasy Tips</a></li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/cricket-match-predictions/?ref=hm">Predictions</a></li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="/upcoming-cricket-schedule/?ref=hm">Fixtures</a></li>
    <li>

      <div id="uniq648979ca4c330e9fa30f297d" class="dropdown"><button id="648979ca4c330e9fa30f297d"
          aria-expanded="false" type="button"
          class="style_navMore__r_nff text-uppercase font-bold d-block dropdown-toggle btn btn-link">☰</button>
        <div id="648a9fda36430c395edf2686" x-placement="bottom-end" aria-labelledby="648a9fda36430c395edf2686"
          class="style_dropdownMenu__lVfAZ dropdown-menu " data-popper-reference-hidden="false"
          data-popper-escaped="false" data-popper-placement="bottom-end"
          style="position: absolute; right : 0; left : unset; ">
          @foreach (getSeasons() as $val)
          <a class="dropdown-item" href="{{ route('season.details',$val['cid']) }}">{{$val['title']}}</a>
          @endforeach
        </div>
    </li>
  </ul>
</div> -->

<div class="style_headerMenu__YNVcR xsmall-text d-flex text-nowrap">
  <ul class="d-flex mb-0 m-auto">
    
   <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
         href="{{route('home')}}">Home</a></li>
   <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="{{route('prediction')}}">Match Predictions</a></li>
    <li>
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="{{route('fantasypreview')}}">Fantasy Preview</a></li>
    <li>
      <a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="{{route('newslist')}}">News</a>
    </li>
   
    
     <li>
      <a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="{{route('worldcup')}}">IPL</a>
    </li>
    
    
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="{{route('fixture')}}">Fixtures</a></li>

    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="{{route('record')}}">Record & Stats</a></li> 
    
    
    <li><a class="style_navItem__o66ST   text-uppercase font-bold d-block" target="_self"
        href="{{route('poll')}}">Poll</a></li>   
    
  </ul>
</div>