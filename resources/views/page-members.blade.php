@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <div class="member-page">
    <div class="hero-container">
      <div class="member-hero"></div>
    </div>
    <div class="member-list">
      @php($member_ids = get_users( array( 'fields' => array( 'ID' ) ) ))
      @foreach($member_ids as $id)
      @php($member = get_user_meta($id->ID))
      <a href="/author/{{ get_userdata($id->ID)->user_nicename }}/" class="member-wrapper">
        <div class="color" style="background: {{ $member['color'][0] }}"></div>
        <p class="name">{{ $member['nickname'][0] }}</p>
        <img src="{{ get_avatar_url($id->ID, array("size"=>400)) }}" alt="">
      </a>
      @endforeach
    </div>
  </div>
</div>

@endsection
