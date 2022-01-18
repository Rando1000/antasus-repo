@extends('frontend.layouts.app2')

@section('title', __('Register'))

@section('content')
<x-forms.post :action="route('frontend.auth.register')">
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
          <h1 class="form__title">{{appName()}} | @lang('Register')</h1>
          @include('includes.partials.messages2')
          <label for="name" class="form__label"><span class="form__label__text">{{ __('Name') }}</span>
            <input type="name" name="name" id="name" class="form__input" placeholder="{{ __('Name') }}" value="{{ old('name') }}" maxlength="255" required autofocus autocomplete="off"  />
            <div class="form__input-border"></div>
          </label>
          <label for="email" class="form__label"><span class="form__label__text">{{ __('E-mail Address') }}</span>
            <input type="email" name="email" id="email" class="form__input" placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" required autofocus autocomplete="off"  />
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
          <div class="form-group row">
              <div class="col-md-10 offset-md-0">
                    <div class="form-check">
                       <input type="checkbox" name="terms" value="1" id="terms" class="form-check-input" required>
                               <label class="form-check-label" for="terms">
                                  @lang('I agree to the') <a href="/termsofservices" target="_blank">@lang('Terms & Conditions')</a>
                                </label>
                           </div>
                        </div>
          </div>
          <button class="button" type="submit">@lang('Register')</button><br>
        </div>
      </div>
    </div>
    </x-forms.post>
  </div>
</div>
@endsection
