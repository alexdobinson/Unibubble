@extends('master')

@section('content')

{{ Form::open() }}

{{ Form::text('email', '', array('placeholder' => 'Email Address')) }}

{{ Form::password('password', '') }}

{{ Form::submit('Login') }}

{{ Form::close() }}

@if(Session::has('login_errors'))
Incorrect username/password combination.
@endif

@stop