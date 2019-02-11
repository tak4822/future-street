<div class="card-new">
  <a href="{{ $link }}" class="thumb-container">
    <img class="thumb" src="{{ $image }}" alt="{{ $title }}">
  </a>
  <div class="rightside-container">
    <div class="cat-container">
      <p class="date">{{ $date }}</p>
      <div class="deco"></div>
      @component('partials.category', ['category'=>$category, 'type'=> ''])@endcomponent
    </div>
    <a class="text-container" href="{{ $link }}">
      <h4 class="head-text">{{ $title }}</h4>
    </a>
  </div>
</div>
