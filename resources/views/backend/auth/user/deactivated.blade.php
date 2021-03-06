@extends('backend.layouts.app')

@section('title', __('Deactivated Users'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
        <div class="text-dark" > @lang('Deactivated Users') </div>
        </x-slot>

        <x-slot name="body">
            <livewire:users-table status="deactivated" />
        </x-slot>
    </x-backend.card>
@endsection
