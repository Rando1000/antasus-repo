@extends('frontend.layouts.app')

@section('title', __('My Account'))

@section('content')

@include('frontend.includes.sidebaracc')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <x-frontend.card>
                <x-slot name="header">
                    @lang('Profile')
                </x-slot>

                <x-slot name="body">
                    <div class="row">
                        <div class="col">        
                            <div class="tab-content" id="my-profile-tabsContent">
                                <div class="tab-pane fade pt-3 show active" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                                    @include('frontend.user.account.tabs.profile')
                                </div><!--tab-profile-->

                                <div class="tab-pane fade pt-3" id="information" role="tabpanel" aria-labelledby="information-tab">
                                    @include('frontend.user.account.tabs.information')
                                </div><!--tab-information-->

                                @if (! $logged_in_user->isSocial())
                                    <div class="tab-pane fade pt-3" id="password" role="tabpanel" aria-labelledby="password-tab">
                                        @include('frontend.user.account.tabs.password')
                                    </div><!--tab-password-->
                                @endif

                                <div class="tab-pane fade pt-3" id="two-factor-authentication" role="tabpanel" aria-labelledby="two-factor-authentication-tab">
                                    @include('frontend.user.account.tabs.two-factor-authentication')
                                </div><!--tab-information-->
                            </div><!--tab-content-->
                        </div><!--col-->
                    </div><!--row-->
                </x-slot>
            </x-frontend.card>
        </div><!--col-md-10-->
    </div><!--row-->
@endsection
