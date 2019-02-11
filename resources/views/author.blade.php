@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <?php global $author ?>
  @php($curauth = get_user_meta(intval($author)))
  <div class="member-each-page">
    <div class="hero-container">
      <div class="member-box" style="background: {{ $curauth['color'][0] }}">
        <div class="self-pic">
          <img src="{{ get_avatar_url($author, array("size"=>400)) }}" alt="">
        </div>
        <p class="fav name">{{ $curauth['nickname'][0] }}</p>
        <p class="fav words">{{ $curauth['favorite_words'][0] }}</p>
        <p class="fav role">{{ $curauth['role'][0] }}</p>
        <p class="fav color">{{ $curauth['color'][0] }}</p>
      </div>
      <div class="discription-container">
        <p class="description">
          {{ $curauth['description'][0] }}
        </p>
        <a class="url" href="{{ the_author_meta('user_url') }}">{{ the_author_meta('user_url') }}</a>
      </div>
    </div>
    <div class="articles-container">
      <p class="section-title">このヒトが書いた記事</p>
      <div class="articles-wrapper">
        @while(have_posts()) @php(the_post())
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
    'count' => App\get_searched_posts_count()
    ])@endcomponent
  </div>
</div>
@endsection
