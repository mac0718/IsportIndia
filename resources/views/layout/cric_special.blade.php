@inject('cric', 'App\Models\CricSpecial')

<div id="carousel" class="style_inner__csGhV slider-track d-flex style_single__wL76r" id="c-slider" style="gap: 15px">
  @foreach ($cric->getData() as $key => $cri)
  <div data-slick-index="{{++$key}}">
    <article class="style_item__CjFgl">
      <div class="block-img">
        <a href="{{route('cricspecial.details',[$cri->slug])}}"><span style="
                box-sizing: border-box;
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
                  box-sizing: border-box;
                  display: block;
                  width: initial;
                  height: initial;
                  background: none;
                  opacity: 1;
                  border: 0px;
                  margin: 0px;
                  padding: 62.5% 0px 0px;
                "></span><img alt="Shijit Chandran."
              sizes="(max-width: 767px) 120px, (max-width: 991px) 180px, (max-width: 1190px) 200px, 240px"
              src="{{ getImageUrl($cri->img) }}" decoding="async" data-nimg="responsive" class="style_postimg__rYHSo"
              style="
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
                " /></span></a>
      </div>
      <span class="undefined my-2 badge bg-secondary">{{$cri->tag}}</span>
      <h4 class="small-head mb-0 overflow-hidden">
        <a href="{{route('cricspecial.details',[$cri->slug])}}">{{ $cri->short_description }} </a>
      </h4>
    </article>
  </div>
  @endforeach
</div>