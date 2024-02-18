<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

use App\Models\{
    Article,
    CricSpecial,
    News,
    PostLikes,
    Fantasy
};

use Illuminate\Support\Facades\{
    DB,
    Session,
    Http
};

class HomeController extends Controller
{
    public function home()
    {
        $latestUpdate = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->groupBy('cid')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 3)
            ->get();


        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();


        $fantasys = Fantasy::where('status', 1)

            ->latest()
            ->limit(request()->has('fantasy_per_page') ? request()->get('fantasy_per_page') : 5)
            ->get();

        $latests = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->get();

        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->get();

        $matchs = getMatch();
        $live = liveMatch();
        $liveMatches = getLiveMatches();
        $getAllCompletedMatches = getAllCompletedMatches();
        $getAllUpcomingMatches = getAllUpcomingMatches();
        $t20 = getMatcht20();
        return view('home', compact(
            'latestUpdate',

            'seasonsUpdateHighlighter',
            'matchPredictions',
            'fantasys',
            'matchs',
            'live',
            'liveMatches',
            'prediction',
            'latests',
            't20',
            'getAllUpcomingMatches',
            'getAllCompletedMatches'

        ));
    }
    public function testView()
    {
        $latestUpdate = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->groupBy('cid')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 3)
            ->get();


        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();


        $fantasys = Fantasy::where('status', 1)

            ->latest()
            ->limit(request()->has('fantasy_per_page') ? request()->get('fantasy_per_page') : 5)
            ->get();

        $latests = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->get();

        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->get();

        $matchs = getMatch();
        $live = liveMatch();
        $liveMatches = getLiveMatches();
        $getAllCompletedMatches = getAllCompletedMatches();
        $getAllUpcomingMatches = getAllUpcomingMatches();
        $t20 = getMatcht20();
        return view('test-view', compact(
            'latestUpdate',
            'seasonsUpdateHighlighter',
            'matchPredictions',
            'fantasys',
            'matchs',
            'live',
            'liveMatches',
            'prediction',
            'latests',
            't20',
            'getAllUpcomingMatches',
            'getAllCompletedMatches'

        ));
    }

    // Live match Updates API 
    public function liveScoreUpdates()
    {
        $latestUpdate = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->groupBy('cid')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 3)
            ->get();


        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();


        $fantasys = Fantasy::where('status', 1)

            ->latest()
            ->limit(request()->has('fantasy_per_page') ? request()->get('fantasy_per_page') : 5)
            ->get();

        $latests = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->get();

        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->get();

        $liveMatches = getLiveMatches();
        $getAllCompletedMatches = getAllCompletedMatches();
        $getAllUpcomingMatches = getAllUpcomingMatches();
        $t20 = getMatcht20();
        $html = view('partials.live_match', compact('liveMatches', 'getAllCompletedMatches', 'getAllUpcomingMatches'))->render();
        return response()->json(['html' => $html]);
    }

    public function loadMoreLatest(Request $request)
    {
        $offset = $request->has('offset') ? $request->get('offset') : 0;
        $limit = $request->has('limit') ? $request->get('limit') : 5;

        $latestUpdate = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->offset($offset)
            ->limit($limit)
            ->orderBy('id', 'desc')
            ->get();

        return response()->json(['latestUpdate' => $latestUpdate]);
    }

    public function postDetails($slug)
    {
        $res = Article::with('user')
            ->where('slug', $slug)
            ->first();

        $res->increment('views', 1);

        return view('blog_details', compact('res'));
    }

    public function cricspecialDetails($slug)
    {
        $res = CricSpecial::with('user')
            ->where('slug', $slug)
            ->first();

        $res->increment('views', 1);

        return view('cricspecial_details', compact('res'));
    }

    public function scoreCard(Request $request, $matchId)
    {
        $response = getMatchDetails($matchId);
        // dd($response);
        $current_inning = getMatchInningDetails($matchId, $response['latest_inning_number']);

        $players = collect($current_inning['players']);

        $over_balls = array_slice(array_reverse($current_inning['commentaries']), 0, $request->has('per_page') ? (($request->per_page / 5) *  40) : 40);

        $over = $request->has('per_page') ? $request->per_page : 5;

        $ball_by_balls = [];

        foreach ($over_balls as $key => $over_ball) {
            if (isset($over_ball['event_id'])) {
                $ball_by_balls[$over_ball['over']][] = $over_ball;
            }

            if ($over_ball['event'] == 'overend' && count($ball_by_balls) == $over) {
                break;
            }
        }
        $player = [];
        if ($response['competition']['category'] == 'international') {
            foreach ($response['players'] as $key => $value) {
                if ($value['nationality'] == $response['teama']['name']) {

                    if ($value['role'] == 'squad') {
                        $player['team_a_squad'][] = $value;
                    } else {
                        $player['team_a'][] = $value;
                    }
                } else {

                    if ($value['role'] == 'squad') {

                        $player['team_b_squad'][] = $value;
                    } else {

                        $player['team_b'][] = $value;
                    }
                }
            }
        } else {
            foreach ($response['players'] as $key => $value) {
                if ($key % 2 == 0) {
                    $player['team_a_squad'][] = $value;
                    $player['team_a'][] = $value;
                } else {
                    $player['team_b_squad'][] = $value;
                    $player['team_b'][] = $value;
                }
            }
        }

        $results = getCompletedMatch($response['competition']['cid']);

        $upcomings = getUpComingMatch($response['competition']['cid']);

        $tab = true;

        if (Session::get('m_id') == $matchId) {

            $tab = false;
        }

        session()->put('m_id', $matchId);

        if (auth()->user()) {
            // Get IFrame Data 
            $matchPollResponse = Http::get('https://plugin.isportindia.com/api/get-match-polls?mid=' . $matchId);
            $matchPollResponseData = $matchPollResponse->json();
            $showIframe = true;
            // Update Iframe Tag Status 
            if ($matchPollResponseData['status'] == false) {
                $showIframe = false;
            }
            $token = '';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://plugin.isportindia.com/api/check-user-status');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
                'secret_key' => env('POLL_SECRET_KEY'),
                'username' => auth()->user()->name,
            ]));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $getTokenResponse = curl_exec($ch);
            $getTokenResponse = json_decode($getTokenResponse);
            if ($getTokenResponse === false) {
                echo 'Curl error: ' . curl_error($ch);
            } else {
                $token = $getTokenResponse->data;
            }

            curl_close($ch);
            // $token = $getTokenResponseData['data'];
        } else {
            $showIframe = false;
            $token = '';
        }
        return view('score_card', compact(
            'response',
            'player',
            'current_inning',
            'ball_by_balls',
            'players',
            'results',
            'upcomings',
            'tab',
            'showIframe',
            'token',
            'matchId'
        ));
    }

    public function upComing(Request $request, $matchId)
    {
        $response = getMatchDetails($matchId);

        $article = Fantasy::where('match_id', $matchId)->first();
        if ($article != null) {
            $article->increment('views', 1);
        }

        return view('upcoming', compact(
            'response',
            'article'

        ));
    }

    public function likesAdd(Request $request)
    {
        if (PostLikes::where('post_id', $request->id)
            ->where('ip_address', $request->ip())
            ->where('type', $request->type)
            ->exists()
        ) {

            PostLikes::where('post_id', $request->id)
                ->where('ip_address', $request->ip())
                ->where('type', $request->type)
                ->delete();

            if ($request->type == 'article') {

                Article::where('id', $request->id)
                    ->decrement('likes', 1);
            } elseif ($request->type == 'news') {

                News::where('id', $request->id)
                    ->decrement('likes', 1);
            } elseif ($request->type == 'cricspecial') {

                CricSpecial::where('id', $request->id)
                    ->decrement('likes', 1);
            }
        } else {

            PostLikes::create([
                'post_id' => $request->id,
                'ip_address' => $request->ip(),
                'type' => $request->type
            ]);

            if ($request->type == 'article') {

                Article::where('id', $request->id)
                    ->update(['likes' => DB::raw('likes+1')]);
            } elseif ($request->type == 'news') {

                News::where('id', $request->id)
                    ->update(['likes' => DB::raw('likes+1')]);
            } elseif ($request->type == 'cricspecial') {

                CricSpecial::where('id', $request->id)
                    ->update(['likes' => DB::raw('likes+1')]);
            }
        }

        if ($request->type == 'article') {

            $likes = Article::where('id', $request->id)
                ->value('likes');
        } elseif ($request->type == 'news') {

            $likes = News::where('id', $request->id)
                ->value('likes');
        } elseif ($request->type == 'cricspecial') {

            $likes = CricSpecial::where('id', $request->id)
                ->value('likes');
        }

        return response()
            ->json($likes);
    }

    public function newsDetails($slug)
    {
        $news = News::where('slug', $slug)->first();

        $news->increment('views', 1);

        return view('news_details', compact('news'));
    }

    public function seasonDetails(Request $request, $cId)
    {
        $ranking = [];
        $bat = [];
        $bowl = [];
        $wk = [];
        $all = [];
        $season = [];

        $type = $request->has('type') ? $request->type : 0;

        $squads = getSeasonSquads($cId);

        $states = getSeasonStats($cId);

        $teams = getSeasonTeams($cId);

        $ranking['batting_most_runs'] = getSeasonStats($cId, 'batting_most_runs');
        $ranking['batting_most_runs_innings'] = getSeasonStats($cId, 'batting_most_runs_innings');
        $ranking['bowling_top_wicket_takers'] = getSeasonStats($cId, 'bowling_top_wicket_takers');
        $ranking['bowling_best_economy_rates'] = getSeasonStats($cId, 'bowling_best_economy_rates');

        foreach ($squads[$type]['players'] as $key => $value) {

            if ($value['playing_role'] == 'bat') {
                $bat[] = $value;
            } else if ($value['playing_role'] == 'bowl') {
                $bowl[] = $value;
            } else if ($value['playing_role'] == 'wk') {
                $wk[] = $value;
            } else if ($value['playing_role'] == 'all') {
                $all[] = $value;
            }
        }

        $response = getSeasonsDetails($cId);
        $matchs = $response;

        $venues = collect(array_column($matchs, 'venue'))->unique('venue_id');

        $filter = [];

        foreach ($response as $key => $venue) {

            $isVenue = !is_null($request->venue) && $venue['venue']['venue_id'] == $request->venue;
            $isTeam = !is_null($request->team) && in_array($request->team, [$venue['teama']['team_id'], $venue['teamb']['team_id']]);

            if (!is_null($request->venue) && !is_null($request->team)) {

                if ($isVenue && $isTeam) {
                    $filter[] = $venue;
                }
            } else {

                if ($isVenue) {
                    $filter[] = $venue;
                }

                if ($isTeam) {
                    $filter[] = $venue;
                }
            }
        }

        $response = empty($filter) ? $response : $filter;

        $season['series_name'] = $response[0]['short_title'];
        $season['title'] = $response[0]['title'];
        $season['season'] = $response[0]['competition']['season'];

        $news = News::where('status', 1)
            ->where('cid', $cId)
            ->select('title', 'created_at', 'id', 'img', 'slug', 'short_description', 'min', 'type');

        $articles = $news = News::with('user')
            ->when(isset($request->search), function ($q) use ($request) {
                $q->where('title', 'like', "%{$request->title}%");
                $q->Orwhere('short_description', 'like', "%{$request->short_description}%");
                $q->Orwhere('description', 'like', "%{$request->description}%");
            })
            ->where('status', 1)
            ->latest()
            ->limit(5)
            ->get();
        $farticles = Fantasy::where('status', 1)

            ->select('*')
            ->latest()
            ->limit(5)
            ->get();


        $tab = true;

        if (Session::get('c_id') == $cId) {

            $tab = false;
        }

        session()->put('c_id', $cId);

        return view('season_details', compact(
            'matchs',
            'response',
            'venues',
            'squads',
            'bat',
            'bowl',
            'wk',
            'all',
            'type',
            'cId',
            'articles',
            'farticles',
            'ranking',
            'states',
            'season',
            'teams',
            'tab'
        ));
    }

    public function cricketTeams($name)
    {
        return redirect()->back();
    }

    public function fantasyDetails($slug)
    {
        $article = Fantasy::where('slug', $slug)->first();

        $article->increment('views', 1);

        return view('fantasy_details', compact('article'));
    }

    public function stateDetails(Request $request, $cId, $slug)
    {
        if ($request->has('slug')) {

            return redirect($request->slug . '?team=' . $request->team);
        }

        $matchs = getSeasonsDetails($cId);

        $players = getSeasonStats($cId, $slug, 10);
        $data = [];

        if ($request->has('team')) {
            foreach ($players['stats'] as $key => $value) {
                if ($value['team']['tid'] == $request->team) {
                    $data['stats'][] = $value;
                }
            }
        }

        if (!empty($data)) {

            $players = $data;
        }

        $type = explode('_', $slug)[0];
        $teams = getSeasonTeams($cId);
        $states = getSeasonStats($cId);

        $season['series_name'] = $matchs[0]['short_title'];
        $season['title'] = $matchs[0]['title'];
        $season['season'] = $matchs[0]['competition']['season'];

        return view('state_details', compact(
            'matchs',
            'season',
            'slug',
            'players',
            'cId',
            'teams',
            'states',
            'type'
        ));
    }

    public function prediction()
    {


        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();
        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->get();
        // $matchs = getMatch();
        // $live = liveMatch();
        // $t20 = getMatcht20();

        $latestUpdate = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->groupBy('cid')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 3)
            ->get();


        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();


        $fantasys = Fantasy::where('status', 1)

            ->latest()
            ->limit(request()->has('fantasy_per_page') ? request()->get('fantasy_per_page') : 5)
            ->get();

        $latests = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->get();

        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->get();

        $matchs = getMatch();
        $live = liveMatch();
        $liveMatches = getLiveMatches();
        $t20 = getMatcht20();
        return view('match_prediction', compact(
            'matchPredictions',
            'prediction',
            'latestUpdate',
            'seasonsUpdateHighlighter',
            'matchPredictions',
            'fantasys',
            'matchs',
            'live',
            'liveMatches',
            'prediction',
            'latests',
            't20'

        ));
    }
    public function loadMorePredictions(Request $request)
    {

        $offset = $request->has('offset') ? $request->get('offset') : 0;
        $limit = $request->has('limit') ? $request->get('limit') : 5;
        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->offset($offset)
            ->limit($limit)
            ->orderBy('id', 'desc')
            ->get();
        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->offset($offset)
            ->limit($limit)
            ->get();

        return response()->json(['matchPredictions' => $matchPredictions]);
    }
    public function fantasyPreview()
    {

        $fantasys = Fantasy::where('status', 1)

            ->latest()
            ->limit(request()->has('fantasy_per_page') ? request()->get('fantasy_per_page') : 5)
            ->get();


        $latestUpdate = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->groupBy('cid')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 3)
            ->get();


        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();


        $fantasys = Fantasy::where('status', 1)

            ->latest()
            ->limit(request()->has('fantasy_per_page') ? request()->get('fantasy_per_page') : 5)
            ->get();

        $latests = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->get();

        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->get();

        $matchs = getMatch();
        $live = liveMatch();
        $liveMatches = getLiveMatches();
        $t20 = getMatcht20();

        return view('fantasy', compact(
            'matchPredictions',
            'latestUpdate',
            'fantasys',
            'matchs',
            'live',
            'liveMatches',
            'prediction',
            'latests',
            't20'
        ));
    }
    public function loadMoreFantasy(Request $request)
    {
        $offset = $request->has('offset') ? $request->get('offset') : 0;
        $limit = $request->has('limit') ? $request->get('limit') : 5;
        $fantasys = Fantasy::where('status', 1)
            ->latest()
            ->offset($offset)
            ->limit($limit)
            ->get();
        return response()->json(['fantasys' => $fantasys]);
    }
    public function news()
    {

        $news = News::where('status', 1)

            ->latest()
            ->limit(request()->has('news_per_page') ? request()->get('news_per_page') : 5)
            ->get();


        $latestUpdate = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->groupBy('cid')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 3)
            ->get();


        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();


        $fantasys = Fantasy::where('status', 1)

            ->latest()
            ->limit(request()->has('fantasy_per_page') ? request()->get('fantasy_per_page') : 5)
            ->get();

        $latests = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->get();

        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->get();

        $matchs = getMatch();
        $live = liveMatch();
        $liveMatches = getLiveMatches();
        $t20 = getMatcht20();

        return view('news', compact(
            'latestUpdate',
            'news',
            'matchs',
            'live',
            'liveMatches',
            'prediction',
            'latests',
            't20'
        ));
    }

    public function loadMoreNews(Request $request)
    {
        // $news = News::where('status', 1)
        //     ->latest()
        //     ->limit(request()->has('news_per_page') ? request()->get('news_per_page') : 5)
        //     ->get();
        // $matchs = getMatch();
        // $live = liveMatch();
        // $t20 = getMatcht20();
        // return view('news', compact(
        //     'news',
        //     'matchs',
        //     'live',
        //     't20'
        // ));

        $offset = $request->has('offset') ? $request->get('offset') : 0;
        $limit = $request->has('limit') ? $request->get('limit') : 5;

        $news = News::where('status', 1)
            ->latest()
            ->offset($offset)
            ->limit($limit)
            ->orderBy('id', 'desc')
            ->get();

        return response()->json(['news' => $news]);
    }

    public function worldCup()
    {
        $worldcup = Article::where('status', 1)
            ->where(
                'category',
                '=',
                'odi_wc'
            )
            ->latest()
            ->limit(request()->has('wc_per_page') ? request()->get('wc_per_page') : 5)
            ->get();

        $latestUpdate = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->groupBy('cid')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 3)
            ->get();


        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();


        $latests = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->get();

        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->get();

        $matchs = getMatch();
        $live = liveMatch();
        $liveMatches = getLiveMatches();
        $t20 = getMatcht20();

        return view('world-cup', compact(
            'latestUpdate',
            'worldcup',
            'matchs',
            'live',
            'liveMatches',
            'prediction',
            'latests',
            't20'
        ));
    }

    public function loadMoreWorldCup(Request $request)
    {
        $offset = $request->has('offset') ? $request->get('offset') : 0;
        $limit = $request->has('limit') ? $request->get('limit') : 5;
        $worldcup = Article::where('status', 1)
            ->where(
                'category',
                '=',
                'odi_wc'
            )
            ->latest()
            ->offset($offset)
            ->limit($limit)
            ->get();

        return response()->json(['worldcup' => $worldcup]);
    }

    public function fixture()
    {
        $farticles = getSeasons();
        $matchs = getMatch();
        $cId =  64465;
        $response = getMatchDetails($cId);

        $response = getCompletedMatch($response['competition']['cid']);

        // $live = liveMatch();
        // $t20 = getMatcht20();

        $latestUpdate = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->groupBy('cid')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 3)
            ->get();


        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();


        $fantasys = Fantasy::where('status', 1)

            ->latest()
            ->limit(request()->has('fantasy_per_page') ? request()->get('fantasy_per_page') : 5)
            ->get();

        $latests = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->get();

        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->get();

        $matchs = getMatch();
        $live = liveMatch();
        $liveMatches = getLiveMatches();
        $t20 = getMatcht20();
        return view('Fixtures', compact(
            'response',
            'cId',
            'latestUpdate',
            'seasonsUpdateHighlighter',
            'matchPredictions',
            'fantasys',
            'matchs',
            'live',
            'liveMatches',
            'prediction',
            'latests',
            't20'
        ));
    }
    public function recordStats()
    {
        $record = Article::where('status', 1)
            ->where(
                'category',
                '=',
                'record'
            )
            ->latest()
            ->limit(request()->has('record_per_page') ? request()->get('record_per_page') : 5)
            ->get();

        $latestUpdate = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();

        $seasonsUpdateHighlighter = Article::where('status', 1)
            ->where('category', 'seasons_update')
            ->groupBy('cid')
            ->latest()
            ->limit(request()->has('per_page') ? request()->get('per_page') : 3)
            ->get();


        $matchPredictions = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->orderBy('id', 'desc')
            ->get();


        $fantasys = Fantasy::where('status', 1)

            ->latest()
            ->limit(request()->has('fantasy_per_page') ? request()->get('fantasy_per_page') : 5)
            ->get();

        $latests = Article::where('status', 1)
            ->where('category', 'latest_update')
            ->latest()
            ->limit(request()->has('latest_per_page') ? request()->get('latest_per_page') : 5)
            ->get();

        $prediction = Article::where('status', 1)
            ->where('category', 'match_prediction')
            ->latest()
            ->limit(request()->has('prediction_per_page') ? request()->get('prediction_per_page') : 5)
            ->get();

        $matchs = getMatch();
        $live = liveMatch();
        $liveMatches = getLiveMatches();
        $t20 = getMatcht20();

        return view('record', compact(
            'record',
            'latestUpdate',
            'seasonsUpdateHighlighter',
            'matchPredictions',
            'fantasys',
            'matchs',
            'live',
            'liveMatches',
            'prediction',
            'latests',
            't20'
        ));
    }
    public function loadMoreRecords(Request $request)
    {
        $offset = $request->has('offset') ? $request->get('offset') : 0;
        $limit = $request->has('limit') ? $request->get('limit') : 5;
        $record = Article::where('status', 1)
            ->where(
                'category',
                '=',
                'record'
            )
            ->latest()
            ->offset($offset)
            ->limit($limit)
            ->get();

        return response()->json(['record' => $record]);
    }

    public function recordDetails($slug)
    {
        $news = Article::where('slug', $slug)->first();

        $news->increment('views', 1);

        return view('record-details', compact('news'));
    }
    public function test()
    {

        dd(liveMatch());
    }
    public function signIn()
    {
        return view('user.login');
    }
    public function userRegister()
    {
        return view('user.register');
    }
    public function poll()
    {
        return view('poll');
    }
    public function myApi($token)
    {
        $myToken = "iscore123";
        if ($token == $myToken) {
            $live = getMatch();
            return response()->json(['live' => $live]);
        } else {
            $res = "You are not allowed";
            return response()->json(['response' => $res]);
        }
    }

    public function about()
    {
        return view('about');
    }
    public function advertise()
    {
        return view('advertise');
    }
    public function careers()
    {
        return view('career');
    }
    public function contactUs()
    {
        return view('contact');
    }
    public function feedback()
    {
        return view('feedback');
    }
    public function terms()
    {
        return view('terms');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function copyright()
    {
        return view('copyright');
    }
    public function disclaimer()
    {
        return view('disclaimer');
    }
    public function dmca()
    {
        return view('dmca');
    }
    public function writeForUs()
    {
        return view('write-for-us');
    }
    public function postContactUs(Request $request)
    {
        Mail::to('contact@isportindia.com')->send(new ContactUsMail($request->all()));
        return back()->with('success', 'Your message has been sent!');
    }
    public function tests()
    {
        $matchs = getMatch();
        $live = liveMatch();
        $liveMatches = getLiveMatches();
        $getAllCompletedMatches = getAllCompletedMatches();
        $getAllUpcomingMatches = getAllUpcomingMatches();
        $t20 = getMatcht20();
        dd($getAllUpcomingMatches);
    }
}
