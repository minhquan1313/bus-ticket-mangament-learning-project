@extends('layout.client')

@extends('layout.client')
@section('title', 'Vé đã đặt')

@section('body')
    <div class="space-y-6 py-6">
        <p class="text-center text-2xl font-semibold">Các vé đã đặt</p>

        <div class="container space-y-6">
            <div class="bg-oBlack2 rounded-xl">
                <ul class="grid grid-cols-4 gap-5 p-5">
                    <li>
                        @include('client.booking.ticket_card', [
                            'type' => 'seeDetail',
                            'href' => route('user.booked_detail'),
                        ])
                    </li>
                    <li>
                        @include('client.booking.ticket_card', [
                            'type' => 'seeDetail',
                            'href' => route('user.booked_detail'),
                        ])
                    </li>
                    <li>
                        @include('client.booking.ticket_card', [
                            'type' => 'cancled',
                            'href' => route('user.booked_detail'),
                        ])
                    </li>
                    <li>
                        @include('client.booking.ticket_card', [
                            'type' => 'seeDetail',
                            'href' => route('user.booked_detail'),
                        ])
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
