
@extends('frontend.layouts.app2')

@section('title', __('Your password has expired.'))

@section('content')

<x-forms.patch :action="route('frontend.auth.password.expired.update')">
<div class="auth-wrap-background">
  <div class="auth-center">
    <div class="auth-blur auth-size">
      <div class="auth-wrap-background"></div>
    </div>
  </div>
  <div class="auth-center">
    <div class="auth__inner auth-size">
     <!---<div class="auth__sidebar auth__inner__section">
            </div>
            !--->
      <div class="auth__form auth__inner__section">
        <div class="form">
          <h1 class="form__title">{{appName()}} | @lang('Your password has expired.')</h1>
          @include('includes.partials.messages2')
          <label for="current_password" class="form__label"><span class="form__label__text">{{ __('Current Password') }}</span>
            <input type="password" name="current_password" id="password" class="form__input" placeholder="{{ __('Current Password') }}" maxlength="100" required autocomplete="new-password" />
            <div class="form__input-border"></div>
          </label>
          <label for="password" class="form__label"><span class="form__label__text">{{ __('Password') }}</span>
            <input type="password" name="password" id="password" class="form__input" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="new-password" />
            <div class="form__input-border"></div>
          </label>
          <label for="password" class="form__label"><span class="form__label__text">{{ __('Password Confirmation') }}</span>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form__input" placeholder="{{ __('Password Confirmation') }}" maxlength="100" required autocomplete="new-password" />
            <div class="form__input-border"></div>
          </label>
            </div><!--form-check-->

          <button class="button" type="submit">@lang('Update Password')</button><br>
        </div>
      </div>
    </div>
  
  </div>
  </x-forms.post>

</div>
@endsection
