@extends('layout.master')

@section('master_title')
    @hasSection('title')
        @yield('title') - Admin - {{ env('APP_NAME') }}
    @else
        Admin - {{ env('APP_NAME') }}
    @endif
@endsection

@section('master_body')
    <div id="main">
        ...
    </div>
@endsection
