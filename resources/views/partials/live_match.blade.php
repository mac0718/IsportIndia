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

@if($getAllCompletedMatches)
@foreach ($getAllCompletedMatches as $match)
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

@if($getAllUpcomingMatches)
@foreach ($getAllUpcomingMatches as $match)
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