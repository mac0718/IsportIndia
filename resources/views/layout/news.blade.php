@inject('news', 'App\Models\News')
@foreach ($news->getData() as $newsKey => $new)
<article class="d-flex align-items-start">
    <b class="num">{{++$newsKey}}</b>
    <div class="desc flex-grow-1">
        <span class="badge bg-primary">
            {{ Str::limit($new->title, 30, '...') }}
        </span>
        <h4 class="small-head mb-0">
            <a class="overflow-hidden" href="{{ route('news.details',$new->slug) }}">
                {{ $new->short_description }}
            </a>
        </h4>
    </div>
</article>
@endforeach