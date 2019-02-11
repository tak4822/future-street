<div class="tags">
  @foreach($tags as $key => $tag)
  @if($key < 2) <a href="/tag/{{$tag->slug}}" class="tag">#{{$tag->name}}</a>
    @endif
    @endforeach
</div>
