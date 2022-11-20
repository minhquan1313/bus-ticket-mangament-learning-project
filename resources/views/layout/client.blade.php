@extends('layout.master')

@section('master_title')
    @hasSection('title')
        @yield('title') - {{ env('APP_NAME') }}
    @else
        {{ env('APP_NAME') }}
    @endif
@endsection

@section('master_body')
    <div id="main">
        @include('client.header.index')
        <div>
            @yield('body')
        </div>
        @include('client.footer.index')
    </div>
@endsection
