@inject('model', 'App\ModelMarketplace')

@extends('backend.layouts.app')

@section('title', __('Update Marketplace'))

@section('content')

<x-forms.patch :action="route('admin.marketplace.update', $marketplaces->id)">
        <x-backend.card>
            <x-slot name="header">
            <div class="text-dark" >   @lang('Update Marketplace') {{ $marketplaces->id }}</div>
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.marketplace.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">

                    <input name="userid" type="hidden" value="{{ Auth::user()->id }}">
                        <!--Nachricht-->
                        <div class="form-group row">
                        <label for="title" class="text-dark col-md-2 col-form-label">@lang('Title')</label>

                        <div class="col-md-10">
                            <textarea type="textarea" name="title" id="title" class="form-control" placeholder="{{ __('Title') }}" value="" maxlength="255" required autocomplete="off">{{ $marketplaces->title }}</textarea>
                        </div>
                    </div><!--form-group-->


            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Marketplace')</button>
            </x-slot>
        </x-backend.card>
        </x-forms.patch>
@endsection
