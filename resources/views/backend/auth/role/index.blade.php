@extends('backend.layouts.app')

@section('title', __('Role Management'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
        <div class="text-dark" > @lang('Role Management')</div>
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.auth.role.create')"
                :text="__('Create Role')"
            />
        </x-slot>

        <x-slot name="body">
        <div class="text-dark" > <livewire:roles-table /></div>
        </x-slot>
    </x-backend.card>
@endsection
