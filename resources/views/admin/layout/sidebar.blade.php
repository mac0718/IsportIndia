@php
$route = Route::currentRouteName();

$article = in_array($route,[
'article',
'article.create',
'article.edit'
]);

$news = in_array($route,[
'news',
'news.create',
'news.edit'
]);

$crickspecial = in_array($route,[
'cricspecial',
'cricspecial.create',
'cricspecial.edit'
]);

$fantasy = in_array($route,[
'fantasy',
'fantasy.create',
'fantasy.edit'
]);
@endphp

<button class="close-sidebar js-close-sidebar position-absolute">
  <svg class="icon icon-close">
    <use xlink:href="#icon-close"></use>
  </svg>
</button>

<a target="_blank" class="logo flex-shrink-0" href="{{ env('APP_URL') }}" style="width: 100%">
  <img width="100%" class="logo-dark" src="{{ asset('logo.png') }}">
  <img width="100%" class="logo-light" src="{{ asset('logo.png') }}">
</a>

<div class="nav nav-pills flex-column mb-auto mt-8 menu">
  <div class="nav-item mb-2">

    {{-- ARTICLE START --}}
    <div class="nav-item mb-2">
      <a class="{{ $article ? 'active' : '' }} nav-link d-flex align-items-center p-3" href="{{route('article')}}">
        <svg class="icon icon-double-store icon-item">
          <use class="fill" href="#icon-schedule"></use>
          <use class="stroke" href="#icon-schedule"></use>
        </svg>
        Articles
      </a>
    </div>

    <div class="nav-item mb-2">
      <a class="{{ $crickspecial ? 'active' : '' }} nav-link d-flex align-items-center p-3"
        href="{{route('cricspecial')}}">
        <svg class="icon icon-double-store icon-item">
          <use class="fill" href="#icon-star-stroke"></use>
          <use class="stroke" href="#icon-star-stroke"></use>
        </svg>
        CricSpecial
      </a>
    </div>

    <div class="nav-item mb-2">
      <a class="{{ $news ? 'active' : '' }} nav-link d-flex align-items-center p-3" href="{{route('news')}}">
        <svg class="icon icon-double-store icon-item">
          <use class="fill" href="#icon-messages-fill"></use>
          <use class="stroke" href="#icon-messages-fill"></use>
        </svg>
        News
      </a>
    </div>

    <div class="nav-item mb-2">
      <a class="{{ $fantasy ? 'active' : '' }} nav-link d-flex align-items-center p-3" href="{{route('fantasy')}}">
        <svg class="icon icon-double-store icon-item">
          <use class="fill" href="#icon-laptop"></use>
          <use class="stroke" href="#icon-laptop"></use>
        </svg>
        Fantasy
      </a>
    </div>
  </div>

  <div class="border-top bottom pt-4">
    <input id="switch-theme-input" type="checkbox">
    <label class="switch-theme js-theme-switch d-flex" for="switch-theme-input">
      <div class="mode-light d-flex flex-fill align-items-center justify-content-center">
        <div class="theme-icon">
          <svg class="icon icon-double-sun">
            <use class="fill" href="#icon-sun-fill"></use>
            <use class="stroke" href="#icon-sun-stroke"></use>
          </svg>
        </div>
        <div class="theme-text">Light</div>
      </div>
      <div class="mode-dark d-flex flex-fill align-items-center justify-content-center">
        <div class="theme-icon">
          <svg class="icon icon-double-moon">
            <use class="fill" href="#icon-moon-fill"></use>
            <use class="stroke" href="#icon-moon-stroke"></use>
          </svg>
        </div>
        <div class="theme-text">Dark</div>
      </div>
    </label>
  </div>