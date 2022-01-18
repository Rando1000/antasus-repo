@extends('frontend.layouts.app')
@section('title', __('Help'))

@section('content')
                <br>
                <he2>@lang('Help Center')</he2>


                @include('frontend.pages.helper.3DBoxeshelper')


                @include('frontend.pages.helper.helpforumhelper')


            </section>

@endsection
