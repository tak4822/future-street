@extends('layouts.app')

@section('content')
<div class="search-page">
  <div class="articles-hero search">
    <div class="search-word-wrapper">
      <p class="head-text">{{ get_search_query() }}</p>
    </div>
  </div>
  <div class="articles-container">
    <p class="section-title">記事一覧</p>

    @if (!have_posts())
    <div class="no-articles">
      @component('partials.bird-comment', [
      'text' => '“' . get_search_query() . '”に関する記事は見つかりませんでした。
      よかったらどんな記事を読みたいか教えてにゃー'
      ])@endcomponent
      @component('partials.button', [
      'text' => '『こんな記事を書いて欲しい！』を伝える',
      'link' => '/contact'
      ])@endcomponent
    </div>
    @endif

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
  'count' => App\get_searched_posts_count()
  ])@endcomponent
</div>
@endsection
