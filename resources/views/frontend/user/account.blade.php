@extends('frontend.layouts.app3')
@section('title', __('My Account'))
@section('content')
<main id="mains">
  <div class="overlay"></div>
  <header class="header">
    <h1 class="page-title"><a class="sidebar-toggle-btn trigger-toggle-sidebar"><span class="line"></span><span class="line"></span><span class="line"></span><span class="line line-angle1"></span><span class="line line-angle2"></span></a><a></a></h1>
  </header>

  <div id="main-nano-wrapper" class="nano">


    <div class="nano-content">
    <div class="pc-tab">


    <div class="user-profile mb-primary">
    <div class="card position-relative card-with-shadow py-primary border-0">
    <div class="row align-items-center"><div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
    <div class="media border-right px-5 pr-xl-5 pl-xl-0 align-items-center user-header-media">
    <form data-url="admin/auth/users/profile-picture" class="mb-0">
    <div class="profile-pic-wrapper position-relative">
    <div name="user_image" class="circle mx-xl-auto">
    <div class="custom-image-upload-wrapper circle mx-xl-auto">
    <div class="image-area d-flex"><img src="{{ $logged_in_user->avatar }}" alt="" class="separator"></div>
    <br>
    </div> <!----></div></div></form>
    <div class="media-body user-info-header">
    <br><h5>
    {{ $logged_in_user->name }}</h5>
    <p class="text-muted mb-0">{!! $logged_in_user->roles_label !!}</p>
    <p class="text-muted mb-1">{{ $logged_in_user->email }}</p>

              <span class="badge badge-pill badge-success user-status">  @if(Cache::has('user-is-online-' . $logged_in_user->id))
                                                <span class="text">Online</span>
                                            @else
                                                <span class="text">Offline</span>
                                            @endif</span>

          <div class="social-links pt-3"><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
        </div></div></div></div> <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-7">
      <div class="user-details px-5 px-sm-5 px-md-5 px-lg-0 px-xl-0 mt-5 mt-sm-5 mt-md-0 mt-lg-0 mt-xl-0"><div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><div class="media mb-2 mb-xl-2">

    <div class="media-body"><p class="text-muted mb-0">Timezone:</p> <p class="mb-0">{{ $logged_in_user->timezone ? str_replace('_', ' ', $logged_in_user->timezone) : __('N/A') }}</p></div>
   <div class="media-body"><p class="text-muted mb-0">Created:</p> <p class="mb-0">{{ $logged_in_user->created_at->diffForHumans() }}</p></div>
   <div class="media-body"><p class="text-muted mb-0">Updated:</p> <p class="mb-0">{{ $logged_in_user->updated_at->diffForHumans() }}</p></div>
   </div></div></div>
   </div></div></div></div></div>


<br><br>



    <input checked="checked" id="tab1" type="radio" name="pct" />
    <input id="tab2" type="radio" name="pct" />
    <input id="tab3" type="radio" name="pct" />
    <input id="tab4" type="radio" name="pct" />
    <nav>
     <ul>
       <li class="tab1">
            <label for="tab1">Profile</label>
      </li>
      <li class="tab2">
        <label for="tab2">Information</label>
      </li>
      <li class="tab3">
        <label for="tab3">Password</label>
      </li>
      <li class="tab4">
        <label for="tab4">2FA</label>
      </li>
    </ul>
    </nav>
     <section>
     <div class="tab1">
      <h2>Profile</h2>
      @include('frontend.user.account.tabs.profile')
    </div>
    <div class="tab2">
      <h2>Information</h2>
      @include('frontend.user.account.tabs.information')
    </div>
    @if (! $logged_in_user->isSocial())
    <div class="tab3">
      <h2>Password</h2>
      @include('frontend.user.account.tabs.password')
    </div>
    @endif
    <div class="tab4">
      <h2>2FA</h2>
      @include('frontend.user.account.tabs.two-factor-authentication')
    </div>
    </section>
    </div>
</div>
</div>
</div>
</main>

@endsection
