@inject('model', 'App\Domains\Announcement\Models\Announcement')

@extends('backend.layouts.app')

@section('title', __('Update Announcement'))

@section('content')

<x-forms.patch :action="route('admin.announcements.update', $Announcement->id)">
        <x-backend.card>
            <x-slot name="header">
            <div class="text-dark" >   @lang('Update Announcement') {{ $Announcement->id }}</div>
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.announcements.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">


                        <!--Area wo wird es angezeigt-->

                        <div class="form-group row">
                            <label for="area" class="text-dark col-md-2 col-form-label">@lang('Where')</label>

                            <div class="col-md-10">
                                <select name="area" class="form-control" required>
                                    <option value="{{ $Announcement->area }}" selected>{{ $Announcement->area }} </option>
                                    <option value="frontend">@lang('frontend')</option>
                                    <option value="backend">@lang('backend')</option>
                                </select>
                            </div>
                        </div><!--form-group-->

                        <!--Design Typ-->
                        <div class="form-group row">
                            <label for="type" class="text-dark col-md-2 col-form-label">@lang('Theme')</label>

                            <div class="col-md-10">
                                <select name="type" class="form-control" required>
                                    <option value="{{ $Announcement->type }}" selected >{{ $Announcement->type }} </option>
                                    <option value="info">@lang('info')</option>
                                    <option value="warning">@lang('warning')</option>
                                    <option value="danger">@lang('danger')</option>
                                    <option value="success">@lang('success')</option>
                                    <option value="antasus">@lang('antasus')</option>
                                </select>
                            </div>
                        </div><!--form-group-->

                        <!--Nachricht-->
                        <div class="form-group row">
                        <label for="message" class="text-dark col-md-2 col-form-label">@lang('Message')</label>

                        <div class="col-md-10">
                            <textarea type="textarea" name="message" id="message" class="form-control" placeholder="{{ __('Message') }}" value="" maxlength="255" required autocomplete="off">{{ $Announcement->message }}</textarea>
                        </div>
                    </div><!--form-group-->


<!--

                    <div class="form-group row">
                        <label for="startdate" class="col-md-2 col-form-label">@lang('Start')</label>

                        <div class="col-md-10">
                            <input type="datetime-local" name="start" id="start" class="form-control" value="" maxlength="255" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="enddate" class="col-md-2 col-form-label">@lang('End')</label>

                        <div class="col-md-10">
                            <input type="datetime-local" name="start" id="start" class="form-control" value="" maxlength="255" required />
                        </div>
                    </div> -->


            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Announcement')</button>
            </x-slot>
        </x-backend.card>
        </x-forms.patch>
@endsection
