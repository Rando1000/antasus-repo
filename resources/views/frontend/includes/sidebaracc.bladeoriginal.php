<aside id="sidebar" class="nano">
  <div class="nano-content">
    <div class="logo-container">CP</div>
    <br> 	<br>
    <menu class="menu-segment">
      <ul>
        <li class="title">{{ $logged_in_user->name }}</li>
        <li><a href="/">Home</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/account">My Profile</a></li>
        <li><a href="/support">Support</a></li>
      </ul>
    </menu>
    	<br> 	<br>  	<br>
    @role('Lead-Developer|Developer|Administrator')
    <div class="menu-segment">
      <ul class="labels">
        <li class="title">TEAM</li>
        <li><a href="/admin/dashboard">Admin Panel</a></li>
      </ul>
    </div>
    @endrole

    <div class="bottom-padding"></div>
  </div>
</aside>
