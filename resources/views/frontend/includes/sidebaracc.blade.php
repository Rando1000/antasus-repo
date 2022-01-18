<aside id="sidebare" class="nanos nano-contents">
  <div class="SideBar_sideBar__2Kr2E d-none d-lg-flex flex-column">
    <div class="py-4 px-3 d-flex align-items-center">
      <div class="Desktop_avatar__2ZSlw flex-shrink-0">
        <img src="{{asset('storage/'.Auth::user()->dashpic)}}" class="img-fluid rounded-circle">
      </div>
      <h4 style="font-size: 20px; color: #000000" class="ml-3 mb-0 font-weight-bold">Welcome Back,<br>{{$logged_in_user->name}}!</h4>
    </div>
    <ul class="NavBar_navBar__3z_H4 px-3">
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/">
          <span class="NavIcon_navIcon fas fa-home" style="">&nbsp;</span>Home
        </a>
      </li>
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/dashboard">
          <span class="NavIcon_navIcon fas fa-th-list" style="">&nbsp;</span>Dashboard
        </a>
       </li>
       {{--<li class="NavItem_container__2OtVw NavItem_selected__1_kae">
        <a class="NavItem_navItem__3jtj1" href="/profile/my-wallet">
          <span class="NavIcon_navIcon" style="">&nbsp;</span>My NFTs
        </a>
      </li> --}}
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/markets/portfolio">
          <span class="NavIcon_navIcon fas fa-wallet" style="">&nbsp;</span>Ad Manager
        </a>
      </li>
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/profile/my-orders">
          <span class="NavIcon_navIcon fas fa-business-time" style="">&nbsp;</span>My Orders
        </a>
      </li>
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/profile/reviews">
          <span class="NavIcon_navIcon fas fa-backward" style="">&nbsp;</span>Reviews
        </a>
      </li>
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/profile/current-item-list">
          <span class="NavIcon_navIcon fas fa-clipboard-list" style="">&nbsp;</span>Listing
        </a>
      </li>
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/profile/history">
        <span class="NavIcon_navIcon fas fa-history" style="">&nbsp;</span>History
      </a>
      </li>
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/chat">
          <span class="NavIcon_navIcon fas fa-tasks" style="">&nbsp;</span>chat
        </a>
      </li>
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/widget-builder">
          <span class="NavIcon_navIcon fas fa-store" style="">&nbsp;</span>Store
        </a>
        <span class="Icon_icon__14PZw Icon_sm__1VfEf" style="">&nbsp;
        </span>
      </li>
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/support">
          <span class="NavIcon_navIcon fas fa-retweet" style="">&nbsp;</span>Support
        </a>
      </li>
      <li class="NavItem_container__2OtVw">
        <a class="NavItem_navItem__3jtj1" href="/account">
          <span class="NavIcon_navIcon fas fa-user-cog" style="">&nbsp;</span>Settings
        </a>
      </li>
    </ul>
    <div class="border-top py-4 px-3">
      <a href="{{ route('frontend.advert')}}">
        <button type="button" class="mb-3 btn btn-primary btn-block">Create an item</button>
      </a>
      <a href="/go-pro"><button type="button" class="btn btn-outline-primary btn-block">Go Pro</button>
      </a>
    </div>
  </div>
</aside>