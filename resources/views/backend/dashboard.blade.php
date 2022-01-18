@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
          <p class="text-dark text mb-0" > @lang('Welcome :Name', ['name' => $logged_in_user->name])</p>
        </x-slot>

        <x-slot name="body">

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="fa fa-archive text-primary h4 ml-3"></i>
                            </div>
                            <h5 class="text-white font-size-20 mt-0 pt-1">{{$count1}}</h5>
                            <p class="text-white text mb-0">Total Announcements</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <div class="float-right">
                                <i class=" fa fa-th text-primary h4 ml-3"></i>
                            </div>
                            <h5 class="text-white font-size-20 mt-0 pt-1">{{$count}}</h5>
                            <p class="text-white text mb-0">Total Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </x-slot>
    </x-backend.card>
@endsection
