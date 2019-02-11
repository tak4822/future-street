<div class="mobile-search-container">
  <div class="overlay"></div>
  <div class="search-conatiner">
    <div class="search-close-button">
      <img src="@asset('images/ico_close.svg')" alt="">
    </div>
    <div class="search-wrapper">
      {!! get_search_form() !!}
    </div>
    <div class="recommend-kw-container">
      <p class="head-text">おすすめキーワード</p>
      <div class="deco"></div>
      <div class="kw-container">
        @php($kws = App\Controllers\App::get_recommended_keyword())
        @foreach($kws as $kw)
        <div class="kw">{{ $kw }}</div>
        @endforeach
      </div>
    </div>
  </div>
</div>
