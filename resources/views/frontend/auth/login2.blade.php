
@extends('frontend.layouts.app2')

@section('title', __('Login'))

@section('content')

<x-forms.post :action="route('frontend.auth.login')">
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
          <h1 class="form__title">{{appName()}} | @lang('Login')</h1>
        @include('includes.partials.messages2')
          <label for="email" class="form__label"><span class="form__label__text">{{ __('E-mail Address') }}</span>
            <input type="email" name="email" id="email" class="form__input" placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" required autofocus autocomplete="off"  />
            <div class="form__input-border"></div>
          </label>
          <label for="password" class="form__label"><span class="form__label__text">{{ __('Password') }}</span>
            <input type="password" name="password" id="password" class="form__input" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="current-password" />
            <div class="form__input-border"></div>
          </label>
          <div class="form-check">
            <input name="remember" id="remember" class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }} />
            <label class="form-check-label" for="remember">
                                      @lang('Remember Me')
            </label>
            </div><!--form-check-->
            <x-utils.link :href="route('frontend.auth.password.request')" class="btn btn-link2" :text="__('Forgot Your Password?')" />
          <button class="button" type="submit">@lang('Login')</button><br>
        </div>
      </div>
    </div>

  </div>
  </x-forms.post>

</div>
@endsection
