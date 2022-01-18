@extends('frontend.layouts.app3')
@section('title', __('Dashboard'))

@section('content')

<main id="mains">
  <div class="overlay"></div>

<div class="profile_appProfilewrapper__10bsw flex-fill d-flex flex-column px-md-4 pb-4">
  <div class="px-md-3">

    @include('frontend.user.helper.dashheader')
    <div class="rower">
      @include('frontend.user.helper.dashportfol')
      @include('frontend.user.helper.dashactivity')
      @include('frontend.user.helper.dashhist')
    </div>
  </div>
  
</div>

</main>

@endsection