@php($members = App\Controllers\FrontPage::get_members_data())

<section class="member">
  <div class="member-wrapper">
    <div class="title-container">
      <img class="title-text" src="@asset('images/members.jpg')" alt="">
    </div>
    <div class="member-slider">
      <div class="avator-container">
        <div class="avator-list">
          @foreach ($members as $member)
          <img class="" src="{{ $member['avator'] }}" alt="{{ $member['name'] }}">
          @endforeach
        </div>
      </div>
      <div class="navigation left">
        <img src="@asset('images/back.png')" alt="">
      </div>
      <div class="navigation right active">
        <img src="@asset('images/next.png')" alt="">
      </div>
    </div>
    <div class="member-info">
      <div class="top">
        <p id="slider-name" class="name">{{ $members[0]['name'] }}</p>
        <div class="deco"></div>
        <p id="slider-role" class="role head-text">{{ $members[0]['role'] }}</p>
        <div id="color" class="color" style="background: {{ $members[0]['color'] }};"></div>
      </div>
      <div class="favorite-container">
        <p class="label">Favorite Words :</p>
        <p id="slider-words" class="words">{{ $members[0]['words'] }}</p>
      </div>
      <p id="slider-desc" class="desc">{{ $members[0]['desc'] }}</p>
    </div>
  </div>
  @component('partials.button', [
  'text' => 'もっと👀',
  'class' => 'small',
  'link' => '/members'
  ])@endcomponent
</section>
