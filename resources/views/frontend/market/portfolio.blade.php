@extends('frontend.layouts.app3')
@section('title', __('My Ads'))

@section('content')

  <div class="overlay"></div>
  <header class="headery">
    <h2 class="page-title-ads">Meine Anzeigen<a class="sidebar-toggle-btn trigger-toggle-sidebar"><span class="line"></span><span class="line"></span><span class="line"></span><span class="line line-angle1"></span><span class="line line-angle2"></span></a><a></a></h2>
  </header>

  <div id="main-nano-wrapper" class="nano">


    <div class="nano-content">

@include('frontend.market.helper.userads')

    <!-- CONTENT -->

</div>
</div>
</div>


@endsection