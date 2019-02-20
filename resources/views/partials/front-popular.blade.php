<section class="popular">
  <div class="title-container">
    <img class="pop-deco" src="@asset('images/pop.svg')" alt="">
    <p class="section-title">人気記事</p>
  </div>
  <div class="contents">
    <div class="pop-list">
      @php($i = 0) @while($popular_posts->have_posts() && $i < 8) @php($popular_posts->the_post())
        @php($class = $i < 3 ? 'ranked rank-' . $i : 'simple small' ) @if($i===0) <div class="top-3">
          @elseif($i===3)
    </div>
    <div class="horz-list-container">
      <div class="horz-list">
        @endif
        @component('partials.card-big', [
        'link' => get_permalink(),
        'title' => get_the_title(),
        'image' => get_the_post_thumbnail_url(get_the_ID(), 'normal_thumb'),
        'category' => get_the_category()[0]->cat_name,
        'tags' => get_the_tags(),
        'class' => $class
        ])@endcomponent
        @php($i += 1) @endwhile
      </div>
    </div> <!-- horz-list -->
  </div>
  </div><!-- pop-list -->
  @component('partials.button', [
  'text' => 'もっと👀',
  'class' => 'small',
  'link' => '/popular'
  ])@endcomponent
</section>
