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
          <div class="all-slider-track style_inner__csGhV slider-track d-flex " style="gap: 0" id="c-slider">
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
      <div class="style_seriesHome__Jnsnk fixtures-data  tabs-data">
        <h4 class="text-uppercase">fixtures</h4>
        <!-- Flex container for keeping category for the fixtures  -->
        <div class="container">
          <div class="style_scorecardNav__b0jAi xsmall-text text-nowrap scroll-list d-flex pb-1">
            <div class="d-flex m-auto">
              <button id="upcoming" type="button" class="fixturesBtn style_active__3p7K4 font-bold text-uppercase rounded-3 btn btn-link category_button" category="all">
                Upcoming
              </button>
              <button id="live" type="button" class="fixturesBtn  font-bold text-uppercase rounded-3 btn btn-link category_button" category="all">
                Live
              </button>
              <button id="recent" type="button" class="fixturesBtn  font-bold text-uppercase rounded-3 btn btn-link category_button" category="all">
                Recent
              </button>
            </div>
          </div>
        </div>
        <div class="undefined">
          @php
          $upcomingMatches = array_filter($matchs, function ($fixture) {
          return $fixture['status'] == 1;
          });

          $filteredLiveMatches=[];
          foreach($liveMatches as $liveMatch){
          if(count($liveMatch)>0){
          foreach($liveMatch as $livem){
          array_push($filteredLiveMatches, $livem);
          }
          }
          }
          $liveMatches = array_filter($filteredLiveMatches, function ($fixture) {
          return $fixture['status'] == 1;
          });

          $recentMatches = array_filter($live, function ($fixture) {
          return $fixture['status'] == 2;
          });
          @endphp

          @if(count($upcomingMatches) > 0)
          {{-- Display upcoming matches --}}
          @foreach ($upcomingMatches as $fixtures)
          <div class="fixturesList upcoming">
            <div class="style_fixturesList__BfccH mb-3 " id="{{$fixtures['match_id']}}">
              <div class="style_fixturesItem__aBs0G common-box mb-2 p-md-3 br-md false">

                <div class="style_head__9u_y_ mb-md-2 pb-md-2 d-flex flex-column flex-md-row xsmall-text">

                  <p class="style_matchTime__L9427 mb-2 pb-2 mb-md-0 pb-md-0 font-semi">{{
                                              Carbon\Carbon::parse($fixtures['date_start'])->format('d M Y, D, h:i A')
                                              }} IST</p>
                  <div class="undefined d-flex align-items-center justify-content-between flex-grow-1 text-primary">
                    <p class="d-flex align-items-start style_matchStatus__r9UVQ text-primary">
                      <strong class="d-inline-flex align-items-center me-1  text-primary" style="font-weight: 500;gap:6px"><i class="fas fa-circle"></i>Result:</strong>
                      {{ $fixtures['status_note'] }}
                    </p>
                  </div>
                </div>

                <div class="style_content__OMegF d-flex flex-column flex-md-row align-items-center">
                  <div class="style_infoList__GrEIP d-flex flex-wrap flex-md-column xsmall-text">
                    <p class="font-semi text-dark">Match<span class="text-capitalize"> -</span>
                      {{ordinal($fixtures['match_number'])}}
                      {{ $fixtures['format_str'] }}
                    </p>
                    <p class="text-muted">{{$fixtures['venue']['name'],
                                                  $fixtures['venue']['location'], $fixtures['venue']['country']}}</p>
                  </div>
                  <div class="style_teams__hQsmA mt-2 mt-md-0 font-semi flex-grow-1">
                    <div class="style_team__SeosN d-flex align-items-center justify-content-between mt-1 mb-2 mb-md-3">
                      <div class="style_name__O798i d-flex align-items-center">
                        <div class="style_icon__ECf4T flex-shrink-0"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img alt="West Indies" sizes="(max-width: 767px) 40px, (max-width: 991px) 40px, (max-width: 1190px) 200px, 40px" src="{{ $fixtures['teama']['logo_url'] }}" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                        </div>
                        <p>
                          {{$fixtures['teama']['name']}}
                          @if ($fixtures['teama']['team_id'] ==
                          $fixtures['winning_team_id'])
                          <span class="style_winner__P6fXE ms-2 d-inline-block"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">

                              <g id="cup-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M19,5 L17,5 L17,3 L7,3 L7,5 L5,5 C3.9,5 3,5.9 3,7 L3,8 C3,10.55 4.92,12.63 7.39,12.94 C8.02,14.44 9.37,15.57 11,15.9 L11,19 L7,19 L7,21 L17,21 L17,19 L13,19 L13,15.9 C14.63,15.57 15.98,14.44 16.61,12.94 C19.08,12.63 21,10.55 21,8 L21,7 C21,5.9 20.1,5 19,5 Z M5,8 L5,7 L7,7 L7,10.82 C5.84,10.4 5,9.3 5,8 Z M19,8 C19,9.3 18.16,10.4 17,10.82 L17,7 L19,7 L19,8 Z" id="Shape" fill="#0E3778" fill-rule="nonzero">
                                </path>
                              </g>
                            </svg></span>
                          @endif
                        </p>
                      </div>

                    </div>
                    <div class="style_team__SeosN d-flex align-items-center justify-content-between mb-1">
                      <div class="style_name__O798i d-flex align-items-center">
                        <div class="style_icon__ECf4T flex-shrink-0"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img alt="India" sizes="(max-width: 767px) 40px, (max-width: 991px) 40px, (max-width: 1190px) 200px, 40px" src="{{$fixtures['teamb']['logo_url']}}" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                        </div>
                        <p>{{$fixtures['teamb']['name']}}
                          @if ($fixtures['teamb']['team_id'] ==
                          $fixtures['winning_team_id'])
                          <span class="style_winner__P6fXE ms-2 d-inline-block"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">

                              <g id="cup-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M19,5 L17,5 L17,3 L7,3 L7,5 L5,5 C3.9,5 3,5.9 3,7 L3,8 C3,10.55 4.92,12.63 7.39,12.94 C8.02,14.44 9.37,15.57 11,15.9 L11,19 L7,19 L7,21 L17,21 L17,19 L13,19 L13,15.9 C14.63,15.57 15.98,14.44 16.61,12.94 C19.08,12.63 21,10.55 21,8 L21,7 C21,5.9 20.1,5 19,5 Z M5,8 L5,7 L7,7 L7,10.82 C5.84,10.4 5,9.3 5,8 Z M19,8 C19,9.3 18.16,10.4 17,10.82 L17,7 L19,7 L19,8 Z" id="Shape" fill="#0E3778" fill-rule="nonzero">
                                </path>
                              </g>
                            </svg></span>
                        </p>
                        @endif
                      </div>

                    </div>
                  </div>

                  <div class="style_infoList__GrEIP d-none d-md-block font-semi xsmall-text">
                    <p><a href="{{route('score.card',[$fixtures['match_id'],'q' => 'scorecard'])}}">Scorecard</a></p>
                    <p><a href="{{route('score.card',[$fixtures['match_id'],'q' => 'commentary'])}}">Full Commentary</a></p>
                    <!--<p><a href="{{ route('season.details',[$cId,'q' => 'news']) }}">News</a></p>-->
                  </div>

                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          {{-- Display "No Matches" for upcoming matches --}}
          <p class="fixturesList upcoming">No Upcoming Matches</p>
          @endif

          @if(count($filteredLiveMatches) > 0)
          {{-- Display live matches --}}
          @foreach ($filteredLiveMatches as $key => $fixtures)
          <div class="fixturesList live d-none">
            <div class="style_fixturesList__BfccH mb-3 " id="{{$fixtures['match_id']}}">
              <div class="style_fixturesItem__aBs0G common-box mb-2 p-md-3 br-md false">

                <div class="style_head__9u_y_ mb-md-2 pb-md-2 d-flex flex-column flex-md-row xsmall-text">

                  <p class="style_matchTime__L9427 mb-2 pb-2 mb-md-0 pb-md-0 font-semi">{{
                                              Carbon\Carbon::parse($fixtures['date_start'])->format('d M Y, D, h:i A')
                                              }} IST</p>
                  <div class="undefined d-flex align-items-center justify-content-between flex-grow-1 text-danger">
                    <p class="d-flex align-items-start style_matchStatus__r9UVQ text-danger">
                      <strong class="d-inline-flex align-items-center me-1  text-danger" style="font-weight: 500;gap:6px"><i class="fas fa-circle"></i>Result:</strong>
                      {{ $fixtures['status_note'] }}
                    </p>
                  </div>
                </div>

                <div class="style_content__OMegF d-flex flex-column flex-md-row align-items-center">
                  <div class="style_infoList__GrEIP d-flex flex-wrap flex-md-column xsmall-text">
                    <p class="font-semi text-dark">Match<span class="text-capitalize"> -</span>
                      {{ordinal($fixtures['match_number'])}}
                      {{ $fixtures['format_str'] }}
                    </p>
                    <p class="text-muted">{{$fixtures['venue']['name'],
                                                  $fixtures['venue']['location'], $fixtures['venue']['country']}}</p>
                  </div>
                  <div class="style_teams__hQsmA mt-2 mt-md-0 font-semi flex-grow-1">
                    <div class="style_team__SeosN d-flex align-items-center justify-content-between mt-1 mb-2 mb-md-3">
                      <div class="style_name__O798i d-flex align-items-center">
                        <div class="style_icon__ECf4T flex-shrink-0"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img alt="West Indies" sizes="(max-width: 767px) 40px, (max-width: 991px) 40px, (max-width: 1190px) 200px, 40px" src="{{ $fixtures['teama']['logo_url'] }}" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                        </div>
                        <p>
                          {{$fixtures['teama']['name']}}
                          @if ($fixtures['teama']['team_id'] ==
                          $fixtures['winning_team_id'])
                          <span class="style_winner__P6fXE ms-2 d-inline-block"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">

                              <g id="cup-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M19,5 L17,5 L17,3 L7,3 L7,5 L5,5 C3.9,5 3,5.9 3,7 L3,8 C3,10.55 4.92,12.63 7.39,12.94 C8.02,14.44 9.37,15.57 11,15.9 L11,19 L7,19 L7,21 L17,21 L17,19 L13,19 L13,15.9 C14.63,15.57 15.98,14.44 16.61,12.94 C19.08,12.63 21,10.55 21,8 L21,7 C21,5.9 20.1,5 19,5 Z M5,8 L5,7 L7,7 L7,10.82 C5.84,10.4 5,9.3 5,8 Z M19,8 C19,9.3 18.16,10.4 17,10.82 L17,7 L19,7 L19,8 Z" id="Shape" fill="#0E3778" fill-rule="nonzero">
                                </path>
                              </g>
                            </svg></span>
                          @endif
                        </p>
                      </div>

                    </div>
                    <div class="style_team__SeosN d-flex align-items-center justify-content-between mb-1">
                      <div class="style_name__O798i d-flex align-items-center">
                        <div class="style_icon__ECf4T flex-shrink-0"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img alt="India" sizes="(max-width: 767px) 40px, (max-width: 991px) 40px, (max-width: 1190px) 200px, 40px" src="{{$fixtures['teamb']['logo_url']}}" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                        </div>
                        <p>{{$fixtures['teamb']['name']}}
                          @if ($fixtures['teamb']['team_id'] ==
                          $fixtures['winning_team_id'])
                          <span class="style_winner__P6fXE ms-2 d-inline-block"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">

                              <g id="cup-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M19,5 L17,5 L17,3 L7,3 L7,5 L5,5 C3.9,5 3,5.9 3,7 L3,8 C3,10.55 4.92,12.63 7.39,12.94 C8.02,14.44 9.37,15.57 11,15.9 L11,19 L7,19 L7,21 L17,21 L17,19 L13,19 L13,15.9 C14.63,15.57 15.98,14.44 16.61,12.94 C19.08,12.63 21,10.55 21,8 L21,7 C21,5.9 20.1,5 19,5 Z M5,8 L5,7 L7,7 L7,10.82 C5.84,10.4 5,9.3 5,8 Z M19,8 C19,9.3 18.16,10.4 17,10.82 L17,7 L19,7 L19,8 Z" id="Shape" fill="#0E3778" fill-rule="nonzero">
                                </path>
                              </g>
                            </svg></span>
                        </p>
                        @endif
                      </div>

                    </div>
                  </div>

                  <div class="style_infoList__GrEIP d-none d-md-block font-semi xsmall-text">
                    <p><a href="{{route('score.card',[$fixtures['match_id'],'q' => 'scorecard'])}}">Scorecard</a></p>
                    <p><a href="{{route('score.card',[$fixtures['match_id'],'q' => 'commentary'])}}">Full Commentary</a></p>
                    <!--<p><a href="{{ route('season.details',[$cId,'q' => 'news']) }}">News</a></p>-->
                  </div>

                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          {{-- Display "No Matches" for live matches --}}
          <p class="fixturesList live d-none">No Live Matches</p>
          @endif

          @if(count($recentMatches) > 0)
          {{-- Display recent matches --}}
          @foreach ($recentMatches as $fixtures)
          <div class="fixturesList recent d-none">
            <div class="style_fixturesList__BfccH mb-3 " id="{{$fixtures['match_id']}}">
              <div class="style_fixturesItem__aBs0G common-box mb-2 p-md-3 br-md false">

                <div class="style_head__9u_y_ mb-md-2 pb-md-2 d-flex flex-column flex-md-row xsmall-text">

                  <p class="style_matchTime__L9427 mb-2 pb-2 mb-md-0 pb-md-0 font-semi">{{
                                              Carbon\Carbon::parse($fixtures['date_start'])->format('d M Y, D, h:i A')
                                              }} IST</p>
                  <div class="undefined d-flex align-items-center justify-content-between flex-grow-1 text-success">
                    <p class="d-flex align-items-start style_matchStatus__r9UVQ text-success">
                      <strong class="d-inline-flex align-items-center me-1  text-success" style="font-weight: 500;gap:6px"><i class="fas fa-circle"></i>Result:</strong>
                      {{ $fixtures['status_note'] }}
                    </p>
                  </div>
                </div>

                <div class="style_content__OMegF d-flex flex-column flex-md-row align-items-center">
                  <div class="style_infoList__GrEIP d-flex flex-wrap flex-md-column xsmall-text">
                    <p class="font-semi text-dark">Match<span class="text-capitalize"> -</span>
                      {{ordinal($fixtures['match_number'])}}
                      {{ $fixtures['format_str'] }}
                    </p>
                    <p class="text-muted">{{$fixtures['venue']['name'],
                                                  $fixtures['venue']['location'], $fixtures['venue']['country']}}</p>
                  </div>
                  <div class="style_teams__hQsmA mt-2 mt-md-0 font-semi flex-grow-1">
                    <div class="style_team__SeosN d-flex align-items-center justify-content-between mt-1 mb-2 mb-md-3">
                      <div class="style_name__O798i d-flex align-items-center">
                        <div class="style_icon__ECf4T flex-shrink-0"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img alt="West Indies" sizes="(max-width: 767px) 40px, (max-width: 991px) 40px, (max-width: 1190px) 200px, 40px" src="{{ $fixtures['teama']['logo_url'] }}" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                        </div>
                        <p>
                          {{$fixtures['teama']['name']}}
                          @if ($fixtures['teama']['team_id'] ==
                          $fixtures['winning_team_id'])
                          <span class="style_winner__P6fXE ms-2 d-inline-block"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">

                              <g id="cup-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M19,5 L17,5 L17,3 L7,3 L7,5 L5,5 C3.9,5 3,5.9 3,7 L3,8 C3,10.55 4.92,12.63 7.39,12.94 C8.02,14.44 9.37,15.57 11,15.9 L11,19 L7,19 L7,21 L17,21 L17,19 L13,19 L13,15.9 C14.63,15.57 15.98,14.44 16.61,12.94 C19.08,12.63 21,10.55 21,8 L21,7 C21,5.9 20.1,5 19,5 Z M5,8 L5,7 L7,7 L7,10.82 C5.84,10.4 5,9.3 5,8 Z M19,8 C19,9.3 18.16,10.4 17,10.82 L17,7 L19,7 L19,8 Z" id="Shape" fill="#0E3778" fill-rule="nonzero">
                                </path>
                              </g>
                            </svg></span>
                          @endif
                        </p>
                      </div>

                    </div>
                    <div class="style_team__SeosN d-flex align-items-center justify-content-between mb-1">
                      <div class="style_name__O798i d-flex align-items-center">
                        <div class="style_icon__ECf4T flex-shrink-0"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 100% 0px 0px;"></span><img alt="India" sizes="(max-width: 767px) 40px, (max-width: 991px) 40px, (max-width: 1190px) 200px, 40px" src="{{$fixtures['teamb']['logo_url']}}" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span>
                        </div>
                        <p>{{$fixtures['teamb']['name']}}
                          @if ($fixtures['teamb']['team_id'] ==
                          $fixtures['winning_team_id'])
                          <span class="style_winner__P6fXE ms-2 d-inline-block"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">

                              <g id="cup-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M19,5 L17,5 L17,3 L7,3 L7,5 L5,5 C3.9,5 3,5.9 3,7 L3,8 C3,10.55 4.92,12.63 7.39,12.94 C8.02,14.44 9.37,15.57 11,15.9 L11,19 L7,19 L7,21 L17,21 L17,19 L13,19 L13,15.9 C14.63,15.57 15.98,14.44 16.61,12.94 C19.08,12.63 21,10.55 21,8 L21,7 C21,5.9 20.1,5 19,5 Z M5,8 L5,7 L7,7 L7,10.82 C5.84,10.4 5,9.3 5,8 Z M19,8 C19,9.3 18.16,10.4 17,10.82 L17,7 L19,7 L19,8 Z" id="Shape" fill="#0E3778" fill-rule="nonzero">
                                </path>
                              </g>
                            </svg></span>
                        </p>
                        @endif
                      </div>

                    </div>
                  </div>

                  <div class="style_infoList__GrEIP d-none d-md-block font-semi xsmall-text">
                    <p><a href="{{route('score.card',[$fixtures['match_id'],'q' => 'scorecard'])}}">Scorecard</a></p>
                    <p><a href="{{route('score.card',[$fixtures['match_id'],'q' => 'commentary'])}}">Full Commentary</a></p>
                    <!--<p><a href="{{ route('season.details',[$cId,'q' => 'news']) }}">News</a></p>-->
                  </div>

                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          {{-- Display "No Matches" for recent matches --}}
          <p class="fixturesList recent d-none">No Recent Matches</p>
          @endif

        </div>
      </div>
    </div>

  </div>
</div>
</div>
<script>
  $(document).ready(function() {
    $('#upcoming').click(function() {
      $(".fixturesList").addClass('d-none');
      $('.upcoming').removeClass('d-none');
    });
    $('#live').click(function() {
      $(".fixturesList").addClass('d-none');
      $('.live').removeClass('d-none');
    });
    $('#recent').click(function() {
      $(".fixturesList").addClass('d-none');
      $('.recent').removeClass('d-none');
    });
  });
  $(".fixturesBtn").click(function() {
    $(".fixturesBtn").removeClass('style_active__3p7K4');
    $(this).addClass('style_active__3p7K4');
  })
</script>


@endsection