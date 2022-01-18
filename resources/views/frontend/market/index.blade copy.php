@extends('frontend.layouts.appm')
@section('title', __('Market'))

@section('content')
    <section>
        <br>


        @include('frontend.market.helper.top')

        @include('frontend.market.helper.activity')

        @include('frontend.market.helper.new')

        @include('frontend.market.helper.treelist')
        @include('frontend.layouts.Templates.resultcard')


    </section>
@endsection
