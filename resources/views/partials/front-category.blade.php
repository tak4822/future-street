<section class="category">
  @php($categories = App\Controllers\App::get_categories())
  @foreach ($categories as $category )
  <div class="category-each">
    <div class="category-picked-container">
      <div class="category-img {{ $category }}"></div>
      @php($cat_articles = App\Controllers\App::get_category_posts($category))
      <div class="picked-article-category {{ $category }}">
        @component('partials.card-big', [
        'link' => $cat_articles[0]['link'],
        'title' => $cat_articles[0]['title'],
        'image' => $cat_articles[0]['image'],
        'date' => $cat_articles[0]['date'],
        'tags' => $cat_articles[0]['tags'],
        'category' => $category,
        'class' => 'date'
        ])@endcomponent
      </div>
    </div>
    <div class="list-container">
      <div class="list">
        @foreach ($cat_articles as $key => $article )
        <a class="simple-card card-{{ $key }}" href="{{ $article['link'] }}">
          <div class="img-container">
            <img src="{{ $article['image'] }}" alt="">
          </div>
          <p class="title head-text">{{ $article['title'] }}</p>
        </a>
        @endforeach
        @component('partials.button', [
        'text' => 'もっと👀',
        'class' => '',
        'link' => '/category/' . $category
        ])@endcomponent
      </div>
    </div>
  </div>
  @endforeach
</section>
