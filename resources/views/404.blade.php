@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <div class="page-404">
    <p class="title">404</p>
    @if (!have_posts())
    <div class="no-page">
      @component('partials.bird-comment', [
      'text' => 'お探しのページは見つからなかったよ！'
      ])@endcomponent
      @component('partials.button', [
      'text' => 'トップページに戻る',
      'link' => '/'
      ])@endcomponent
    </div>
    @endif
  </div>
</div>
@endsection
