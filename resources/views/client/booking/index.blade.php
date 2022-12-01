@extends('layout.client')
@section('title', 'Đặt vé')

@section('body')
    <div class="space-y-6 py-6">

        <div class="flex">
            <form action="javascript:;" method="GET" class="mx-auto">
                @include('client.booking_bar', ['subPos' => 'bottom'])
            </form>
        </div>

        <p class="text-center text-2xl font-semibold">Các chuyến được tìm thấy</p>

        <div class="container space-y-6">
            <div class="bg-oBlack2 rounded-xl">
                <ul class="grid grid-cols-4 gap-5 p-5">
                    <li>
                        @include('client.booking.ticket_card', [
                            'type' => 'bookNow',
                            'href' => route('booking.detail'),
                        ])
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
