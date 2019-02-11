@php
$url = App\Controllers\App::getUrl();
$title = App\Controllers\App::getTitle();
@endphp

<div class="share-buttons">
  <div class="sns-share">
    <img class="share" src="@asset('images/share.svg')" alt="">
    <a class="button fb" href="//www.facebook.com/sharer.php?src=bm&u={{ $url }}&t={{ $title }}" onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;">
      <img src="@asset('images/ico_fb.svg')" alt="">
    </a>
    <a class="button tw" href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}" onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;">
      <img src="@asset('images/ico_tw.svg')" alt="">
    </a>
    <a class="button line" href="//line.me/R/msg/text/?{{$title}}%0A{{$url}}" target="_blank">
      <img src="@asset('images/ico_line.svg')" alt="">
    </a>
  </div>
</div>
