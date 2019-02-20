@extends('layouts.app')

@section('content')
<div class="tag-page">
  <div class="tag-hero">
    <p class="head-text"><span class="hash">#</span>{{ get_the_archive_title() }}</p>
  </div>
  <div class="articles-container">
    <p class="section-title">記事一覧</p>
    <div class="articles-wrapper">
      @while(have_posts()) @php(the_post())
      @component('partials.card-big', [
      'link' => get_permalink(),
      'date' => get_post_time('M j, Y'),
      'title' => get_the_title(),
      'image' => get_the_post_thumbnail_url(get_the_ID(), 'normal_thumb'),
      'tags' => get_the_tags(),
      'category' => get_the_category()[0]->name,
      'class' => ''
      ])
      @endcomponent
      @endwhile
    </div>
  </div>
  @component('partials.pagenation', [
  'count' => get_queried_object()->count
  ])@endcomponent
</div>
@endsection
