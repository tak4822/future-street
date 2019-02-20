<div class="sidebar">
  <div class="popular">
    <div class="title-container">
      <img class="pop-deco" src="@asset('images/pop.svg')" alt="">
      <p class="section-title">人気記事</p>
    </div>
    <div class="holz-list-container">
      <div class="holz-list">
        @php($i = 0)@while($popular_posts->have_posts() && $i < 3) @php($popular_posts->the_post())
          @component('partials.card-big', [
          'link' => get_permalink(),
          'title' => get_the_title(),
          'image' => get_the_post_thumbnail_url(get_the_ID(), 'normal_thumb'),
          'category' => get_the_category()[0]->cat_name,
          'tags' => get_the_tags(),
          'class' => 'ranked rank-' . $i
          ])@endcomponent
          @php($i += 1) @endwhile
      </div>
    </div>
  </div>
  <div class="matome">
    <div class="title">
      <p class="text">おすすめまとめ記事</p>
    </div>
    <div class="banner-wrapper">
      <a href="/ca_lifestyle_prepare_matome/" class="matome">
        <img src="@asset('images/matome_1.jpg')" alt="">
      </a>
      <a href="/ca_todo_matome/" class="matome">
        <img src="@asset('images/matome_2.jpg')" alt="">
      </a>
      <a href="/ca_hangout_hima_matome/" class="matome">
        <img src="@asset('images/matome_3.jpg')" alt="">
      </a>
    </div>
  </div>
</div>
