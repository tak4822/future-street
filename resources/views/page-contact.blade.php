@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  @component('partials.page-header', ['title' => 'お問い合わせ'])@endcomponent
  <div class="page-contact">
    <p>いつもCanarieをご利用頂きありがとうございます。</p>
    <p>Canarieは取材リクエストや、バナー広告、広告記事の出稿以来を募集しております。<br />詳細な資料については、お問い合わせいただいたクライアント様に個別にご連絡いたします。</p>
    <br>
    <p>『こんな記事を書いて欲しい！』などのサービスに関するお問い合わせ・ご意見・ご感想などもご気軽にご連絡ください。</p>
    @while(have_posts()) @php(the_post())
    @include('partials.content-page')
    @endwhile
  </div>
</div>
@endsection
