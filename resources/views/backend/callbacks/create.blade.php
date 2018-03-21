@extends('motor-backend::layouts.backend')

@section('htmlheader_title')
    {{ trans('motor-backend::backend/global.home') }}
@endsection

@section('contentheader_title')
    {{ trans('partymeister-core::backend/callbacks.new') }}
    {!! link_to_route('backend.callbacks.index', trans('motor-backend::backend/global.back'), [], ['class' => 'pull-right btn btn-sm btn-danger']) !!}
@endsection

@section('main-content')
	@include('motor-backend::errors.list')
	@include('partymeister-core::backend.callbacks.form')
@endsection