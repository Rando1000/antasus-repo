<div class="header">
        <a href="/">
        <h2 class="logo">{{appName()}}</h2>
        </a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-button">
            <i class="fas fa-ellipsis-h"></i>
        </label>

        <ul class="menu">
            <a href="/">@lang('Home')</a>
            <a href="/markets">Market</a>
            <a href="/app">App</a>
            <a href="/team">Team</a>
            <a href="/help">@lang('Help')</a>
                    @auth   

                 
                    
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 
                       @lang('Account') 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/account/">@lang('Profile')</a>
                        <a class="dropdown-item" href="/dashboard/">@lang('Dashboard')</a>

                        <!-- ADMIN CONTROL PANEL -->
                        @role('Lead-Developer|Developer|Administrator')
                        <a class="dropdown-item acp" href="/admin/dashboard/">@lang('Admin Control Panel')</a>
                        @endrole

                        <!-- LOGOUT -->
                        <a class="dropdown-item" href="{{ route('frontend.auth.logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('frontend.auth.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                  
                  </div>
                  @else

                    
                    <a style="cursor: pointer" 
                    data-toggle="modal" 
                    data-target="#loginModal">{{ __('Login') }}</a>

                    @if (config('boilerplate.access.user.registration'))
                    <a style="cursor: pointer"
                    data-toggle="modal" 
                    data-target="#registerModal">{{ __('Register') }}</a>
                    @endif
                @endauth

            <input type="checkbox" id="chk">
            <label for="chk" class="hide-menu-button">
                <i class="fas fa-times"></i>
            </label>
        </ul>
    </div>
