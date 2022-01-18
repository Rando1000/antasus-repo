
{{-- <script type="module">

    import Web3 from 'web3/dist/web3.min.js'
    
    </script> --}}

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal">{{ __('Login') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="text-center pt-1 pb-4 border-b border-gray-200" x-data="{
                    loading: false,
                    loginSignatureUrl: '{{ route('frontend.auth.metamask.signature') }}',
                    loginUrl: '{{ route('frontend.auth.metamask.authenticate') }}',
                    redirectUrl : '/dashboard',
                }">
                    <button class="btn btn-primary" x-bind:enabled="loading" @click="async () => {
                        loading = true;
                        
                        const web3 = new Web3(window.ethereum);
                        
                        
                        const message = (await axios.get(loginSignatureUrl)).data;
                        
                        const address = (await web3.eth.requestAccounts())[0];
                        
                        const signature = await web3.eth.personal.sign(message, address);
                        
                        try {
                        let response = await axios.post(loginUrl, {
                            'address': address,
                            'signature': signature,
                        });
                        
                        window.location.href = redirectUrl;
                        } catch(e) {
                        alert(e.message);
                        }
                                                            
                        loading = false;                                      
                    }" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Login with MetaMask
                    </button>
                </div>
                <div class="py-6 text-sm text-gray-500 text-center">
                    or login with your credentials…
                </div>

                <form method="POST" action="{{ route('frontend.auth.login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="off" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


