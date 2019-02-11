@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <div class="new-n-pop-page">
    <div class="hero">
      <img src="@asset('images/pop.svg')" alt="">
    </div>
    <div class="articles-container">
      <p class="section-title">人気記事一覧</p>
      <div class="articles-wrapper">
        @while($popular_posts->have_posts()) @php($popular_posts->the_post())
        @component('partials.card-big', [
        'link' => get_permalink(),
        'date' => get_post_time('M j, Y'),
        'title' => get_the_title(),
        'image' => get_the_post_thumbnail_url(),
        'tags' => get_the_tags(),
        'category' => get_the_category()[0]->name,
        'class' => ''
        ])
        @endcomponent
        @endwhile
      </div>
    </div>
    @component('partials.pagenation', [
    'count' => $latest_posts->found_posts
    ])@endcomponent
  </div>
</div>
@endsection