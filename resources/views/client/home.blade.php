@extends('layout.client')
@section('title', 'Trang chủ')

@section('body')
    <div class="relative aspect-[8/3]">
        <div>
            <img src="/images/banner.png" alt="" class="object-cover object-center w-full h-full">
            <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-oBlack1 to-white/0 top-1/2"></div>
        </div>

        <form action="javascript:;" method="GET" class="absolute bottom-8 left-1/2 -translate-x-1/2">
            @include('client.booking_bar', ['subPos' => 'top'])
        </form>
    </div>

@endsection
