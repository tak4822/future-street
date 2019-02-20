<article @php(post_class())>
  <div class="article-container">
    <div class="contents-container">
      <div class="hero-container">
        <div class="short-info-wrapper">
          <p class="date">{{ get_post_time('M j, Y') }}</p>
          <div class="deco"></div>
          @component('partials.category', ['category'=>get_the_category()[0]->name, 'type' => ''])@endcomponent
        </div>
        <h1 class="head-text">{{ get_the_title() }}</h1>
        <a href="/author/{{get_userdata(get_the_author_meta( 'ID' ))->user_nicename}}" class="author-container">
          <div class="author-img-wrapper" style="border: 3px solid {{ the_author_meta('color') }}">
            <img src="{{ get_avatar_url(get_the_author_meta( 'ID' ), array("size"=>100)) }}" alt="">
          </div>
          <p class="author-name">{{ the_author_meta('nickname') }}</p>
        </a>
        <div class="tags-wrapper">
          @component('partials.tags', ['tags'=>get_the_tags()])@endcomponent
        </div>
      </div>
      <div class="thumbnail-wrapper">
        <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'large') }}" alt="">
      </div>
      <p class="short-description">
        {{ get_post_meta(get_the_ID(), 'short_description', true) }}
      </p>

      <div id="toc"></div>

      <div class="entry-contents">
        @php(the_content())
      </div>

    </div>
    @if (App\display_sidebar())
    <aside class="sidebar-wrapper">
      @include('partials.sidebar')
    </aside>
    @endif
  </div>
</article>
