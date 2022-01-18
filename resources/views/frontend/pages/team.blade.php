@extends('frontend.layouts.app')
@section('title', __('Team'))

@section('content')
            <section>
                <br>
                <he2>@lang('MEET OUR TEAM')</he2>


                @include('frontend.pages.helper.teamhelper')


            </section>
@endsection
