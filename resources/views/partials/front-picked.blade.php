@php($picked_article = App\Controllers\FrontPage::get_picked_article())
<section class="picked">
  <a class="picked-wrapper" href="{{ $picked_article['link'] }}">
    <div class="thumb-container">
      <div class="thumb-wrapper">
        <img class="thumb" src="{{ $picked_article['image'] }}" alt="{{ $picked_article['title'] }}">
      </div>
      <img class="pickup-text yellow" src="@asset('images/pickup_yellow.svg')" alt="">
      <img class="pickup-text pink" src="@asset('images/pickup_pink.svg')" alt="">
    </div>
    <div class="cat-container">
      @component('partials.category', ['category'=>$picked_article['category']])@endcomponent
      <div class="deco"></div>
      @component('partials.tags', ['tags'=>$picked_article['tags']])@endcomponent
    </div>
    <h2 class="title head-text">{{ $picked_article['title'] }}</h2>
    <p class="desc">{{ $picked_article['short_description'] }}</p>
  </a>
</section>
