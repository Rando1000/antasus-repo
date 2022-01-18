@extends('errors::minimal')

@section('title', __('Maintenance Mode'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: ' We will be up in couple of minutes. Thanks for patience.'))
