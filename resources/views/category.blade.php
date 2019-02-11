@extends('layouts.app')

@section('content')
@php($category = get_the_category())
<div class="category-page">
  <div class="articles-hero {{ $category[0]->slug }}">
    <div class="hero-pc {{ $category[0]->slug }}">
      <div class="text-img"></div>
      <div class="main-img"></div>
    </div>
  </div>
  <div class="articles-container">
    <p class="section-title">記事一覧</p>
    <div class="articles-wrapper">
      @while(have_posts()) @php(the_post())
      @component('partials.card-big', [
      'link' => get_permalink(),
      'date' => get_post_time('M j, Y'),
      'title' => get_the_title(),
      'image' => get_the_post_thumbnail_url(),
      'tags' => get_the_tags(),
      'category' => $category[0]->slug,
      'class' => 'date'
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
