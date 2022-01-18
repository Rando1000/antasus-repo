<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('Register') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

            <div class="text-center pt-1 pb-4 border-b border-gray-200">
                <button class="btn btn-primary" @click="loginWeb3">
                    Register with MetaMask
                </button>
            </div>
            <div class="py-6 text-sm text-gray-500 text-center">
                    or register with your credentials…
            </div>
                
            <x-forms.post :action="route('frontend.auth.register')">
                    @csrf

                    <div class="form-group row">
                        <label for="nameInput" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="nameInput" type="text" class="form-control" name="name" maxlength="255" required autofocus autocomplete="new-name">

                            <span class="invalid-feedback" role="alert" id="nameError">
                                <strong></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="emailInput" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="emailInput" type="email" class="form-control" name="email"  maxlength="255"  required autofocus autocomplete="off">

                            <span class="invalid-feedback" role="alert" id="emailError">
                                <strong></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="passwordInput" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="passwordInput" type="password" class="form-control" name="password" maxlength="100" required autofocus autocomplete="off">

                            <span class="invalid-feedback" role="alert" id="passwordError">
                                <strong></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" maxlength="100" required autofocus autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                          <input type="checkbox" name="terms" value="1" id="terms" class="form-check-input" required>
                                  <label class="form-check-label" for="terms">
                                      @lang('I agree to the') <a href="/termsofservices" target="_blank">@lang('Terms & Conditions')</a>
                                    </label>
                              </div>
                            </div>
                  </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                    </x-forms.post>
            </div>
        </div>
    </div>
</div>