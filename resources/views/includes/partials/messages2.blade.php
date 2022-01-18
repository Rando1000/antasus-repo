

@if(isset($errors) && $errors->any())
    <x-utils.alertnew type="danger">
        @foreach($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    </x-utils.alertnew>
@endif


@if(session()->get('flash_success'))
    <x-utils.alertnew type="success">
        {{ session()->get('flash_success') }}
    </x-utils.alertnew>
@endif

@if(session()->get('flash_warning'))
    <x-utils.alertnew type="warning">
        {{ session()->get('flash_warning') }}
    </x-utils.alertnew>
@endif

@if(session()->get('flash_info') || session()->get('flash_message'))
    <x-utils.alertnew type="info">
        {{ session()->get('flash_info') }}
    </x-utils.alertnew>
@endif

@if(session()->get('flash_danger'))
    <x-utils.alertnew type="danger">
        {{ session()->get('flash_danger') }}
    </x-utils.alertnew>
@endif

@if(session()->get('status'))
    <x-utils.alertnew type="success">
        {{ session()->get('status') }}
    </x-utils.alertnew>
@endif

@if(session()->get('resent'))
    <x-utils.alertnew type="success">
        @lang('A fresh verification link has been sent to your email address.')
    </x-utils.alertnew>
@endif

@if(session()->get('verified'))
    <x-utils.alertnew type="success">
        @lang('Thank you for verifying your e-mail address.')
    </x-utils.alertnew>
@endif
