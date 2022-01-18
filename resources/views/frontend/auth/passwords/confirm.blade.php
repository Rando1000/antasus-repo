
@extends('frontend.layouts.app2')

@section('title', __('Please confirm your password before continuing.'))

@section('content')

<x-forms.post :action="route('frontend.auth.password.confirm')">
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
          <h1 class="form__title">{{appName()}} | @lang('Please confirm your password before continuing.')</h1>
          @include('includes.partials.messages2')
          <label for="password" class="form__label"><span class="form__label__text">{{ __('Password') }}</span>
            <input type="password" name="password" id="password" class="form__input" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="current-password" />
            <div class="form__input-border"></div>
          </label>
            </div><!--form-check-->
          <button class="button" type="submit">@lang('Confirm Password')</button><br>
        </div>
      </div>
    </div>
  
  </div>
  </x-forms.post>

</div>
@endsection
