


<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered mb-0">
        <tr>
            <th>@lang('Avatar')</th>
            <td><img class="avatar" src="{{ $logged_in_user->avatar }}" class="user-profile-image" /></td>
        </tr>

        <tr>
            <th>@lang('Name')</th>
            <td>{{ $logged_in_user->name }}</td>
        </tr>

        <tr>
            <th>@lang('E-mail Address')</th>
            <td>{{ $logged_in_user->email }}</td>
        </tr>
        <tr>
            <th>@lang('Role')</th>
            <td>{!! $logged_in_user->roles_label !!}</td>
        </tr>
        @if ($logged_in_user->isSocial())
            <tr>
                <th>@lang('Social Provider')</th>
                <td>{{ ucfirst($logged_in_user->provider) }}</td>
            </tr>
        @endif

        <tr>
            <th>@lang('Timezone')</th>
            <td>{{ $logged_in_user->timezone ? str_replace('_', ' ', $logged_in_user->timezone) : __('N/A') }}</td>
        </tr>

        <tr>
            <th>@lang('Account Created')</th>
            <td>({{ $logged_in_user->created_at->diffForHumans() }}</td>
        </tr>

        <tr>
            <th>@lang('Last Updated')</th>
            <td>({{ $logged_in_user->updated_at->diffForHumans() }}</td>
        </tr>
    </table>
</div><!--table-responsive-->