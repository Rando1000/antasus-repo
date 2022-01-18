<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand">
       <div class="iconcolor"> <i class="cil-infinity"></i></div>
    </div><!--c-sidebar-brand-->

    <br>  <br>  <br>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.dashboard')"
                :active="activeClass(Route::is('admin.dashboard'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Dashboard')" />
        </li>

        @if (
            $logged_in_user->hasAllAccess() ||
            (
                $logged_in_user->can('access.user.list') ||
                $logged_in_user->can('access.user.deactivate') ||
                $logged_in_user->can('access.user.reactivate') ||
                $logged_in_user->can('access.user.clear-session') ||
                $logged_in_user->can('access.user.impersonate') ||
                $logged_in_user->can('access.user.change-password')
            )
        )
            <li class="c-sidebar-nav-title">@lang('System')</li>

            <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Access')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    @if (
                        $logged_in_user->hasAllAccess() ||
                        (
                            $logged_in_user->can('access.user.list') ||
                            $logged_in_user->can('access.user.deactivate') ||
                            $logged_in_user->can('access.user.reactivate') ||
                            $logged_in_user->can('access.user.clear-session') ||
                            $logged_in_user->can('access.user.impersonate') ||
                            $logged_in_user->can('access.user.change-password')
                        )
                    )
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.user.index')"
                                class="c-sidebar-nav-link"
                                :text="__('User Management')"
                                :active="activeClass(Route::is('admin.auth.user.*'), 'c-active')" />
                        </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess())
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.role.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Role Management')"
                                :active="activeClass(Route::is('admin.auth.role.*'), 'c-active')" />
                        </li>
                    @endif
                </ul>
            </li>

            <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.announcements.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-storage"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Website')" />

                <ul class="c-sidebar-nav-dropdown-items">

                    @role('Lead-Developer|Developer|Administrator')
                        <!--- [ Announcements ] --->
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.announcements.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Announcements')"
                                :active="activeClass(Route::is('admin.announcements.*'), 'c-active')" />
                        </li>
                        <!--- [ Marketplace ] --->
                            <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.marketplace.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Marketplace')"
                                :active="activeClass(Route::is('admin.marketplace.*'), 'c-active')" />
                        </li>
                        <!--- [ Theme ] --->
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.announcements.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Theme')"
                                :active="activeClass(Route::is('admin.announcements.*'), 'c-active')" />
                        </li>
                        <!--- [ Pages ] --->
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.announcements.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Pages')"
                                :active="activeClass(Route::is('admin.announcements.*'), 'c-active')" />
                        </li>
                        <!--- [ Team ] --->
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.announcements.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Team')"
                                :active="activeClass(Route::is('admin.announcements.*'), 'c-active')" />
                        </li>
                    @endrole
                </ul>
            </li>

            <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.announcements.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-equalizer"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Development')" />

                <ul class="c-sidebar-nav-dropdown-items">

                    @if ($logged_in_user->hasAllAccess())
                      <!--- [ Debuger ] --->
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.announcements.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Debuger')"
                                :active="activeClass(Route::is('admin.announcements.*'), 'c-active')" />
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        <br><br>
        <li class="c-sidebar-nav-title">@lang('USER')</li>
        <li class="c-sidebar-nav-dropdown">
        <li class="c-sidebar-nav-item">
                 <x-utils.link
                                :href="route('frontend.user.dashboard')"
                                class="c-sidebar-nav-link"
                                icon="c-icon mr-2 cil-settings"
                                :text="__('Control Panel')" />
                </li>
                <li class="c-sidebar-nav-item">
                <x-utils.link
                class="c-sidebar-nav-link"
                    icon="c-icon mr-2 cil-account-logout"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <x-slot name="text">
                        @lang('Logout')
                        <x-forms.post :action="route('frontend.auth.logout')" id="logout-form" class="d-none" />
                    </x-slot>
                </x-utils.link>
                </li>
                </li>

    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
