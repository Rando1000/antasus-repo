@extends('backend.layouts.app')

@section('title', __('Marketplace'))

@section('breadcrumb-links')

@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
        <div class="text-dark" >   @lang('Marketplace')</div>
        </x-slot>

        @role('Lead-Developer|Developer|Administrator')
            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.marketplace.create')"
                    :text="__('Create Marketplace')"
                />
            </x-slot>
        @endrole

        <x-slot name="body">
        <div class="text-dark" >  <livewire:marketplace /></div>
        </x-slot>
    </x-backend.card>
@endsection
