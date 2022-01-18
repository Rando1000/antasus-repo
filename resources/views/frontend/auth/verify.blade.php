
@extends('frontend.layouts.app2')

@section('title', __('Verify Your E-mail Address'))

@section('content')

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
          <h1 class="form__title">{{appName()}} | @lang('Verify Your E-mail Address')</h1>
          @include('includes.partials.messages2')
                <p class="form__label__text1"> @lang('Before proceeding, please check your email for a verification link.')
                   <br> @lang('If you did not receive the email') </p>
                
            </div><!--form-check-->
            <x-forms.post :action="route('frontend.auth.verification.resend')" class="d-inline">
          <button class="button" type="submit">@lang('click here to request another')</button><br>
          </x-forms.post>
        </div>
      </div>
    </div>
  
  </div>
 

</div>
@endsection
