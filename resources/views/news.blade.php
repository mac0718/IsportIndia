@extends('layout.main')
@section('title')
{!! isset($res->title) ? Str::limit($res->title, 30, ' ...') : 'Cricket Teams, Stats, Latest News, Match Predictions, Fantasy Tips
&amp;amp; Results' !!}
@endsection

@section('meta_tags')
@php
$url = isset($res) ? url()->current() : 'https://isportindia.com/';
$image = isset($res) ? getImageUrl($res->img) : 'https://isportindia.com/images/OG.jpg';
$description = isset($res) ? Str::limit($res->short_description, 40, ' ...') : 'Get cricket match updates (Domestic &amp;amp; International), team stats, series results, fixtures, latest news, top stories, match preview, predictions, review, results, fantasy tips, statistical highlights, videos and complete cricket analysis along with ICC Cricket player rankings on isportindia';
@endphp

<meta property="og:url" content="{{ $url }}" />
<meta property="og:image" content="{{ $image }}" />
<meta property="og:description" content="{!! $description !!}" />
@endsection
@section('content')
<div style="height: auto">
  <section class="style_scorecardSlider__sPmoX scorecard-slider pt-0 overflow-hidden pb-3">
    <div class="container">
      <div class="style_scorecardNav__b0jAi xsmall-text text-nowrap scroll-list d-flex pb-1">
        <div class="d-flex m-auto">
          @php


          $matchesByFormat = [];
          $liveMatchesByFormat = [];

          foreach ($matchs as $match) {
          $format = $match['format'];

          switch ($format) {
          case 1:
          // International matches
          $matchesByFormat[] = $match;
          break;
          case 2:
          // T20 leagues
          $matchesByFormat[] = $match;
          break;
          case 3:
          // Domestic matches
          $matchesByFormat[] = $match;
          break;
          // Add more cases if there are other formats
          default:
          // Handle other formats if needed
          break;
          }
          }

          foreach ($live as $match) {
          $format = $match['format'];

          switch ($format) {
          case 1:
          // International matches
          $liveMatchesByFormat[] = $match;
          break;
          case 2:
          // T20 leagues
          $liveMatchesByFormat[] = $match;
          break;
          case 3:
          // Domestic matches
          $liveMatchesByFormat[] = $match;
          break;
          // Add more cases if there are other formats
          default:
          // Handle other formats if needed
          break;
          }
          }
          $slugs = array_unique(Arr::pluck($matchesByFormat, 'short_title'));
          $slu = array_unique(Arr::pluck($liveMatchesByFormat, 'short_title'));
          @endphp
          <button type="button" class="style_active__3p7K4 font-bold text-uppercase rounded-3 btn btn-link category_button" onclick="categoryClickHandler('all')" category="all">
            All Matches ({{count($slu) + count($slugs)}})
          </button>
          @foreach ($slu as $series)
          <button category="{{Str::slug($series)}}" type="button" class="font-bold text-uppercase btn btn-link category_button" onclick="categoryClickHandler('{{ Str::slug($series) }}')">{{$series}}</button>
          @endforeach
          @foreach ($slugs as $series)
          <button category="{{Str::slug($series)}}" type="button" class="font-bold text-uppercase btn btn-link category_button" onclick="categoryClickHandler('{{ Str::slug($series) }}')">{{$series}}</button>
          @endforeach
        </div>
      </div>

      <div class="style_slider__UbtNO style_destroy__J7ab0 style_sliderMain__Q3_kE position-relative">
        <button style="display:none" onclick="scrollContent(-1)" id="scroll_1_prev" class="style_arrow__bXMF0 style_prev__wdbiv position-absolute top-50 start-0">Prev</button>
        <div id="all_matches">
          <div class="all-slider-track style_inner__csGhV slider-track d-flex liveMatchesContainer" style="gap: 0" id="c-slider">
            @if($liveMatches)
            @foreach ($liveMatches as $match)
            @if(count($match) > 0)
            @foreach ($match as $val)
            @php
            $class = '';
            if($val['status_str'] == 'Live'){
            $class = 'text-danger';
            }elseif($val['status_str'] == 'Scheduled'){
            $class = 'text-primary';
            }else{
            $class = 'text-success';
            }
            @endphp
            <div category="{{ Str::slug($val['short_title']) }}" class="banner_match">
              <div class="style_item__sjAWf p-2 mx-1 font-semi">
                <div class="position-relative">
                  <a class="style_scoreCardLink__Clpdb position-absolute top-0 start-0 opacity-0 w-100 h-100" href="{{ route('score.card',$val['match_id']) }}">{{$val['title'] }}</a>
                  <div class="d-flex justify-content-between align-items-center style_head__CLILr">
                    <p>
                      <span class="danger-text text-capitalize {{$class}}" data-v="{{$val['status_str']}}">• {{$val['status_str']}} </span><span class="style_dark__duIOp"> -
                        {{$val['subtitle']}}</span> -
                      {{$val['venue']['name']}}
                    </p>
                  </div>
                  <p class="style_series__ggX10 font-medium text-nowrap overflow-hidden my-2">
                    Match Day: {{ date('M d, Y - l', strtotime($val['date_start_ist'])) }}
                  </p>
                  <p class="style_series__ggX10 font-medium text-nowrap overflow-hidden my-2">
                    {{$val['short_title']}}
                  </p>
                  <div class="style_head__CLILr">
                    <div class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
                      <div class="style_teamName__mcMHu d-flex align-items-center" style="flex:1;">
                        <div class="style_teamFlag__yzzhu rounded-circle overflow-hidden">
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
                      ">
                            </span><img alt="{{$val['teama']['name']}}" src="{{ $val['teama']['logo_url'] }}" decoding="async" data-nimg="responsive" style="
                        position: absolute;
                        inset: 0px;
                        padding: 0px;
                        border: none;
                        display: block;
                        width: 0px;
                        min-width: 100%;
                        max-width: 100%;
                        max-height: 100%;" sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px" srcset="{{$val['teama']['logo_url']}} 40w,{{$val['teama']['logo_url']}} 80w,{{$val['teama']['logo_url']}} 120w,{{$val['teama']['logo_url']}} 240w,{{$val['teama']['logo_url']}} 450w,{{$val['teama']['logo_url']}}  992w,{{$val['teama']['logo_url']}} 1200w,{{$val['teama']['logo_url']}} 1900w">&gt;
                          </span>
                        </div>
                        <span>{{$val['teama']['name']}}</span>
                        <span style="flex:1;text-align:right;">{{$val['teama']['scores_full']}}</span>

                      </div>

                    </div>
                    <div class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
                      <div class="style_teamName__mcMHu d-flex align-items-center style=" flex:1;">
                        <div class="style_teamFlag__yzzhu rounded-circle overflow-hidden">
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
                      "></span><img alt="{{$val['teamb']['name']}}" src="{{ $val['teamb']['logo_url'] }}" decoding="async" data-nimg="responsive" style=" position: absolute;
                              inset: 0px;
                              padding: 0px;
                              border: none;
                              display: block;
                              width: 0px;
                              min-width: 100%;
                              max-width: 100%;
                              max-height: 100%;" sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px" srcset="{{ $val['teamb']['logo_url'] }} 40w,{{ $val['teamb']['logo_url'] }} 80w,{{ $val['teamb']['logo_url'] }} 120w,{{ $val['teamb']['logo_url'] }} 240w,{{ $val['teamb']['logo_url'] }} 450w,{{ $val['teamb']['logo_url'] }} 992w,{{ $val['teamb']['logo_url'] }} 1200w,{{ $val['teamb']['logo_url'] }} 1900w">&gt;
                          </span>
                        </div>
                        <span>{{$val['teamb']['name']}}</span>
                        <span style="flex:1;text-align:right;">{{$val['teamb']['scores_full']}}</span>

                      </div>
                      <p></p>
                    </div>
                  </div>
                  <p class="style_result__gMwNw danger-text text-nowrap font-medium my-2 overflow-hidden">
                    {{$val['status_note']}}
                  </p>
                </div>

                <div class="style_btnList__BelA5 d-flex text-center text-uppercase">
                  <a class="mx-1 p-1 flex-grow-1 rounded-pill" href="{{route('fixture') }}">Fixtures</a><a class="mx-1 p-1 flex-grow-1 rounded-pill" href="{{route('score.card',$val['match_id']) }}" }}">Standings</a>
                </div>
              </div>
            </div>
            @endforeach
            @endif
            @endforeach
            @endif
            @if($liveMatchesByFormat)
            @foreach ($liveMatchesByFormat as $val)
            @php
            $class = '';
            if($val['status_str'] == 'Live'){
            $class = 'text-danger';
            }elseif($val['status_str'] == 'Scheduled'){
            $class = 'text-primary';
            }else{
            $class = 'text-success';
            }
            @endphp
            <div category="{{ Str::slug($val['short_title']) }}" class="banner_match">
              <div class="style_item__sjAWf p-2 mx-1 font-semi">
                <div class="position-relative">
                  <a class="style_scoreCardLink__Clpdb position-absolute top-0 start-0 opacity-0 w-100 h-100" href="{{ route('score.card',$val['match_id']) }}">{{$val['title'] }}</a>
                  <div class="d-flex justify-content-between align-items-center style_head__CLILr">
                    <p>
                      <span class="danger-text text-capitalize  {{$class}}" data-v="{{$val['status_str']}}">• {{$val['status_str']}} </span><span class="style_dark__duIOp"> -
                        {{$val['subtitle']}}</span> -
                      {{$val['venue']['name']}}
                    </p>
                  </div>
                  <p class="style_series__ggX10 font-medium text-nowrap overflow-hidden my-2">
                    Match Day: {{ date('M d, Y - l', strtotime($val['date_start_ist'])) }}
                  </p>
                  <p class="style_series__ggX10 font-medium text-nowrap overflow-hidden my-2">
                    {{$val['short_title']}}
                  </p>
                  <div class="style_head__CLILr">
                    <div class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
                      <div class="style_teamName__mcMHu d-flex align-items-center" style="flex:1;">
                        <div class="style_teamFlag__yzzhu rounded-circle overflow-hidden">
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
                      ">
                            </span><img alt="{{$val['teama']['name']}}" src="{{ $val['teama']['logo_url'] }}" decoding="async" data-nimg="responsive" style="
                        position: absolute;
                        inset: 0px;
                        padding: 0px;
                        border: none;
                        display: block;
                        width: 0px;
                        min-width: 100%;
                        max-width: 100%;
                        max-height: 100%;" sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px" srcset="{{$val['teama']['logo_url']}} 40w,{{$val['teama']['logo_url']}} 80w,{{$val['teama']['logo_url']}} 120w,{{$val['teama']['logo_url']}} 240w,{{$val['teama']['logo_url']}} 450w,{{$val['teama']['logo_url']}}  992w,{{$val['teama']['logo_url']}} 1200w,{{$val['teama']['logo_url']}} 1900w">&gt;
                          </span>
                        </div>
                        <span>{{$val['teama']['name']}}</span>
                        <span style="flex:1;text-align:right;">{{$val['teama']['scores_full']}}</span>

                      </div>

                    </div>
                    <div class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
                      <div class="style_teamName__mcMHu d-flex align-items-center style=" flex:1;">
                        <div class="style_teamFlag__yzzhu rounded-circle overflow-hidden">
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
                      "></span><img alt="{{$val['teamb']['name']}}" src="{{ $val['teamb']['logo_url'] }}" decoding="async" data-nimg="responsive" style=" position: absolute;
                              inset: 0px;
                              padding: 0px;
                              border: none;
                              display: block;
                              width: 0px;
                              min-width: 100%;
                              max-width: 100%;
                              max-height: 100%;" sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px" srcset="{{ $val['teamb']['logo_url'] }} 40w,{{ $val['teamb']['logo_url'] }} 80w,{{ $val['teamb']['logo_url'] }} 120w,{{ $val['teamb']['logo_url'] }} 240w,{{ $val['teamb']['logo_url'] }} 450w,{{ $val['teamb']['logo_url'] }} 992w,{{ $val['teamb']['logo_url'] }} 1200w,{{ $val['teamb']['logo_url'] }} 1900w">&gt;
                          </span>
                        </div>
                        <span>{{$val['teamb']['name']}}</span>
                        <span style="flex:1;text-align:right;">{{$val['teamb']['scores_full']}}</span>

                      </div>
                      <p></p>
                    </div>
                  </div>
                  <p class="style_result__gMwNw danger-text text-nowrap font-medium my-2 overflow-hidden">
                    {{$val['status_note']}}
                  </p>
                </div>

                <div class="style_btnList__BelA5 d-flex text-center text-uppercase">
                  <a class="mx-1 p-1 flex-grow-1 rounded-pill" href="{{route('fixture') }}">Fixtures</a><a class="mx-1 p-1 flex-grow-1 rounded-pill" href="{{route('score.card',$val['match_id']) }}" }}">Standings</a>
                </div>
              </div>
            </div>
            @endforeach
            @endif
            @foreach ($matchesByFormat as $val)
            @php
            $class = '';
            if($val['status_str'] == 'Live'){
            $class = 'text-danger';
            }elseif($val['status_str'] == 'Scheduled'){
            $class = 'text-primary';
            }else{
            $class = 'text-success';
            }
            @endphp
            <div category="{{ Str::slug($val['short_title']) }}" class="banner_match">
              <div class="style_item__sjAWf p-2 mx-1 font-semi">
                <div class="position-relative">
                  <a class="style_scoreCardLink__Clpdb position-absolute top-0 start-0 opacity-0 w-100 h-100" href="{{ route('upcoming',$val['match_id']) }}">{{$val['title'] }}</a>
                  <div class="d-flex justify-content-between align-items-center style_head__CLILr">
                    <p>
                      <span class="danger-text text-capitalize {{$class}}" data-v="{{$val['status_str']}}">• {{$val['status_str']}} </span><span class="style_dark__duIOp"> -
                        {{$val['subtitle']}}</span> -
                      {{$val['venue']['name']}}
                    </p>
                  </div>
                  <p class="style_series__ggX10 font-medium text-nowrap overflow-hidden my-2">
                    Match Day: {{ date('M d, Y - l', strtotime($val['date_start_ist'])) }}
                  </p>
                  <p class="style_series__ggX10 font-medium text-nowrap overflow-hidden my-2">
                    {{$val['short_title']}}
                  </p>
                  <div class="style_head__CLILr">
                    <div class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
                      <div class="style_teamName__mcMHu d-flex align-items-center">
                        <div class="style_teamFlag__yzzhu rounded-circle overflow-hidden">
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
                      ">
                            </span><img alt="{{$val['teama']['name']}}" src="{{ $val['teama']['logo_url'] }}" decoding="async" data-nimg="responsive" style="
                        position: absolute;
                        inset: 0px;
                        padding: 0px;
                        border: none;
                        display: block;
                        width: 0px;
                        min-width: 100%;
                        max-width: 100%;
                        max-height: 100%;" sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px" srcset="{{$val['teama']['logo_url']}} 40w,{{$val['teama']['logo_url']}} 80w,{{$val['teama']['logo_url']}} 120w,{{$val['teama']['logo_url']}} 240w,{{$val['teama']['logo_url']}} 450w,{{$val['teama']['logo_url']}}  992w,{{$val['teama']['logo_url']}} 1200w,{{$val['teama']['logo_url']}} 1900w">&gt;
                          </span>
                        </div>
                        <span>{{$val['teama']['name']}}</span>


                      </div>
                      <p></p>
                    </div>
                    <div class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
                      <div class="style_teamName__mcMHu d-flex align-items-center">
                        <div class="style_teamFlag__yzzhu rounded-circle overflow-hidden">
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
                      "></span><img alt="{{$val['teamb']['name']}}" src="{{ $val['teamb']['logo_url'] }}" decoding="async" data-nimg="responsive" style=" position: absolute;
                              inset: 0px;
                              padding: 0px;
                              border: none;
                              display: block;
                              width: 0px;
                              min-width: 100%;
                              max-width: 100%;
                              max-height: 100%;" sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px" srcset="{{ $val['teamb']['logo_url'] }} 40w,{{ $val['teamb']['logo_url'] }} 80w,{{ $val['teamb']['logo_url'] }} 120w,{{ $val['teamb']['logo_url'] }} 240w,{{ $val['teamb']['logo_url'] }} 450w,{{ $val['teamb']['logo_url'] }} 992w,{{ $val['teamb']['logo_url'] }} 1200w,{{ $val['teamb']['logo_url'] }} 1900w">&gt;
                          </span>
                        </div>
                        <span>{{$val['teamb']['name']}}</span>
                      </div>
                      <p></p>
                    </div>
                  </div>
                  <p class="style_result__gMwNw danger-text text-nowrap font-medium my-2 overflow-hidden">
                    {{$val['status_note']}}
                  </p>
                </div>
                <div class="style_btnList__BelA5 d-flex text-center text-uppercase">
                  <a class="mx-1 p-1 flex-grow-1 rounded-pill" href="{{route('fixture') }}">Fixtures</a><a class="mx-1 p-1 flex-grow-1 rounded-pill" href="{{ route('upcoming',$val['match_id']) }}">Standings</a>
                </div>
              </div>
            </div>
            @endforeach
            @if($t20)
            @foreach($t20 as $val)
            @php
            $class = '';
            if($val['status_str'] == 'Live'){
            $class = 'text-danger';
            }elseif($val['status_str'] == 'Scheduled'){
            $class = 'text-primary';
            }else{
            $class = 'text-success';
            }
            @endphp
            <div category="{{ Str::slug($val['short_title']) }}" class="banner_match">
              <div class="style_item__sjAWf p-2 mx-1 font-semi">
                <div class="position-relative">
                  <a class="style_scoreCardLink__Clpdb position-absolute top-0 start-0 opacity-0 w-100 h-100" href="{{ route('upcoming',$val['match_id']) }}">{{$val['title'] }}</a>
                  <div class="d-flex justify-content-between align-items-center style_head__CLILr">
                    <p>
                      <span class="danger-text text-capitalize {{$class}}" data-v="{{$val['status_str']}}">• {{$val['status_str']}} </span><span class="style_dark__duIOp"> -
                        {{$val['subtitle']}}</span> -
                      {{$val['venue']['name']}}
                    </p>
                  </div>
                  <p class="style_series__ggX10 font-medium text-nowrap overflow-hidden my-2">
                    Match Day: {{ date('M d, Y - l', strtotime($val['date_start_ist'])) }}
                  </p>
                  <p class="style_series__ggX10 font-medium text-nowrap overflow-hidden my-2">
                    {{$val['short_title']}}
                  </p>
                  <div class="style_head__CLILr">
                    <div class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
                      <div class="style_teamName__mcMHu d-flex align-items-center">
                        <div class="style_teamFlag__yzzhu rounded-circle overflow-hidden">
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
                      ">
                            </span><img alt="{{$val['teama']['name']}}" src="{{ $val['teama']['logo_url'] }}" decoding="async" data-nimg="responsive" style="
                        position: absolute;
                        inset: 0px;
                        padding: 0px;
                        border: none;
                        display: block;
                        width: 0px;
                        min-width: 100%;
                        max-width: 100%;
                        max-height: 100%;" sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px" srcset="{{$val['teama']['logo_url']}} 40w,{{$val['teama']['logo_url']}} 80w,{{$val['teama']['logo_url']}} 120w,{{$val['teama']['logo_url']}} 240w,{{$val['teama']['logo_url']}} 450w,{{$val['teama']['logo_url']}}  992w,{{$val['teama']['logo_url']}} 1200w,{{$val['teama']['logo_url']}} 1900w">&gt;
                          </span>
                        </div>
                        <span>{{$val['teama']['name']}}</span>


                      </div>
                      <p></p>
                    </div>
                    <div class="style_team__wJ2ZX d-flex justify-content-between position-relative xsmall-text">
                      <div class="style_teamName__mcMHu d-flex align-items-center">
                        <div class="style_teamFlag__yzzhu rounded-circle overflow-hidden">
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
                      "></span><img alt="{{$val['teamb']['name']}}" src="{{ $val['teamb']['logo_url'] }}" decoding="async" data-nimg="responsive" style=" position: absolute;
                              inset: 0px;
                              padding: 0px;
                              border: none;
                              display: block;
                              width: 0px;
                              min-width: 100%;
                              max-width: 100%;
                              max-height: 100%;" sizes="(max-width: 767px) 24px, (max-width: 991px) 24px, (max-width: 1190px) 200px, 24px" srcset="{{ $val['teamb']['logo_url'] }} 40w,{{ $val['teamb']['logo_url'] }} 80w,{{ $val['teamb']['logo_url'] }} 120w,{{ $val['teamb']['logo_url'] }} 240w,{{ $val['teamb']['logo_url'] }} 450w,{{ $val['teamb']['logo_url'] }} 992w,{{ $val['teamb']['logo_url'] }} 1200w,{{ $val['teamb']['logo_url'] }} 1900w">&gt;
                          </span>
                        </div>
                        <span>{{$val['teamb']['name']}}</span>
                      </div>
                      <p></p>
                    </div>
                  </div>
                  <p class="style_result__gMwNw danger-text text-nowrap font-medium my-2 overflow-hidden">
                    {{$val['status_note']}}
                  </p>
                </div>
                <div class="style_btnList__BelA5 d-flex text-center text-uppercase">
                  <a class="mx-1 p-1 flex-grow-1 rounded-pill" href="{{route('fixture') }}">Fixtures</a><a class="mx-1 p-1 flex-grow-1 rounded-pill" href="{{ route('upcoming',$val['match_id']) }}">Standings</a>
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
        <div style="display: none;" id="category_matches">
          <div id="category-slider-track" class="style_inner__csGhV slider-track d-flex" style="gap: 0" id="c-slider">
          </div>
        </div>
        <div id="scroll_1_next" onclick="scrollContent(1)" class="style_arrow__bXMF0 undefined position-absolute top-50 end-0">
          Next
        </div>
      </div>
    </div>
  </section>
</div>

<div class="common-section">
  <div class="style_homeContainer__89N3q container">
    <div class="row">




      <section class="style_homeArticles__4e_Na " id="latestUpdateSection">
        <div class="line-title mb-2 mb-md-4 text-uppercase text-center overflow-hidden">
          <h4 class="rounded-pill position-relative d-inline-block">News</h4>
        </div>

        @if ($news)
        @foreach($news as $article)
        @if($article->type=="highlighter")
        <article id="{{$article->id}}" class="style_article__IayJx style_articleMedium__ME07j undefined">
          <div class="row-8 row">
            <div class="col-sm-6 col-5">
              <a href="{{ route('news.details',[$article->slug]) }}">
                <div class="style_postimg__ftSiV undefined block-img">
                  <span style="
                                  box-sizing: border-box;
                                  display: block;
                                  overflow: hidden;
                                  width: initial;
                                  height: initial;
                                  background: none;
                                  opacity: 1;
                                  border: 0;
                                  margin: 0;
                                  padding: 0;
                                  position: relative;
                                "><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    padding-top: 62.5%;
                                  "></span>
                    <img alt="Andre Russell and Sunil Narine" src="{{getImageUrl($article->img)}}" decoding="async" data-nimg="responsive" style="
                                    position: absolute;
                                    inset: 0px;
                                    box-sizing: border-box;
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
                                  " sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px" />
                  </span>
                </div>
              </a>
            </div>
            <div class="d-flex flex-column justify-content-between col-sm-6 col-7">
              <div>
                <h3 class="small-head mb-1">
                  <a href="{{ route('news.details',[$article->slug]) }}">{{
                        $article->title }}</a>
                </h3>
                <p class="style_desc__jLYw_ style_desc__zP5qm">
                  {{ $article->short_description }}
                </p>
              </div>
              <div class="style_articleInfo__WqisT undefined d-flex">
                <span class="d-flex align-items-center"><span class="style_icon__Ukkjh undefined d-block"><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    overflow: hidden;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    position: relative;
                                  "><span style="
                                      box-sizing: border-box;
                                      display: block;
                                      width: initial;
                                      height: initial;
                                      background: none;
                                      opacity: 1;
                                      border: 0;
                                      margin: 0;
                                      padding: 0;
                                      padding-top: 100%;
                                    "></span>
                      <img alt="Calender" src="/_next/static/media/calender-icon.23e624a9.svg" decoding="async" data-nimg="responsive" style="
                                      position: absolute;
                                      top: 0;
                                      left: 0;
                                      bottom: 0;
                                      right: 0;
                                      box-sizing: border-box;
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
                                    " sizes="100vw" /> </span></span>{{
                      Carbon\Carbon::parse($article->created_at)->format('d M
                      Y') }}</span><span class="d-flex align-items-center"><span class="style_icon__Ukkjh undefined d-block"><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    overflow: hidden;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    position: relative;
                                  "><span style="
                                      box-sizing: border-box;
                                      display: block;
                                      width: initial;
                                      height: initial;
                                      background: none;
                                      opacity: 1;
                                      border: 0;
                                      margin: 0;
                                      padding: 0;
                                      padding-top: 100%;
                                    "></span><img alt="Clock" src="/_next/static/media/clock-icon.c7a46c6e.svg" decoding="async" data-nimg="responsive" style="
                                      position: absolute;
                                      top: 0;
                                      left: 0;
                                      bottom: 0;
                                      right: 0;
                                      box-sizing: border-box;
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
                                    " sizes="100vw" /> </span></span>{{$article->min }} Min </span>
              </div>
            </div>
          </div>
        </article>



        {{-- NEWS HIGHLIGHTER END --}}

        {{--NEWS NORMAL START --}}

        @else
        <article id="{{$article->id}}" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
          <div class="row-8 row">
            <div class="col-sm-3 col-5">
              <a class="style_postimg__ftSiV undefined d-block block-img" href="{{route('news.details',[$article->slug])}}"><span style="
                              box-sizing: border-box;
                              display: block;
                              overflow: hidden;
                              width: initial;
                              height: initial;
                              background: none;
                              opacity: 1;
                              border: 0;
                              margin: 0;
                              padding: 0;
                              position: relative;
                            "><span style="
                                box-sizing: border-box;
                                display: block;
                                width: initial;
                                height: initial;
                                background: none;
                                opacity: 1;
                                border: 0;
                                margin: 0;
                                padding: 0;
                                padding-top: 62.5%;
                              "></span><img alt="India Red" src="{{ getImageUrl($article->img) }}" decoding="async" data-nimg="responsive" style="
                                position: absolute;
                                inset: 0px;
                                box-sizing: border-box;
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
                              " sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px" />
                </span></a>
            </div>
            <div class="d-flex flex-column justify-content-between col-sm-9 col-7">
              <div>
                <h4 class="small-head mb-2">
                  <a href="{{ route('news.details',[$article->slug]) }}">
                    {{ $article->title }}
                  </a>
                </h4>
              </div>
              <div class="style_articleInfo__WqisT d-flex">
                <span class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span style="
                                  box-sizing: border-box;
                                  display: block;
                                  overflow: hidden;
                                  width: initial;
                                  height: initial;
                                  background: none;
                                  opacity: 1;
                                  border: 0;
                                  margin: 0;
                                  padding: 0;
                                  position: relative;
                                "><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    padding-top: 100%;
                                  "></span><img alt="Calender" src="/_next/static/media/calender-icon.23e624a9.svg" decoding="async" data-nimg="responsive" style="
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    bottom: 0;
                                    right: 0;
                                    box-sizing: border-box;
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
                                  " sizes="100vw" /></span></span>{{ Carbon\Carbon::parse($article->created_at)->format('d
                      M Y') }}</span><span class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span style="
                                  box-sizing: border-box;
                                  display: block;
                                  overflow: hidden;
                                  width: initial;
                                  height: initial;
                                  background: none;
                                  opacity: 1;
                                  border: 0;
                                  margin: 0;
                                  padding: 0;
                                  position: relative;
                                "><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    padding-top: 100%;
                                  "></span><img alt="Clock" src="/_next/static/media/clock-icon.c7a46c6e.svg" decoding="async" data-nimg="responsive" style="
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    bottom: 0;
                                    right: 0;
                                    box-sizing: border-box;
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
                                  " sizes="100vw" /></span></span>{{ $article->min }} Min
                </span>
              </div>
            </div>
          </div>
        </article>

        @endif
        @endforeach
        <br>
      </section>
      @if ($news->count() >= 5)

      <div style="text-align: center">
        <button id="loadMoreLatestBtn" style="border:none;padding: 6px 12px;background: var(--theme-color-light);color:white" class="style_navLink__aDOS0 style_fillBtn__xma7g rounded-pill">Load More</button>
      </div>
      @endif
      @endif
    </div>
  </div>
</div>

<script>
  function updateLiveMatches() {
    $.ajax({
      url: '/liveScoreUpdates', // Replace with the actual URL endpoint for fetching live matches
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        // Replace the existing content with the updated live matches
        $('.liveMatchesContainer').html(data.html);
      },
      error: function(error) {
        console.error('Error fetching live matches:', error);
      }
    });
  }

  // Call the function every 30 seconds
  setInterval(updateLiveMatches, 30000);
</script>
<script>
  var offset = 5; // Initial offset
  var limit = 5; // Number of items to load each time

  document.getElementById('loadMoreLatestBtn').addEventListener('click', function() {
    loadMoreLatest();
  });

  function loadMoreLatest() {
    // Make an AJAX request to fetch more data
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '{{ route("loadMoreNews") }}?offset=' + offset + '&limit=' + limit, true);

    xhr.onload = function() {
      if (xhr.status >= 200 && xhr.status < 300) {
        // Parse the JSON response
        var response = JSON.parse(xhr.responseText);

        // Append the new data to the existing content
        var latestUpdateSection = document.getElementById('latestUpdateSection');
        response.news.forEach(function(article) {
          var articleHTML = '';
          var imgSrc = article.img ? 'https://isportindia.com/storage/app/public/' + article.img : '';
          var url = "/news/" + article.slug;
          var date = new Date(article.created_at);
          var options = {
            day: '2-digit',
            year: 'numeric',
            month: 'long'
          };
          var formattedDate = date.toLocaleDateString('en-US', options);

          if (article.type === "highlighter") {
            articleHTML += `
            <article id="${article.id}" class="style_article__IayJx style_articleMedium__ME07j undefined">
              <div class="row-8 row">
                <div class="col-sm-3 col-5">
                  <a href="${url}">
                    <div class="style_postimg__ftSiV undefined block-img">
                      <span style="
                                      box-sizing: border-box;
                                      display: block;
                                      overflow: hidden;
                                      width: initial;
                                      height: initial;
                                      background: none;
                                      opacity: 1;
                                      border: 0;
                                      margin: 0;
                                      padding: 0;
                                      position: relative;
                                    "><span style="
                                        box-sizing: border-box;
                                        display: block;
                                        width: initial;
                                        height: initial;
                                        background: none;
                                        opacity: 1;
                                        border: 0;
                                        margin: 0;
                                        padding: 0;
                                        padding-top: 62.5%;
                                      "></span>
                        <img alt="Andre Russell and Sunil Narine" src="${imgSrc}" decoding="async" data-nimg="responsive" style="
                                        position: absolute;
                                        inset: 0px;
                                        box-sizing: border-box;
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
                                      " sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px" />
                      </span>
                    </div>
                  </a>
                </div>
                <div class="d-flex flex-column justify-content-between col-sm-6 col-7">
                  <div>
                    <h3 class="small-head mb-1">
                      <a href="${url}">${article.title}</a>
                    </h3>
                    <p class="style_desc__jLYw_ style_desc__zP5qm">
                      ${article.short_description}
                    </p>
                  </div>
                  <div class="style_articleInfo__WqisT undefined d-flex">
                    <span class="d-flex align-items-center"><span class="style_icon__Ukkjh undefined d-block"><span style="
                                        box-sizing: border-box;
                                        display: block;
                                        overflow: hidden;
                                        width: initial;
                                        height: initial;
                                        background: none;
                                        opacity: 1;
                                        border: 0;
                                        margin: 0;
                                        padding: 0;
                                        position: relative;
                                      "><span style="
                                          box-sizing: border-box;
                                          display: block;
                                          width: initial;
                                          height: initial;
                                          background: none;
                                          opacity: 1;
                                          border: 0;
                                          margin: 0;
                                          padding: 0;
                                          padding-top: 100%;
                                        "></span>
                          <img alt="Calender" src="/_next/static/media/calender-icon.23e624a9.svg" decoding="async" data-nimg="responsive" style="
                                          position: absolute;
                                          top: 0;
                                          left: 0;
                                          bottom: 0;
                                          right: 0;
                                          box-sizing: border-box;
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
                                        " sizes="100vw" /> </span></span>${formattedDate}</span><span class="d-flex align-items-center"><span class="style_icon__Ukkjh undefined d-block"><span style="
                                        box-sizing: border-box;
                                        display: block;
                                        overflow: hidden;
                                        width: initial;
                                        height: initial;
                                        background: none;
                                        opacity: 1;
                                        border: 0;
                                        margin: 0;
                                        padding: 0;
                                        position: relative;
                                      "><span style="
                                          box-sizing: border-box;
                                          display: block;
                                          width: initial;
                                          height: initial;
                                          background: none;
                                          opacity: 1;
                                          border: 0;
                                          margin: 0;
                                          padding: 0;
                                          padding-top: 100%;
                                        "></span><img alt="Clock" src="/_next/static/media/clock-icon.c7a46c6e.svg" decoding="async" data-nimg="responsive" style="
                                          position: absolute;
                                          top: 0;
                                          left: 0;
                                          bottom: 0;
                                          right: 0;
                                          box-sizing: border-box;
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
                                        " sizes="100vw" /> </span></span>${article.min} Min </span>
                  </div>
                </div>
              </div>
            </article>`;
          } else {
            articleHTML += `
            <article id="${article.id}" class="style_article__IayJx style_articleSmall__SMJc6 undefined">
              <div class="row-8 row">
                <div class="col-sm-3 col-5">
                  <a class="style_postimg__ftSiV undefined d-block block-img" href="${url}"><span style="
                                  box-sizing: border-box;
                                  display: block;
                                  overflow: hidden;
                                  width: initial;
                                  height: initial;
                                  background: none;
                                  opacity: 1;
                                  border: 0;
                                  margin: 0;
                                  padding: 0;
                                  position: relative;
                                "><span style="
                                    box-sizing: border-box;
                                    display: block;
                                    width: initial;
                                    height: initial;
                                    background: none;
                                    opacity: 1;
                                    border: 0;
                                    margin: 0;
                                    padding: 0;
                                    padding-top: 62.5%;
                                  "></span><img alt="India Red" src="${imgSrc}" decoding="async" data-nimg="responsive" style="
                                    position: absolute;
                                    inset: 0px;
                                    box-sizing: border-box;
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
                                  " sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px" />
                    </span></a>
                </div>
                <div class="d-flex flex-column justify-content-between col-sm-9 col-7">
                  <div>
                    <h4 class="small-head mb-2">
                      <a href="${url}">
                      ${article.title}
                      </a>
                    </h4>
                  </div>
                  <div class="style_articleInfo__WqisT d-flex">
                    <span class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span style="
                                      box-sizing: border-box;
                                      display: block;
                                      overflow: hidden;
                                      width: initial;
                                      height: initial;
                                      background: none;
                                      opacity: 1;
                                      border: 0;
                                      margin: 0;
                                      padding: 0;
                                      position: relative;
                                    "><span style="
                                        box-sizing: border-box;
                                        display: block;
                                        width: initial;
                                        height: initial;
                                        background: none;
                                        opacity: 1;
                                        border: 0;
                                        margin: 0;
                                        padding: 0;
                                        padding-top: 100%;
                                      "></span><img alt="Calender" src="/_next/static/media/calender-icon.23e624a9.svg" decoding="async" data-nimg="responsive" style="
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        bottom: 0;
                                        right: 0;
                                        box-sizing: border-box;
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
                                      " sizes="100vw" /></span></span>${formattedDate}</span><span class="d-flex align-items-center"><span class="style_icon__Ukkjh d-block"><span style="
                                      box-sizing: border-box;
                                      display: block;
                                      overflow: hidden;
                                      width: initial;
                                      height: initial;
                                      background: none;
                                      opacity: 1;
                                      border: 0;
                                      margin: 0;
                                      padding: 0;
                                      position: relative;
                                    "><span style="
                                        box-sizing: border-box;
                                        display: block;
                                        width: initial;
                                        height: initial;
                                        background: none;
                                        opacity: 1;
                                        border: 0;
                                        margin: 0;
                                        padding: 0;
                                        padding-top: 100%;
                                      "></span><img alt="Clock" src="/_next/static/media/clock-icon.c7a46c6e.svg" decoding="async" data-nimg="responsive" style="
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        bottom: 0;
                                        right: 0;
                                        box-sizing: border-box;
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
                                      " sizes="100vw" /></span></span>${article.min} Min
                    </span>
                  </div>
                </div>
              </div>
            </article>`;
          }

          // Append the created HTML to the section
          // latestUpdateSection.innerHTML += articleHTML;
          latestUpdateSection.insertAdjacentHTML('beforeend', articleHTML);
          offset++;
        });
      }
    };

    xhr.send();
  }
</script>

@endsection