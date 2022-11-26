@extends('layout.master')

@section('master_title')
    @hasSection('title')
        @yield('title') - {{ env('APP_NAME') }}
    @else
        {{ env('APP_NAME') }}
    @endif
@endsection

@section('master_head')
    {{-- <meta name="color-scheme" content="light"> --}}
    <meta name="theme-color" content="#212529">
    {{-- <meta name="theme-color" content="#ff0000" media="(prefers-color-scheme: light)"> --}}
    {{-- <meta name="theme-color" content="#ff0000" media="(prefers-color-scheme: dark)"> --}}
@endsection

@section('master_body')
    <div id="main" class="min-h-screen flex flex-col">
        @include('client.header.index')
        <div class="flex-1 bg-white">
            @yield('body')
        </div>
        @include('client.footer.index')
    </div>
@endsection
