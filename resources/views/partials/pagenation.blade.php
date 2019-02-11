<div class="pagination-container">
  @php($current_page = App\get_current_page())
  @php($page_number_max = App\get_page_max($count))
  @if($page_number_max > 1 )
  @if($current_page !== $page_number_max)
  <a href='{{ get_pagenum_link($current_page + 1) }}' class='button-double next-button'>
    <p class='head-text'>ガンガンいこうぜ(次へ)</p>
    <div class='deco'></div>
  </a>
  @php($nav_class = 'last-page')
  @elseif($current_page === 1)
  @php($nav_class = 'first-page')
  @endif
  <div class="nav {{ $nav_class }}">
    <a href="{{ get_pagenum_link($current_page - 1) }}" class="dir-button prev">
      <img src="@asset('images/prev-white.svg')" alt="">
    </A>
    <div class="now">
      <div class="select-wrap">
        <select class="select" name="" id="">
          <option value="#">{{ $current_page }}</option>
          @for($i=1; $i <= $page_number_max; $i++) <option value="{{ get_pagenum_link($i) }}">{{ $i }}</option>
            @endfor
        </select>
      </div>
      <img class="slash" src="@asset('images/slash.svg')" alt="">
      <p class="max">{{ $page_number_max }}</p>
    </div>
    <a href="{{ get_pagenum_link($current_page + 1) }}" class="dir-button next">
      <img src="@asset('images/next-white.svg')" alt="">
    </a>
  </div>
  @endif
</div>
