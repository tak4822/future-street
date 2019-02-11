@extends('layouts.app')

@section('content')
<div class="first-look">
  @include('partials.front-picked')
  @include('partials.front-new')
</div>
@include('partials.front-slogan')
@include('partials.front-member')
@include('partials.front-popular')
@include('partials.front-category')
@endsection
