@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  @component('partials.page-header', ['title' => 'Sitemap'])@endcomponent
  <div class="page-sitemap">
    <ul class="page-lists">
      <li><a href="/" class="sitemap-bg-title">Home</a></li>
      <li><a href="/new" class="sitemap-bg-title">新着記事</a></li>
      <li><a href="/popular" class="sitemap-bg-title">人気記事</a></li>
      <li><a href="/contact" class="sitemap-bg-title">お問い合わせ</a></li>
      <li><a href="/policy" class="sitemap-bg-title">プライバシーポリシー</a></li>
      <li>
        <p class="sitemap-section-title">Category</p>
        <ul class="category-lists">
          <li><a href="/category/interview">Interview</a></li>
          <li><a href="/category/study">Study</a></li>
          <li><a href="/category/lifestyle">LifeStyle</a></li>
          <li><a href="/category/hangout">HangOut</a></li>
          <li><a href="/category/travel">Travel</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
@endsection
