@extends('backend.layouts.app')

@section('title', __('Announcements'))

@section('breadcrumb-links')

@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
        <div class="text-dark" >   @lang('Announcements')</div>
        </x-slot>

        @role('Lead-Developer|Developer|Administrator')
            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.announcements.create')"
                    :text="__('Create Announcement')"
                />
            </x-slot>
        @endrole

        <x-slot name="body">
        <div class="text-dark" >  <livewire:announcements-table /></div>
        </x-slot>
    </x-backend.card>
@endsection
