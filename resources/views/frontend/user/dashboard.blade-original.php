@extends('frontend.layouts.app3')
@section('title', __('Dashboard'))

@section('content')

<main id="mains">
  <div class="overlay"></div>
  <header class="header">
    <h1 class="page-title"><a class="sidebar-toggle-btn trigger-toggle-sidebar"><span class="line"></span><span class="line"></span><span class="line"></span><span class="line line-angle1"></span><span class="line line-angle2"></span></a><a></a></h1>
  </header>

 <div id="main-nano-wrapper" class="nanos">
    <div class="nano-contents">
    <div class="container">
    <div class="row">
    <div class="mb-30 col-md-6 col-lg-4">
      <div class="card">
      <img class="card-icon" src="/img/Dashboard/performance.png" alt="Performance" >
      <h3 class="card-title">Performance</h3>
      <p class="card-text">Check your Yearly Performance Details.</p>
      <a class="card-link" href="#">Learn more</a>
      </div>
    </div>
    <div class="mb-30 col-md-6 col-lg-4">
      <div class="card">
      <img class="card-icon" src="/img/Dashboard/Zeitung.png" alt="Advertise management" >
      <h3 class="card-title">Advertise Management</h3>
      <p class="card-text">Check your own & other Announcements.</p>
      <a class="card-link" href="/markets">CHECK IT</a>
      </div>
    </div>

    <div class="mb-30 col-md-6 col-lg-4">
      <div class="card">
      <img class="card-icon" src="/img/Dashboard/box.png" alt="My deliveries" >
      <h3 class="card-title">My Deliveries</h3>
      <p class="card-text">Check your Delivery status.</p>
      <a class="card-link" href="#">Learn more</a>
      </div>
    </div>

    <div class="mb-30 col-md-6 col-lg-4">
        <div class="card">
        <img class="card-icon" src="/img/Dashboard/box.png" alt="My deliveries" >
        <h3 class="card-title">Social Community</h3>
        <p class="card-text">Contacts - Friends - ChatBuy - Social</p>
        <a class="card-link" href="/chat">connect now!</a>
        </div>
      </div>



</div>

    </div>
    </main>


@endsection
