<div class="card-big {{ $class }}">
  <a href="{{ $link }}" class="thumb-container">
    <img class="thumb" src="{{ $image }}" alt="{{ $title }}">
  </a>
  <div class="text-container">
    <div class="vertical">
      @if($class === 'date')
      <a a href="{{ $link }}" class="date-wrapper">
        <p class="date">{{ $date }}</p>
      </a>
      @else
      @component('partials.category', ['category'=>$category, 'type' => 'vertical'])@endcomponent
      @endif
    </div>
    <div class="horizontal">
      <a href="{{ $link }}">
        <p class="title head-text">{{ $title }}</p>
      </a>
      <div class="horz-deco"></div>
      <div class="tags-wrapper">
        @component('partials.tags', ['tags'=>$tags])@endcomponent
      </div>
    </div>
  </div>
</div>
