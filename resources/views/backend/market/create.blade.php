@inject('model', 'App\ModelMarketplace')

@extends('backend.layouts.app')

@section('title', __('Create Marketplace'))

@section('content')

<x-forms.post :action="route('admin.marketplace.store')">

        <x-backend.card>

            <x-slot name="header">
            <div class="text-dark" >  @lang('Create Marketplace') </div>
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.marketplace.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">


                     <input name="userid" type="hidden" value="{{ Auth::user()->id }}">
                        <!--Title-->
                        <div class="form-group row">
                        <label for="title" class="text-dark col-md-2 col-form-label">@lang('Title')</label>

                        <div class="col-md-10">
                            <textarea type="textarea" name="title" id="title" class="form-control" placeholder="{{ __('Title') }}" value="" maxlength="255" required autocomplete="off"></textarea>
                        </div>
                    </div><!--form-group-->


            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit" >@lang('Create Marketplace')</button>
            </x-slot>
        </x-backend.card>
        </x-forms.post>
@endsection
