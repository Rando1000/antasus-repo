@extends('frontend.layouts.app')
@section('title', __('Home'))

@section('content')
         <section class="banner" style="display: grid;">
            
             <div class="container">
               <div class="banner-text">
                  <h1>{{ appName() }}</h1>
                  
                 @if (Auth::guest())
                 <p><strong>@lang('IT with the Infinity Power.')</strong> <br>Our tools make it simple to track how your Droplets are performing and help you to respond quickly if there is a problem</p>
                 <br> <a href="/register" style="cursor: pointer"
                    data-toggle="modal" 
                    data-target="#registerModal"> <button>@lang('Register')</button></a>
                 @else
                 <p><strong>@lang('IT with the Infinity Power.')</strong> <br>Our tools make it simple to track how your Droplets are performing and help you to respond quickly if there is a problem</p>
                 <br> <a href="/dashboard"> <button>@lang('Dashboard')</button></a>
                 @endif
                </div>
                    </div>
                </section>

@endsection
