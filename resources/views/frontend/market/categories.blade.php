@extends('frontend.layouts.appp')
@section('title', __('Market'))

@section('content')
    {{-- <section> --}}
        <br>

        {{-- @include('frontend.market.helper.ticker') --}}
        @include('frontend.market.helper.category')


    {{-- </section> --}}
@endsection
