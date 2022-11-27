@extends('layout.master')

@section('master_body_class', 'text-oBlack1 bg-oBlack')

@section('master_title')
    @hasSection('title')
        @yield('title') - {{ env('APP_NAME') }}
    @else
        {{ env('APP_NAME') }}
    @endif
@endsection

@section('master_head')
    <meta name="theme-color" content="#212529">
    @vite('resources/js/submitDisableOnClick.js')
@endsection

@section('master_body')
    <div id="main" class="min-h-screen flex flex-col">
        @include('client.header.index')
        <div class="flex-1 bg-oBlack1 text-oWhite @yield('body_class')">
            @yield('body')
        </div>
        @include('client.footer.index')

    </div>
@endsection
