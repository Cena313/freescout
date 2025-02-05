@extends('errors::layout')

@section('title', 'Page Not Found')

@section('message')
    {{ __('Sorry, the page you are looking for could not be found.') }}
    <br/><br/><small>{{ __('Go to') }} <a href="{{ route('dashboard') }}">{{ __('Homepage') }}</a></small>
@endsection