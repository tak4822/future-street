<section class="new">
  <img class="new-deco" src="@asset('images/new.svg')" alt="">
  <p class="section-title">新着記事</p>
  <div class="contents">
    @php($i = 0) @while($latest_posts->have_posts() && $i < 8) @php($latest_posts->the_post())
      @component('partials.card-new', [
      'date' => get_post_time('M j, Y'),
      'link' => get_permalink(),
      'title' => get_the_title(),
      'image' => get_the_post_thumbnail_url(get_the_ID(), 'small_thumb'),
      'category' => get_the_category()[0]->cat_name,
      ])
      @endcomponent
      @php($i += 1) @endwhile
      @component('partials.button', [
      'text' => 'もっと読む？',
      'link' => '/new'
      ])@endcomponent
  </div>
</section>
