@extends('admin::layouts.master')

@section('content')
    <h1>Hello World</h1>
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}<a href="{{ route('logout') }}">Logout</a>
    </p>
@stop
