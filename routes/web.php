<?php

use Illuminate\Support\Facades\Route;

// FRONT
use App\Http\Controllers\HomeController;

// ADMIN
use App\Http\Controllers\Admin\{
    DashboardController,
    LoginController,
    ArticleController,
    CricSpecialController,
    NewsController,
    FantasyController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/liveScoreUpdates', [HomeController::class, 'liveScoreUpdates'])->name('liveScoreUpdates');
Route::get('score-card/{match_id}', [HomeController::class, 'scoreCard'])->name('score.card');
// Route::get('fixture/{match_id}', [HomeController::class, 'fixtures'])->name('fixture');
Route::get('upcoming/{match_id}', [HomeController::class, 'upComing'])->name('upcoming');
Route::get('post-details/{slug}', [HomeController::class, 'postDetails'])->name('post.details');
Route::get('cricspecial-details/{slug}', [HomeController::class, 'cricspecialDetails'])->name('cricspecial.details');
Route::get('news/{slug}', [HomeController::class, 'newsDetails'])->name('news.details');
Route::get('fantasy/{slug}', [HomeController::class, 'fantasyDetails'])->name('fantasy.details');
Route::get('state-details/{cid}/{slug}', [HomeController::class, 'stateDetails'])->name('state.details');
Route::get('season/{cid}', [HomeController::class, 'seasonDetails'])->name('season.details');
Route::get('cricket-team/{t_id}', [HomeController::class, 'home'])->name('teams');
Route::get('cricket-player/{p_id}', [HomeController::class, 'home'])->name('player');
Route::get('cricket-match-predictions', [HomeController::class, 'prediction'])->name('prediction');
Route::get('fantasy-preview', [HomeController::class, 'fantasyPreview'])->name('fantasypreview');
Route::get('news-list', [HomeController::class, 'news'])->name('newslist');
Route::get('ipl-articles', [HomeController::class, 'worldCup'])->name('worldcup');
Route::get('fixtures-list', [HomeController::class, 'fixture'])->name('fixture');
Route::get('record-stats', [HomeController::class, 'recordStats'])->name('record');
Route::get('record-stats/{slug}', [HomeController::class, 'recordDetails'])->name('record.details');
Route::get('test', [HomeController::class, 'test'])->name('test');
Route::get('poll', [HomeController::class, 'poll'])->name('poll');
Route::get('sign-in', [HomeController::class, 'signIn'])->name('user-login');
Route::get('user-register', [HomeController::class, 'userRegister'])->name('user-register');
Route::post('signin-user', [LoginController::class, 'submitLogin'])->name('signin.submit');

Route::get('/load-more-latest', [HomeController::class, 'loadMoreLatest'])->name('loadMoreLatest');
Route::get('/load-more-news', [HomeController::class, 'loadMoreNews'])->name('loadMoreNews');
Route::get('load-more-predictions', [HomeController::class, 'loadMorePredictions'])->name('loadMorePredictions');
Route::get('load-more-fantasy', [HomeController::class, 'loadMoreFantasy'])->name('loadMoreFantasy');
Route::get('load-more-worldcup', [HomeController::class, 'loadMoreWorldCup'])->name('loadMoreWorldCup');
Route::get('load-more-records', [HomeController::class, 'loadMoreRecords'])->name('loadMoreRecords');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/advertise', [HomeController::class, 'advertise'])->name('advertise');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/copyright', [HomeController::class, 'copyright'])->name('copyright');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');
Route::get('/dmca', [HomeController::class, 'dmca'])->name('dmca');
Route::get('/write-for-us', [HomeController::class, 'writeForUs'])->name('writeForUs');
Route::post('/contact-us', [HomeController::class, 'postContactUs'])->name('postContactUs');
Route::get('/test-api', [HomeController::class, 'tests'])->name('tests');
Route::get('/test-view', [HomeController::class, 'testView'])->name('testView');



Route::prefix('admin')->group(function () {

    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'submit'])->name('login.submit');

    Route::middleware('admin.auth')->group(function () {

        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::get('article', [ArticleController::class, 'index'])->name('article');
        Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');
        Route::post('article/store', [ArticleController::class, 'store'])->name('article.store');
        Route::get('article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
        Route::post('article/update/{article}', [ArticleController::class, 'update'])->name('article.update');
        Route::get('article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

        Route::get('cricspecial', [CricSpecialController::class, 'index'])->name('cricspecial');
        Route::get('cricspecial/create', [CricSpecialController::class, 'create'])->name('cricspecial.create');
        Route::post('cricspecial/store', [CricSpecialController::class, 'store'])->name('cricspecial.store');
        Route::get('cricspecial/edit/{cricspecial}', [CricSpecialController::class, 'edit'])->name('cricspecial.edit');
        Route::post('cricspecial/update/{cricspecial}', [CricSpecialController::class, 'update'])->name('cricspecial.update');
        Route::get('cricspecial/destroy/{cricspecial}', [CricSpecialController::class, 'destroy'])->name('cricspecial.destroy');

        Route::get('news', [NewsController::class, 'index'])->name('news');
        Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('news/store', [NewsController::class, 'store'])->name('news.store');
        Route::get('news/edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
        Route::post('news/update/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::get('news/destroy/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

        Route::get('fantasy', [FantasyController::class, 'index'])->name('fantasy');
        Route::get('fantasy/create', [FantasyController::class, 'create'])->name('fantasy.create');
        Route::post('fantasy/store', [FantasyController::class, 'store'])->name('fantasy.store');
        Route::get('fantasy/edit/{fantasy}', [FantasyController::class, 'edit'])->name('fantasy.edit');
        Route::post('fantasy/update/{fantasy}', [FantasyController::class, 'update'])->name('fantasy.update');
        Route::get('fantasy/destroy/{fantasy}', [FantasyController::class, 'destroy'])->name('fantasy.destroy');

        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
});

Route::fallback(function () {
    return redirect()->route('home');
});
