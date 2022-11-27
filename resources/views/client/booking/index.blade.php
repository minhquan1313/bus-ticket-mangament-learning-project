@extends('layout.client')

{{-- @section('body_class', 'flex') --}}

{{-- @section('master_head')
@parent
    @vite('resources/js/passwordToggle.js')
@endsection --}}

@section('body')
    <div class="flex my-6">
        <form action="javascript:;" method="GET" class="mx-auto">
            @include('client.booking_bar', ['subPos' => 'bottom'])
        </form>
    </div>

    <div class="container flex my-7">
        <p class="text-center">Các chuyến được tìm thấy</p>

    </div>
@endsection
